@extends('layouts.main')
@section('title','Movie Library System | Home')
@section('content')

<main class="main-content">
				<div class="container">
					<div class="page">
						<div class="row">
							<div class="col-md-9">
								<div class="slider">
									<ul class="slides">
                  @foreach($random_movies as $movie)
										<li><a href="{{route('movie.detail', ['id' => $movie->id ])}}">@if (!empty($movie->photo)) <img src="{{asset('storage/images/origin/'.$movie->photo)}}" /> @else <img src="{{asset('/storage/images/origin/no-image.png')}}" /> @endif</a></li>
                  @endforeach
									</ul>
								</div>
							</div>
							<div class="col-md-3">
								<div class="row">

                @foreach($movies as $movie)
									<div class="col-sm-6 col-md-12">
										<div class="latest-movie">
											<a href="{{route('movie.detail', ['id' => $movie->id ])}}">@if (!empty($movie->photo)) <img src="{{asset('storage/images/origin/'.$movie->photo)}}" /> @else <img src="{{asset('/storage/images/origin/no-image.png')}}"/> @endif</a>
										</div>
									</div>
                @endforeach

								</div>
							</div>
						</div> <!-- .row -->
						<div class="row">

              @foreach($random_movies as $movie)
                <div class="col-sm-6 col-md-3">
                  <div class="latest-movie">
                  <a href="{{route('movie.detail', ['id' => $movie->id ])}}">@if (!empty($movie->photo)) <img src="{{asset('storage/images/origin/'.$movie->photo)}}" /> @else <img src="{{asset('/storage/images/origin/no-image.png')}}"/> @endif</a>
                  </div>
                </div>
              @endforeach

						</div> <!-- .row -->
						
						<div class="row">
							<div class="col-md-4">
								<h2 class="section-title">December premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">November premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
							<div class="col-md-4">
								<h2 class="section-title">October premiere</h2>
								<p>Lorem ipsum dolor sit amet consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore.</p>
								<ul class="movie-schedule">
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
									<li>
										<div class="date">16/12</div>
										<h2 class="entry-title"><a href="#">Perspiciatis unde omnis</a></h2>
									</li>
								</ul> <!-- .movie-schedule -->
							</div>
						</div>
					</div>
				</div> <!-- .container -->
			</main>

@endsection


