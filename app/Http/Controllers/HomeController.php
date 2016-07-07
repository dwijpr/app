<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\User, App\Image, Image as IntImage;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        return view('home', [
            'users' => User::all(),
            'objects' => $request->user()->images,
        ]);
    }

    public function show(Image $image, $option = false) {
        $file = storage()->get($image->storage);
        $file = IntImage::make($file);
        if ($option === 'opt') {
            $file->resize(null, 128, function ($constraint) {
                $constraint->aspectRatio();
            });
        }
        return $file->response();
        $mime = storage()->mimeType($image->storage);
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
        storage()->put($filename, file_get_contents($file->getRealPath()));

        $image = Image::create([
            'user_id' => $request->user()->id,
            'name' => no_ext($file->getClientOriginalName()),
            'storage' => $filename,
        ]);
        return redirect('/home');
    }
}
