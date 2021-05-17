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
                <img src="{{$d['thumb']}}" alt="logo">
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

  </main>
@endsection
