@extends('admin.temp')
@section('title') Yazar Düzenle @endsection
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
                        <h4 class="card-title">Yazar Düzenle</h4>
                        <p class="card-category">Yazar bilgilerini giriniz.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('adminpanel-author-updatePost',[$data->id])}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Ad</label>
                                        <input type="text" class="form-control" name="name" value="{{$data->name}}">
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
                                        <textarea name="bio" cols="30" rows="10" class="form-control" >{{$data->bio}}</textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary pull-right">Düzenle</button>
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