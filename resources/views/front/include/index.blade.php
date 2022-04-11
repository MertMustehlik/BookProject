@extends('front.temp')
@section('title') Tryhard - Books @endsection
@section('css')@endsection

@section('master')
<!--banner-starts-->
<div class="bnr" id="home">
    <div id="top" class="callbacks_container">
        <ul class="rslides" id="slider4">
            @foreach($sliders as $slider)
                <li><img src="{{asset('admin/assets/img/slider')}}/{{$slider->image}}" alt="slider-image"/></li>
            @endforeach
        </ul>
    </div>
    <div class="clearfix"> </div>
</div>
<!--banner-ends-->
<!--Slider-Starts-Here-->
<script src="{{asset('front/assets/js/responsiveslides.min.js')}}"></script>
<script>
    // You can also use "$(window).load(function() {"
    $(function() {
        // Slideshow 4
        $("#slider4").responsiveSlides({
            auto: true,
            pager: true,
            nav: true,
            speed: 500,
            namespace: "callbacks",
            before: function() {
                $('.events').append("<li>before event fired.</li>");
            },
            after: function() {
                $('.events').append("<li>after event fired.</li>");
            }
        });

    });
</script>
<!--End-slider-script-->
<!--about-starts-->
<div class="about">
    <div class="container">
        <div class="about-top grid-1">
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="{{asset('front/assets/images/abt-1.jpg')}}" alt="" />
                    <figcaption>
                        <h2>Nulla maximus nunc</h2>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="{{asset('front/assets/images/abt-2.jpg')}}" alt="" />
                    <figcaption>
                        <h4>Mauris erat augue</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="col-md-4 about-left">
                <figure class="effect-bubba">
                    <img class="img-responsive" src="{{asset('front/assets/images/abt-3.jpg')}}" alt="" />
                    <figcaption>
                        <h4>Cras elit mauris</h4>
                        <p>In sit amet sapien eros Integer dolore magna aliqua</p>
                    </figcaption>
                </figure>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
<!--about-end-->
<!--product-starts-->
<div class="product">
    <div class="container">
        <div class="product-top">
            <div class="product-one">
                @foreach($books as $book)
                <div class="col-md-3 product-left">
                    <div class="product-main simpleCart_shelfItem">
                        <a href="{{route('book-detail',[$book->seflink])}}" class="mask"><img class="img-responsive zoom-img" style="padding: 10px;" src="{{asset('admin/assets/img/books')}}/{{$book->image}}" alt="{{$book->seflink}}"/></a>
                        <div class="product-bottom">
                            <h3>{{$book->name}}</h3>
                            <p>
                                @foreach($authors as $author)
                                    @if($author->id == $book->authorId)
                                        {{$author->name}}
                                    @endif
                                @endforeach
                            </p>
                            <h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">₺{{$book->price}}</span></h4>
                        </div>
                        <!-- <div class="srch">
                            <span>-50%</span>
                        </div> -->
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
<!--product-end-->
@endsection

@section('js')@endsection