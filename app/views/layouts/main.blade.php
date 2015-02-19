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

  <!-- If you are using the gem version, you need this only -->
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  <script src="{{ asset('foundation/js/vendor/modernizr.js') }}"></script>

</head>
<body>
<div class="container">
  <div class="row">
    <div class="large-7 columns">
      <div class="medium-2 large-4 columns" align="center">
        <img src="{{ URL::asset('img/LOGOS/BUENAS_NOTICIAS.png') }}" alt="">
      </div>
      <div class="medium-3 large-6 columns" align="center">
        <img src="{{ URL::asset('img/LOGOS/IESCH.png') }}" alt="">
      </div>
      <div class="medium-2 large-2 columns" align="center">
        <img src="{{ URL::asset('img/LOGOS/RADIO_IESCH.png') }}" alt="" width="58px" height="58px">
      </div>
      <div class="row">
        <div class="medium-12 large-12 columns text-center">
          <div class="bienvenida">
            <a href="{{ URL::to('') }}">
              <img class="boton-menu" src="{{ URL::asset('img/BOTONES/INICIO_NORMAL.png') }}" alt="" width="70px" onmouseover="hover_inicio(this);" onmouseout="unhover_inicio(this);">
            </a>
            <a href="{{ URL::to('noticia/noticias') }}">
              <img class="boton-menu" src="{{ URL::asset('img/BOTONES/NOTICIAS_NORMAL.png') }}" alt="" width="98px" onmouseover="hover_noticias(this);" onmouseout="unhover_noticias(this);">
            </a>
            <a href="#">
              <img class="boton-menu" src="{{ URL::asset('img/BOTONES/CULTURA_NORMAL.png') }}" alt="" width="95px" onmouseover="hover_cultura(this);" onmouseout="unhover_cultura(this);">
            </a>
            <a href="#">
              <img class="boton-menu" src="{{ URL::asset('img/BOTONES/DESCARGAS_NORMAL.png') }}" alt="" width="121px" onmouseover="hover_descargas(this);" onmouseout="unhover_descargas(this);">
            </a>
            <a href="#">
              <img class="boton-menu" src="{{ URL::asset('img/BOTONES/RADIO.jpg') }}" alt="" width="60px" onmouseover="hover_radio(this);" onmouseout="unhover_radio(this);">
            <a href="#">
              <img class="boton-menu" src="{{ URL::asset('img/PLAY_NORMAL.png') }}" alt="" width="45px" onmouseover="hover_play(this);" onmouseout="unhover_play(this);">
            </a>
            
              @yield('noticias')
          
          </div>
        </div>
      </div>
      <div class="row">
        <div class="medium-12 large-12 columns text-center">
          <a href="#">
            <img class="boton-menu" src="{{ URL::asset('img/BOTONES/DIRECTORIO_NORMAL.png') }}" alt="" width="90px" onmouseover="hover_directorio(this);" onmouseout="unhover_directorio(this);">
          </a>
          <img class="boton-menu" src="{{ URL::asset('img/BOTONES/RAYO.png') }}" alt="" width="20px">
          <a href="#">
            <img class="boton-menu" src="{{ URL::asset('img/BOTONES/CONSEJO_EDITORIAL_NORMAL.png') }}" alt="" width="130px" onmouseover="hover_consejo_editorial(this);" onmouseout="unhover_consejo_editorial(this);">
          </a>
          <img class="boton-menu" src="{{ URL::asset('img/BOTONES/RAYO.png') }}" alt="" width="20px">
          <a href="#">
            <img class="boton-menu" src="{{ URL::asset('img/BOTONES/COLABORADORES_NORMAL.png') }}" alt="" width="110px" onmouseover="hover_colaboradores(this);" onmouseout="unhover_colaboradores(this);">
          </a>
          <img class="boton-menu" src="{{ URL::asset('img/BOTONES/RAYO.png') }}" alt="" width="20px">
          <a href="#">
            <img class="boton-menu" src="{{ URL::asset('img/BOTONES/CONTACTANOS_NORMAL.png') }}" alt="" width="95px" onmouseover="hover_contactanos(this);" onmouseout="unhover_contactanos(this);">
          </a>
        </div>
      </div>
      <div class="row">
        <div class="medium-12 large-12 columns text-center">
          <img src="{{ URL::asset('img/BOTONES/LIDERES_INFORMANDO.png') }}" alt="" class="boton-menu">
        </div>
      </div>
    </div>
    <div class="large-5 columns">
      <div class="revista">
        <img src="{{ URL::asset('img/REVISTAN12.jpg') }}" alt="" height="600px">
      </div>
      <a href="http://issuu.com/kerberosits/docs/revista_no12_buenas_noticias" target="_blak">
        <img class="small" src="{{ URL::asset('img/LEER_NORMAL.png') }}" width="100px" onmouseover="hover_leer(this);" onmouseout="unhover_leer(this);">
      </a>

    </div>
  </div>
</div>


  <script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
  <script src="{{ asset('foundation/js/foundation.min.js') }}"></script>

  <!--Botones cambios-->
  <script>
    //Boton inicio
    function hover_inicio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/INICIO_CLICK.png') }}");
    }
    function unhover_inicio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/INICIO_NORMAL.png') }}");
    }
    //Boton noticias
    function hover_noticias(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/NOTICIAS_CLICK.png') }}");
    }
    function unhover_noticias(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/NOTICIAS_NORMAL.png') }}");
    }
    //Boton cultura
    function hover_cultura(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CULTURA_CLICK.png') }}");
    }
    function unhover_cultura(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CULTURA_NORMAL.png') }}");
    }
    //Boton descargas
    function hover_descargas(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/DESCARGAS_CLICK.png') }}");
    }
    function unhover_descargas(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/DESCARGAS_NORMAL.png') }}");
    }
    //Boton radio
    function hover_radio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/RADIO.jpg') }}");
    }
    function unhover_radio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/RADIO.jpg') }}");
    }
    //Boton play
    function hover_play(element) {
        element.setAttribute('src', "{{ URL::asset('img/PLAY_CLICK.png') }}");
    }
    function unhover_play(element) {
        element.setAttribute('src', "{{ URL::asset('img/PLAY_NORMAL.png') }}");
    }
    //Boton directorio
    function hover_directorio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/DIRECTORIO_CLICK.png') }}");
    }
    function unhover_directorio(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/DIRECTORIO_NORMAL.png') }}");
    }
    //Boton consejo editorial
    function hover_consejo_editorial(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CONSEJO_EDITORIAL_CLICK.png') }}");
    }
    function unhover_consejo_editorial(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CONSEJO_EDITORIAL_NORMAL.png') }}");
    }
    //Boton colaboradores
    function hover_colaboradores(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/COLABORADORES_CLICK.png') }}");
    }
    function unhover_colaboradores(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/COLABORADORES_NORMAL.png') }}");
    }
    //Boton contactanos
    function hover_contactanos(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CONTACTANOS_CLICK.png') }}");
    }
    function unhover_contactanos(element) {
        element.setAttribute('src', "{{ URL::asset('img/BOTONES/CONTACTANOS_NORMAL.png') }}");
    }
    //Boton leer
    function hover_leer(element) {
        element.setAttribute('src', "{{ URL::asset('img/LEER_CLICK.png') }}");
    }
    function unhover_leer(element) {
        element.setAttribute('src', "{{ URL::asset('img/LEER_NORMAL.png') }}");
    }
  </script>

  <script>
    $(document).foundation();
  </script>
</body>
</html>