<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="{{ app()->getLocale() == 'ar' ? 'rtl' : 'ltr' }}">

<head>
  @include('admin.includes.login.meta')
  <title>@yield('title')</title>
  @include('admin.includes.login.styles')
</head>

<body class="vertical-layout vertical-menu 1-column  bg-full-screen-image menu-expanded blank-page blank-page" data-open="click" data-menu="vertical-menu" data-col="1-column">
  
  @yield('content')

  @include('admin.includes.login.scripts')
  
</body>

</html>