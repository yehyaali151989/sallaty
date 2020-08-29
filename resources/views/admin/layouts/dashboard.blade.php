<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">
<head>

  @include('admin.includes.dashboard.meta')

  <title>@yield('title')</title>

  @include('admin.includes.dashboard.styles')

</head>
<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click" data-menu="vertical-menu" data-col="2-columns">
  
  @include('admin.includes.dashboard.header')

  @include('admin.includes.dashboard.sidebar')


  @yield('content')

  @include('admin.includes.dashboard.footer')

  @include('admin.includes.dashboard.scripts')

</body>
</html>