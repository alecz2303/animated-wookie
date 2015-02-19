<!DOCTYPE html>
<!--[if IE 9]><html class="lt-ie10" lang="en" > <![endif]-->
<html class="no-js" lang="en" >

<head>
  <meta charset="utf-8">
  <!-- If you delete this meta tag World War Z will become a reality -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>..:: IESCH ::..</title>

  <!-- If you are using the CSS version, only link these 2 files, you may add app.css to use for your overrides if you like -->
  <link rel="stylesheet" href="{{ asset('foundation/css/normalize.css') }}">
  <link rel="stylesheet" href="{{ asset('foundation/css/foundation.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('font-awesome/css/font-awesome.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">


  <script src="{{ asset('foundation/js/vendor/modernizr.js') }}"></script>

</head>
<body>

  @yield('content')


  <script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('foundation/js/foundation.min.js') }}"></script>

  

  <script>
    $(document).foundation();
  </script>
</body>
</html>