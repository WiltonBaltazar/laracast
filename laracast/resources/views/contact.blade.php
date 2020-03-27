@extends('layout')

@section('head')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')
    <div class="container py-4">
        <form method="POST" action="/contact" style="width:300px">
            @csrf
            <div class="form-group">
              <label for="email">Email Address</label>
              <input type="text" class="form-control @error('email') is-invalid @enderror" name="email" id="email" aria-describedby="helpId" placeholder="Enter your email">
                @error('email')
                    <div class="invalid-feedback" ">
                        <strong>{{$message}}</strong>
                    </div>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary btn-block">Send email</button>
            @if (session('message'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
              <strong>{{session('message')}}</strong> 
            </div>
            
            <script>
              $(".alert").alert();
            </script>
            @endif
            
        </form>
    </div>

@endsection
