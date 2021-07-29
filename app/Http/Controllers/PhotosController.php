<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Photos::all();
        return view('photos.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('photos.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'id_post' => 'bail|required|unique:tb_photos',
                'photos_title' => 'required'
            ],
            [
                'id_post.required' => 'Id_Post wajib diisi',
                'id_post.unique' => 'Id_Post sudah ada',
                'photos_title.required' => 'Judul wajib diisi'
            ]
        );

        Photos::create([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'id_post' => $request->id_post
        ]);

        return redirect('/photos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $row = Photos::findOrFail($id);
        return view('photos.edit', compact('row'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate(
            [
                'id_post' => 'bail|required',
                'photos_title' => 'required'
            ],
            [
                'id_post.required' => 'Id_Post wajib diisi',
                'photos_title.required' => 'Judul wajib diisi'
            ]
        );

        $row = Photos::findOrFail($id);
        $row->update([
            'photos_date' => $request->photos_date,
            'photos_title' => $request->photos_title,
            'photos_text' => $request->photos_text,
            'id_post' => $request->id_post
        ]);

        return redirect('/photos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Photos::findOrFail($id);
        $row->delete();

        return redirect('/photos');
    }
}
