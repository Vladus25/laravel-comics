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
                <p>U.S. Price: <span>{{$comics['price']}}</span></p>
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

          {{-- Sezione di Artisti e da Writers --}}
          <div class="talent">
            <h3>Talent</h3>

            <div class="artists">
              <p>Art by:</p>
              <div>
                @foreach ($comics['artists'] as $artist)
                  <a href="#">{{$artist}}, </a>
                @endforeach
              </div>
            </div>

            <div class="writers">
              <p>Written by:</p>
              <div>
                @foreach ($comics['writers'] as $writer)
                  <a href="#">{{$writer}}, </a>
                @endforeach
              </div>
            </div>

          </div>

          {{-- Sezione di Series, Prezzo e Data  --}}
          <div class="specs">
            <h3>Specs</h3>

            <div class="specs-info">
              <p>Series:</p>
              <div>
                <a href="#">{{$comics['series']}}</a>
              </div>
            </div>

            <div class="specs-info">
              <p>U.S. Price:</p>
              <div>
                <span>{{$comics['price']}}</span>
              </div>
            </div>

            <div class="specs-info">
              <p>On Sale Date:</p>
              <div>
                <span>{{$comics['sale_date']}}</span>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>

    {{-- Imagini alla fine del main --}}
    <section>

    </section>

  </main>
@endsection
