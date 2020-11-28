@extends('template-frontend')

@section('title') NOS PARTENAIRES @endsection
@section('banner-title') NOS PARTENAIRES @endsection
@section('banner-background'){{asset('img/banners/partners_background.jpg')}}@endsection


@section('right-sidebar-element-contact') @parent @endsection
@section('sidebar-element-presentation')@endsection
@section('sidebar-element-mission')@endsection

@section('sidebar-content')
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <img class="img-responsive " src="{{asset('img/partenaires/fnm.jpg')}}" alt="image">
            <br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <img class="img-responsive " src="{{asset('img/partenaires/la-banque-mondiale.png')}}" alt="image">
            <br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <img class="img-responsive " src="{{asset('img/partenaires/cooperation-allemande-.jpg')}}" alt="image">
            <br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <img class="img-responsive " src="{{asset('img/partenaires/cooperation-suisse.png')}}" alt="image">
            <br>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <div class="detail-wrapper">
                <img class="img-responsive " src="{{asset('img/partenaires/weworld.png')}}" alt="image">
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg ">
            <div class="detail-wrapper">
                <h5 class="formation-titile text-center">
                    Ministère en charge de la famille et des affaires sociales
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <div class="detail-wrapper">
                <h5 class="formation-titile text-center">
                    Ministère en charge de l’agriculture et de l’élevage
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <div class="detail-wrapper">
                <h5 class="formation-titile text-center">
                    Ministère en charge de l’Education Nationale <br><br>
                </h5>
            </div>
        </div>
    </div>
    <div class="col-md-4 hidden-xs hidden-sm">
        <div class="formation-wrapper-1 white-bg">
            <div class="detail-wrapper">
                <h5 class="formation-titile text-center">
                    <br> <br>
                </h5>
            </div>
        </div>
    </div>

    <div class="col-md-4">
        <div class="formation-wrapper-1 white-bg">
            <div class="detail-wrapper">
                <h5 class="formation-titile text-center">
                    Fonds National de solidarité <br> <br>
                </h5>
            </div>
        </div>
    </div>

@endsection
