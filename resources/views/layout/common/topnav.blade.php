<header>
    <!-- *** TOP ***
_________________________________________________________ -->
    <div id="top">
        <div class="container">
            <div class="row">
                <div class="col-xs-5 contact">
                    <p class="hidden-sm hidden-xs">
                        Llámanos
                        <strong>
                            (871) 716-26-93
                        </strong>
                        o escríbenos
                        <strong>
                            ventas@hema.com.mx
                        </strong>
                    </p>
                    <p class="hidden-md hidden-lg">
                        <a data-animate-hover="pulse" href="#">
                            <i class="fa fa-phone">
                            </i>
                        </a>
                        <a data-animate-hover="pulse" href="#">
                            <i class="fa fa-envelope">
                            </i>
                        </a>
                    </p>
                </div>
                <div class="col-xs-7">
                    <div class="social">
                        <a class="external facebook" data-animate-hover="pulse" href="#">
                            <i class="fa fa-facebook">
                            </i>
                        </a>
                        <a class="external gplus" data-animate-hover="pulse" href="#">
                            <i class="fa fa-google-plus">
                            </i>
                        </a>
                        <a class="external twitter" data-animate-hover="pulse" href="#">
                            <i class="fa fa-twitter">
                            </i>
                        </a>
                        <a class="email" data-animate-hover="pulse" href="#">
                            <i class="fa fa-envelope">
                            </i>
                        </a>
                    </div>
                    <div class="login">
                        <a data-target="#login-modal" data-toggle="modal" href="#">
                            <i class="fa fa-sign-in">
                            </i>
                            <span class="hidden-xs text-uppercase">
                                Sign in
                            </span>
                        </a>
                        <a href="customer-register.html">
                            <i class="fa fa-user">
                            </i>
                            <span class="hidden-xs text-uppercase">
                                Sign up
                            </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- *** TOP END *** -->
    <!-- *** NAVBAR ***
    _________________________________________________________ -->
    <div class="navbar-affixed-top" data-offset-top="200" data-spy="affix">
        <div class="navbar navbar-default yamm" id="navbar" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <a class="navbar-brand home" href="{{ route('inicio') }}">
                        <img alt="Hema Servicios class=" hidden-sm"=" hidden-xs="" src="{{ asset('assets/img/logo.png') }}">
                           <!-- <img alt="Hema Servicios" class="visible-xs visible-sm" src="{{ asset('assets/img/logo.png') }}">
                                <span class="sr-only">
                                    Hema Servicios
                                </span>
                            </img>-->
                        </img>
                    </a>
                    <div class="navbar-buttons">
                        <button class="navbar-toggle btn-template-main" data-target="#navigation" data-toggle="collapse" type="button">
                            <span class="sr-only">
                                Toggle navigation
                            </span>
                            <i class="fa fa-align-justify">
                            </i>
                        </button>
                    </div>
                </div>
                <!--/.navbar-header -->
                <div class="navbar-collapse collapse" id="navigation">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="{{ route('inicio') }}">
                                Inicio
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('productos') }}">
                                Productos
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('renta') }}">
                                Renta
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('reparacion') }}">
                                Reparación
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('roscas-y-corte') }}">
                                Roscas y corte
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('bolsa-de-trabajo') }}">
                                Bolsa de trabajo
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('contacto') }}">
                                Contacto
                            </a>
                        </li>
                        @include('layout.common.shopping-icon', ["elementos" => 5] )
                    </ul>
                    
                    <form class="navbar-form navbar-right" action="{{ route('productos') }}" method="GET">
                        <div class="col-lg-12">
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Buscar...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                            </span>
                            </div><!-- /input-group -->
                        </div><!-- /.col-lg-6 -->

                    </form>


                </div>
                <!--/.nav-collapse -->
                <div class="collapse clearfix" id="search">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input class="form-control" placeholder="Search" type="text">
                                <span class="input-group-btn">
                                    <button class="btn btn-template-main" type="submit">
                                        <i class="fa fa-search">
                                        </i>
                                    </button>
                                </span>
                            </input>
                        </div>
                    </form>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
        <!-- /#navbar -->
    </div>
    <!-- *** NAVBAR END *** -->
</header>