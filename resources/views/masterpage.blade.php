<!DOCTYPE html>
<html>
  <head>
  <meta http-equiv="Content-Type" content="text/html;charset=utf-8"/>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{('css/custom.css')}}" >  
    <base href="{{ url('')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{url('images/favicon.png')}}">
    <link href="{{url('css/bootstrap.css')}}" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,700,500italic,100italic,100' rel='stylesheet' type='text/css'>
    <link href="{{url('css/font-awesome.min.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{url('css/flexslider.css')}}" type="text/css" media="screen"/>
    <link href="{{url('css/style.css')}}" rel="stylesheet" type="text/css">

<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js">
</script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js">
</script>

  </head>
  <body>
    <div class="wrapper">

      <div class="clearfix">
      </div>

      <div class="clearfix">
      </div>
      @include('header')
      @yield('content')
      @include('footer')

    <!-- Bootstrap core JavaScript==================================================-->
    <script type="text/javascript" src="js/{{url('jquery-1.10.2.min.js')}}">
    </script>
    <script type="text/javascript" src="{{url('js/bootstrap.min.js')}}">
    </script>
    <script defer src="{{url('js/jquery.flexslider.js')}}">
    </script>
    <script type="text/javascript" src="{{url('js/jquery.carouFredSel-6.2.1-packed.js')}}">
    </script>
    <script type="text/javascript" src="{{url('js/script.min.js')}}" >
    </script>
  </body>

</html>