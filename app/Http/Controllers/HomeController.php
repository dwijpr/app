<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User, App\Image, Image as IntImage;
use Storage;

class HomeController extends Controller
{
    private $alts = [
        'xs' => 64,
        'sm' => 128,
        'md' => 256,
    ];

    public function view(Image $image) {
        return view('image', [
            'image' => $image,
        ]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home', [
            'users' => User::all(),
            'objects' => $request->user()->images()
                ->orderBy('created_at', 'desc')->get(),
        ]);
    }

    public function destroy(Image $image) {
        Storage::delete($image->storage);
        $path = $image->storage;
        $ext = pathinfo($path, PATHINFO_EXTENSION);
        foreach ($this->alts as $key => $alt) {
            Storage::delete(implode('.', [
                strip_ext($path),
                $key,
                $ext,
            ]));
        }
        $image->delete();
        return redirect('/home');
    }

    public function show(Image $image, $option = false) {
        $path = $image->storage;
        if (in_array($option, array_keys($this->alts))) {
            $ext = pathinfo($path, PATHINFO_EXTENSION);
            $path = implode('.', [
                strip_ext($path),
                $option,
                $ext,
            ]);
        }
        $file = Storage::get($path);
        $mime = Storage::mimeType($path);
        return response($file, 200, [
            'Content-type' => $mime,
        ]);
    }

    public function store(Request $request) {
        $this->validate($request, [
            'image' => 'required|image',
        ]);

        $file = $request->file('image');
        $filename = $file->getFilename()
            .'.'.$file->getClientOriginalExtension();
        Storage::put($filename, file_get_contents($file->getRealPath()));

        $image = Image::create([
            'user_id' => $request->user()->id,
            'name' => strip_ext($file->getClientOriginalName()),
            'storage' => $filename,
        ]);
        $this->makeAlts($file);

        return redirect('/home');
    }

    function makeAlts($image) {
        try {
            $ext = $image->getClientOriginalExtension();
            $path = $image->getRealPath();
            foreach ($this->alts as $key => $size) {
                $img = IntImage::make($path);
                $img->resize(null, $size, function($constraint) {
                    $constraint->aspectRatio();
                });
                $img->save(
                    storage_path(
                        'app/'.
                        implode('.', [
                            $image->getFilename(),
                            $key,
                            $ext,
                        ])
                    )
                );
            }
        } catch (Exception $e) {
            dd($e);
        }
    }
}
