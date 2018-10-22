@extends('layout.master')

@section('title', 'Contactos')

@section('content')

  <section class="page-section cta">
    <div class="container">
      <div class="row">
        <div class="col-xl-9 mx-auto">
          <div class="cta-inner text-center rounded">
            <h2 class="section-heading mb-5">
              <span class="section-heading-upper">onde estamos</span>
              <span class="section-heading-lower">Queremos falar consigo</span>
            </h2>
            <p class="address mb-5">
              <em>
                <strong>Quinta da Fonte Santa</strong>
                <br>
                <strong>Rua do Choupelo, 300</strong>
                <br>
                4400-088 Vila Nova de Gaia - Portugal
              </em>
            </p>
            <p class="mb-5">
              <small>
                <em>Ligue-nos</em>
              </small>
              <br>
              00 351 225 094 646
            </p>
            <p class="mb-5">
              <small>
                <em>Mande-nos um email</em>
              </small>
              <br>
              info@highplay.pt
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection

@section('js')
  <!-- Script to highlight the active date in the hours list -->
  <script>
    $('.list-hours li').eq(new Date().getDay()).addClass('today');
  </script>
@endsection
