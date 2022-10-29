@extends('fronted.layouts.frontend')
@section('content')
    @include('fronted.includes.slide')
    <div class="row">

        <div class="container">
            <div class="d-flex justify-content-center">
                <div class="col-md-11">
                    <div class="card no-border">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="catatan shadow">
                                    <div class="card header-catatan">
                                        <div class="d-flex justify-content-center">
                                            <div class="col-2">
                                                <img class="icon-disway" src="{{ asset('img/logo/logo-disway-head.png') }}"
                                                    alt="">
                                            </div>
                                            <div class="col-9 mt-3">
                                                <span class="text-catatan ">CATATAN DAHLAN ISKAN</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card">
                                        <div class="card-body">
                                            <p class="header-iskan">
                                              <a style="text-decoration: none" href="">1 Tulisan Pendek</a>
                                            </p>
                                            <p class="header-iskan">
                                              <a style="text-decoration: none" href="">2 Rp 15.500</a>
                                            </p>
                                            <p class="header-iskan">
                                              <a style="text-decoration: none" href="">3 Karir Teddy</a>
                                            </p>
                                            <p class="header-iskan">  
                                              <a style="text-decoration: none" href="">4 Kado Muktamar</a>
                                            </p>
                                            <p class="header-iskan">
                                              <a style="text-decoration: none" href="">5 Teddy Minahasa</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="card mt-3 shadow">
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset('img/event/conten-writer.jpg') }}"
                                            alt="" srcset="">
                                    </div>
                                </div>
                                <div class="card mt-3 shadow">
                                    <div class="card-body">
                                        <img class="img-fluid" src="{{ asset('img/event/event-senam.jpeg') }}"
                                            alt="" srcset="">
                                    </div>
                                </div>
                                <div class="card-body pb-0">
                                    <h2 class="header-berita">Terkini</h2>
                                </div>
                                @forelse ($artikel as $row)
                                    <div class="card mb-3 no-border">
                                        <div class="row g-0">
                                            <div class="col-md-3">
                                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                                    class="img-fluid
                                                    rounded-start foto-berita2"
                                                    style="max-height:300px; overflow:hidden"
                                                    alt="...">
                                            </div>
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <p>
                                                        <a class="text-dark" href="{{ route('detail', $row->slug) }}"
                                                            style="text-decoration: none">
                                                            {{ $row->judul }}
                                                        </a>
                                                    </p>
                                                    <a href="#" class="card-link text-danger"
                                                        style="text-decoration: none">{{ $row->kategoris->nama_kategori }}
                                                    </a>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                    <P> DATA KOSONG</P>
                                @endforelse
                            </div>
                            <div class="col-md-8">
                                <div class="card-body pb-0">
                                    <h2 class="header-berita">Terkini</h2>
                                </div>
                                @forelse ($artikel as $row)
                                    <div class="card mb-3 no-border">
                                        <div class="row g-0">
                                            <div class="col-md-9">
                                                <div class="card-body">
                                                    <a class="text-dark" href="{{ route('detail', $row->slug) }}"
                                                        style="text-decoration: none">
                                                        {{ $row->judul }}
                                                    </a>
                                                    </p>
                                                    <a href="#" class="card-link text-danger"
                                                        style="text-decoration: none">{{ $row->kategoris->nama_kategori }}
                                                    </a>
                                                    <p class="card-text"><small class="text-muted">Last updated 3 mins
                                                            ago</small></p>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <img src="{{ asset('uploads/' . $row->gambar_artikel) }}"
                                                    style="max-height:280px; max-width:300px overflow:hidden"
                                                    class="img-fluid rounded-start foto-berita" alt="...">
                                            </div>
                                        </div>
                                    </div>
                                @empty
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
