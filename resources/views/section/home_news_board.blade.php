<div class="col-md-6 news-box-home ">
    <div class="custom_heading_second">
        <h2 style="text-align: left;width: 50%;" class="custom-title    adl-2">News Board</h2>
        <div class="button-box">
            <a class="custom-all-btn news-board-btn" href="/newsroom">View All <i class=" fa fa-chevron-right stm_icon"></i></a>
        </div>
    </div>
    <div class="wpb_wrapper">

        <ul style="padding:0" id="nt-example111">

            @if( $data['get_newsroom_board_get_three'])

                @foreach( $data['get_newsroom_board_get_three'] as $key=>$get_news_board)

                    <li style="margin-top: 0px; overflow: hidden;">
                        <div class="evenTNews">
                            <div class="DateNews">
                                <div class="DteCont">
                                    <p>
                                        {{date('d', strtotime($get_news_board->custom_date)) }}
                                    </p>
                                    <p>
                                        {{date('M, Y', strtotime($get_news_board->custom_date)) }}
                                    </p>
                                </div>
                            </div>
                            <div class="DateContent">
                                <p> <a target="_blank" href="{{$get_news_board->article_link}}">
                                        {{\Illuminate\Support\Str::limit($get_news_board->text,100)}}
                                    </a>
                                </p>
                            </div>
                        </div>
                    </li>

                @endforeach

            @endif


        </ul>


        <div class="gg" style="display:none;">

            <ul class="nt-example1" id="kk">


                @if($data['get_newsroom_board'])

                    @foreach($data['get_newsroom_board'] as $key=>$get_news_board)

                        <li style="margin-top: 0px; overflow: hidden;">
                            <div class="evenTNews">
                                <div class="DateNews">
                                    <div class="DteCont">
                                        <p>
                                            {{date('d', strtotime($get_news_board->custom_date)) }}
                                        </p>
                                        <p>
                                            {{date('M, Y', strtotime($get_news_board->custom_date)) }}
                                        </p>
                                    </div>
                                </div>
                                <div class="DateContent">
                                    <p>
                                        <a target="_blank" href="{{$get_news_board->article_link}}">  {{\Illuminate\Support\Str::limit($get_news_board->text,100)}}
                                        </a> </p>
                                </div>
                            </div>
                        </li>

                    @endforeach

                @endif




            </ul>

        </div>

    </div>

</div>