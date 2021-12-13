@extends('master')
@section('content')

    <html>

    <head>
    </head>

    <body>

        <br>
        <br>
        @if (Session::has('pesan'))
            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
        <br>
        <br>
        <font face='Kristen ITC'>
            <h2 align="center">Daftar User</h2>
        </font>
        <font face='Montserrat'>
            <p align="left"><a href="{{ route('users.create') }}"> Add </a></p>
            <table class="table">
                <tr>
                    <th style="background-color: #deaaff">No</th>
                    <th style="background-color: #deaaff">Nama</th>
                    <th style="background-color: #deaaff">Email</th>
                    <th style="background-color: #deaaff">Level</th>
                    <th style="background-color: #deaaff">Action</th>
                </tr>
                @foreach ($data_users as $user)
                    <tr>
                        <td>{{ ++$no }}</td>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->level }}</td>
                        <td>
                            <form action="{{ route('users.edit', $user->id) }}" method="post">
                                @csrf
                                <button style="background-color: #f4a261">Update</button>
                            </form>
                            <form action="{{ route('users.destroy', $user->id) }}" method="post">
                                @csrf
                                <button style="background-color: #e9d8a6"
                                    onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
        </font>

    </html>

@endsection
