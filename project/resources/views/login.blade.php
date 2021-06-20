<!DOCTYPE html>
<html>
 <head>
  <title>KAKOTORA</title>
  <link href="{{ asset('loginasset/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('loginasset/css/style.css') }}" rel="stylesheet">
  <link rel="shortcut icon" href="{{ asset('/images/aski.png') }}">
  <style type="text/css">
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid rgb(46, 46, 46);
   }
  </style>
 </head>
 <body style="background-color: rgba(0, 0, 0, 0.904); color:white;">
    <div class="container">
        <h3 class="text-center" style="margin-top:25px">ASKI - KAKOTORA DATA</h3>
    </div>
    <div class="container box" style="margin-top: 100px; border-radius:10px; padding-top:10px; background-color: rgba(0, 0, 0, 0.603);">
    <h3 align="center">LOGIN</h3><br />

    @if(isset(Auth::user()->name))
        <script>window.location="/kakotora-home";</script>
    @endif

    @if ($message = Session::get('error'))
    <div class="alert alert-danger alert-block">
        <button type="button" class="close" data-dismiss="alert">×</button>
        <strong>{{ $message }}</strong>
    </div>
    @endif

    @if (count($errors) > 0)
        <div class="alert alert-danger">
        <ul>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </ul>
        </div>
    @endif

    <form method="post" action="{{ url('/checklogin') }}">
        {{ csrf_field() }}
        <div class="form-group">
        <label>Enter Username</label>
        <input type="text" name="name" class="form-control" />
        </div>
        <div class="form-group">
        <label>Enter Password</label>
        <input type="password" name="password" class="form-control" />
        </div>
        <div class="form-group">
        <input type="submit" name="login" class="btn btn-primary" value="Login" />
        </div>
    </form>
    </div>

  <script src="{{asset('loginasset/js/jquery.js')}}"></script>
  <script src="{{asset('loginasset/js/popper.js')}}"></script>
  <script src="{{asset('loginasset/js/bootstrap.js')}}"></script>
 </body>
</html>
