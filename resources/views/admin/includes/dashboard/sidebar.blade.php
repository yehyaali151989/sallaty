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

      {{-- Start Main Categories  --}}
      <li class=" nav-item">
        <a href="#">
          <i class="ft-layers"></i>
          <span class="menu-title" data-i18n="nav.dash.main">{{ __('Categories') }}</span>
          <span id="span-count" class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Category::count() }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('main_categories.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Show All') }}</a>
          </li>
          <li class="">
            <a class="menu-item" href="{{ route('main_categories.create') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Add New One') }}</a>
          </li>
        </ul>
      </li>
      {{-- End Main Categories  --}}

      {{-- Start Sub Categories  --}}
      {{-- <li class=" nav-item">
        <a href="#">
          <i class="ft-settings"></i>
          <span class="menu-title" data-i18n="nav.dash.main">{{ __('mine.Sub Categories') }}</span>
          <span id="span-count" class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Category::child()->count() }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('sub_categories.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Show All') }}</a>
          </li>
          <li class="">
            <a class="menu-item" href="{{ route('sub_categories.create') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Add New One') }}</a>
          </li>
        </ul>
      </li> --}}
      {{-- End Sub Categories  --}}

      {{-- Start Brands  --}}
      <li class=" nav-item">
        <a href="#">
          <i class="ft-bookmark"></i>
          <span class="menu-title" data-i18n="nav.dash.main">{{ __('mine.Brands') }}</span>
          <span id="span-count" class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Brand::count() }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('brands.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Show All') }}</a>
          </li>
          <li class="">
            <a class="menu-item" href="{{ route('brands.create') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Add New One') }}</a>
          </li>
        </ul>
      </li>
      {{-- End Brands  --}}

      {{-- Start Tags  --}}
      <li class=" nav-item">
        <a href="#">
          <i class="ft-tag"></i>
          <span class="menu-title" data-i18n="nav.dash.main">{{ __('mine.Tags') }}</span>
          <span id="span-count" class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Tag::count() }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('tags.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Show All') }}</a>
          </li>
          <li class="">
            <a class="menu-item" href="{{ route('tags.create') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Add New One') }}</a>
          </li>
        </ul>
      </li>
      {{-- End Tags  --}}

      {{-- Start Products  --}}
      <li class=" nav-item">
        <a href="#">
          <i class="ft-server"></i>
          <span class="menu-title" data-i18n="nav.dash.main">{{ __('mine.Products') }}</span>
          <span id="span-count" class="badge badge badge-info badge-pill float-right mr-2">{{ App\Models\Product::count() }}</span>
        </a>
        <ul class="menu-content">
          <li>
            <a class="menu-item" href="{{ route('products.index') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Show All') }}</a>
          </li>
          <li class="">
            <a class="menu-item" href="{{ route('products.general.create') }}" data-i18n="nav.templates.vert.classic_menu">{{ __('mine.Add New One') }}</a>
          </li>
        </ul>
      </li>
      {{-- End Products  --}}

      {{-- Start Products Attributes --}}
      <li class="nav-item">
        <a href="">
          <i class="la la-male"></i>
          <span class="menu-title" data-i18n="nav.dash.main">خصائص المنتج  </span>
          <span  class="badge badge badge-success badge-pill float-right mr-2"> </span>
        </a>
        <ul class="menu-content">
            <li class="active"><a class="menu-item" href="{{route('admin.attributes')}}"
                                  data-i18n="nav.dash.ecommerce"> عرض الكل </a>
            </li>
            <li><a class="menu-item" href="{{route('admin.attributes.create')}}" data-i18n="nav.dash.crypto">أاضافة
                    جديدة </a>
            </li>
        </ul>
    </li>
      {{-- End Products  Attributes--}}

      

    </ul>
  </div>
</div>
