@extends('admin.temp')
@section('title') Admin - Yazar Ekle @endsection
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
                        <h4 class="card-title">Yazar Ekle</h4>
                        <p class="card-category">Yazar bilgilerini giriniz.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('adminpanel-author-addPost')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ad</label>
                                        <input type="text" class="form-control" name="name">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Fotoğraf</label>
                                        <input type="file" class="form-control" name="image" style="opacity: 1; position:initial;">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Biografi</label>
                                        <textarea name="bio" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Yazar Oluştur</button>
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