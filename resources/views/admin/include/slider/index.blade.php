@extends('admin.temp')
@section('title') Slider @endsection
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
                        <h4 class="card-title d-flex align-items-center">Resim</h4>
                        <h4><a href="{{route('adminpanel-slider-add')}}" class="btn">Ekle</a></h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>ID</th>
                                        <th>Resim</th>
                                        <th class="text-center">Düzenle</th>
                                        <th class="text-center">Sil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas as $data)
                                    <tr>
                                        <td>{{$data->id}}</td>
                                        <td><img src="{{asset('admin/assets/img/slider')}}/{{$data->image}}" width="250px" height="100px" alt="slider-image"></td>
                                        <td class="text-center"><a href="{{route('adminpanel-slider-update', [$data->id])}}">Düzenle</a></td>
                                        <td class="text-center"><a href="{{route('adminpanel-slider-delete', [$data->id])}}">Sil</a></td>
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