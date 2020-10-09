<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" type="text/css" media="screen"  href="{{ asset('css/site.css') }}"><link rel="stylesheet" type="text/css" media="screen"  href="{{ asset('css/mimo.css') }}"><link rel="stylesheet" type="text/css" media="screen" href="{{ asset('content/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/font-awesome.min.css') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="{{ asset('css/dataTables.bootstrap4.min.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Black Ops One' rel='stylesheet'>
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
</head>
<nav class="navbar navbar-dark bg-tcs sticky-top">
    <a class="navbar-brand" href="#"><strong class="strong">ミモバイタル・データシステム</strong></a>
</nav>
<body class="d-flex flex-column maincolor">
    <main class="container-fluid flex-fill maincolor">
        <div id="content" style="opacity: 1;">
            @yield('content')
        </div>
    </main>
</body>
<footer class="footernavbar sticky-top footercolor">
      <p class="alignleft testfont">OCC</p>
      <p class="alignright">Copyright@ OCC Corporation. All Rights Reserved</p>
</footer>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script>
   jQuery(".demoTooltip").toolTip()
</script>
<script src="{{ asset('js/jquery/jquery-2.1.1.min.js') }}" ></script>
<script src="{{ asset('js/app.config.js') }}"></script>
<script src="{{ asset('js/plugin/jquery-touch/jquery.ui.touch-punch.min.js') }}"></script>
<script src="{{ asset('js/bootstrap/bootstrap.min.js') }}"></script> 
<script src="{{ asset('js/jquery/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('js/jquery/dataTables.bootstrap4.min.js') }}"></script>
<script type="text/javascript"> 
    $(document).ready(function () {
    $('#dtBasicExample').DataTable({
      "paging": true ,// false to disable pagination (or any other option)
      "searching": false,
      "iDisplayLength": 5
    });
  });
</script>
</html>
