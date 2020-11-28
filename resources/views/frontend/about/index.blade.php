@extends('template-frontend')

@section('styles')
    <link rel="stylesheet" href="{{asset('css/pages/mystyle-apropos.css')}}" media="all">
@endsection

@section('title') A PROPOS @endsection
@section('banner-title') A PROPOS @endsection
@section('banner-background'){{asset('img/culture.jpg')}}@endsection

@section('right-sidebar')@endsection

@section('content')
    <div class="section small">
        <div class="container">
            <div class="  formation ">
                <div class="row text-center">
                    <div class="text-center">
                        <h2> CONSEIL D'ADMINISTRATION </h2>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-girl-black.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile"> TCHETEME Enafa Fleur </h4>
                                <p class="text-justify"> Présidente </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-girl-black.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-justify"> DJIMASSE Judith</h4>
                                <p class="text-justify"> Sécretaire </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-girl-black.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-justify">COMLAN Josephine</h4>
                                <p class="text-justify"> Trésoriàre </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-girl-black.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-justify">ADEBAYE Aurielle</h4>
                                <p class="text-justify"> 1ere Conseillère </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-man_tie.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-justify">HOUESSOU Brice </h4>
                                <p class="text-justify"> 2eme conseiller </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <img class="img-responsive " src="{{asset('img/avatar-girl-black.png')}}" alt="image">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-justify">BERE Brigitte </h4>
                                <p class="text-justify"> Chargée à la communication </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="section small">
        <div class="container">
            <div class="  formation ">
                <div class="row text-center">
                    <div class="text-center">
                        <h2> DIRECTION EXCECUTIVE </h2>
                    </div>
                    <div class="col-md-6 ajust-image">
                        <div class="formation-wrapper white-bg ">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-center"> Nombre de cadres nationaux : 3 </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <div class="detail-wrapper">
                                <h4 class="formation-titile text-center"> Nombre total de salariés : 7 </h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    </div>

@endsection
