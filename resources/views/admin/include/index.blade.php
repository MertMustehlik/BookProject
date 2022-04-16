@extends('admin.temp')
@section('title') Anasayfa @endsection
@section('css')
@endsection
@section('master')
<div class="content">
    <div class="container-fluid">
        <div class="alert text-capitalize">Hoşgeldin {{$user->name}}</div>
    </div>
</div>
@endsection
@section('js')
@endsection