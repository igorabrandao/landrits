@extends('layouts.app')

@section('content')
@include('partials.sectionone') 
@include('partials.sectiontwo') 
@include('partials.sectionthree') 
@include('partials.sectionfour') 

<!-- <img src="@asset('images/example.jpg')"> -->
  @while(have_posts()) @php(the_post())
    @includeFirst(['partials.content-page', 'partials.content'])
  @endwhile
  
@endsection