<!DOCTYPE html>
<html lang="en">
@include('head')
    </html>
    <body class="login-page">
        <div class='loader'>
            <div class='spinner-grow text-primary' role='status'>
              <span class='sr-only'>Loading...</span>
            </div>
          </div>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col-md-12 col-lg-4">
                    <div class="card login-box-container">
                        <div class="card-body">
                            <div class="authent-logo">
                                <img src="{{asset('../../assets/images/logo@2x.png')}}" alt="">
                            </div>
                            <div class="authent-text">
                                <p>Welcome to Circl</p>
                                <p>Enter your details to create your account</p>
                            </div>

                            <form>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="floatingInput" placeholder="Fullname">
                                        <label for="floatingInput">Fullname</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="floatingInput1" placeholder="name@example.com">
                                        <label for="floatingInput">Email address</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword" placeholder="Password">
                                        <label for="floatingPassword">Password</label>
                                      </div>
                                </div>
                                <div class="mb-3">
                                    <div class="form-floating">
                                        <input type="password" class="form-control" id="floatingPassword1" placeholder="Confirm Password">
                                        <label for="floatingPassword">Confirm Password</label>
                                      </div>
                                </div>
                                <div class="mb-3 form-check">
                                  <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                  <label class="form-check-label" for="exampleCheck1">I agree the <a href="#">Terms and Conditions</a></label>
                                </div>
                                <div class="d-grid">
                                <button type="submit" class="btn btn-primary m-b-xs">Register</button>
                            </div>
                              </form>
                              <div class="authent-login">
                                  <p>Already have an account? <a href="{{asset('login.html')}}">Sign in</a></p>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         
        
        <!-- Javascripts -->
        <script src="{{asset('../../assets/plugins/jquery/jquery-3.4.1.min.js')}}"></script>
        <script src="{{asset('https://unpkg.com/@popperjs/core@2')}}"></script>
        <script src="{{asset('../../assets/plugins/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('https://unpkg.com/feather-icons')}}"></script>
        <script src="{{asset('../../assets/plugins/perfectscroll/perfect-scrollbar.min.js')}}"></script>
    </body>
</html>