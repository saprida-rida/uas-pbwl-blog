@extends('layouts.app')

@section('content')

    <div class="container">
        
        <h3>
            Daftar POST
            <a href="{{ url('/post/create') }}" class="btn btn-primary btn-sm float-right">Tambah Data</a>
        </h3>

        <table class="table table-bordered">
            <tr>
                <th>TANGGAL</th>
                <th>SLUG</th>
                <th>JUDUL</th>
                <th>TEKS</th>
                <th>ID_KATEGORI</td>
                <th>EDIT</th>
                <th>DELETE</th>
            </tr>
            @foreach ($rows as $row)
                <tr>
                    <td>{{ $row->post_date }}</td>
                    <td>{{ $row->post_slug }}</td>
                    <td>{{ $row->post_title }}</td>
                    <td>{{ $row->post_text }}</td>
                    <td>{{ $row->id_category }}</td>
                    <td><a href="{{ url('post/' . $row->post_id . '/edit') }}" class="btn btn-primary btn-sm">Edit</a></td>
                    <td>  
                        <form action="{{ url('/post/' . $row->post_id) }}" method="POST">
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