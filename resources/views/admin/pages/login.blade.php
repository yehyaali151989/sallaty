@extends('admin.layouts.login')

@section('title', 'Admin Login | Sallaty')
    
@section('content')
  <div class="app-content content">
    <div class="content-wrapper">
      <div class="content-header row">
      </div>
      <div class="content-body">
        <section class="flexbox-container">
          <div class="col-12 d-flex align-items-center justify-content-center">
            <div class="col-md-4 col-10 box-shadow-2 p-0">
              <div class="card border-grey border-lighten-3 px-1 py-1 m-0">
                <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon @if(app()->getLocale() == 'ar') flag-icon-sy @endif flag-icon-gb"></i>
                    <span class="selected-language"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                    <a class="dropdown-item en" href="#"><i class="flag-icon flag-icon-gb"></i> English</a>
                    <a class="dropdown-item ar" href="#"><i class="flag-icon flag-icon-sy"></i> العربية</a>
                  </div>
                </li>
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="{{ asset('admin/app-assets/images/logo/sallaty-logo.png') }}" alt="sallaty logo">
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>{{ __('mine.Login Using Account Details') }}</span>
                  </p>
                  <div class="card-body">
                    <form class="form-horizontal" action="index.html" novalidate>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" class="form-control" id="user-name" placeholder="{{ __('mine.Enter Email') }}" required>
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" class="form-control" id="user-password" placeholder="{{ __('mine.Enter Password') }}" required>
                        <div class="form-control-position">
                          <i class="la la-key"></i>
                        </div>
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember">
                            <label for="remember-me">{{ __('mine.Remember Me') }}</label>
                          </fieldset>
                        </div>
                        <div class="col-md-6 col-12 float-sm-left text-center text-sm-right">
                          <a href="recover-password.html" class="card-link">
                            {{ __('mine.Forgot Password?') }}
                          </a>
                        </div>
                      </div>
                      <button type="submit" class="btn btn-outline-info btn-block">
                        <i class="ft-unlock"></i>
                        {{ __('mine.Login') }}
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
  </>

@endsection
