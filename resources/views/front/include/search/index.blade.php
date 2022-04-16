@extends('front.temp')
@section('title') Tryhard - Books @endsection
@section('css') @endsection

@section('master')

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
                                @foreach($authors as $auth)
                                    @if($auth->id == $book->authorId)
                                        {{$auth->name}}
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