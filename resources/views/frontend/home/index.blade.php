@extends('template-frontend')

@section('title') ONG Femme et Benediction
@endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/pages/mystyle-home.css')}} " media="all">
@endsection

@section('title') ACCEUIL @endsection

@if(empty($homeImages))
@section('banner-title') ACCEUIL @endsection
@section('banner-background'){{asset('img/fleuve_vert-1.jpg')}}@endsection
@else
@section('banner')
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
    @if($homeImages->count()>1)
        <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                @for($var=1;$var<$homeImages->count();$var++)
                    <li data-target="#myCarousel" data-slide-to="{{$var}}"></li>
                @endfor
            </ol>
    @endif

    <!-- Wrapper for slides -->
        <div class="carousel-inner carousel-inner-ajust">
            <div class="item active">
                <img src="{{asset($homeImages->first()->path)}}" class="carousel-inner-ajust" alt="New York">
                <div class="carousel-caption layer">
                    <div class="container">
                        <div class="text-center section welcome">
                            <h1 class="white-color uppercase"> Bienvenue <br> à l' ONG Femme et Bénédiction </h1>
                            <p class="white-color"></p>
                        </div>
                    </div>
                </div>
            </div>

            @php($var=0)
            @foreach($homeImages as $homeImage)
                @if($var!=0)
                    <div class="item">
                        <img src="{{asset($homeImage->path)}}" class="carousel-inner-ajust" alt="{{$homeImage->title}}"
                             style="width:100%;">
                        <div class="carousel-caption layer">
                            <div class="container">
                                <div class="text-center section welcome">
                                    <h1 class="white-color uppercase"> {{$homeImage->description}} </h1>
                                    <p class="white-color"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endif
                @php($var++)
            @endforeach
        </div>

    @if($homeImages->count()>1)
        <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
                <span class="sr-only">Next</span>
            </a>
        @endif

    </div>
@endsection
@endif


@section('right-sidebar')@endsection

@section('content')
    <div class="section small">
        <div class="container">
            <div class="  formation ">
                <div class="row text-center">
                    <div class="col-md-6 ajust-image">
                        @include('frontend.include.presentation')
                    </div>

                    <div class="col-md-6 ajust-image">
                        @include('frontend.include.mission-vision')
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/pages/script-home.js')}}"></script>
@endsection
