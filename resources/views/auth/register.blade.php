<x-header-component name="Kutayarisha | Login"/>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <b class="h1">Mama2Be</b>
       <br/>

    </div>
    <div class="card-body">
      <p class="login-box-msg">Create an Account</p>

      <!--- display session errors --->
      @if (session('status'))
      <div class="alert alert-danger">
          {{ session('status') }}
      </div>
    @endif
        <!-- display session errors --->

      <form action="{{route('register')}}" method="post">
        @csrf
        <div class="input-group mb-3">
          <input type="text" class="form-control"
           placeholder="name" name="name" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="phone number" name="phone" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="enter password" 
          id="password" name="password" required>
          <div class="input-group-append">
            <div class="input-group-text eye">
              <span class="fas fa-eye-slash" id="hideorshowpassword"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="enter password" 
          id="password" 
          name="password_confirmation" required>
          <div class="input-group-append">
            <div class="input-group-text eye">
              <span class="fas fa-eye-slash" id="hideorshowpassword">

              </span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember">
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-6">
            <button type="submit" class="btn btn-primary btn-block">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <p class="mb-1">
      <a href="{{route('login')}}">Login</a>
      <br>
        <a href="{{route('forgot-password')}}">I forgot my password ?</a>
      </p>
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->
  @include('helpers.scripts')
</body>
</html>
