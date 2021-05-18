@extends('layouts.main-layout')
@section('content')
  <main>

    {{-- Jumbotron --}}
    <section class="jumbotron">

    </section>

    {{-- Main del Comics --}}
    <section class="main">
      <div class="container">
        <h1 class="logo-series">CURRENT SERIES</h1>

        <div class="list-series">
          <ul>
            @foreach ($data as $d)
              <li>
                <a href="{{ route('comics', $loop->index) }}">
                  <img src="{{$d['thumb']}}" alt="logo">
                </a>
                <p>{{$d['series']}}</p>
              </li>
            @endforeach
          </ul>
        </div>

        <div class="button-more">
          <a href="#">LOAD MORE</a>
        </div>
      </div>
    </section>

    {{-- Informazioni con foto --}}
    <section class="information-photo">
      <div class="container">
        <div class="list-info">
          <ul>
            <li>
              <a href="#">
                <img src="{{ asset('/storage/images/digital-comics-trasparent.png') }}" alt="digital-comics">
                <p>DIGITAL COMICS</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('/storage/images/merchandise.png') }}" alt="Merchandise">
                <p>DC MERCHANDISE</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('/storage/images/subscriptions.png') }}" alt="Subscription">
                <p>SUBSCRIPTION</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('/storage/images/shop-locator.png') }}" alt="Shop-locator">
                <p>COMIC SHOP LOCATOR</p>
              </a>
            </li>
            <li>
              <a href="#">
                <img src="{{ asset('/storage/images/power-visa.svg') }}" alt="Power-visa">
                <p>DC POWER VISA</p>
              </a>
            </li>
          </ul>
        </div>
      </div>
    </section>

  </main>
@endsection
