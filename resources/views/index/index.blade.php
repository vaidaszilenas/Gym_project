@extends('layouts.app',[
  'class' => 'section-box'
])
@section('content')

  <section class="">
    <div class="myvideo">
      <video data-keepplaying playsinline loop muted class="video" src="{{asset('video/intro.mp4')}}" autoplay poster="">

      </video>
    </div>

  </section>


@endsection
