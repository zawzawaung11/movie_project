@extends('layouts.app')

@section('title','Movie Library System | Dashboard')

@section('content')
<div class="card">
                <div class="card-header text-white bg-success">{{ config('app.name') }} {{ __('Dashboard') }}</div>

                <div class="card-body">


                <div class="row">
                    <div class="col-xl-3 col-lg-6">
                    <a href="{{route('movie.index')}}">
                        <div class="card card-stats mb-4 mb-xl-0">
                            <div class="card-body">
                            <div class="row">
                                <div class="col">
                                <h6 class="card-title font-weight-bold text-uppercase text-muted mb-2">Total Movies</h6>
                                <i class="fas fa-video fa-2x mr-2"></i>
                                <span class="h4 font-weight-bold mb-0 text-black ">{{$movie_count}}</span>
                                </div>
                            </div>
                            </div>
                            </a>
                        </div>
                    </div>
           </div> 
        </div>
@endsection
