<div id="sidebar" class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true" id="sidebar">
  <div class="main-menu-content">
    <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
      <li class="nav-item active">
        <a href="{{ route('admin.dashboard') }}">
          {{-- <i class="la la-mouse-pointer"></i> --}}
          <i class="ft-home"></i>
          <span class="menu-title" data-i18n="nav.add_on_drag_drop.main">{{ __('mine.Home') }}</span>
        </a>
      </li>

        {{-- <li class="nav-item">
          <a href="">
            <i class="la la-home"></i>
            <span class="menu-title" data-i18n="nav.dash.main">Languages</span>
            <span class="badge badge badge-info badge-pill float-right mr-2"></span>
          </a>
            <ul class="menu-content">
                <li class="">
                    <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">Show All</a>
                </li>
                <li>
                    <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                        Add new language 
                    </a>
                </li>
            </ul>
        </li> --}}

        {{-- <li class="nav-item">
            <a href="">
                <i class="la la-group"></i>
                <span class="menu-title" data-i18n="nav.dash.main">Main Categories</span>
                <span class="badge badge badge-danger badge-pill float-right mr-2"></span>
            </a>
            <ul class="menu-content">
                <li class="">
                    <a class="menu-item" href="" data-i18n="nav.dash.ecommerce">Show All</a>
                </li>
                <li>
                    <a class="menu-item" href="" data-i18n="nav.dash.crypto">
                        Add new category 
                    </a>
                </li>
            </ul>
        </li> --}}

      {{-- Start Settings  --}}
      <li class="nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="{{ route('edit.shippings.methods', 'free') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="{{ route('edit.shippings.methods', 'inner') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="{{ route('edit.shippings.methods', 'outer') }}" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      {{-- End Settings  --}}
      {{-- =============================================================================================  --}}
      {{-- delete after  --}}
      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>

      <li class=" nav-item">
        <a href="#">
          {{-- <i class="la la-television"></i> --}}
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.templates.main">{{ __('mine.Settings') }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="#" data-i18n="nav.templates.vert.main">{{ __('mine.Shipping Methods') }}</a>
            <ul class="menu-content">
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Free Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Local Shipping') }}</a>
              </li>
              <li>
                <a class="menu-item" href="#" data-i18n="nav.templates.vert.compact_menu">{{ __('mine.Outer Shipping') }}</a>
              </li>
            </ul>
          </li>
        </ul>
      </li>
      {{-- delete after  --}}
    </ul>
  </div>
</div>
