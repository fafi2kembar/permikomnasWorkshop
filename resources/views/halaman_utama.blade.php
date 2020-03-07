@extends('layouts.master')

@section('content')
<div class="col-md-12">
        <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                <div class="carousel-item active">
                  <img src="img/gambar1.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                  <img src="img/gambar2.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
                <div class="carousel-item">
                  <img src="img/gambar3.jpg" class="d-block w-100" alt="..." height="400px">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
              </a>
            </div>
            <router-view></router-view>
          </div>
@endsection
