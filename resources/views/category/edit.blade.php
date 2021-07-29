@extends('layouts.app')

@section('content')

<div class="container">

    <h3>Edit Data Kategori</h3>
    <form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
        <input name="_method" type="hidden" value="PATCH">
        @csrf 
        <div class="form-group">
            <label for="">NAMA</label>
            <input type="text" name="cat_nama" class="form-control" value="{{ $row->cat_nama }}">
        </div>
        <div class="form-group">
            <label for="">TEKS</label>
            <input type="text" name="cat_text" class="form-control" value="{{ $row->cat_text }}">
        </div>
        <div class="form-group">
            <input type="submit" value="UPDATE" class="btn btn-primary">
        </div>
    </form>
</div>

@endsection 