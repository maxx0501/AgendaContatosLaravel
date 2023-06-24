<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Agenda de Contato</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link href="css/styles.css" rel="stylesheet" />

</head>

<body>
    <!-- Responsive navbar-->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container px-5">
            <a class="navbar-brand" href="#!">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" fill="currentColor"
                    class="bi bi-whatsapp" viewBox="0 0 16 16">
                    <path
                        d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z" />
                </svg></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link active" aria-current="page" href="#!">Home</a></li>
                    <li class="nav-item"><a class="nav-link" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Cadastrar</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Cadastrar contato<span></span></h1>
                </div>

                <div class="modal-body">
                    <!-- Conteúdo do formulário de cadastro aqui -->
                    <form method="post" action="{{route('cadastro-contato')}}">
                        @csrf
                        <div class="input-container">
                            <input placeholder="Nome" class="input-field" type="text" name="name" id="name">
                            <label for="name" class="input-label">Nome</label>
                            <span class="input-highlight"></span>
                        </div>
                          
                        <div class="input-container">
                            <input placeholder="Telefone" class="input-field" type="tel" name="telefone" id="telefone">
                            <label for="telefone" class="input-label">Telefone</label>
                            <span class="input-highlight"></span>
                        </div>

                        <div class="input-container">
                            <input placeholder="E-mail" class="input-field" type="email" name="email" id="email">
                            <label for="email" class="input-label">E-mail</label>
                            <span class="input-highlight"></span>
                        </div>

                        <div class="input-container">
                            <input placeholder="Endereço" class="input-field" type="text" name="endereco" id="endereco">
                            <label for="endereco" class="input-label">Endereço</label>
                            <span class="input-highlight"></span>
                        </div>
                        <div class="button-container">
                            <button type="submit" class="btn btn-secondary" data-bs-dismiss="modal" aria-label="Close">Fechar</button>
                            <button type="submit" class="btn btn-success ">Adicionar contato</button>
                        </div>
                    </form>
                </div>

                
            </div>
        </div>
    </div>

    <!-- Page Content-->
    <div class="container px-4 px-lg-5">
        <!-- Heading Row-->

        <!-- Call to Action-->
        <div class="card text-white bg-success my-5 py-4 text-center">
            <div class="card-body">
                <h1 class="text-white m-0">Agenda de Contato</h1>
            </div>
        </div>
        <!-- Content Row-->
        <div class="row gx-4 gx-lg-5">
            @foreach($contatos as $contato)
            <div class="col-md-4 mb-5">
                <div class="card card-contatos card-container h-100 shadow border-0">
                    <div class="card-body">
                        <h2 class="card-title">{{ $contato->name }}</h2>
                        <p class="card-text">
                            <p>Fone: {{ $contato->telefone }}</p>
                            <p>E-mail: {{ $contato->email }}</p>
                        </p>
                        <div class="button-container">
                        <a class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#lerMaisModal-{{ $contato->id }}">Ler mais</a>
                        </div>
                    </div>
                    
                </div>
            </div>
            @endforeach
        </div>

        @foreach($contatos as $contato)
                <div class="modal fade" id="lerMaisModal-{{ $contato->id }}" tabindex="-1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                        <h4 class="modal-title">Informações - {{ $contato->name }}</h4>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Nome: {{ $contato->name }}</p>
                        <p>Telefone: {{ $contato->telefone }}</p>
                        <p>E-mail: {{ $contato->email }}</p>
                        <p>Endereço: {{ $contato->endereco }}</p>
                    </div>
                    
                        </div>
                    </div>
                </div>
                @endforeach
    <!-- Footer-->
    <footer class="footer py-5 bg-dark">
        <div class="container px-4 px-lg-5">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2023</p>
        </div>
    </footer>
    <!-- Bootstrap core JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
    <!-- Core theme JS-->
    <script src="js/scripts.js"></script>
</body>

</html>