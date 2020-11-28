@extends('template-frontend')

@section('title') @endsection

@section('styles')
    <link rel="stylesheet" href="{{asset('css/pages/mystyle-domaines.css')}} " media="all">
@endsection

@section('content')

    <div class="default-margin"></div>

    <div class="banner" style=" background:url({{asset('img/ballon.png')}})  no-repeat ; height: 150px ">
        <div class="layer">
            <div class="container">
                <div class="text-center section small ">
                    <h1 class="white-color"> NOS DOMAINES ET ZONES D'INTERVENTION </h1>
                </div>
            </div>
        </div>
    </div>

    <div class="section small">
        <div class="container">
            <div class="  formation ">
                <div class="row text-center">
                    <div class="col-md-8">
                        <div class="row text-center">
                            <div class="col-md-12">
                                <div class="formation-wrapper white-bg">

                                    <h3 style="text-transform:uppercase;font-weight: bold;">Domaines
                                        d’intervention </h3>
                                    <div class="detail-wrapper">
                                        <p class="">
                                            <strong>
                                                <ul>
                                                    <li> La sécurité alimentaire et économique des femmes</li>
                                                    <li> La sensibilisation et la lutte contre toutes les formes de
                                                        discrimination et de violence basées sur le genre
                                                    </li>
                                                    <li> La lutte contre le travail des enfants surtout des filles</li>
                                                </ul>


                                                <br><br><br><br><br>
                                            </strong>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="formation-wrapper white-bg" style="margin-top: 50px;">

                                    <h3 style="text-transform:uppercase; font-weight: bold;">Zones d’intervention </h3>
                                    <div class="detail-wrapper">
                                        <p class="">
                                            <strong>
                                                Femme et Bénédiction intervient au Bénin dans le sud et le nord du Bénin
                                                et précisément dans 7 Communes
                                                <br><br><br><br><br>
                                            </strong>
                                        </p>

                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <a href="{{route('contacts.index')}}" title="contactez nous">
                            <div class="formation-wrapper main-bg white-color text-center" style="padding: 10px">
                                <span class="white-bg main-color widget-icon">
                                    <i class="fa fa-address-book"></i>
                                </span>
                                <div class="single contact-info">
                                    <ul class="list-unstyled">
                                        <li>
                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item"> 01 BP 1234
                                                    Cotonou </h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa fa-phone"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item">(00229) 62 90 85
                                                    41</h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item"> &nbsp;</h3>
                                            </div>
                                        </li>
                                    </ul>
                                    <br>
                                </div>
                            </div>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>

@endsection
