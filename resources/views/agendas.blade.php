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

    <section class="py-5" style="background-image: url(https://www.publicdomainpictures.net/pictures/130000/velka/yellow-point-background.jpg);">
        <div class="container px-5">
            <!-- Contact form-->
            <div class=" rounded-3 py-5 px-4 px-md-5 mb-5">
                <div class="text-center mb-5">

                    <h1 class="fw-bolder"style="color:black">Comprar</h1>
                </div>
              

                                <form  action ="{{route('agendaPost')}}" method="POST" >
                                 @csrf
                                    <div class="form-group col-md-6">
                                    <div class="form-group">
                                        <label style="color:black; text-shadow: 2px black;" for="exampleFormControlInput1">Nome</label>
                                        <input type="text"  name= "nome" class="form-control" id="exampleFormControlInput1" placeholder="Nome">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email</label>
                                        <input type="email" name= "email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Telefone</label>
                                        <input type="number" name= "telefone" class="form-control" id="exampleFormControlInput1" placeholder="Telefone">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:black; text-shadow: 2px black;" for="exampleFormControlInput1"> Galinhas ou Ovos?</label>
                                        <input type="text"  name= "tipo" class="form-control" id="exampleFormControlInput1" placeholder="Tipo">
                                    </div>
                                    <div class="form-group">
                                        <label style="color:black; text-shadow: 2px black;" for="exampleFormControlInput1"> Morada</label>
                                        <input type="text"  name="morada" class="form-control" id="exampleFormControlInput1" placeholder="Morada">
                                    </div>

                                <button type="submit" class="btn btn-secondary" style="margin:40px;">Enviar</button>
                            </div>
                        </form>
            </div>
        </div>
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
    </section>
</main>
</body>
</html>