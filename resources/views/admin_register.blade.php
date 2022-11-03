<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  <title>admin_register</title>
  <!-- MDB icon -->
  <link rel="icon" href="{{ asset('img/mdb-favicon.ico')}}" type="image/x-icon" />
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" />
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
  <!-- MDB -->
  <link rel="stylesheet" href="{{ asset('css/bootstrap-login-form.min.css')}}" />
</head>

<body>
  <!-- Start your project here-->
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
<section class="vh-100" style="background-color: #eee;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 25px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">{{ __('Sign up')}}</p>
                    <form class="mx-1 mx-md-4" method="POST" action="{{ route('admin_register') }}">
                    @csrf
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">

                      <input type="text" id="form3Example1c" class="form-control" name="name"
                      class="form-control @error('name') is-invalid @enderror" placeholder="{{ __('Username') }}"
                      value="{{ old('name') }}" required autocomplete="name" autofocus/>
                      @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      <label class="form-label" for="form3Example1c">{{ __('Your Name')}}</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                    <input type="email" id="form3Example3c" class="form-control"
                    class="form-control @error('email') is-invalid @enderror"
                        name="email" placeholder="{{ __('Email Address') }}"
                        tabindex="1" class="form-control"
                        value="{{ old('email') }}" required autocomplete="email"/>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                      <label class="form-label" for="form3Example3c">{{ __('Your Email')}}</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4c" class="form-control"
                      class="form-control @error('password') is-invalid @enderror"
                            name="password" tabindex="2" class="form-control"
                            placeholder="{{ __('Password') }}" required
                            autocomplete="new-password"/>
                      @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                      <label class="form-label" for="form3Example4c">{{ __('Password')}}</label>
                    </div>
                  </div>

                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" id="form3Example4cd" class="form-control"
                      name="password_confirmation" tabindex="2" placeholder="{{ __('Confirm Password') }}"
                      required autocomplete="new-password"/>
                      <label class="form-label" for="form3Example4cd">{{ __('Confirm Password') }}</label>
                    </div>
                  </div>
                  <input id="role" type="hidden" class="form-control" name="role" value="admin" >

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button type="submit" name="register-submit"  tabindex="4" class="btn btn-primary btn-lg">{{ __('Register Now') }}</button>
                  </div>
                  <div class="form-check d-flex justify-content-center mb-5">
                    <label class="form-check-label" for="form2Example3"> <a href="/admin_login" class="active"
                      id="login-form-link">{{ __('Login') }}</a>
                    </label>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-registration/draw1.png" class="img-fluid" alt="Sample image">

              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

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
