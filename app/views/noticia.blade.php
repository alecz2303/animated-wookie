@extends('layouts.main')

@section('noticias')
	<div class="noticias2">
  		<iframe src="{{ URL::to($noticia) }}" height="450px" width="570px" frameborder="0" scrolling="auto"></iframe>
  	</div>
@stop