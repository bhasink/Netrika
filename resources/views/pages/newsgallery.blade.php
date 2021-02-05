
@extends('layout.app')


@section('content')
    <div class="page_title">
        <div class="container">
            <div class="breadcrumbs">
                <span><a href="#">Home</a></span><span><i class="fa fa-angle-right"></i></span>
                <span><a href="#"><span property="name">Picture Gallery</span></a></span>
            </div>
        </div>
    </div>
    <section class="picturegallery-page" id="picturegallery-page">
        <div class="container">
            <div class="row">

                <div class="col-md-12">

                    <div class="gallery-box">
                        <div style="padding: 0px;" class="container">
                            <div class="custom_heading">
                                <h2 style="text-align: center;" class="custom-title">Picture Gallery</h2>
                            </div>
                            <div class="row">

                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>
                                <div class="col-md-3">
                                    <a data-fancybox="gallery" href="/img/picture-gallery/g1.jpg"><img src="/img/picture-gallery/g1-thumb.jpg"></a>
                                </div>

                            </div>
                            <div class="button-box load-more-box">
                                <a class="custom-all-btn load-more-btn" href="#">Load More <i class=" fa fa-chevron-right stm_icon"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>


@endsection

@section('script')

@endsection
