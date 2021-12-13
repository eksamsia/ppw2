{{-- @extends('master')
@section('content')

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
        <link href="{{ asset('dist/css/lightbox.min.css') }}" rel="stylesheet">
    </head>
    <script src="{{ asset('dist/js/lightbox-plus-jquery.min.js') }}"></script>

    <body>
        <section id="album" class="py-2 text-center" style='background-color:#ffe8d6'>
            <div class="container">
                <h2>Galeri Produk: {{ $katalog->nama_brand }}</h2>
                <hr>
                <div class="row">
                    @foreach ($galeris as $data)
                        <div class="col-md-4">
                            <a href=" {{ asset('thumb/' . $data->foto) }}" data-lightbox="image-1"
                                data-title="{{ $data->keterangan }}">
                                <img src="{{ asset('thumb/' . $data->foto) }}" style="width:200px; height:150px"></a>
                            <p>
                            <h5>{{ $data->nama_galeri }}</h5>
                            </p>
                    @endforeach

                    <h4>Komentar<h4>
                            <form action="{{ route('komentar.store', $katalog->id) }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <textarea name="komentar" id="komentar" name="komentar"
                                        class="form-control"></textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-success">Tambah Komentar</button>
                                </div>
                            </form>
                            <div>
                                @foreach ($data_komentar as $komen)
                                    {{-- <div class="komentar"><p class="list-item">{{$komen->komentar}}</p><div> --}}
{{-- <div><b class="text-dark">{{$komen->users, $komen->name}}</div>
            <div><p class="text-dark">{{$komen->komentar, $komen->id}}</p></div>
            <br>
            <div><span class="timestamp text-dark">{{$komen->created_at->diffForHumans()}}</span><div> --}}
{{-- <tbody>
                                        <tr>
                                            {{-- <td> {{$komen->user->name}}</td> --}}
{{-- <td><b>{{ $komen->komentar }}</b></td>
                                            <br>
                                            <td> <b>{{ $komen->created_at->diffForHumans() }}</b>
                                            </td>
                                            <br>
                                        </tr>
                                    </tbody>
                                @endforeach --}}
{{-- </div>
                </div>
            </div>
            </div>

            <div>{{ $galeris->links() }}</div>
            </div>
        </section>
    </body>

    </html>
@endsection --}}

{{-- @extends('master')

@section('content')
    <section id="galeri" class="py-1 text-center bg-light">
        <div class="container">
            <h2>Galeri {{ $katalog->nama_brand }} </h2>
            <hr>
            <div class="row">
                @foreach ($galeris as $data)
                    <div class="col-md-4">
                        <a href="{{ asset('thumb/' . $data->foto) }}" data-lightbox="image-1"
                            data-title="{{ $data->keterangan }}">
                            <img src="{{ asset('thumb/' . $data->foto) }}" style="width:200px; height:150px">
                        </a>
                        <p>
                        <h5>{{ $data->nama_galeri }}</h5>
                        </p>
                    </div>
                @endforeach
                <table>
                    <thead>
                        <tr>
                            <th> User </th>
                            <th> Komentar </th>
                        </tr>
                    </thead>
                    @foreach ($komentar as $komen)
                        <tbody>
                            <tr>
                                <td> {{ $komen->users->name }} </td>
                                <td> {{ $komen->komentar }} </td>
                            </tr>
                        </tbody>
                    @endforeach
                </table>

                <form method="post" action="{{ route('komentar.store', $katalog->id) }}">
                    @csrf
                    <div class="form-group">
                        <label for="komentar">Komentar</label> <br>
                        <input type="text" name="komentar" class="form-control"></input>
                    </div>
                    <div>
                        <button type="submit">Simpan</button>
                        <a href="/katalog/galeris/{title}"> Batal </a>
                    </div>
                </form>
            </div>
            <div>{{ $galeris->links() }}</div>
        </div>
    </section>
@endsection --}}
