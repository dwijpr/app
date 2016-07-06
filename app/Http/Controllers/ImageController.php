<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Image, App\User;

class ImageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('images.index', [
            'objects' => Image::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('images.create', [
            'users' => $users,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'image' => 'required|image',
        ]);

        $file = $request->file('image');
        $filename = $file->getFilename()
            .'.'.$file->getClientOriginalExtension();
        storage()->put($filename, file_get_contents($file->getRealPath()));

        $image = Image::create([
            'user_id' => $request->user_id,
            'name' => no_ext($file->getClientOriginalName()),
            'storage' => $filename,
        ]);
        return redirect('/image');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Image $image)
    {
        $file = storage()->get($image->storage);
        $mime = storage()->mimeType($image->storage);
        return response($file, 200, [
            'Content-type' => $mime,
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Image $image)
    {
        return view('images.edit', [
            'object' => $image,
            'users' => User::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Image $image)
    {
        $this->validate($request, [
            'user_id' => 'required',
            'image' => 'image',
        ]);
        $data = [ 'user_id' => $request->user_id ];
        if ($request->file('image')) {
            $file = $request->file('image');
            $filename = $file->getFilename()
                .'.'.$file->getClientOriginalExtension();
            storage()->put($filename, file_get_contents($file->getRealPath()));
            $data['name'] = no_ext($file->getClientOriginalName());
            $data['storage'] = $filename;
        }
        $image->update($data);
        return redirect('/image');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Image $image)
    {
        storage()->delete($image->storage);
        $image->delete();
        return redirect('/image');
    }
}
