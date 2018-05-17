<!DOCTYPE html>
<html>
<head>
    <title></title>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato: 100,300,400,700|Luckiest+Guy|Oxygen:300,400" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Alegreya|Cormorant+Garamond|Crimson+Text|Merriweather|Montserrat" rel="stylesheet">
</head>

<style>
a{
    color:white;
}
</style>
<body>

 <header style="background: #26AE0D" class="main-header">

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">

            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                <li>
        <a href="/inicio">Buscar Hoteles</a>
    </li>
    <li>
        <a href="/crear">Crear Hoteles</a>
    </li>
                    <!-- User Account Menu -->
                    <li class="dropdown user user-menu">
                        <!-- Menu Toggle Button -->
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <!-- The user image in the navbar-->
                           
                            <!-- hidden-xs hides the username on small devices so only the image appears. -->
                            <span class="hidden-xs">{!! Auth::user()->name !!}</span>
                        </a>
                        <ul class="dropdown-menu">
                            <!-- The user image in the menu -->
                            <li class="user-header">
                                <img src="http://infyom.com/images/logo/blue_logo_150x150.jpg"
                                     class="img-circle" alt="User Image"/>
                                <p>
                                    {!! Auth::user()->name !!}
                                    <small>Member since {!! Auth::user()->created_at->format('M. Y') !!}</small>
                                </p>
                            </li>
                            <!-- Menu Footer-->
                            <li class="user-footer">

                                <div class="pull-right">
                                    <a href="{!! url('/logout') !!}" class="btn btn-default btn-flat"
                                       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        Sign out
                                    </a>
                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST"
                                          style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </div>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
</body>
</html>
