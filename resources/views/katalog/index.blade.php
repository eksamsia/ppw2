@extends('master')
@section('content')
    {{-- <!--proteksi navbar menu--> 
@if (Auth::check() && Auth::user()->level == 'admin') --}}
    <html>

    <head>
        <form action="{{ route('katalog.search') }}" method="get">@csrf
            <input type="text" name="kata" class="form-control" placeholder="Cari..." style="width: 30%; 
                                                                        display: inline; 
                                                                        margin-top: 10px; 10px; 
                                                                        margin-bottom: 10px; 
                                                                        float: right;
                                                                        background-color: #ffe8d6">
        </form>
    </head>

    <body>
        @if (Session::has('pesan'))
            <div class="alert alert-success">{{ Session::get('pesan') }}</div>
        @endif
        <br>
        <br>
        <br>
        <br>
        <br>
        <font face='Kristen ITC'>
            <h2 align="center">Katalog</h2>
        </font>
        <font face='Montserrat'>
            @if (Auth::check() && Auth::user()->level == 'admin')
                <p align="left"><a href="{{ route('katalog.create') }}"> Add Product </a></p>
            @endif
            <table class="table">
                <tr style="position: center">
                    <th style="background-color: #deaaff">ID</th>
                    <th style="background-color: #deaaff">Nama Produk</th>
                    <th style="background-color: #deaaff">Nama Brand</th>
                    <th style="background-color: #deaaff">Harga</th>
                    <th style="background-color: #deaaff">Keterangan</th>
                    <th style="background-color: #deaaff">Tanggal Terbit</th>
                    <th style="background-color: #deaaff">Foto</th>
                    @if (Auth::check() && Auth::user()->level == 'admin')
                        <th style="background-color: #deaaff">Action</th>
                    @endif
                </tr>
                @foreach ($katalog as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->nama_produk }}</td>
                        <td>{{ $item->nama_brand }}</td>
                        <td>{{ 'Rp ' . number_format($item->harga, 2, ',', '.') }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>{{ $item->created_at->format('Y/m/d') }}</td>
                        <td><img src="{{ asset('thumb/' . $item->foto) }}" style="width: 100px">
                        </td>
                        @if (Auth::check() && Auth::user()->level == 'admin')
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
                        @endif
                    </tr>
                @endforeach
            </table>
        </font>
        <div>{{ $katalog->links() }}</div>
    </body>

    </html>
    {{-- @endif --}}
@endsection










{{-- @extends('master')
<section class="content">
    <html>

    <head>
        <style>
            html,
            body,
            .content {
                height: 100%;
            }

            table td,
            table th {
                text-overflow: ellipsis;
                white-space: nowrap;
                overflow: hidden;
            }

            thead th,
            tbody th {
                color: #fff;
            }

            tbody td {
                font-weight: 500;
                color: rgba(255, 255, 255, .65);
            }

            .card {
                border-radius: .5rem;
            }

        </style>
    </head>

    <body>
        <div class="bg-image h-100"
            style="background-image: url('https://mdbootstrap.com/img/Photos/new-templates/tables/img2.jpg');">
            <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0,0,0,.25);">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="card bg-light shadow-2-strong">
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table table-dark table-borderless mb-0">
                                            <thead>
                                                <tr>
                                                    <th scope="col">ID</th>
                                                    <th scope="col">Nama Produk</th>
                                                    <th scope="col">Nama Brand</th>
                                                    <th scope="col">Harga</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Tanggal Upload</th>
                                                    <th scope="col">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($katalog as $item)
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">Tiger Nixon</th>
                                                        <td>{{ ++$no }}</td>
                                                        <td>{{ $item->nama_produk }}</td>
                                                        <td>{{ $item->nama_brand }}</td>
                                                        <td>{{ 'Rp ' . number_format($item->harga, 2, ',', '.') }}
                                                        </td>
                                                        <td>{{ $item->keterangan }}</td>
                                                        <td>{{ $item->tgl_terbit->format('d/m/Y') }}</td>
                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>

</body>

</html> --}}
