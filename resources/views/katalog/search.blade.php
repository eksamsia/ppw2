@extends('master')
@section('content')
    @if (count($katalog))
        <div class="alert alert-success">Ditemukan <strong>{{ count($katalog) }}</strong>
            data dengan kata: <strong>{{ $cari }}</strong></div>

        <html>

        <head>
        </head>

        <body>
            @if (Session::has('pesan'))
                <div class="alert alert-success">{{ Session::get('pesan') }}</div>
            @endif

            <font face='Kristen ITC'>
                <h2 align="center">Katalog</h2>
            </font>
            <font face='Montserrat'>
                <p align="left"><a href="{{ route('katalog.create') }}"> Add Product </a></p>
                <table class="table">
                    <tr>
                        <th>ID</th>
                        <th>Nama Produk</th>
                        <th>Nama Brand</th>
                        <th>Harga</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>
                    @foreach ($katalog as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->nama_produk }}</td>
                            <td>{{ $item->nama_brand }}</td>
                            <td>{{ 'Rp ' . number_format($item->harga, 2, ',', '.') }}</td>
                            <td>{{ $item->keterangan }}</td>
                            <td>
                                <form action="{{ route('katalog.edit', $item->id) }}" method="post">
                                    @csrf
                                    <button style="background-color: #f4a261">Update</button>
                                </form>
                                <form action="{{ route('katalog.destroy', $item->id) }}" method="post">
                                    @csrf
                                    <button style="background-color: #e9d8a6"
                                        onclick="return confirm('Yakin mau dihapus?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </font>
            <div>{{ $katalog->links() }}</div>
        </body>

        <form action="{{ route('katalog.search') }}" method="get">@csrf
            <input type="text" name="kata" class="form-control" placeholder="Cari..."
                style="width: 30%; 
                                                                display: inline; margin-top: 10px; 10px; margin-bottom: 10px; float: right;">
        </form>

        </html>

    @else
        <div class="alert alert-warning">
            <h4>Data {{ $cari }} tidak ditemukan </h4>
            <a href="/katalog" class="btn btn-warning">Kembali</a>
        </div>
    @endif

@endsection
