<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Quinta</title>
        <link rel="icon" href="https://img.icons8.com/ios/452/chicken.png" type="image/gif" sizes="16x16">
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="/css/app.css" />
        <link rel="stylesheet" href="/bootstrap/bootstrap.css"/>
        <script type="text/javascript" src="/bootstrap/bootstrap.js"></script>
        <script type="text/javascript" src="/bootstrap/bootstrap.bundle.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </head>
    <body class="d-flex flex-column h-100">
        <main class="flex-shrink-0">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container px-5">
                    <a class="navbar-brand" href="{{route('welcome')}}"> <img class="img-fluid rounded-3 my-5" src="https://img.icons8.com/ios/452/chicken.png" style="width: 75px" ></a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item"><a class="nav-link" href="{{route('welcome')}}">Página Inicial</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" id="navbarDropdownBlog" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Produtos</a>
                                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownBlog">
                                    <li><a class="dropdown-item" href="{{route('ovos')}}">Ovos</a></li>
                                    <li><a class="dropdown-item" href="{{route('galinhas')}}">Galinhas</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{route('agendas')}}">Comprar</a></li>
                            <li class="nav-item"><a class="nav-link" href="http://127.0.0.1:8000/admin">Login</a></li>
                        </ul>
                    </div>
                    
                </div>
            </nav>
            <!-- Page Content-->
            <section class="py-5">
                <div class="container px-5 my-5">
                    <div class="text-center mb-5">
                        <h1 class="fw-bolder">Ovos</h1>
                    </div>
                    <div id="listaOvos" class="row" style="...">
                    @foreach($ovos as $ovo)
                    <div class="card text-center row-cols-1" style="width: 18rem; margin: 10px;">
                        <div class="card-body">
                            <h5 class="card-title">{{$ovo->tamanho}}</h5>
                            <p class="card-text">Preço: {{$ovo->preco}} €</p>
                            <p class="card-text">Raça: {{$ovo->raca}} </p>
                        </div>
                    </div>
                    @endforeach
                    </div>
                    </div>
                </div>
            </section>
            <section class="py-5 bg-light">
            </section>
        </main>
        <!-- Footer-->
        <footer class="bg-dark py-4 mt-auto">
            <div class="container px-5">
                <div class="row align-items-center justify-content-between flex-column flex-sm-row">
                    <div class="col-auto"><div class="small m-0 text-white">Copyright &copy; GasparEspinheira23761</div></div>
                    <div class="col-auto">
                        <a class="link-light small" href="#!">Privacy</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Terms</a>
                        <span class="text-white mx-1">&middot;</span>
                        <a class="link-light small" href="#!">Contact</a>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>