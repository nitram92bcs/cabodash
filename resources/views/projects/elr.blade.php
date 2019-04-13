@extends('layouts.freelance-pages')
@section('title', 'Eames Lounge Restoration')
@section('style')
<style>
    .tab-container .row {
        margin: 0;
        background-color: #EFEFEF;
    }
    .tab-container .row .tab-col {
        padding: 0px 0;
        text-align: center;
        border:1px solid #a7a9ac;
        border-right:none;
        color: #A5886D;
    }
    .tab-container .row .tab-col.last {
        border-right:1px solid #a7a9ac;
    }
    .tab-container .row .tab-col.active ,.tab-container .row .tab-col:hover {
        background-color: #DDDDDD;
    }
    .tap-option {
        display: block;
    }
    .tap-col.active, .tap-col:hover{
    }
    .tab-image {
        font-size: 26px;
        /* border-radius: 50% !important; */
        display: inline-block;
        margin: auto auto 5px;
        padding-top: 10px;
        padding-bottom: 10px;
        position: relative;
        z-index: 5;
        text-align: center;
    }
    .tab-image img {
        height: 60px;
        width: 60px;
    }
    .tab-title{
        margin-bottom:34px;
    }
</style>
@endsection
@section('content')
<div class="container">
<div class="col-md-12">
    <h1 class="text-center">TABS</h1>
</div>
<div class="col-md-12">
    <div class="tab-container">
        <div class="row ">
            <a href="javascript:;" class="tap-option" data-target=".tab-1">
                <div class="col-md-4 tab-col first active">
                    <div class="tab-image">
                        <img src="/freelance/img/profile.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">UPHOLSTERY</div>
                </div>
            </a>
            <a href="javascript:;" class="tap-option" data-target=".tab-2">
                <div class="col-md-4 tab-col ">
                    <div class="tab-image">
                        <img src="/freelance/img/profile.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">REFINISHING</div>
                </div>
            </a>
            <a href="javascript:;" class="tap-option" data-target=".tab-3">
                <div class="col-md-4 tab-col last">
                    <div class="tab-image">
                        <img src="/freelance/img/profile.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">SHOCK MOUNTING</div>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="row col-md-12">
    <div class="row col-md-12 tab-1">
    </div>
    <div class="row col-md-12 tab-2">
    </div>
    <div class="row col-md-12 tab-3">
    </div>
</div>
</div>
<br><br><br><br><br><br><br>
@endsection
