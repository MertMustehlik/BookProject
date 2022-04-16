@extends('admin.temp')
@section('title') Sipariş Detay @endsection
@section('css')
@endsection
@section('master')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Sipariş Detay</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Alıcı Adı :</label>
                                        <label style="text-transform: capitalize;">{{\App\Models\User::getUser($data->userId)}}</label>
                                    </div><br>
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Telefon :</label>
                                        <label style="text-transform: capitalize;">{{$data->phone}}</label>
                                    </div><br>
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Adres :</label>
                                        <label style="text-transform: capitalize;">{{$data->address}}</label>
                                    </div><br>
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Mesaj :</label>
                                        <label style="text-transform: capitalize;">{{$data->message}}</label>
                                    </div><br>
                                    @foreach(json_decode($data->json,true) as $key => $value)
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Kitap Adı :</label>
                                        <label class="bmd-label-floating">{{$value['name']}}</label>
                                    </div>
                                    <div class="input-group">
                                        <label class="bmd-label-floating">Fiyat :</label>
                                        <label style="text-transform: capitalize;">₺{{$value['price']}}</label>
                                    </div>
                                    <br>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection