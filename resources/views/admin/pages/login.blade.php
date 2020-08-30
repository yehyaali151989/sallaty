@extends('admin.layouts.login')

@section('title')
  {{ __('mine.Admin Login | Sallaty') }}
@endsection
    
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
                {{-- langs  --}}
                <li class="dropdown dropdown-language nav-item">
                  <a class="dropdown-toggle nav-link" id="dropdown-flag" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="flag-icon @if(app()->getLocale() == 'ar') flag-icon-sy @endif flag-icon-gb"></i>
                    <span class="selected-language"></span>
                  </a>
                  <div class="dropdown-menu" aria-labelledby="dropdown-flag">
                    @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                      <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        <i class="flag-icon @if($properties['native'] === 'العربية') flag-icon-sy @endif flag-icon-gb"></i>
                        {{ $properties['native'] }}
                      </a>
                    @endforeach
                  </div>
                </li>
                {{-- langs --}}
                <div class="card-header border-0">
                  <div class="card-title text-center">
                    <img src="{{ asset('admin/app-assets/images/logo/sallaty-logo.png') }}" alt="sallaty logo">
                  </div>
                </div>
                <div class="card-content">
                  <p class="card-subtitle line-on-side text-muted text-center font-small-3 mx-2 my-1">
                    <span>{{ __('mine.Login Using Account Details') }}</span>
                  </p>
                  @include('admin.includes.alerts.errors')
                  @include('admin.includes.alerts.success')
                  <div class="card-body">
                    <form class="form-horizontal" action="{{ route('admin.post.login') }}" method="POST">
                      @csrf
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="text" name="email" class="@error('email') is-invalid @enderror form-control" value="{{old('email')}}" id="email" placeholder="{{ __('mine.Enter Email') }}">
                        <div class="form-control-position">
                          <i class="ft-user"></i>
                        </div>
                        @error('email')
                          <span class="text-danger" style="display:block; margin-bottom: 10px">{{$message}}</span>
                        @enderror
                      </fieldset>
                      <fieldset class="form-group position-relative has-icon-left">
                        <input type="password" name="password" class="@error('email') is-invalid @enderror form-control" value="{{old('password')}}" id="password" placeholder="{{ __('mine.Enter Password') }}">
                        <div class="form-control-position">
                          {{-- <i class="la la-key"></i> --}}
                          <i class="ft-lock"></i>
                        </div>
                        @error('password')
                          <span class="text-danger" style="display:block; margin-bottom: 10px">{{$message}}</span>
                        @enderror
                      </fieldset>
                      <div class="form-group row">
                        <div class="col-md-6 col-12 text-center text-sm-left">
                          <fieldset>
                            <input type="checkbox" id="remember-me" class="chk-remember" name="remember_me">
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
