@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Tambah Data Kategori</h3>
        <form action="{{ url('/category') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="">NAMA</label>
                <input type="text" name="cat_nama" class="form-control">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <input type="text" name="cat_text" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection