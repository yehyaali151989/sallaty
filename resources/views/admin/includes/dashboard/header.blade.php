<nav class="header-navbar navbar-expand-md navbar navbar-with-menu navbar-without-dd-arrow fixed-top navbar-semi-light bg-info navbar-shadow">
  <div class="navbar-wrapper">
    <div class="navbar-header">
      <ul class="nav navbar-nav flex-row">
        <li class="nav-item mobile-menu d-md-none mr-auto">
          <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
            <i class="ft-menu font-large-1"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="navbar-brand" href="index.html">
            <img class="brand-logo" alt="{{ __('mine.sallaty admin logo') }}" src="{{ asset('admin/app-assets/images/logo/sallaty-logo.png') }}">
            <h3 class="brand-text">{{ __('mine.Sallaty Admin') }}</h3>
          </a>
        </li>
        <li class="nav-item d-md-none">
          <a class="nav-link open-navbar-container" data-toggle="collapse" data-target="#navbar-mobile">
            <i class="la la-ellipsis-v"></i>
          </a>
        </li>
      </ul>
    </div>
    <div class="navbar-container content">
      <div class="collapse navbar-collapse" id="navbar-mobile">
        <ul class="nav navbar-nav mr-auto float-left">
          <li class="nav-item d-none d-md-block">
            <a class="nav-link nav-menu-main menu-toggle hidden-xs" href="#">
              <i class="ft-menu"></i>
            </a>
          </li>
          <li class="nav-item d-none d-md-block">
            <a class="nav-link nav-link-expand" href="#">
              <i class="ficon ft-maximize"></i>
            </a>
          </li>
          <li class="nav-item nav-search">
            <a class="nav-link nav-link-search" href="#">
              <i class="ficon ft-search"></i>
            </a>
            <div class="search-input">
              <input class="input" type="text" placeholder="{{ __('mine.Search...') }}">
            </div>
          </li>
        </ul>
        <ul class="nav navbar-nav float-right">
          <li class="dropdown dropdown-user nav-item">
            <a class="dropdown-toggle nav-link dropdown-user-link" href="#" data-toggle="dropdown">
              <span class="mr-1">
                {{-- {{ __('mine.Hello,') }} --}}
                {{-- <span class="user-name text-bold-700">{{ Auth::user()->name }}</span> --}}
                <span class="user-name text-bold-700">{{auth('admin')->user()->name }}</span>
                {{-- <span class="user-name text-bold-700">yehya</span> --}}
              </span>
              <span class="avatar avatar-online">
                <img src="{{ asset('admin/app-assets/images/yehya.jpg') }}" alt="{{ __('mine.avatar') }}">
                <i></i>
              </span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="{{ route('edit.profile.admin') }}">
                <i class="ft-user"></i> 
                {{ __('mine.Edit Profile') }}
              </a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{ route('admin.logout') }}">
                <i class="ft-power"></i> 
                {{ __('mine.Logout') }}
              </a>
            </div>
          </li>


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

          
          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
              <i class="ficon ft-bell"></i>
              <span class="badge badge-pill badge-default badge-danger badge-default badge-up badge-glow">5</span>
            </a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0">
                  <span class="grey darken-2">{{ __('mine.Notifications') }}</span>
                </h6>
                <span class="notification-tag badge badge-default badge-danger float-right m-0">5</span>
              </li>
              <li class="scrollable-container media-list w-100">
                <a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left align-self-center">
                      <i class="ft-plus-square icon-bg-circle bg-cyan"></i>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">{{ __('mine.You have new order!') }}</h6>
                      <p class="notification-text font-small-3 text-muted">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                      <small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">30 minutes ago</time>
                      </small>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-menu-footer">
                <a class="dropdown-item text-muted text-center" href="javascript:void(0)">{{ __('mine.Read all notifications') }}</a>
              </li>
            </ul>
          </li>
          <li class="dropdown dropdown-notification nav-item">
            <a class="nav-link nav-link-label" href="#" data-toggle="dropdown">
              <i class="ficon ft-mail"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-media dropdown-menu-right">
              <li class="dropdown-menu-header">
                <h6 class="dropdown-header m-0">
                  <span class="grey darken-2">{{ __('mine.Messages') }}</span>
                </h6>
                <span class="notification-tag badge badge-default badge-warning float-right m-0">4</span>
              </li>
              <li class="scrollable-container media-list w-100">
                <a href="javascript:void(0)">
                  <div class="media">
                    <div class="media-left">
                      <span class="avatar avatar-sm avatar-online rounded-circle">
                        <img src="{{ asset('admin/app-assets/images/yehya.jpg') }}" alt="{{ __('mine.avatar') }}">
                        <i></i>
                      </span>
                    </div>
                    <div class="media-body">
                      <h6 class="media-heading">Margaret Govan</h6>
                      <p class="notification-text font-small-3 text-muted">I like your portfolio, let's start.</p>
                      <small>
                        <time class="media-meta text-muted" datetime="2015-06-11T18:29:20+08:00">Today</time>
                      </small>
                    </div>
                  </div>
                </a>
              </li>
              <li class="dropdown-menu-footer">
                <a class="dropdown-item text-muted text-center" href="javascript:void(0)">{{ __('mine.Read all messages') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </div>
  </div>
</nav>