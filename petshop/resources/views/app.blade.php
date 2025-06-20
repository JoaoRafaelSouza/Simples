<!--
    <!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Petshop CRM</title>

    {{-- Link para o CSS compilado do Vue --}}
    <link href="{{ mix('css/app.css') }}" rel="stylesheet" />
</head>
<body>
    <div id="app"></div> {{-- Vue mount point --}}

    {{-- Script JS compilado pelo Vue --}}
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html> -->

{{-- <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Login</title>
  @vite('resources/js/app.js')
</head>
<body>
  <div id="app"></div>
</body>
</html> --}}

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 text-gray-900">
    <div id="app"></div>
</body>
</html>