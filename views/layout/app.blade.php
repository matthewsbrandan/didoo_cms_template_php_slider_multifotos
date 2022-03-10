<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>{{ $page_config->title ?? '' }}</title>
  <!-- Fonts -->
  <link rel="shortcut icon" href="{{ $page_config->icon ?? '' }}" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
  <meta name="description" content="{{ $page_config->metadescription ?? '' }}">
  <link href="{{ asset('css/global.css') }}" rel="stylesheet"/>
  @yield('head')
</head>
<body class="antialiased">
  <main>
    @yield('content')
  </main>
  <script type="text/javascript" src="{{ asset('assets/js/jquery.min.js', true) }}"></script>
  @yield('scripts')
</body>
</html>