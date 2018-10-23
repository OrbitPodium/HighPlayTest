@extends('layout.master')

@section('title', 'Home')

@section('content')

  <section class="page-section clearfix">
    <div class="container">
      <div class="intro">
        <img class="intro-img img-fluid mb-3 mb-lg-0 rounded" src="{{Voyager::image(setting('home.destaque_img'))}}" alt="">
        <div class="intro-text left-0 text-center bg-faded p-5 rounded">
          <h2 class="section-heading mb-4">
            <span class="section-heading-upper">{{setting('home.destaque_tit1')}}</span>
            <span class="section-heading-lower">{{setting('home.destaque_tit2')}}</span>
          </h2>
          {!!setting('home.destaque_desc')!!}
        </div>
      </div>
    </div>
  </section>

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-4">
              <span class="section-heading-upper">{{setting('home.jumbo_tit1')}}</span>
              <span class="section-heading-lower">{{setting('home.jumbo_tit2')}}</span>
            </h2>
            {!!setting('home.jumbo_desc')!!}
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection
