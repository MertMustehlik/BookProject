	<!--top-header-->
	<div class="top-header">
	    <div class="container">
	        <div class="top-header-main">
	            <div class="col-md-6 top-header-left">
	                <div class="drop">
	                    <div class="box">
	                        <select tabindex="4" class="dropdown drop">
	                            <option value="" class="label">Dollar :</option>
	                            <option value="1">Dollar</option>
	                            <option value="2">Euro</option>
	                        </select>
	                    </div>
	                    <div class="box1">
	                        <select tabindex="4" class="dropdown">
	                            <option value="" class="label">English :</option>
	                            <option value="1">English</option>
	                            <option value="2">French</option>
	                            <option value="3">German</option>
	                        </select>
	                    </div>
	                    <div class="clearfix"></div>
	                </div>
	            </div>
	            <div class="col-md-6 top-header-left">
	                <div class="cart box_1">
	                    <a href="checkout.html">
	                        <div class="total">
	                            <span class="simpleCart_total"></span>
	                        </div>
	                        <img src="{{asset('front/assets/images/cart-1.png')}}" alt="" />
	                    </a>
	                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
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
	    <a href="">
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
							<li class=""><a href="#">{{$category->name}}</a></li>
							@endforeach
	                        
	                    </ul>
	                </div>
	                <div class="clearfix"> </div>
	            </div>
	            <div class="col-md-3 header-right">
	                <div class="search-bar">
	                    <input type="text" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
	                    <input type="submit" value="">
	                </div>
	            </div>
	            <div class="clearfix"> </div>
	        </div>
	    </div>
	</div>
	<!--bottom-header-->