@extends('layouts.app')
@section('content')
    <html>

    <head></head>

    <body>

        <br>
        <br>
        @if (Session::has('pesan'))
            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
        <br>
        <br>

        <font face='Kristen ITC'>
            <h2 align="center">Daftar Galeri</h2>
        </font>
        <font face='Montserrat'>
            @if (Auth::check() && Auth::user()->level == 'admin')
                <p align="left"><a href="{{ route('galeri.create') }}"> Add </a></p>
            @endif
            <table class="table">
                <tr>
                    <th style="background-color: #deaaff">No</th>
                    <th style="background-color: #deaaff">Galeri</th>
                    <th style="background-color: #deaaff">Katalog</th>
                    <th style="background-color: #deaaff">Foto</th>
                    @if (Auth::check() && Auth::user()->level == 'admin')
                        <th style="background-color: #deaaff">Action</th>
                    @endif
                </tr>
                @foreach ($galeri as $data)
                    <tr>
                        <td>{{ ++$no }} </td>
                        <td>{{ $data->nama_galeri }}</td>
                        <td>{{ $data->katalog->nama_brand }}</td>
                        <td><img src="{{ asset('thumb/' . $data->foto) }}" style="width: 100px"></td>
                        @if (Auth::check() && Auth::user()->level == 'admin')
                            <td>
                                <form action=" {{ route('galeri.destroy', $data->id) }}" method="post">
                                    @csrf
                                    <a href="{{ route('galeri.edit', $data->id) }}" class="btn btn-info">
                                        <i class="fa fa-pencil-alt"></i> Edit </a>
                                    <button class="btn btn-danger" onClick="return confirm('Yakin Mau Dihapus?')">
                                        <i class="fa fa-times"></i> Hapus
                                    </button>
                                </form>
                            </td>
                        @endif
                    </tr>
                @endforeach
            </table>
        </font>
    </body>

    </html>

@endsection
