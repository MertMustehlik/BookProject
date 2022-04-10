@extends('admin.temp')
@section('title') Yayinevi Ekle @endsection
@section('css')
@endsection
@section('master')
<div class="content">
    <div class="container-fluid">
        @if(session('status'))
        <div class="alert alert-primary">{{session('status')}}</div>
        @endif
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Yayinevi Ekle</h4>
                        <p class="card-category">Yayinevi bilgilerini giriniz.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('adminpanel-publisher-addPost')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ad</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Yayinevi Oluştur</button>
                            <div class="clearfix"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
@section('js')
@endsection