<nav class="navbar navbar-expand-lg fixed-top navbar-light bg-light shadow-sm">
            <div class="container">
                <div class="col-md-3 bg-light py-1">
                    
                    <a class="navbar-brand" href="{{ route('inicio') }}">
                        <img src="img/logo.png" class="mx-auto d-block img-fluid">
                    </a>
                </div>

                <div class="col-lg-9 bg-light py-1">
                    <div class="col-lg-12 bg-light py-1">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                            <span class="navbar-toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <!-- Left Side Of Navbar -->
                            <ul class="navbar-nav mr-auto">

                            </ul>

                            <!-- Right Side Of Navbar -->
                            <ul class="navbar-nav ml-auto">
                                <!-- Authentication Links -->
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('inicio') ? 'active' : ''}}" href="{{ route('inicio') }}">{{ __('Inicio') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('web') ? 'active' : ''}}" href="{{ route('web') }}">{{ __('Diseño Web') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('desarrollo') ? 'active' : ''}}" href="{{ route('desarrollo') }}">{{ __('Desarrollo de Software') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('portafolio') ? 'active' : ''}}" href="{{ route('portafolio') }}">{{ __('Portafolio') }}</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link {{request()->routeIs('contacto') ? 'active' : ''}}" href="{{ route('contacto') }}">{{ __('Contacto') }}</a>
                                    </li>
                                    <!--
                                    @if (Route::has('login'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                        </li>
                                    @endif

                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                        </li>
                                    @endif-->
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }}
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                            document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>

                            <span class="navbar-text">
                                <a class="nav-link" href="https://wa.link/vm7ewn" target="_blank"><i style="margin-right: 10px;" class="bi bi-whatsapp"></i> +569 89523359</a>
                                <a class="nav-link" href="mailto:contacto@lineasdecodigo.cl"><i style="margin-right: 10px;" class="bi bi-envelope-fill"></i> contacto@lineasdecodigo.cl</a>
                            </span>
                        </div>
                    </div>
                </div>
                
            </div>
        </nav>