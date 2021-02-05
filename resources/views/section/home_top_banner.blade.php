<section class="main-slider">
    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">

            @if($data['get_banner'])

                @foreach($data['get_banner'] as $key=>$get_banner)

                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}" class="{{$key==0 ? 'active':''}}"></li>

                @endforeach

            @endif


        </ol>
        <div class="carousel-inner text-center">


            @if($data['get_banner'])

                @foreach($data['get_banner'] as $key=>$get_banner)


                    <div class="carousel-item {{$key==0 ? 'active':''}}">

                        <div class="d-none d-sm-none d-md-block d-lg-block d-xl-block">
                            <img class="d-block"  src="{{asset('/img/homebanner/'.$get_banner->banner)}}"  alt="Home Banner">
                        </div>

                        <div class="d-sm-block d-md-none d-lg-none d-xl-none">
                            <img class="d-block"  src="{{asset('/img/homebanner/responsive/'.$get_banner->responsive)}}" alt="Banner">
                        </div>



                        <div class="carousel-captions  d-md-block">
                            <div>
                                <h1 class="scrollanimation animated bounceIn adl-2">{!! $get_banner->text !!} </h1>
                                <p class="sub-heading scrollanimation animated bounceIn adl-2"><span>{!! $get_banner->para !!}</span></p>
                                <span><a class="banner-btn" href="{{$get_banner->about_us_link}}">know More ❯</a></span><span><a class="banner-btn know-btn" href="{{$get_banner->know_more_link}}" target="_blank">Download Brochure ❯</a></span>
                            </div>
                        </div>
                    </div>


                @endforeach

            @endif


        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="custom-arrow"> ❮</span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="custom-arrow"> ❯</span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>