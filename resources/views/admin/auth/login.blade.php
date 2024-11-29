<!DOCTYPE html>
<html lang="pt-PT" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Login</title>
  
  <!-- Favicon -->

  <!-- CSS personalizado -->
  <link href="{{ asset('assets/css/vendor/jquery-jvectormap-1.2.2.css')}}" rel="stylesheet" type="text/css">
  <!-- third party css end -->

  <!-- App css -->
  <link href="{{ asset('assets/css/icons.min.css')}}" rel="stylesheet" type="text/css">
  <link href="{{ asset('assets/css/app.min.css')}}" rel="stylesheet" type="text/css" id="light-style">
  <link href="{{ asset('assets1/css/core/libs.min.css')}}">
  <link href="{{ asset('assets/css/app-dark.min.css')}}" rel="stylesheet" type="text/css" id="dark-style">
  
</head>
<body class="" data-bs-spy="scroll" data-bs-target="#elements-section" data-bs-offset="0" tabindex="0">

  <div class="wrapper">
    <section class="container-fluid bg-circle-login" id="auth-sign">
      <div class="row align-items-center">
        <div class="col-md-12 col-lg-7 col-xl-4">
          <div class="card-body">
            <a href="../../dashboard/">
              <img src="{{ asset('assets1/images/favicon.png')}}" class="img-fluid logo-img" alt="img4">
            </a>
            <h2 class="mb-2 text-center">Iniciar sessão</h2>
            <p class="text-center">Inicie sessão para se manter conectado.</p>
            <form action="{{route('postLogin')}}" method="post">
              @csrf
              <div class="row">
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="mb-1"><strong>Email</strong></label>
                    @if(session('error'))
            <div class="text-danger ">{{session('error')}}</div>
            @endif
                    <input name="email" type="email" class="form-control" placeholder="">
                </div>
               
                @error('email')
                <div class="text-danger">{{$message}}</div>
                @enderror
                
                <div class="col-lg-12">
                  <div class="form-group">
                    <label class="mb-1"><strong>Password</strong></label>
                     @if(session('error'))
                      <div class="text-danger ">{{session('error')}}</div>
                         @endif   
                      <input name="password" type="password" class="form-control" placeholder="Password">
                        </div>
                                   
                      @error('password')
                        <div class="text-danger">{{$message}}</div>
                         @enderror
                  </div>
                </div>
                <div class="col-lg-12 d-flex justify-content-between">
                  <div class="form-check mb-3">
                    <input name="remember" type="checkbox" class="form-check-input" id="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label class="form-check-label" for="remember">Lembrar-me</label>
                  </div>
                  <a href="recoverpw.html">Esqueceu a palavra-passe?</a>
                </div>
              </div>
              <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Iniciar sessão</button>
              </div>
              <p class="text-center my-3">ou iniciar sessão com outras contas?</p>
              <div class="d-flex justify-content-center">
                <ul class="list-group list-group-horizontal list-group-flush">
                  <li class="list-group-item border-0 pb-0">
                    <a href="/auth/github"><img src="{{ asset('assets1/images/brands/fb.svg')}}" alt="fb"></a>
                  </li>
                  <li class="list-group-item border-0 pb-0">
                    <a href="" ><img src="{{ asset('assets1/images/brands/gm.svg')}}" alt="gm"></a>
                  </li>
                  <li class="list-group-item border-0 pb-0">
                    <a href="#"><img src="{{ asset('assets1/images/brands/im.svg')}}" alt="im"></a>
                  </li>
                  <li class="list-group-item border-0 pb-0">
                    <a href="#"><img src="{{ asset('assets1/images/brands/li.svg')}}" alt="li"></a>
                  </li>
                </ul>
              </div>
              <p class="mt-3 text-center">
                Não tem uma conta? <a href="{{route('users.create')}}" class="text-underline">Clique aqui para se registar.</a>
              </p>
            </form>
          </div>
        </div>
        <div class="col-md-12 col-lg-5 col-xl-8 d-lg-block d-none vh-100 overflow-hidden">
          <img src="{{ asset('assets1/images/auth/09.png')}}" class="img-fluid sign-in-img" alt="images">
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
  <!-- third party js ends -->
  
 

  


</body>
</html>
