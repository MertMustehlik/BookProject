@extends('admin.temp')
@section('title') Kitaplar @endsection
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
                    <div class="card-header card-header-primary d-flex justify-content-between">
                        <h4 class="card-title d-flex align-items-center">Kitaplar</h4>
                        <h4><a href="{{route('adminpanel-book-add')}}" class="btn">Ekle</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>İsim</th>
                                        <th>Yazar</th>
                                        <th>Katgori</th>
                                        <th>Yayınevi</th>
                                        <th>Fotoğraf</th>
                                        <th>Fiyat</th>
                                        <th>Açıklama</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td>
                                            @foreach($authors as $author)
                                                @if($author->id == $data->authorId)
                                                    {{$author->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($categoryies as $category)
                                                @if($category->id == $data->categoryId)
                                                    {{$category->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td>
                                            @foreach($publishers as $publisher)
                                                @if($publisher->id == $data->publisherId)
                                                    {{$publisher->name}}
                                                @endif
                                            @endforeach
                                        </td>
                                        <td><img src="{{asset('admin/assets/img/books')}}/{{$data->image}}" alt="{{$data->seflink}}" width="80px" height="125px"></td>
                                        <td>{{$data->price}}</td>
                                        <td>{{$data->description}}</td>
                                        <td class="text-center"><a href="{{route('adminpanel-book-update', [$data->id])}}">Düzenle</a></td>
                                        <td class="text-center"><a href="{{route('adminpanel-book-delete', [$data->id])}}">Sil</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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