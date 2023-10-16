<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Super Gestão - @yield('titulo')</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{asset('css/estilo_basico.css')}}">

</head>

<body>
@include('site.layouts._partials.topo') {{--include funciona como o include do php--}}
    @yield('conteudo') {{--yield funciona como o echo do php pegando o conteudo da section--}}
</body>
</html>
