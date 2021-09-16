<div class="card mb-3" >
  <div class="card-header text-white bg-primary">
  @if(Auth::user())
    Welcome  {{ ucfirst(Auth::user()->name) }}!
  </div>
  @endif
  <ul class="list-group list-group-flush">
    <li class="list-group-item {{ session('navbar')=='dashboard' ? 'bg-light' :null }}"><a href="{{route('home')}}">Dashboard </a></li>
    <li class="list-group-item {{ session('navbar')=='movie' ? 'bg-light' :null }}"><a href="{{route('movie.index')}}">Movie List</a></li>
   
  </ul>
</div>