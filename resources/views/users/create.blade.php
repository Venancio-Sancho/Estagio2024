<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Aprycot | Template de Painel Administrativo Responsivo com Bootstrap 5</title>
  
  <!-- Favicon -->
  <link rel="shortcut icon" href="{{ asset('assets/images/favicon.ico') }}" />
  
  <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
  <!-- third party css end -->

  <!-- App css -->
  <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
  <link href="{{ asset('assets1/css/core/libs.min.css')}}">
  <link href="{{ asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
  <!-- Início do Carregador -->

  <!-- Fim do Carregador -->
  
  <div class="wrapper">
    <section class="container-fluid bg-circle-login">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 col-xl-4">
          <div class="d-flex justify-content-center mb-0">
            <div class="card-body mt-5">
              <a href="{{ url('dashboard') }}">
                <img src="{{ asset('assets1/images/favicon.png') }}" class="img-fluid logo-img" alt="img5">
              </a>
              <h2 class="mb-2 text-center">Cadastro</h2>
              <p class="text-center">Crie sua conta Aprycot.</p>

              @if(session('error'))
                <div class="alert alert-danger" role="alert">
                  {{ session('error') }}
                </div>
              @endif

              <form class="forms-sample" method="post" action="{{route('users.store')}}">
               @csrf
           <div class="form-group">
             <label for="name">Nome</label>
             <input type="text" class="form-control" name="name" placeholder="Nome">
           </div>
           <div class="form-group">
             <label for="email">Email</label>
             <input type="text" class="form-control" name="email" placeholder="Email">
           </div>
           
           <div class="form-group">
             <label for="password">Senha</label>
             <input type="text" class="form-control" name="password" placeholder="Senha">
           </div>

                  
                <div class="d-flex justify-content-center">
                  <button type="submit" class="btn btn-primary">Cadastrar</button>
                </div>
                <p class="text-center my-3">ou cadastre-se com outras contas?</p>
                <div class="d-flex justify-content-center">
                  <ul class="list-group list-group-horizontal list-group-flush">
                    <li class="list-group-item border-0 pb-0">
                      <a href="#"><img src="{{ asset('assets1/images/brands/gm.svg') }}" alt="gm"></a>
                    </li>
                    <li class="list-group-item border-0 pb-0">
                      <a href="#"><img src="{{ asset('assets1/images/brands/fb.svg') }}" alt="fb"></a>
                    </li>
                    <li class="list-group-item border-0 pb-0">
                      <a href="#"><img src="{{ asset('assets1/images/brands/im.svg') }}" alt="im"></a>
                    </li>
                    <li class="list-group-item border-0 pb-0">
                      <a href="#"><img src="{{ asset('assets1/images/brands/li.svg') }}" alt="li"></a>
                    </li>
                  </ul>
                </div>
                <p class="mt-3 text-center">
                  Já tem uma conta? <a href="http://127.0.0.1:8000" class="text-underline">Entrar</a>
                </p>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-12 col-lg-5 col-xl-8 d-lg-block d-none vh-100 overflow-hidden">
          <img src="{{ asset('assets1/images/auth/09.png') }}" class="img-fluid sign-in-img" alt="images">
        </div>
      </div>
    </section>
  </div>

  <script src="{{ asset('asset1s/js/vendor.min.js')}}"></script>
  <script src="{{ asset('assets/js/app.min.js')}}"></script>
  <script src="{{ asset('assets1/js/core/external.min.js')}}"></script>
  <!-- third party js -->
  <script src="{{ asset('assets/js/vendor/apexcharts.min.js')}}"></script>
  <script src="{{ asset('assets1/css/core/libs.min.css')}}"></script>
  <script src="{{ asset('assets/js/vendor/jquery-jvectormap-1.2.2.min.js')}}"></script>

  <script src="{{ asset('assets/js/vendor/jquery-jvectormap-world-mill-en.js')}}"></script>