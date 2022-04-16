@extends('front.temp')
@section('title') Tryhard - Sepet @endsection
@section('css')@endsection

@section('master')
<!--start-breadcrumbs-->
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">Sepet</li>
            </ol>
        </div>
    </div>
</div>
<!--end-breadcrumbs-->
<!--start-ckeckout-->
<div class="ckeckout">
    <div class="container">
        <div class="ckeck-top heading">
            <h2>Ürünler</h2>
        </div>
        <div class="ckeckout-top">
            <div class="cart-items">
                <h3>Sepetin (@if(\App\Helper\BasketHelper::countData()){{\App\Helper\BasketHelper::countData()}}@endif)</h3>
                <div class="in-check">
                    <ul class="unit">
                        <li><span>Resmi</span></li>
                        <li><span>Adı</span></li>
                        <li><span>Fiyatı</span></li>
                        <li> </li>
                        <div class="clearfix"> </div>
                    </ul>
                    @if(\App\Helper\BasketHelper::allList())
                        @foreach(\App\Helper\BasketHelper::allList() as $key => $value)
                        <ul class="cart-header">
                            <a href="{{route('basket-delete', ['id' => $key])}}"><div class="close1"></div></a>
                            <li class="ring-in"><a href="single.html"><img src="images/c-1.jpg" class="img-responsive" alt=""></a>
                            </li>
                            <li><span class="name"><img src="{{asset('admin/assets/img/books')}}/{{$value['image']}}" alt="kapak-foto" width="80px" height="125px"></span></li>
                            <li><span class="name">{{$value['name']}}</span></li>
                            <li><span class="cost">₺{{$value['price']}}</span></li>
                            <div class="clearfix"> </div>
                        </ul>
                        @endforeach
                        <a href="{{route('basket-complate')}}" class="add-cart item_add">Alışverişi Tamamla</a>
                    @else
                    <div class="alert alert-info">Sepetiniz bomboş</div>
                    @endif
                </div>
            </div>
            
        </div>
    </div>
</div>
<!--end-ckeckout-->
@endsection

@section('js')@endsection