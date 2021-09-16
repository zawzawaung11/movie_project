@extends('layouts.app')

@section('title','Movie Library System | Movies List')

@section('content')
<div class="row">
    <div class="col-sm-8">
      <form method="post" action="{{route('movie.search')}}">
          <div class="input-group mb-3">
            @csrf
            <div class="form-outline">
              <input type="search"  name="search" class="form-control" placeholder="Search"/>
            </div>
            <button type="submit" class="btn btn-primary">
              <i class="fas fa-search"></i>
            </button>       
            <a class="btn btn-primary ml-3" href="{{route('movie.create')}}" role="button">Create Movie</a>
          </div>
      </form>   
    </div>
</div>
@if(Session::has('insert'))
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ Session::get('insert') }}
</div>
@endif
@if(Session::has('update'))
<div class="alert alert-success alert-dismissible">
  <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  {{ Session::get('update') }}
</div>
@endif
<table class="table table-hover tbgcolor">
  <thead class="bgcolor">
    <tr>
      <th scope="col">No</th>
      <th scope="col">Image</th>
      <th scope="col">Name</th>
      <th scope="col">Cast</th>
      <th scope="col">Director</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @forelse($movies as $movie)
    <tr>
      <th scope="row">{{ ($movies->currentpage()-1) * $movies->perpage() + $loop->index + 1 }}</th>
      <td>@if (!empty($movie->photo)) <img src="{{asset('storage/images/thumb/'.$movie->photo)}}" /> @else <img src="{{asset('/storage/images/thumb/no-image.png')}}"/> @endif </td>
      <td>{{$movie->title}}</td>
      <td>{{$movie->cast}}</td>
      <td>{{$movie->director}}</td>
      <td> 
      <a href="{{route('movie.edit', ['id' => $movie->id ])}}" ><i class="fas fa-edit"></i></a>
      <a href="#" onclick="deleteItem(this)" data-id="{{$movie->id}}"><i class="fas fa-trash"></i></a>
      </td>
    </tr>
    @empty
    <tr>
    <td colspan="6">
    <p align="center">There is no movie found! </p>
    </td>
    </tr>
    @endforelse   
  </tbody>
</table>
  {{$movies->links('pagination::bootstrap-4')}}  

@endsection

@section('script')
<script type="application/javascript">
 function deleteItem(e){
            var id = e.getAttribute('data-id');
            Swal.fire({
              title: 'Are you sure?',
                text: "You won't be able to revert this!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: "#CC0000",
                cancelButtonColor: "#007BFF",
                confirmButtonText: 'Yes, delete it!',
                cancelButtonText: 'No, cancel!'
            }).then((result) => {
              if (result.value) {
                    if (result.isConfirmed){
                        $.ajax({
                            type:'GET',
                            url:'{{url("/admin/movie/delete")}}/' +id,
                            data:{
                                "_token": "{{ csrf_token() }}",
                            },
                            success: function(data) {
                              window.location.href = "/admin/movie";
                            }                        
                        });

                    }

                } 

                });
 }  
    </script>

@stop
