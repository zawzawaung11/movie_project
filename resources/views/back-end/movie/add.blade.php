@extends('layouts.app')

@section('title','Movie Library System | Details Movie')

@section('content')

<div class="row">
          <div class="col-sm-8">
          <div class="card">
          <div class="card-header">
          {{$title}} Movie
        </div>
  <div class="card-body">
    <form method="post" action="{{route('movie.store')}}" enctype='multipart/form-data'>
          @csrf
          @if (!empty($movie->id)) 
          <input type="hidden" name="id" class="form-control" id="id" value="{{ $movie->id }}" >
          @endif
          @if (!empty($movie->photo)) 
          <div class="form-group">
            <img src="{{asset('storage/images/origin/'.$movie->photo)}}"/>
          </div>
          @endif
          <div class="form-group">
            <label for="name">Title</label>
            <input type="text" class="form-control" name='title' value="{{ $movie->title ?? old('title')}}"  placeholder="Enter Movie Title" required>
          </div>
          @if($errors->has('title'))
          <div class="alert alert-danger">{{ $errors->first('title') }}</div>
          @endif
          <div class="form-group">
            <label for="description">Description</label>
            <textarea class="form-control" name="description"  rows="3" required>{{$movie->description ?? old('description')}}
            </textarea>
          </div>
          @if($errors->has('description'))
          <div class="alert alert-danger">{{ $errors->first('description') }}</div>
          @endif
          <div class="form-group">
            <label for="Cast">Cast</label>
            <input type="text" class="form-control" name="cast" value="{{ $movie->cast ?? old('cast')}}" placeholder="Enter Cast" required>
          </div>
          @if($errors->has('cast'))
          <div class="alert alert-danger">{{ $errors->first('cast') }}</div>
          @endif
          <div class="form-group">
            <label for="Director">Director</label>
            <input type="text" class="form-control" name="director" value="{{ $movie->director ?? old('director')}}" placeholder="Enter Director" required>
          </div>
          @if($errors->has('director'))
          <div class="alert alert-danger">{{ $errors->first('director') }}</div>
          @endif
          <div class="form-group">
          <div class="mb-2">Image Upload</div>
            <div class="custom-file">
              <input type="file" class="custom-file-input" name="photo" id="customFile">
              <label class="custom-file-label">Choose file</label>
            </div>
          @if($errors->has('photo'))
          <div class="alert alert-danger">{{ $errors->first('photo') }}</div>
          @endif
        </div>
         @if (!empty($movie->id)) 
            <button type="submit" class="btn btn-primary float-right ml-2">Update</button>
          @else
          <button type="submit" class="btn btn-primary float-right ml-2">Create</button>  
          @endif    
          <a class="btn btn-warning float-right" href="{{route('movie.index')}}" role="button">Cancel</a>
    </form>
    </div>
    </div>
    </div>
</div>

@endsection