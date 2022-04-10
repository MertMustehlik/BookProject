@extends('admin.temp')
@section('title') Kitap Düzenle @endsection
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
                        <h4 class="card-title">Kitap Düzenle</h4>
                        <p class="card-category">Kitap bilgilerini giriniz.</p>
                    </div>
                    <div class="card-body">
                        <form action="{{route('adminpanel-book-updatePost',[$data->id])}}" method="post" enctype="multipart/form-data">
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
                                        <label class="bmd-label-floating">Yazar</label>
                                        <select name="authorId" class="form-control">
                                            @foreach($authors as $author)
                                            <option @if($author['id'] == $data['authorId']) selected @endif value="{{$author->id}}">{{$author->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Yayınevi</label>
                                        <select name="publisherId" class="form-control">
                                            @foreach($publishers as $publisher)
                                            <option @if($publisher['id'] == $data['publisherId']) selected @endif value="{{$publisher->id}}">{{$publisher->name}}</option>
                                            @endforeach
                                        </select>
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
                                        <label class="bmd-label-floating">Fiyat</label>
                                        <input type="text" class="form-control" name="price" value="{{$data->price}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="bmd-label-floating">Açıklama</label>
                                        <textarea name="description" cols="30" rows="10" class="form-control">{{$data->description}}</textarea>
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