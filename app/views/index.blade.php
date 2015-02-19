@extends('layouts.main')

@section('noticias')
  <div class="noticias">
    <img src="{{ URL::asset('img/noticias.jpg') }}" alt="" usemap="#noticias">
    <map name="noticias">
      <area shape="rect" coords="0,0,600,130" href="{{ URL::to('noticia','las-ventajas-de-leer') }}" alt="Primera">
      <area shape="rect" coords="0,255,600,130" href="http://youtube.com" alt="Segunda">
      <area shape="rect" coords="0,368,600,255" href="http://pagodabox.com" alt="Tercera">
    </map>
    <!--<iframe src="noticias2" height="369px" width="570px" frameborder="0"></iframe>-->
  </div>
@stop