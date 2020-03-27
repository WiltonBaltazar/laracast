@extends('layout')

@section('content')

<div id="wrapper">
	<div id="page" class="container">
        <h1>Latest Articles</h1>
        @forelse ($articles as $article)
            <div id="content">
                <div class="title">
                    <h1><a href="/articles/{{$article->id}}">{{$article->title}}</a></h1>
                </div>
                <p><a href="/articles/{{$article->id}}"><img src="/images/banner.jpg" alt="" class="image image-full" /></a> </p>
                {!!$article->excerpt!!}
            </div>
        @empty
            <p>No relevant articles yet!</p>
        @endforelse
		
	</div>
</div>
@endsection