@include('admin.inc.toppart')
<body class="vertical-layout vertical-menu-modern 2-columns   menu-expanded fixed-navbar"
data-open="click" data-menu="vertical-menu-modern" data-col="2-columns">
  <!-- fixed-top-->
@include('admin.inc.navbar')
@include('admin.inc.sidebar')

@yield('content')

@include('admin.inc.footer')
