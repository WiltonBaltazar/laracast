@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')

<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>{{$article->title}}</h2>
			</div>
			<p><img src="/images/banner.jpg" alt="" class="image image-full" /> </p>
			{{$article->body}}

			<p>
				@foreach ($article->tags as $tag)
			<a href="{{ route('articles.index',['tag'=>$tag->name]) }}" class="p-1 my-2 bg-light text-dark">{{$tag->name}}</a>
				@endforeach
			</p>

		</div>
	</div>
</div>
@endsection