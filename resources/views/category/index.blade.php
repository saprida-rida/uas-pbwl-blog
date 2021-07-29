@extends('layouts.app')

@section('content')

    <div class="container">
        
        <h3>
            Daftar Kategori
            <a href="{{ url('/category/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>NAMA</th>
                <th>TEKS</th>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->cat_nama }}</td>
                    <td>{{ $row->cat_text }}</td>
                    <td><a href="{{ url('category/' . $row->cat_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>  
                        <form action="{{ url('/category/' . $row->cat_id) }}" method="POST">
                            <input name="_method" type="hidden" value="DELETE">
                            @csrf
                            <button class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>

@endsection