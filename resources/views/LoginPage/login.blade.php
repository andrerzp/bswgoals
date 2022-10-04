
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>BSW - BP Batam | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('templates/plugins/fontawesome-free/css/all.min.css')}}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{asset('templates/plugins/icheck-bootstrap/icheck-bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('templates/dist/css/adminlte.min.css')}}">
</head>

<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>BSW</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Masuk</p>

      <form action="{{route('login')}}" method="post">
        {{ csrf_field() }}

        <div class="input-group mb-3">
          <input type="email" 
          class="form-control @error('email') is-invalid @enderror" 
          name="email" 
          placeholder="Email" 
          value="{{ old('email') }}" 
          required autocomplete="email" 
          autofocus>
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>

          @error('email')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>

        <div class="input-group mb-3">
          <input type="password" 
          class="form-control @error('password') is-invalid @enderror" 
          name="password" 
          placeholder="Password" 
          required autocomplete="current-password">
          
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>

          @error('password')
          <span class="invalid-feedback" role="alert">
              <strong>{{ $message }}</strong>
          </span>
          @enderror

        </div>


        <div class="form-group mb-3">
        {!! NoCaptcha::renderJs('id', false, 'onloadCallback') !!}
        {!! NoCaptcha::display() !!}
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Ingat saya.
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Masuk</button>
          </div>
          <!-- /.col -->
        </div>
      </form>

      <p class="mb-1">
        <a href="forgot-password.html">Lupa password.</a>
      </p>
      <p class="mb-0">
        <a href="{{ route('register') }}" class="text-center">Daftarkan akun.</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="{{asset('templates/plugins/jquery/jquery.min.js')}}"></script>
<!-- Bootstrap 4 -->
<script src="{{asset('templates/plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<!-- AdminLTE App -->
<script src="{{asset('templates/dist/js/adminlte.min.js')}}"></script>
<script>
  var onloadCallback = function() {
    alert("grecaptcha is ready!");
  };
</script>
</body>
</html>