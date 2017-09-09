@extends('layouts.main')

@section('content')

</section><section class="cid-quhePTwPpX mbr-parallax-background" id="header2-4" data-rv-view="24">
    <div class="mbr-overlay" style="opacity: 0.2; background-color: rgb(91, 104, 107);"></div>

    <div class="container align-center">
        <div class="media-container-column mbr-white col-md-10 offset-md-1">
            <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">DCHeroes Store</h1>

            <p class="mbr-text pb-3 mbr-fonts-style mbr-white display-5">
                Hey! Welcome to DCHeroes Store
            </p>
            <div class="mbr-section-btn"><a class="btn btn-md btn-primary display-4" href="https://mobirise.com">CHECK OUT MY SHIRTS</a></div>
        </div>
    </div>
    <div class="mbr-arrow hidden-sm-down" aria-hidden="true">
        <a href="#next">
            <i class="mbri-down mbr-iconfont"></i>
        </a>
    </div>
</section>

<section class="features3 cid-qugOiabG2B" id="features3-1" data-rv-view="122">
    <div class="container">
        <div class="media-container-row">
         @forelse ($shirts->chunk(4) as $chunk)
         @foreach ($chunk as $shirt)
            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-wrapper">
                    <div class="card-img">
                        <img src="{{url('images',$shirt->image)}}" alt="Mobirise" title="" media-simple="true">
                    </div>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style display-7"><strong>
                             {{$shirt->name}}</strong></h4>
                        <p class="mbr-text mbr-fonts-style display-7">
                             {{$shirt->description}}&nbsp;</p>
                    </div>
                    <div class="mbr-section-btn text-center"><a href="{{route('cart.addItem',$shirt->id)}}" class="btn btn-primary display-4">
                            $ {{$shirt->price}}</a></div>
                </div>
            </div>
            @endforeach
              @empty
                  <h3>No Shirts</h3>
              @endforelse
        </div>
    </div>
</section>

    <!-- Footer -->

@endsection
