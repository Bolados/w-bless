@extends('template-frontend')

@section('styles')
    <link rel="stylesheet" type="text/css" href="css/pages/contacts/animate.css">
    <link rel="stylesheet" type="text/css" href="css/pages/contacts/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="css/pages/contacts/select2/select2.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
    <link rel="stylesheet" href="{{asset('css/pages/contacts/contacts-form.css')}}" media="all">
@endsection

@section('title') NOS CONTACTS @endsection

@section('banner-title') NOS CONTACTS @endsection
@section('banner-background'){{asset('img/banners/contactez-nous.jpg')}}@endsection

@section('right-sidebar')@endsection

@section('content')
    <div class="section small">
        <div class="container">
            <div class="  formation ">
                <div class="row">
                    <div class="col-md-6 ajust-image">
                        <div class="formation-wrapper blue-bg">
                            <div class="detail-wrapper">
                                <h3 class="formation-titile white-color-text" style="text-align: center"> Adresse
                                    Permanante </h3>
                                <div class="single contact-info">
                                    <ul class="list-unstyled white-color-text">
                                        <li>
                                            <div class="icon"><i class="fa fa-map-marker"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item"> Sainte Rita
                                                    Cotonou </h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa fa-envelope"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item"> 01 BP 1234
                                                    Cotonou </h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa fa-phone"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item">(+229) 62 90 85
                                                    41</h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa"> <img
                                                            src='{{asset('assets/images/icon/gmail.png')}}'
                                                            style="width: 50%"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item">
                                                    ongfemmeetbenediction</h3></div>
                                        </li>

                                        <li>
                                            <div class="icon"><i class="fa fa-user"></i></div>
                                            <div class="info contacts-items"><h3 class="contacts-item">TCHETEME Enafa
                                                    Fleur Présidente </h3></div>
                                        </li>


                                    </ul>
                                    <br>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 ajust-image">
                        <div class="formation-wrapper white-bg">
                            <div class="detail-wrapper">
                                <h3 class="formation-titile" style="text-align: center"> CONTACTEZ NOUS ! </h3>
                                <form id="contact-form" class="contact1-form validate-form text-center" method="POST"
                                      action="{{route('contacts.store')}}">
                                    <div class="wrap-input1 validate-input" data-validate="Veuillez saisir un nom">
                                        <input class="input1" type="text" name="name" placeholder="Nom">
                                        <span class="shadow-input1"></span>
                                    </div>
                                    <div class="wrap-input1 validate-input"
                                         data-validate="Veuillez saisir un email valide: ex@abc.xyz">
                                        <input class="input1" type="text" name="email" placeholder="Email">
                                        <span class="shadow-input1"></span>
                                    </div>
                                    <div class="wrap-input1 validate-input"
                                         data-validate="Veuillez saisir l'objet de votre message">
                                        <input class="input1" type="text" name="subject" placeholder="Objet">
                                        <span class="shadow-input1"></span>
                                    </div>
                                    <div class="wrap-input1 validate-input"
                                         data-validate="Veuillez saisir votre message">
                                        <textarea class="input1" name="message" placeholder="Message"></textarea>
                                        <span class="shadow-input1"></span>
                                    </div>
                                    <div class="container-contact1-form-btn">
                                        <button class="contact1-form-btn">
                                            <span>
                                                Envoyer
                                                <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
                                            </span>
                                        </button>
                                    </div>
                                </form>


                            </div>

                        </div>
                    </div>


                </div>


            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="js/pages/contacts/select2/select2.min.js"></script>
    <script type="text/javascript" src="{{asset('js/pages/contacts/script-contacts.js')}}"></script>
@endsection
