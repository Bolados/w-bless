<header>
    <nav class="navbar  navbar-fixed-top white-bg  " id="site_header">
        <div class="container">
            <div class="navbar-header nav navbar-header-height">

                      <span class="visible-xs" id="menu_right_toggle_1">
                            <img width="20" src="{{asset('img/right-alignment.png')}}">
                    </span>


                <a class="navbar-brand white-color uppercase" id="logo" href="{{route('acceuil.index')}}">
                    <img src="{{asset('img/logo.png')}}" alt="ONG Femme & Benediction">
                </a>
            </div>
            <div id="navbar" class="navbar-right collapse navbar-collapse navbar-right-margin-top ">
                <div class="hidden-sm hidden-xs" id="head_menu">
                    <ul class="nav navbar-nav">
                        <li class="uppercase"><a href="{{route('acceuil.index')}}">Accueil</a></li>
                        {{--<li  class="uppercase"><a href="{{route('domaines.index')}}">Domaines</a></li>--}}
                        <li class="uppercase"><a href="{{route('activites.index')}}">Activites</a></li>
                        <li class="uppercase"><a href="{{route('partenaires.index')}}">Partenaires</a></li>
                        <li class="uppercase"><a href="{{route('apropos.index')}}">A propos</a></li>
                        <li class="uppercase"><a href="{{route('contacts.index')}}">Contacts</a></li>
                    </ul>
                </div>


            </div>

            <div class="white-bg" id="right_menu">
                <span id="close_right_menu">&times;</span>
                <div class="text-center" id="right_menu_head">

                </div>

                <div>
                    <ul class="nav navbar-nav navbar-right-margin-top">
                        <li class="menu-item uppercase  "><a href="{{route('acceuil.index')}}">Accueil</a></li>
                        {{--<li  class="menu-item uppercase  "><a href="{{route('domaines.index')}}">Domaines</a></li>--}}
                        <li class="menu-item uppercase  "><a href="{{route('activites.index')}}">Activites</a></li>
                        <li class="menu-item uppercase  "><a href="{{route('partenaires.index')}}">Partenaires</a></li>
                        <li class="menu-item uppercase  "><a href="{{route('apropos.index')}}">A propos</a></li>
                        <li class="menu-item uppercase  "><a href="{{route('contacts.index')}}">Contacts</a></li>
                    </ul>
                </div>

            </div>

        </div>


        </div>
    </nav>
</header>
