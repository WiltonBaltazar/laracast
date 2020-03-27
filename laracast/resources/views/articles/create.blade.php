@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection
@section('content')
<div id="wrapper">
	<div id="page" class="container">
		<div id="content">
			<div class="title">
				<h2>New Article</h2>
            </div>
            
            <form method="POST" action="/articles">
                @csrf

                <div class="form-group">
                    <label for="">Title</label>
                <input type="text" class="form-control  @error('title') is-invalid @enderror" name="title"  value="{{old('title')}}" id="title" aria-describedby="title" placeholder="Title">
                    @error('title')
                            <div class="invalid-feedback" ">
                                <strong>{{$errors->first('title')}}</strong>
                            </div>
                    @enderror
                  </div>
                <div class="form-group">
                  <label for="excerpt">Excertp</label>
                  <textarea class="form-control  @error('excerpt') is-invalid @enderror" name="excerpt" id="excerpt" >{{old('excerpt')}}</textarea>
                  @error('excerpt')
                        <div class="invalid-feedback" ">
                            <strong>{{$errors->first('excerpt')}}</strong>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                  <label for="body">Body</label>
                  <textarea class="form-control  @error('body') is-invalid @enderror" name="body" id="body" rows="3">{{old('body')}}</textarea>
                  @error('body')
                        <div class="invalid-feedback" ">
                            <strong>{{$errors->first('body')}}</strong>
                        </div>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="tags">Tags</label>
                    <div class="form-group">
                        <label for="">Tags</label>
                        <select multiple class="form-control @error('body') is-invalid @enderror" name="tags[]" id="">
                          @foreach ($tags as $tag)
                            <option value="{{$tag->id}}">{{$tag->name}}</option>
                        @endforeach
                        </select>
                    </div>
                    @error('tags')
                            <div class="invalid-feedback" ">
                                <strong>{{$message}}</strong>
                            </div>
                        @enderror
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
            
		</div>
	</div>
</div>
    
@endsection