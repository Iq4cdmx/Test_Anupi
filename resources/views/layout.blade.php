<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Brand</title>
    <link rel="icon" type="image/png" sizes="112x294" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="112x294" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="112x294" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="112x294" href="assets/img/logo.png">
    <link rel="icon" type="image/png" sizes="112x294" href="assets/img/logo.png">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="assets/fonts/fontawesome-all.min.css">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/simple-line-icons.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="assets/css/smoothproducts.css">
    <link rel="stylesheet" href="assets/css/x-dropdown.css">
</head>

<body>
    <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
        <div class="container"><a class="navbar-brand logo" href="{{route('home')}}"><img src="assets/img/logo.png" style="height: 80px;width: 45.9375px;">&nbsp;<strong>ANUPI</strong></a><button data-toggle="collapse" class="navbar-toggler" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item"><a class="nav-link active" href="{{route('home')}}" style="color: rgba(0, 0, 0, 0.5);">Inicio</a></li>
                    <li class="nav-item">
                        <div class="nav-item dropdown nav-link" style="border-color: var(--dark);color: var(--dark);"><a class="dropdown-toggle" aria-expanded="false" data-toggle="dropdown" href="#" style="color: rgba(0,0,0,0.5);">Servicios&nbsp;</a>
                            <div class="dropdown-menu"><a class="dropdown-item nav-link" href="{{route('cursos')}}">Cursos</a><a class="dropdown-item nav-link" href="{{route('certificate')}}">Certificaciones</a></div>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('partner')}}">Socios</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('event')}}">Eventos</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Blog</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Quienes somos</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contactanos</a></li>
                </ul>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="page-footer dark" style="background: var(--red);">
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <h5>Inicio</h5>
                    <ul>
                        <li><a href="#">Home</a></li>
                        <li><a href="#">Sign up</a></li>
                        <li><a href="#">Downloads</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Conocenos</h5>
                    <ul>
                        <li><a href="#">Company Information</a></li>
                        <li><a href="#">Contact us</a></li>
                        <li><a href="#">Reviews</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Support</h5>
                    <ul>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Help desk</a></li>
                        <li><a href="#">Forums</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <h5>Legal</h5>
                    <ul>
                        <li><a href="#">Terms of Service</a></li>
                        <li><a href="#">Terms of Use</a></li>
                        <li><a href="#">Privacy Policy</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="footer-copyright" style="background: var(--red);border-color: rgba(33,37,41,0);">
            <p>AVISO DE PRIVACIDAD</p>
        </div>
    </footer>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="assets/js/smoothproducts.min.js"></script>
    <script src="assets/js/theme.js"></script>
</body>

</html>