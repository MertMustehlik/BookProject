	<!--top-header-->
	<div class="top-header">
		<div class="container">
			<div class="top-header-main">
				<div class="col-md-6 top-header-left">
					<div class="drop">
						@auth
						<div class="box">
							<a href="#" style="color:#fff; text-transform:capitalize;" >{{Illuminate\Support\Facades\Auth::user()->name}}</a>
						</div>
						<div class="box1">
							<a href="{{ route('logout') }}" style="color:#fff;" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
								Çıkış Yap
							</a>
							<form id="logout-form" action="{{ route('logout') }}" method="POST">
								@csrf
							</form>
						</div>
						@endauth
						@guest
						<div class="box">
							<a href="{{route('login')}}" style="color:#fff;">Giriş Yap</a>
						</div>
						<div class="box1">
							<a href="{{route('register')}}" style="color:#fff;">Kayıt Ol</a>
						</div>
						@endguest
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="col-md-6 top-header-left">
					<div class="cart box_1">
						<a href="{{route('basket')}}">
							<div class="total"><span>₺{{App\Helper\BasketHelper::totalPrice()}}</span></div>
							<img src="{{asset('front/assets/images/cart-1.png')}}" alt="basket-image">
						</a>
						<p><a href="{{route('empty-card')}}" class="simpleCart_empty">Sepeti Boşalt</a></p>
						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
	<!--top-header-->
	<!--start-logo-->
	<div class="logo">
		<a href="{{route('index')}}">
			<h1>Tryhard Books</h1>
		</a>
	</div>
	<!--start-logo-->
	<!--bottom-header-->
	<div class="header-bottom">
		<div class="container">
			<div class="header">
				<div class="col-md-9 header-left">
					<div class="top-nav">
						<ul class="memenu skyblue">
							@foreach($categories as $category)
							<li><a href="{{route('category',[$category->seflink])}}">{{$category->name}}</a></li>
							@endforeach

						</ul>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-3 header-right">
					<div class="search-bar">
						<form action="{{route('search')}}" method="get">
							<input type="text" name="search" value="Arama" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
							<input type="submit" value="">
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!--bottom-header-->