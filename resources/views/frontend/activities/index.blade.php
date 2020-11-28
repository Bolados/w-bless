@extends('template-frontend')

@section('title') NOS ACTIVITES @endsection

@section('banner-title')NOS ACTIVITES @endsection
@section('banner-background'){{asset('img/culture.jpg')}}@endsection

@section('sidebar-content')
    @foreach($activites as $activite)
        <div class="row">
            <div class=" white-bg">
                <div class="col-md-5">
                    <div id="myCarousel" class="carousel slide " style="    width: 100%;" data-ride="carousel">
                        <!-- Indicators -->
                        @if($activite->uploads->count()>1)
                            <ol class="carousel-indicators">
                                @for($var=0;$var<$activite->uploads->count();$var++)
                                    @if(@$var==0)
                                        <li data-target="#myCarousel" data-slide-to="{{$var}}" class="active"></li>
                                    @else
                                        <li data-target="#myCarousel" data-slide-to="{{$var}}"></li>
                                    @endif
                                @endfor
                            </ol>
                    @endif

                    <!-- Wrapper for slides -->
                        <div class="carousel-inner ">
                            @php($var=0)
                            @foreach($activite->uploads as $upload)
                                @if(@$var==0)
                                    <div class="item active">
                                        <img src="{{asset($upload->path)}}" alt="Los Angeles" style="width:100%;">
                                        <div class="carousel-caption">
                                            <p class="white-color text-center ">{{$upload->description}} </p>
                                        </div>
                                    </div>
                                @else
                                    <div class="item">
                                        <img src="{{asset($upload->path)}}" alt="Los Angeles" style="width:100%;">
                                        <div class="carousel-caption">
                                            <p class="white-color text-center">{{$upload->description}} </p>
                                        </div>
                                    </div>
                                @endif
                                @php($var++)
                            @endforeach
                        </div>

                    </div>
                </div>
                <div class="col-md-7">
                    <div class="detail-wrapper">
                        <h3 class="formation-titile">
                            {{$activite->title}}
                        </h3>
                        <p class="text-justify"> {{$activite->resume}}</p>
                    </div>

                </div>
            </div>
        </div>
        <hr>
    @endforeach



@endsection
