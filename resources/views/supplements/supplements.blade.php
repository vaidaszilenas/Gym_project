@extends('layouts.app',[
  'class' => 'footer_normal'
])
@section('content')

@foreach ($supplement as $supplements)


    <section class="supplements__section">
      <div class="background_container">
        <div class="row">
          <div class="col-md-4">

            <div class="item text-center">
              <img src="{{ $supplements->getUrlAttribute() }}" alt="" class="img-fluid img-border">
              <div class="supplements_border">
                <span>Whey GOLD</span><br>
                <span>15 EUR</span>
              </div>
            </div>
          </div>

    </section>

  @endforeach
  @endsection
