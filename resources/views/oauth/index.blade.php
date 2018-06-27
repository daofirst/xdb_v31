@extends('layouts.app')

@section('title', 'OAuth')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>OAuth客户端管理</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('/') }}">首页</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ url('/backstage/view/oauth/manager') }}">OAuth管理</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>OAuth客户端管理</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2">

        </div>
    </div>

    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="ibox">
            <div class="ibox-title">
                <h5>所有OAuth客户端</h5>
            </div>

            <div class="ibox-content">
                <passport-clients></passport-clients>
            </div>
        </div>

    </div>
@endsection
