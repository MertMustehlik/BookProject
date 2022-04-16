@extends('front.temp')
@section('title') Tryhard - Sepet @endsection
@section('css')@endsection

@section('master')
<div class="breadcrumbs">
    <div class="container">
        <div class="breadcrumbs-main">
            <ol class="breadcrumb">
                <li><a href="{{route('index')}}">Home</a></li>
                <li class="active">Sipariş Tamamla</li>
            </ol>
        </div>
    </div>
</div>
<div class="contact">
    <div class="container">
        <div class="contact-top heading">
            <h2>Bilgileriniz</h2>
        </div>
        @if(Session('status'))
        <div class="alert alert-info">{{Session('status')}}</div>
        @endif
        <div class="contact-text">
            <div class="col-md-12 contact-right">
                <form method="post" action="{{route('basket-complate-post')}}">
                    @csrf
                    <input type="text" placeholder="Telefon" name="phone">
                    @if($errors -> has('phone'))
                        <span class="invalid-feedback">{{$errors->first('phone')}}</span>
                    @endif
                    <input type="text" placeholder="Email" name="address">
                    @if($errors -> has('address'))
                        <span class="invalid-feedback">{{$errors->first('address')}}</span>
                    @endif
                    <textarea placeholder="Mesajınız" name="message"></textarea>
                    <div class="submit-btn">
                        <input type="submit" value="TAMAMLA">
                    </div>
                </form>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>
@endsection

@section('js')@endsection