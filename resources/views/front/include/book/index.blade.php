@extends('front.temp')
@section('title') Tryhard - Books @endsection
@section('css')@endsection

@section('master')
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="{{route('index')}}">Anasayfa</a></li>
					<li class="active">{{$book->name}}</li>
				</ol>
			</div>
		</div>
		@if(session('status'))
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb" style="padding: 12px;">
					<li class="active">{{Session('status')}}</li>
				</ol>
			</div>
		</div>
		@endif
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact"">
		<div class="container">
			<div class="single-main" style="display: flex; justify-content:center;">
				<div class="col-md-9 single-main-left">
				<div class="sngl-top">
					<div class="col-md-5 single-top-left">	
					<div class="flexslider">
							  <ul class="slides">
								<li data-thumb="{{asset('admin/assets/img/books')}}/{{$book->image}}">
									<div class="thumb-image"> <img src="{{asset('admin/assets/img/books')}}/{{$book->image}}" data-imagezoom="true" class="img-responsive" alt=""/> </div>
								</li> 
							  </ul>
						</div>
						<!-- FlexSlider -->
						<script src="{{asset('front/assets/js/imagezoom.js')}}"></script>
						<script defer src="{{asset('front/assets/js/jquery.flexslider.js')}}"></script>
						<link rel="stylesheet" href="{{asset('front/assets/css/flexslider.css')}}" type="text/css" media="screen" />

						<script>
						// Can also be used with $(document).ready()
						$(window).load(function() {
						  $('.flexslider').flexslider({
							animation: "slide",
							controlNav: "thumbnails"
						  });
						});
						</script>
					</div>	
					<div class="col-md-7 single-top-right">
						<div class="single-para simpleCart_shelfItem">
						<h2>{{$book->name}}</h2>
							<h5 class="item_price">₺{{$book->price}}</h5>
							<p>{{$book->description}}</p>

							<ul class="tag-men">
								<li><span>Yazar:  </span><span>
                                    @foreach($authors as $author)
                                        @if($author->id == $book->authorId)
                                            {{$author->name}}
                                        @endif
                                    @endforeach
                                </span></li>
								<li><span>Yayınevi:  </span><span>
                                    @foreach($publishers as $publisher)
                                        @if($publisher->id == $book->publisherId)
                                            {{$publisher->name}}
                                        @endif
                                    @endforeach
                                </span></li>
							</ul>
								<a href="{{route('basket-add', [$book->id])}}" class="add-cart item_add">Sepete Ekle</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latestproducts">
					<div class="product-one">
						@foreach(\App\Models\Book::inRandomOrder()->limit(3)->get() as $value)
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="{{route('book-detail',[$value->seflink])}}" class="mask"><img class="img-responsive zoom-img" src="{{asset('admin/assets/img/books')}}/{{$value->image}}" alt="{{$value->seflink}}" width="100px" height="120px"/></a>
								<div class="product-bottom">
									<h3>{{$value->name}}</h3>
									<p>
										@foreach($authors as $author)
											@if($author->id == $value->authorId)
												{{$author->name}}
											@endif
										@endforeach
									</p>
									<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">₺{{$value->price}}</span></h4>
								</div>
								<!-- <div class="srch">
									<span>-50%</span>
								</div> -->
							</div>
						</div>
						@endforeach
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--end-single-->
@endsection

@section('js')@endsection