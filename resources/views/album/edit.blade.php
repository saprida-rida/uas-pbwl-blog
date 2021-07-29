@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Album</h3>
    <form action="{{ url('/album/' . $row->album_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="album_nama" class="form-control" value="{{ $row->album_nama }}">
        </div>
        <div class="form-group">
            <label for="">TEKS</label>
            <input type="text" name="album_text" class="form-control" value="{{ $row->album_text }}">
        </div>
        <div class="form-group">
            <label for="">ID_PHOTO</label>
            <input type="text" name="id_photo" class="form-control" value="{{ $row->id_photo }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection 