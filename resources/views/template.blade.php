<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="Simple CMS" />
        <meta name="author" content="Sheikh Heera" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>

    <body>
        <header>
            <!-- Image and text -->
            <nav class="navbar navbar-dark bg-dark navbar-expand-lg">
                <a class="navbar-brand" href="#">
                    <img src="https://getbootstrap.com/docs/4.0/assets/brand/bootstrap-solid.svg" width="30" height="30" class="d-inline-block align-top" alt="">
                    Bootstrap
                </a>
 
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Features</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Pricing</a>
                        </li>
                    </ul>
                </div>
                @guest
                    <span class="navbar-text">
                        <a class="nav-link" href="login/">Login</a>
                    </span>
                    
                    <span class="navbar-text">
                        <a class="nav-link" href="register/">Register</a>
                    </span>
                @else
                    <ul class="navbar-nav">
                        <li class="nav-item text-decoration-none dropdown">
                            <a id="navbarDropdown" class="text-light nav-link dropdown-toggle " href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                
                                @IF ( $group != 'User')
                                    <a class="dropdown-item" href="panel/">
                                        Administration Panel
                                    </a>
                                @ENDIF
                                <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    </ul>
                @endguest
            </nav> 
        </header>    
    </body>
</html>
