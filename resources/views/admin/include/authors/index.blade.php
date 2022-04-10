@extends('admin.temp')
@section('title') Yazarlar @endsection
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
                        <h4 class="card-title d-flex align-items-center">Yazarlar</h4>
                        <h4><a href="{{route('adminpanel-author-add')}}" class="btn">Ekle</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>İsim</th>
                                        <th>Resim</th>
                                        <th>Bio</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td>{{$data->name}}</td>
                                        <td><img src="{{asset('admin/assets/img/authors')}}/{{$data->image}}" alt="{{$data->seflink}}" class="rounded-circle" width="65px" height="65px"></td>
                                        <td style="max-width: 400px;">{{$data->bio}}</td>
                                        <td class="text-center"><a href="{{route('adminpanel-author-update', [$data->id])}}">Düzenle</a></td>
                                        <td class="text-center"><a href="{{route('adminpanel-author-delete', [$data->id])}}">Sil</a></td>
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