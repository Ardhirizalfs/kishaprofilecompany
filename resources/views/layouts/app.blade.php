<!DOCTYPE html>
<html lang="id">
<head>
  
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

  <title>@yield('title', 'Kisha Accounting')</title>
  <link rel="icon" href="{{ asset('favicon2.png') }}" type="image/png">
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <!-- Bootstrap CSS -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<!-- Bootstrap JS (untuk modal) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


  <style>
    html, body {
      height: 100%;
      margin: 0;
    }

    body {
      display: flex;
      flex-direction: column;
    }

    main {
      flex: 1;
    }
  </style>
</head>
<body class="font-sans text-gray-800">
  @include('partials.nav')

  <main>
    @yield('content')
  </main>





  </body>
