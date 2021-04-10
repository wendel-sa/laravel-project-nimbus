<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">

    <title>Registro</title>

     <!-- Fonts -->
     <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
     <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
     <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
    
    <div class="container-fluid px-1 px-md-5 px-lg-1 px-xl-5 py-5 mx-auto">
        <div class="card card0 border-0">
            <div class="row d-flex">
                <div class="col-lg-6">
                    <div class="card1 pb-5">
                        {{-- <div class="row"> <img src="https://i.imgur.com/CXQmsmF.png" class="logo"> </div> --}}
                        <div class="row px-3 justify-content-center mt-4 mb-5 border-line"> <img src="/images/register.svg" class="image"> </div>
                    </div>
                </div>
    
                <div class="col-lg-6">
                    <div class="card2 card border-0 px-4 py-5">
                        <div class="row mb-4 px-3">
    
                            <h6 class="mb-0 mr-4 mt-2">Registre-se com:</h6>
    
                            <div class="facebook text-center mr-3">
                                <div class="fa fa-facebook"></div>
                            </div>
    
                            <div class="twitter text-center mr-3">
                                <div class="fa fa-twitter"></div>
                            </div>
    
                            <div class="linkedin text-center mr-3">
                                <div class="fa fa-linkedin"></div>
                            </div>
    
                        </div>
    
                        <div class="row px-3 mb-4">
                            <div class="line"></div> <small class="or text-center">Ou</small>
                            <div class="line"></div>
                        </div>
    
                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Email</h6>
                            </label> <input class="mb-4" type="text" name="email" placeholder="Adicione um email valido">
                        </div>

                        <div class="row px-3">
                            <label class="mb-1">
                                <h6 class="mb-0 text-sm">Nome</h6>
                            </label>
                            <input type="text" class="mb-4" name="name" placeholder="Seu nome">
                        </div>
    
                        <div class="row px-3"> <label class="mb-1">
                            <h6 class="mb-0 text-sm">Senha</h6>
                            </label> <input type="password" name="password" placeholder="Senha">
                        </div>
    
                        <div class="row px-3 mb-4">
                            <div class="custom-control custom-checkbox custom-control-inline"> <input id="chk1" type="checkbox" name="chk" class="custom-control-input"> <label for="chk1" class="custom-control-label text-sm">Lembre-me</label> </div> <a href="#" class="ml-auto mb-0 text-sm">Esqueci a senha</a>
                        </div>
    
                        <div class="row mb-3 px-3"> <button type="submit" class="btn btn-blue text-center">Registrar</button> </div>
                        <div class="row mb-4 px-3"> <small class="font-weight-bold">Já tem uma conta? <a class="text-danger " href="/">Login</a></small></div>
                    </div>
                </div>
            </div>
    
            <div class="bg-blue py-4">
                <div class="row px-3"> <small class="ml-4 ml-sm-5 mb-2">Copyright &copy; 2021. All rights reserved.</small>
                    <div class="social-contact ml-4 ml-sm-auto"> <span class="fa fa-facebook mr-4 text-sm"></span> <span class="fa fa-google-plus mr-4 text-sm"></span> <span class="fa fa-linkedin mr-4 text-sm"></span> <span class="fa fa-twitter mr-4 mr-sm-5 text-sm"></span> </div>
                </div>
            </div>
        </div>
        </div>
    
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
</body>
</html>