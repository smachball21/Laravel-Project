
@if ( $group != 'User')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta name="description" content="{{ config('app.name', 'Laravel') }}" />
        <meta name="author" content="{{ config('app.name', 'Laravel') }}" />
        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link href="{{ asset('css/app.css') }}" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="{{ asset('css/panel.css') }}" >
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
        <title>{{ config('app.name', 'Laravel') }}</title>
    </head>
    <body>
        <div class="nav-side-menu">
            <div class="navbar-brand brand nav-text">
                <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png" width="30" height="30" class="d-inline-block align-top" alt="">
                Laravel Project
            </div>
            <div>
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>
        
                <div class="menu-list">
        
                    <ul id="menu-content" class="menu-content collapse out">
                        <li>
                        <a href="#">
                        <i class="fa fa-dashboard fa-lg"></i> Dashboard
                        </a>
                        </li>

                        @if (($group == 'Administrator') || ($group == 'SuperAdministrator'))
                            <li data-toggle="collapse" data-target="#service" class="collapsed">
                            <a href="#"><i class="fa fa-globe fa-lg"></i> Services <span class="arrow"></span></a>
                            </li>  
                            <ul class="sub-menu collapse" id="service">
                            <li>New Service 1</li>
                            <li>New Service 2</li>
                            <li>New Service 3</li>
                            </ul>
                        @endif

                        
                            <li data-toggle="collapse" data-target="#new" class="collapsed">
                            <a href="#"><i class="fa fa-car fa-lg"></i> New <span class="arrow"></span></a>
                            </li>
                            <ul class="sub-menu collapse" id="new">
                            <li>New New 1</li>
                            <li>New New 2</li>
                            <li>New New 3</li>
                            </ul>
                       

                        @if ( ($group == 'SuperAdministrator'))
                            <li>
                                <a href="#">
                                    <i class="fa fa-users fa-lg"></i> Users
                                </a>
                            </li>
                        @endif

                        <li>
                            <a href="#">
                                <i class="fa fa-arrow-left"></i></i> <a href='../'>Go Back</a>
                            </a>
                        </li>                       
                    </ul>
            </div>
        </div>

        
    </body>
    <h1></h1>
</html>
@else
    <script>
        window.location.href = '{{url("/")}}';
    </script>

@endif