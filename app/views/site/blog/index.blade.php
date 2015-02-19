@extends('layouts.noticia')

{{-- Content --}}
@section('content')



@foreach ($posts as $post)

<ul class="pricing-table"> 
	<li class="title">
		<h4>
			<strong>
				<a href="{{{ $post->url() }}}">{{ String::title($post->title) }}</a>
			</strong>
		</h4>
	</li> 
	<li class="bullet-item">
		<p>{{ String::tidy(Str::limit($post->content, 200)) }}</p>
		<a href="{{{ $post->url() }}}">Leer más</a>
	</li> 
	<li class="bullet-item">
		<p>
			<span class="fa fa-user"></span> by <span class="muted">{{{ $post->author->username }}}</span>
			| <span class="fa fa-calendar"></span> <!--Sept 16th, 2012-->{{{ $post->date() }}}
		</p>
	</li> 
</ul>

<hr />
@endforeach

{{ $posts->links() }}

@stop
