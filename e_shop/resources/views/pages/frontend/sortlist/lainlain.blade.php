@extends('layouts.app')

@section('content')
@if (session('status'))
    <div class="alert alert-success">
        {{ session('status') }}
    </div>
@endif

@if (session('failed'))
<div class="alert alert-danger">
{{ session('failed') }}
</div>
@endif

@if(count($errors)>0)
<p class="alert alert-danger">Error</p>
@endif

<div class="container my-container">
        <div style="padding:50px" >
                <div id="carouselExampleIndicators" class="carousel slide" style="padding-bottom:20px" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                        </ol>
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img class="card-image rounded mx-auto d-block img-responsive " style="max-height: auto; max-width: 100%;"  src="/upload/banner-1.png" alt="First slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-image rounded mx-auto d-block img-responsive " style="max-height: auto; max-width: 100%;"  src="/upload/banner-2.png" alt="Second slide">
                          </div>
                          <div class="carousel-item">
                            <img class="card-image rounded mx-auto d-block img-responsive "style="max-height: auto; max-width: 100%;"  src="/upload/banner-3.png" alt="Third slide">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                </div>
                <div class="card-fluid bg-white" >
                    <div class="row row-centered" style="padding:20px ">
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortmonitor"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/001-monitor.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortprocessor"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/006-chip.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortleptop"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/008-laptop.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortcpu"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/016-cpu.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sorthdmi"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/018-hdmi.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortpowercable"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/019-power-cable.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortbattery"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/022-battery-1.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortkeyboard"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/031-wireless-keyboard.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortheadphone"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/037-headphones.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortmouse"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/038-mouse.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortmotherboard"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;" src="/upload/040-motherboard.png"></a>
                                </div>
                                <div class="col-md-4 col-lg-2 col-sm-6 col-6" style="padding-bottom:20px; padding-top:20px; ">
                                    <a href="sortprinter"><img class="rounded mx-auto d-block img-responsive " style="max-height: 50px; max-width: 100%;"  src="/upload/050-printer.png"></a>
                                </div>
                                                                      
                    </div>
                </div>
                
            <div class="container my-container ">
                <div class="row ">
                        @if(count($products) > 0)
                            @foreach ($products as $row)
                            <div class="col-md-6 col-lg-3 col-sm-12" style="padding-bottom:20px; padding-top:20px; ">
                                <div class=" card-box " >
                                    <div style="align-self-center">
                                        <a href="{{route('detailproduct', $row->id)}}"><img class="card-image rounded mx-auto d-block img-responsive " style="" src="{{ $row->images[0]->product_image}}"></a>
                                    </div>
                                    <div class="card-body clearfix " >
                                            <div class="card-title-box">
                                                <h6 class="font-weight-light text-justify">{{$row->product_name}}</h6>
                                            </div>
                                            <div class="card-price-box">
                                                <h5 class="font-weight-light text-justify">Rp {{number_format($row->product_price, 0)}}</h5>
                                            </div>
                                            <div class=" card-text-box-button" style="float:right">
                                                @if(Auth::check() && Auth::user())
                                                <form action="{{route('addcartlangsung', ['id'=> $row->id])}}" method="POST" >
                                                    {{csrf_field()}}
                                                    <input type="hidden" name="user_id" value="{{$users->id}}">
                                                    <input type="hidden" name="product_id" value="{{$row->id}}">
                                                    <input type="hidden" name="price" value="{{$row->product_price}}">
                                                <input type="hidden" name="qty" value="1" id="">
                                                    <button type="submit" id="cartBtn" class="btn btn-info"><i class="fas fa-shopping-basket"></i></button>
                                                </form>
                                                @else
                                                <a href="/loginaccount" id="cartBtn" class="btn btn-info"><i class="fas fa-shopping-basket"></i></a>
                                                @endif
                                            </div>
                                    </div>
                                </div>
                            </div>
                                @endforeach
                               
                                
                            @else
                                <h2>No posts found!</h2>
                            @endif
                </div>
            </div>
            <div class="pagination fixed" style="" >
                {{$products->links()}}
            </div>
        </div>
</div>
        

@endsection

