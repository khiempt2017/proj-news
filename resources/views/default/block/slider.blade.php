<div class="home">
    <!-- Home Slider -->
    <div class="home_slider_container">
        <div class="owl-carousel owl-theme home_slider">
            @if (count($sliderItems) > 0)
                @foreach ($sliderItems as $key => $value)
                    @php
                        $id             = $value->id;
                        $index          = $key + 1;
                        $slider_name    = $value->slider_name;
                        $description    = $value->description;
                        $link           = $value->link;
                        $thumb          = $value->thumb;
                        $status         = $value->status;      
                    @endphp
                    <!-- Slide -->
                    <div class="owl-item home_slider_item">
                        <div class="background_image"
                            style="background-image:url(images/slider/{{$thumb}})">
                        </div>
                        <div class="home_slider_content text-center">
                            <div class="home_slider_content_inner" data-animation-in="fadeIn"
                                    data-animation-out="animate-out fadeOut">
                                <div class="home_category"><a href="{{$link}}">technology</a></div>
                                <div class="home_title">{{$slider_name}}</div>
                                <div class="home_text">{{$description}}
                                </div>
                                <div class="home_button trans_200"><a href="{{$link}}">read more</a></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <!-- Home Slider Navigation -->
        <div class="home_slider_nav home_slider_prev trans_200"><i class="fa fa-angle-left trans_200"
                                                                aria-hidden="true"></i></div>
        <div class="home_slider_nav home_slider_next trans_200"><i class="fa fa-angle-right trans_200"
                                                                aria-hidden="true"></i></div>
    </div>
</div> 