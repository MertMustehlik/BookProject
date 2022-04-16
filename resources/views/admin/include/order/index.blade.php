@extends('admin.temp')
@section('title') Siparişler @endsection
@section('css')
@endsection
@section('master')
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title ">Sipariş Tablosu</h4>
                        <p class="card-category">Gelen Siparişler</p>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                    <tr>
                                        <th>#</th>
                                        <th>Alıcı</th>
                                        <th>Telefon</th>
                                        <th>Adres</th>
                                        <th>Mesaj</th>
                                        <th>Tarih</th>
                                        <th class="text-center">Detay</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($datas->reverse() as $data)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td style="text-transform: capitalize;">{{\App\Models\User::getUser($data->userId)}}</td>
                                        <td>{{$data->phone}}</td>
                                        <td>{{$data->address}}</td>
                                        <td>{{$data->message}}</td>
                                        <td>{{$data->created_at}}</td>
                                        <td class="text-center"><a href="{{route('adminpanel-order-detail', [$data->id])}}">Detay</a></td>
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