@extends('front.temp')
@section('title') Tryhard - Books @endsection
@section('css')@endsection

@section('master')
	<!--start-breadcrumbs-->
	<div class="breadcrumbs">
		<div class="container">
			<div class="breadcrumbs-main">
				<ol class="breadcrumb">
					<li><a href="{{route('index')}}">Home</a></li>
					<li class="active">{{$book->name}}}}</li>
				</ol>
			</div>
		</div>
	</div>
	<!--end-breadcrumbs-->
	<!--start-single-->
	<div class="single contact">
		<div class="container">
			<div class="single-main">
				<div class="col-md-12 single-main-left">
				<div class="sngl-top">
					<div class="col-md-4 single-top-left">	
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
					<div class="col-md-8 single-top-right">
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
								<a href="#" class="add-cart item_add">ADD TO CART</a>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="latestproducts">
					<div class="product-one">
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-1.png" alt="" /></a>
								<div class="product-bottom">
									<h3>Smart Watches</h3>
									<p>Explore Now</p>
									<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
								</div>
								<div class="srch">
									<span>-50%</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-2.png" alt="" /></a>
								<div class="product-bottom">
									<h3>Smart Watches</h3>
									<p>Explore Now</p>
									<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
								</div>
								<div class="srch">
									<span>-50%</span>
								</div>
							</div>
						</div>
						<div class="col-md-4 product-left p-left"> 
							<div class="product-main simpleCart_shelfItem">
								<a href="single.html" class="mask"><img class="img-responsive zoom-img" src="images/p-3.png" alt="" /></a>
								<div class="product-bottom">
									<h3>Smart Watches</h3>
									<p>Explore Now</p>
									<h4><a class="item_add" href="#"><i></i></a> <span class=" item_price">$ 329</span></h4>
								</div>
								<div class="srch">
									<span>-50%</span>
								</div>
							</div>
						</div>
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