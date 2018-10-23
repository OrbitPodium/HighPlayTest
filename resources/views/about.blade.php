@extends('layout.master')

@section('title', 'Sobre Nós')

@section('content')

  <section class="page-section about-heading">
    <div class="container">
      <img class="img-fluid rounded about-heading-img mb-3 mb-lg-0" src="{{Voyager::image(setting('about.img'))}}" alt="">
      <div class="about-heading-content">
        <div class="row">
          <div class="col-xl-9 col-lg-10 mx-auto">
            <div class="bg-faded rounded p-5">
              <h2 class="section-heading mb-4">
                <span class="section-heading-upper">{{setting('about.titulo1')}}</span>
                <span class="section-heading-lower">{{setting('about.titulo2')}}</span>
              </h2>
              {!!setting('about.descricao')!!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
