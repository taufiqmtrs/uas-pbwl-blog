@extends('layouts.app')

@section('content')

<H2>Selamat Datang</H2>

<div class="card-group">
  <div class="card">
    <img src=".../public/public/uploads/kkn30.png" class="card-img-top" alt="..." width="50px" >
    <div class="card-body">
      <h5 class="card-title">KKN</h5>
      <p class="card-text">Kelompok 30</p>
      <p class="card-text"><small class="text-muted">Desa Tinada Kec. Tinda Pakpak Bharat</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('upload/sindeka.jfif')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Parawisata</h5>
      <p class="card-text">Puncak Sindeka</p>
      <p class="card-text"><small class="text-muted">Salak | Pakpak Bharat</small></p>
    </div>
  </div>
  <div class="card">
    <img src="{{ asset('upload/laembilulu.jfif')}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Parawisata</h5>
      <p class="card-text">Air Terjun Lae Mbilulu</p>
      <p class="card-text"><small class="text-muted">Prongli | Pakpak Bharat</small></p>
    </div>
  </div>
</div>

@endsection
