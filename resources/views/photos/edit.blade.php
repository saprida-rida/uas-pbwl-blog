@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Photo</h3>
    <form action="{{ url('/photos/' . $row->photos_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 
        <div class="form-group">
            <label for="">TANGGAL</label>
            <input type="text" name="photos_date" class="form-control" value="{{ $row->photos_date }}">
        </div>
        <div class="form-group">
            <label for="">JUDUL</label>
            <input type="text" name="photos_title" class="form-control" value="{{ $row->photos_title }}">
        </div>
        <div class="form-group">
            <label for="">TEKS</label>
            <input type="text" name="photos_text" class="form-control" value="{{ $row->photos_text }}">
        </div>
        <div class="form-group">
            <label for="">ID_POST</label>
            <input type="text" name="id_post" class="form-control" value="{{ $row->id_post }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection 