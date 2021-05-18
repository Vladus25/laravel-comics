@extends('layouts.main-layout')
@section('content')

  <main class="comics-description">

    {{-- Jumbotron --}}
    <section class="jumbotron">

    </section>

    {{-- Line blue --}}
    <div class="line-blue">

    </div>

    {{-- Main del Comics-description --}}
    <section class="main">
      <div class="container">

        {{-- Cover del comics corrente --}}
        <div class="cover">
          <img src="{{$comics['thumb']}}" alt="">
        </div>

        {{-- Description --}}
        <div class="container-comics">

          <div class="description-comics">
            <p class="title">{{$comics['title']}}</p>
            <div class="line-green">

              <div class="available">
                <p>U.S. Price : <span>{{$comics['price']}}</span></p>
                <p>AVAILABLE</p>
              </div>

              <div class="check">
                <p><a href="#">Check Availability</a><i class="fas fa-caret-down"></i></p>
              </div>

            </div>

            <p class="comics-descr">{{$comics['description']}}</p>
          </div>

          <div class="advertisement">
            <h4 class="text-adv">ADVERTISEMENT</h4>
            <a href="#"><img src="{{ asset('/storage/images/adv.jpg') }}"></a>
          </div>

        </div>

      </div>
    </section>

    {{-- Informazioni con foto --}}
    <section class="talent-specs">
      <div class="container">
        <div class="secondary-info">

          <div class="talent">
            <h3>Talent</h3>
          </div>

          <div class="specs">
            <h3>Specs</h3>
          </div>

        </div>
      </div>
    </section>

  </main>
@endsection
