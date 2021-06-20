<!DOCTYPE html>
<html>
<head>
  <title>KAKOTORA</title>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSRF Token -->
  <meta name="_token" content="{{ csrf_token() }}">

  <link rel="shortcut icon" href="{{ asset('/images/aski.png') }}">

  <!-- plugin css -->
  <link href="{{ asset('/assets/plugins/@mdi/font/css/materialdesignicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.css') }}" rel="stylesheet">

  <!-- end plugin css -->

  @stack('plugin-styles')

  <!-- common css -->
  <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
  {{-- {!! Html::style('css/bootstrap.min.css') !!} --}}
  <!-- end common css -->

  @stack('style')
</head>
<body data-base-url="{{url('/')}}">

  <div class="container-scroller" id="app">
    @include('layout.headerhome')
    <div class="container-fluid page-body-wrapper">
      {{-- @include('layout.sidebar') --}}
      <div class="main-panel">
        <div class="content-wrapper">
          @yield('content')
        </div>
        @include('layout.footer')
      </div>
    </div>
  </div>

  <!-- base js -->
  <script src="{{asset('/js/app.js')}}"></script>
  <script src="{{asset('/assets/plugins/perfect-scrollbar/perfect-scrollbar.min.js')}}"></script>
  <!-- end base js -->

  <!-- plugin js -->
  @stack('plugin-scripts')
  <!-- end plugin js -->

  <!-- common js -->
  <script src="{{asset('/assets/js/off-canvas.js')}}"></script>
  <script src="{{asset('/assets/js/hoverable-collapse.js')}}"></script>
  <script src="{{asset('/assets/js/misc.js')}}"></script>
  <script src="{{asset('/assets/js/settings.js')}}"></script>
  <script src="{{asset('/assets/js/todolist.js')}}"></script>
  <!-- end common js -->
  @yield('js')
  @stack('custom-scripts')
</body>
</html>
