<!doctype html>
<html lang="pt">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Cadastro de fornecedores</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">
</head>

<body>
    {{-- Aqui está o a navbar --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        {{-- To define with that container have a max width 1920 and cover full screen <= 1920px. --}}
        <div class="container-fluid">
            {{-- Logo image --}}
            <a class="navbar-brand ms-5" href="https://agencia.vision/">
                <img src="https://agencia.vision/wp-content/uploads/2020/02/logo-vision.png" alt="Agência Vision"
                    class="img-fluid">
            </a>
            {{-- Options in navbar justify on horizontal finish of container --}}
            <div class="collapse navbar-collapse justify-content-end me-5" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    {{-- Send your form --}}
                    {{-- <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Enviar um formulário</a>
                    </li> --}}
                    {{-- Staff area colapse --}}
                    @if (URL::current() == route('cadastro') || URL::current() == route('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('index') }}">Enviar formulário</a>
                        </li>
                    @endif
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Admnistração
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="{{ route('login') }}">Login</a></li>
                            <li><a class="dropdown-item" href="{{ route('cadastro') }}">Cadastro</a></li>
                            @if (URL::current() == route('cadastro') || URL::current() == route('login'))
                                <li><a class="dropdown-item" href="{{ route('envios') }}">Ver envios</a></li>
                            @endif
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>
