<!DOCTYPE html>
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta http-equiv="x-ua-compatible" content="ie=edge" />
        <title>Material Design for Bootstrap</title>
        <!-- MDB icon -->
        <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
        <!-- Google Fonts Roboto -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
        <!-- MDB -->
        <link rel="stylesheet" href="{{ asset('css/bootstrap-login-form.min.css')}}" />
      </head>

      <body>
        <!-- Start your project here-->

        <style>
          .divider:after,
          .divider:before {
            content: "";
            flex: 1;
            height: 1px;
            background: #eee;
          }
          .h-custom {
            height: calc(100% - 73px);
          }
          @media (max-width: 450px) {
            .h-custom {
              height: 100%;
            }
          }
        </style> 
<nav class="navbar">
    <div class="dropdown" >
        <button style="margin-left: 1150px; background: #1266f1; width: 170px;" class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
         data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
         {{ __('Language') }}
        </button>
        <div style="margin-left: 1160px;" class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            @foreach (LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
            <li>
                <a rel="alternate" hreflang="{{ $localeCode }}" class="dropdown-item"
                    href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                    {{ $properties['native'] }}
                </a>
            </li>
        @endforeach
        </div>
      </div>
    </nav>
        <section class="vh-100">
          <div class="container-fluid h-custom">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid"
                  alt="Sample image">
              </div>
              <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                  <!-- Email input -->
                  <div class="form-outline mb-4">
                    <input type="email" id="form3Example3" class="form-control form-control-lg"
                      placeholder="Enter a valid email address" class="form-control @error('password') is-invalid @enderror"
                      name="email" value="{{ old('email') }}" required autocomplete="email"
                      autofocus />
                      @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    <label class="form-label" for="form3Example3">{{ __('Email address')}}</label>
                  </div>

                  <!-- Password input -->
                  <div class="form-outline mb-3">
                    <input type="password" id="form3Example4" class="form-control form-control-lg"
                    name="password" placeholder="Enter password" class="form-control @error('password') is-invalid @enderror"
                    required autocomplete="current-password"/>
                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
                    <label class="form-label" for="form3Example4">{{ __('Password')}}</label>
                  </div>

                  <div class="d-flex justify-content-between align-items-center">
                    <!-- Checkbox -->
                    <div class="form-check mb-0">
                      <input class="form-check-input me-2" type="checkbox" name="remember" value="" id="form2Example3"
                      tabindex="3" {{ old('remember') ? 'checked' : '' }} />
                      <label class="form-check-label" for="form2Example3">
                        {{ __('Remember Me') }}
                      </label>
                    </div>
                    @if (Route::has('password.request'))
                  <a
                      href="{{ route('password.request') }}">
                      {{ __('Forgot Your Password?') }}
                  </a>
              @endif
                  </div>

                  <div class="text-center text-lg-start mt-4 pt-2">
                    <button type="submit" name="login-submit" class="btn btn-primary btn-lg"
                    tabindex="4" style="padding-left: 2.5rem; padding-right: 2.5rem;">{{ __('Login') }}</button>
                    <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/admin_register"
                        class="link-danger"> {{ __('Register') }}</a></p>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </section>
        <!-- End your project here-->

        <!-- MDB -->
        <script type="text/javascript" src="{{ asset('js/mdb.min.js')}}"></script>
        <!-- Custom scripts -->
        <script type="text/javascript"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.0-alpha1/js/bootstrap.bundle.min.js"></script>
        <script>
            $(function(){
            $('.dropdown-toggle').dropdown();
        });
        </script>

      </body>

    </html>
