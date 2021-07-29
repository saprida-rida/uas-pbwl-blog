<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Album;

class AlbumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rows = Album::all();
        return view('album.index', compact('rows'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('album.add');
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
                'id_photo' => 'bail|required|unique:tb_album',
                'album_nama' => 'required'
            ],
            [
                'id_photo.required' => 'Id_Photo wajib diisi',
                'id_photo.unique' => 'Id_Photo sudah ada',
                'album_nama.required' => 'Nama wajib diisi'
            ]
        );

        Album::create([
            'album_nama' => $request->album_nama,
            'album_text' => $request->album_text,
            'id_photo' => $request->id_photo
        ]);

        return redirect('/album');
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
        $row = Album::findOrFail($id);
        return view('album.edit', compact('row'));
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
                'id_photo' => 'bail|required',
                'album_nama' => 'required'
            ],
            [
                'id_photo.required' => 'Id_Photo wajib diisi',
                'album_nama.required' => 'Nama wajib diisi'
            ]
        );

        $row = Album::findOrFail($id);
        $row->update([
            'album_nama' => $request->album_nama,
            'album_text' => $request->album_text,
            'id_photo' => $request->id_photo
        ]);

        return redirect('/album');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $row = Album::findOrFail($id);
        $row->delete();

        return redirect('/album');
    }
}
