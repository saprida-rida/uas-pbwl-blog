@extends('layouts.app')

@section('content')

    <div class="container">

        <h3>Tambah Data Photo</h3>
        <form action="{{ url('/photos') }}" method="POST">
            @csrf 
            <div class="form-group">
                <label for="">TANGGAL</label>
                <input type="text" name="photos_date" class="form-control">
            </div>
            <div class="form-group">
                <label for="">JUDUL</label>
                <input type="text" name="photos_title" class="form-control">
            </div>
            <div class="form-group">
                <label for="">TEKS</label>
                <input type="text" name="photos_text" class="form-control">
            </div>
            <div class="form-group">
                <label for="">ID_POST</label>
                <input type="text" name="id_post" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" value="SIMPAN" class="btn btn-primary">
            </div>
        </form>
    </div>

@endsection