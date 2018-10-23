@extends('layout.master')

@section('title', 'Equipa')

@section('content')

@foreach($equipa as $elemento)
  @if($loop->index % 2 == 0)
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex mr-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$elemento->cargo}}</span>
              <span class="section-heading-lower">{{$elemento->nome}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{Voyager::image($elemento->foto)}}" alt="">
        <div class="product-item-description d-flex ml-auto">
          <div class="bg-faded p-5 rounded">
            {!!$elemento->cv!!}
          </div>
        </div>
      </div>
    </div>
  </section>
  @else
  <section class="page-section">
    <div class="container">
      <div class="product-item">
        <div class="product-item-title d-flex">
          <div class="bg-faded p-5 d-flex ml-auto rounded">
            <h2 class="section-heading mb-0">
              <span class="section-heading-upper">{{$elemento->cargo}}</span>
              <span class="section-heading-lower">{{$elemento->nome}}</span>
            </h2>
          </div>
        </div>
        <img class="product-item-img mx-auto d-flex rounded img-fluid mb-3 mb-lg-0" src="{{Voyager::image($elemento->foto)}}" alt="">
        <div class="product-item-description d-flex mr-auto">
          <div class="bg-faded p-5 rounded">
            {!!$elemento->cv!!}
          </div>
        </div>
      </div>
    </div>
  </section>
  @endif
@endforeach
@endsection
