@extends('layouts.noticia')

@section('content')


<div class="text-justify noticia">
	{{ $post->content() }}
	<br>
	<span class="label round radius">Posted {{{ $post->date() }}}</span>
</div>

@stop