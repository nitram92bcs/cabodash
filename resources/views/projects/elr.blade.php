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
    .tab-col.active , .tab-col:hover {
        background-color: #DDDDDD;
        opacity: 1;
        filter: alpha(opacity=100);   
    }
    .tab-col.active img, .tab-col:hover img{
        opacity: 1;
        filter: alpha(opacity=100);   
    }
    .tab-option{
       margin:0; 
       padding:0px;
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
    .image{
        
    }
    .image img{
        padding-top:100px;
        padding-left: 30px;
        padding-right: 30px;
        width: 100%;
        opacity: 0.9;
        filter: alpha(opacity=90);
    }
    .tab-image img {
        height: 70px;
        opacity: 0.7;
        filter: alpha(opacity=70);
    }
    .tab-title{
        margin-bottom:34px;
        opacity: 0.7;
        filter: alpha(opacity=70);
    }
    .tab-content{
        display:none;
        height: 600px;
        background-color: #EFEFEF;
    }
    .tab-body{
        /* margin: 0; */
    }
    .body h3{
        color:#A5886D;
        font-size: 40px;
    }
    .body h1{
        color:#26483e;
        margin-bottom:30px;
        margin-top:10px;
        font-size: 70px;
    }
    .body p{
       font-size: 21px;
       margin-bottom:50px;
    }
    .body{
        padding-top:100px;
    }
    .btn-elr.focus, .btn-elr:focus, .btn-elr:hover {
        color: #333;
        text-decoration: none;
    }
    .btn-elr {
        display: inline-block;
        padding: 6px 12px;
        margin-bottom: 0;
        font-size: 14px;
        font-weight: 400;
        line-height: 1.42857143;
        text-align: center;
        white-space: nowrap;
        vertical-align: middle;
        -ms-touch-action: manipulation;
        touch-action: manipulation;
        cursor: pointer;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
        background-image: none;
    }
    .btn-elr.primary{
        color: #ffffff;
        border-radius: 5px;
        background-color: #26483e;
        margin-left:10px;
        margin-right:10px;
        padding: 10px;

    }
    .btn-elr.secondary{
        color: #6D6E71;
        border-radius: 5px;
        background-color: transparent;
        border: 2px solid #A5886D;
        margin-left:10px;
        margin-right:10px;
        padding: 10px;

    }
    .btn-elr.btn-elr.secondary.active, .btn-elr.btn-elr.secondary:hover{
        background-color: #A5886D;
        color:#fff;
        transition: transform .3s, border .3s, background .3s, box-shadow .3s, opacity .3s, color .3s;
    }
    .btn-elr.off-2{
        margin-left: 12%;
    }
    .btn-elr.off-3{
        margin-left: 25%;
    }
    .divider-elr{
        width:15%;
        margin-left:auto;
        margin-right:auto;
        border-color: #a5886d;
    }
    .btn-elr.color-picker{
        width: 11%;
        margin-left: 4%;
        margin-right: 4%;
    }
    .picker-1, .picker-2, .picker-3, .picker-4, .picker-5{
        width: 100px;
        height: 100px;
        background-color: #000;
        border-radius: 20px;
        border: 4px solid #eaeaea;
    }
    .picker-1:hover, .picker-2:hover, .picker-3:hover, .picker-4:hover, .picker-5:hover,
    .active .picker-1, .active .picker-2, .active .picker-3, .active .picker-4, .active .picker-5{
        border: 4px solid #a5886d;
    }
    .picker-1{
        background-image: url("/images/projects/eames-lounge/color-picker/picker-1.jpg");
        background-repeat: no-repeat;
        background-size: 105px;
    }
    .picker-2{
        background-image: url("/images/projects/eames-lounge/color-picker/picker-2.jpg");
        background-repeat: no-repeat;
        background-size: 105px;
    }
    .picker-3{
        background-image: url("/images/projects/eames-lounge/color-picker/picker-3.jpg");
        background-repeat: no-repeat;
        background-size: 105px;
    }
    .picker-4{
        background-image: url("/images/projects/eames-lounge/color-picker/picker-4.jpg");
        background-repeat: no-repeat;
        background-size: 105px;
    }
    .picker-5{
        background-image: url("/images/projects/eames-lounge/color-picker/picker-5.jpg");
        background-repeat: no-repeat;
        background-size: 105px;
    }
    /* .tab-content.active{
        display:block;
    } */
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
            <div class="tab-option col-md-4" data-target=".tab-1">
                <div class="tab-col first active">
                    <div class="tab-image">
                        <img src="/images/projects/eames-lounge/cushions.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">UPHOLSTERY</div>
                </div>
            </div>
            <div class="tab-option col-md-4" data-target=".tab-2">
                <div class="tab-col">
                    <div class="tab-image">
                        <img src="/images/projects/eames-lounge/refinish.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">REFINISHING</div>
                </div>
            </div>
            <div class="tab-option col-md-4" data-target=".tab-3">
                <div class="tab-col last">
                    <div class="tab-image">
                        <img src="/images/projects/eames-lounge/shock-mounts.png" alt="">
                    </div>
                    <div class="tab-title uppercase font-grey-cascade">SHOCK MOUNTING</div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-md-12">
    <div class="col-md-12 tab-content tab-1 ">
        <div class="image col-lg-6 col-md-5">
            <img src="/images/projects/eames-lounge/chair.jpg" alt="">
        </div>
        <div class="col-lg-6 col-md-7">
            <div class="body ">
                <h3>EXTENDED LIFE FOR</h3>
                <h1>YOUR EAMES</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
            </div>
            <div class="actions">
                <div class="btn-elr col-md-5 secondary">DISCOVER MORE</div>
                <div class="btn-elr col-md-5 primary">REQUEST A QUOTE</div>
            </div>
        </div>
    </div>
    <div class="col-md-12 tab-content tab-2" >
        <h1 class="text-center">REFINISHING</h1>
    </div>
    <div class="col-md-12 tab-content tab-3" >
        <h1 class="text-center">SHOCK MOUNTING</h1>
    </div>
</div>
</div>
<br><br>
<div class="container">
<div class="col-md-12">
    <h1 class="text-center">Generation Picker</h1><br><br>
     <div class="body text-center">
        <h3>EAMES LOUNGE</h3>
        <h1>CHAIR 670/671</h1>
    </div>
    <hr class="divider-elr"><br>
</div>
<div class="row">
    <div class="btn-elr col-md-3 secondary active off-2 generation" data-generation="1">1ST GENERATION</div>
    <div class="btn-elr col-md-3 secondary generation" data-generation="2">2ND GENERATION</div>
    <div class="btn-elr col-md-3 secondary generation" data-generation="3">3RD GENERATION</div>
</div>
<div class="row" style="margin-top:20px;">
 <div class="btn-elr col-md-3 off-3 secondary active cushion" data-cushion="true" >WITH CUSHIONS</div>
    <div class="btn-elr col-md-3  secondary cushion" data-cushion="false">WITHOUT CUSHIONS</div>
</div>
<div class="image col-lg-12 col-md-12">
    <img id="generation-selected" src="" alt="">
</div>
</div>
<div class="container">
<div class="col-md-12">
    <h1 class="text-center">Color Picker</h1><br><br>
     <div class="body text-center">
        <h3>CUSTOMIZE AN</h3>
        <h1>EAMES LOUNGE</h1>
    </div>
    <hr class="divider-elr"><br>
</div>
<div class="image col-lg-12 col-md-12">
    <img id="customize-color" src="" alt="">
</div>
<div style="margin-top: 30px;" class="row col-md-12">
    <div class="btn-elr color-picker active" data-color="1">
        <div class="picker-1"></div>
    </div>
    <div class="btn-elr color-picker" data-color="2">
        <div class="picker-2"></div>
    </div>
    <div class="btn-elr color-picker" data-color="3">
        <div class="picker-3"></div>
    </div>
    <div class="btn-elr color-picker" data-color="4">
        <div class="picker-4"></div>
    </div>
    <div class="btn-elr color-picker" data-color="5">
        <div class="picker-5"></div>
    </div>
</div>
</div>
<br><br><br>
@endsection
@section('scripts')
<script>
var sections;
$(document).ready(function() {
   sections = [];
    $('.tab-container .tab-option').each(function(index,element){
        var data = {};
        data.selector = $(element).data('target');
        sections.push(data);
    });
    $('.tab-1').show();
    $('.tab-option').on('click',function(){
        var target = $(this).data('target');
        if($(this).find('.active').length !== 0){  

        }
        else{
            $.each(sections,function(index,element){
                if( $(".tab-option[data-target='"+element.selector+"']").find('.tab-col').hasClass('active')&& element.selector != target ){
                    $(".tab-option[data-target='"+element.selector+"']").find('.tab-col').removeClass('active')
                    $(element.selector).hide();
                }
            });
            $(".tab-option[data-target='"+target+"']").find('.tab-col').addClass('active');
            $(target).fadeIn('slow');
        }       
    }); 
});
</script>
<script>
    var generation;
$(document).ready(function() {
   generation = [];
   $('.generation').on('click',function(){
        $('.generation.active').removeClass('active');
        $(this).addClass('active');
        $('#generation-selected').trigger('change');
   });
   $('.cushion').on('click',function(){
        $('.cushion.active').removeClass('active');
        $(this).addClass('active');
        $('#generation-selected').trigger('change');
   });
   $('#generation-selected').on('change',function(){
        var basePath= '/images/projects/eames-lounge/generation/';
        var img = $(this).attr('src');
        var gen = $('.generation.active').data('generation');
        var cus = $('.cushion.active').data('cushion')==true?'c':'wc';
        var newImg = basePath+'chair-'+gen+'-'+cus+'.jpg';
        if(img != newImg){
            $(this).fadeOut(function(){ $(this).fadeIn('slow').attr('src',newImg); });
        }
    });
    $('#generation-selected').trigger('change');
    $('.color-picker').on('click',function(){
        $('.color-picker.active').removeClass('active');
        $(this).addClass('active');
        $('#customize-color').trigger('change');
    });
    $('#customize-color').on('change',function(){
        var basePath= '/images/projects/eames-lounge/color-picker/';
        var img = $(this).attr('src');
        var color = $('.color-picker.active').data('color');
        var newImg = basePath+'color-'+color+'.jpg';
        if(img != newImg){
            $(this).fadeOut(function(){ $(this).fadeIn('slow').attr('src',newImg); });
        }
    });
     $('#customize-color').trigger('change');
});
    // $(target).fadeIn('slow');
</script>
@endsection
