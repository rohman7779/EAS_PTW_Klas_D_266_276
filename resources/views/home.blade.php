@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                {{-- BANNER --}}
                <div class="banner">
                    <img src="{{ url('assets/slider/depan.jpg') }}" alt="" width="100%">
                </div>

                {{-- BEST Product --}}
            <section class="best-product mt-5">
                <h5><strong>Best Product</strong></h5>
                <div class="row mt-5">
                    @foreach($barangs as $bg)
                    <div class="col">
                        <div class="card shadow">
                            <div>
                                <img src="{{ url('assets/bunga') }}/{{ $bg->gambar }}" class="img-fluid" max-height="100px">
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <h7><strong>{{ $bg->nama_barang }}</strong> </h7></br>
                                        <h7>Rp. {{ number_format($bg->harga) }}</h7>
                                    </div>
                                </div>
                                <div class="row mt-2">
                                    <div class="col-md-12">
                                        <a href="{{ url('pesan') }}/{{ $bg->id }}" class="btn btn-dark btn-block"><i class="fas fa-eye"></i> Detail</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>
                    @endforeach
                </div>
            </section>
                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
