@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>Update Article</h2>
            </div>
            
        <form method="POST" action="/articles/{{$article->id}}">
                @csrf
                @method('PUT')

                <div class="form-group">
                    <label for="">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title" value="{{$article->title}}" aria-describedby="title" placeholder="Title">
                    @error('title')
                            <div class="invalid-feedback" ">
                                <strong>{{$errors->first('title')}}</strong>
                            </div>
                    @enderror
                 </div>
                <div class="form-group">
                    <label for="excerpt">Excertp</label>
                    <textarea class="form-control @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt">{{$article->excerpt}}</textarea>
                    @error('excerpt')
                        <div class="invalid-feedback" ">
                            <strong>{{$errors->first('excerpt')}}</strong>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="body">Body</label>
                    <textarea class="form-control @error('body') is-invalid @enderror" name="body" id="body" rows="3">{{$article->body}}</textarea>
                    @error('body')
                        <div class="invalid-feedback" ">
                            <strong>{{$errors->first('body')}}</strong>
                        </div>
                    @enderror
                </div>
                <button type="submit" class="btn btn-success">Edit</button>
            </form>
            
		</div>
	</div>
</div>
    
@endsection