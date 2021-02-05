<div class="tab-pane fade show active" id="showall" role="tabpanel" aria-labelledby="showall-tab">
    @if(isset($data['get_casebook']))

    @foreach($data['get_casebook'] as $key=>$get_casebook_data)

    <div class="Portfolio">
        <a href="/casebook/{{$get_casebook_data->slug}}">
        <div class="case-image">
           <img  class="card-img" src="/img/case-studies/{{$get_casebook_data->thumbnail}}" alt="">
            <div class="overlays-cashbook">
                <div class="mid-text-box">
                    <h6 class="casebook-category">{{$get_casebook_data->servicecat->name}}</h6>
                    <h5 class="casebook-title">{{$get_casebook_data->title}}</h5>
                </div>
            </div>
        </div>
        </a>
    </div>

    @endforeach

        <div style="" class="col-md-12 row button-box-text">
            {{ $data['get_casebook']->appends(['cat' => $data['get_casebook'][0]->servicecat->id])->render() }}
        </div>


    @endif

</div>