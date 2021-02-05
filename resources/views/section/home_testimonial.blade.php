<div class="col-md-4 testimonial-box-home  adl-2">
    <div class="custom_heading_second">
        <h2 style="text-align: center;" class="custom-title   adl-2">Client Speak</h2>

        <div class="testimonial_box">

            <div class="testimonials slider">

                @if($data['get_testimonail'])

                    @foreach($data['get_testimonail'] as $key => $get_testimonail)

                        <div>
                            <div class="testimonial_inner">
                                <div class="image">
                                    <img class=""  src="{{asset('/img/testimonial/1590331318.Testimonial.jpg')}}"  width="350" height="350" alt="testimonial-3" title="testimonial-3">                                                            </div>
                                <div class="info">
                                    <div class=" testimonials_content"><p>{{$get_testimonail->description}}</p>
                                    </div>
                                    <h6 class="name-testimonial">
                                        {{$get_testimonail->name}}                                                          </h6>
                                    <div class="position">{{$get_testimonail->position}}</div>
                                </div>
                            </div>
                        </div>

                    @endforeach

                @endif

            </div>
        </div>
    </div>
</div>