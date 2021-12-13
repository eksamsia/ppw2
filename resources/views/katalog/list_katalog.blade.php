@extends('master')
@section('content')


    <div class="container">
        <br>
        <br>
        <br>
        <br>
        <div class="row justify-content-center">
            @foreach ($katalog as $k)

                <div class="col-md-4">
                    <div class="card" style=" width: 18rem; 
                                                            margin-bottom: 15px;
                                                            margin-top: 15px">
                        <center>
                            <div class="card-img-top">
                                <img src=" {{ asset('thumb/' . $k->foto) }}" alt="card image cap">
                                <h6 class="card-title">{{ $k->nama_produk }}</h6>
                                <p class="card-text"> {{ $k->keterangan }}</p>

                                <a href="https://api.whatsapp.com/send/?phone=%2B6288233042193&text&app_absent=0"
                                    class="btn btn-primary btn-sm" style="background-color: rgb(216, 35, 207)">Order</a>
                                <a href="{{ route('likefoto', $k->id) }}" class="btn btn-primary btn-sm"
                                    style="background-color: rgb(216, 35, 207)">
                                    <i class="fa fa-thumbs-up"></i> Like <span class="badge badge-dark">
                                        {{ $k->suka }}</span></a>
                            </div>
                        </center>
                    </div>
                </div>
            @endforeach
        </div>


    @endsection
