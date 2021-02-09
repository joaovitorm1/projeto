<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    @yield('metadados')

    <title> @yield('titulo-aplicativo') | @yield('titulo-pagina')</title>

    <!-- CSS PADRÃO -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href={{asset("dist/css/signika-bold.ttf")}}>
    <link rel="stylesheet" href={{asset("dist/css/signa-bold-normal.ttf")}}>
    <link rel="stylesheet" href={{asset("plugins/fontawesome-free/css/all.min.css")}}>
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Toastr -->
    <link rel="stylesheet" href={{asset("dist/css/adminlte.min.css")}}>
    <!-- CSS ESPECIFICO DA PÁGINA -->
    <link rel="stylesheet" href={{asset("dist/css/head.css")}}>
   @yield('css-pagina')

</head>
   @component('componentes.topBar') @endcomponent
      @yield('conteudo-principal')

   @component('componentes.footer') @endcomponent

      <script src={{asset("plugins/jquery/jquery.min.js")}}></script>
      <script src={{asset("plugins/jquery-ui/jquery-ui.min.js")}}></script>
      <script>
         $.widget.bridge('uibutton', $.ui.button)
      </script>
      <script src={{asset("plugins/bootstrap/js/bootstrap.bundle.min.js")}}></script>
      <!-- Toastr -->
      <script src={{asset("/plugins/toastr/toastr.min.js")}}></script>
      <script src={{asset("/js/adminlte.min.js")}}></script>
      <!-- CSS ESPECIFICO DA PÁGINA -->
   @yield('js-pagina')

</body>
</html>