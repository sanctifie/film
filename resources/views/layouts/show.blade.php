@extends('layouts.main')
 @section('content')
<div class="movie-info border-b border-gray-800">
  <div class="container mx-auto px-4 py-16 flex flex-col md:flex-row">
    <div class="flex-none">
      <img src="{{ 'https://image.tmdb.org/t/p/w500/'.$movie['poster_path'] }}" alt="parasite" class="w-96 lg:w-96">
    </div>
    <div class="md:ml-24">
      <h2 class="text-4xl font-semibold">{{ $movie['title'] }}</h2>
      <div class="flex flex-wrap items-center text-gray-400 text-sm">
        <svg class="fill-current text-orange-500 w-4" viewBox="0 -10 511.987 511" xmlns="http://www.w3.org/2000/svg">
          <path d="M510.652 185.902a27.158 27.158 0 00-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 001.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0010.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 007.98-28.927zm0 0" fill="#ffc107" />
        </svg>
        <span class="ml-1">{{ $movie['vote_average'] * 10 .'%' }}</span>
        <span class="mx-2">|</span>
        <span>{{ \Carbon\Carbon::parse($movie['release_date'])->format('M d, Y') }}</span>
        <span class="mx-2">|</span>
        <span>@foreach($movie['genres'] as $genre) {{ $genre['name'] }}@if (!$loop->last), @endif @endforeach</span>
      </div>
      <p class="text-gray-300 mt-8">{{ $movie['overview'] }}</p>
      <div class="mt-12">
        <h4 class="text-white font-semibold">Featured Cast</h4>
        <div class="flex mt-4">@foreach($movie['credits']['crew'] as $crew) @if($loop->index < 2) 
        <div class="mr-8">
            <div>{{ $crew['name'] }}</div>
            <div class="text-sm text-gray-400">{{ $crew['job'] }}</div>
        </div>
        @endif
         @endforeach
      </div>
    </div>@if (count($movie['videos']['results']) > 0)
    <div class="mt-12">
      <a href="https://youtube.com/watch?v{{ $movie['videos']['results'][0]['key'] }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded-font-semibold px-5 

                                py-4 hover:bg-orange-600 transition ease-in-out durantion-150">
        <svg class="fill-current text-orange-500 w-4" viewBox="0 -10 511.987 511" xmlns="http://www.w3.org/2000/svg">
          <path d="M510.652 185.902a27.158 27.158 0 00-23.425-18.71l-147.774-13.419-58.433-136.77C276.71 6.98 266.898.494 255.996.494s-20.715 6.487-25.023 16.534l-58.434 136.746-147.797 13.418A27.208 27.208 0 001.34 185.902c-3.371 10.368-.258 21.739 7.957 28.907l111.7 97.96-32.938 145.09c-2.41 10.668 1.73 21.696 10.582 28.094 4.757 3.438 10.324 5.188 15.937 5.188 4.84 0 9.64-1.305 13.95-3.883l127.468-76.184 127.422 76.184c9.324 5.61 21.078 5.097 29.91-1.305a27.223 27.223 0 0010.582-28.094l-32.937-145.09 111.699-97.94a27.224 27.224 0 007.98-28.927zm0 0" fill="#ffc107" />
        </svg>
        <span class="ml-2">Play Trailer</span>
      </a>
    </div>
    @endif
    </div>
</div>
</div>
<!-- Fin section Movie info -->
<div class="movie-cast border-b bordergray-800">
  <div class="container mx-auto px-4 py-16 ">
    <h2 class="text-4xl font-semibold">Cast</h2>
    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-8">
    @foreach($movie['credits']['cast'] as $cast)
     @if($loop->index< 5) 
     <div class="mt-8">
        <a href="#">
          <img src="{{'https://image.tmdb.org/t/p/w300'.$cast['profile_path']}}" alt="cast" class="hover:opacity-75 transition ease-in-out duration-150">
        </a>
        <div class="mt-2">
          <a href="#" class="text-lg mt-2 hover:text-gray:300">{{$cast['name']}}</a>
          <div class="text-gray-400 text-sm">{{$cast['character']}}</div>
        </div>
    </div
    >@endif
     @endforeach</div>
</div>
</div>
<!-- end movie-images -->
<div class="movies-images">
  <div class="container mx-auto px-4 py-16">
    <h2 class="text-4xl font-semibold">Avis</h2>
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-8">
      <div class="mt-2">
        <div class="mt-2">
          <a href="{{ route('shares.create') }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded-font-semibold px-5 

                                    py-4 hover:bg-orange-600 transition ease-in-out durantion-150">
            <span class="ml-2">Laissez une critique</span>
          </a>
        </div>
        <span>ou</span>
        <div class="mt-2">
          <div class="mt-2">
            <a href="{{ route('notes.create') }}" class="flex inline-flex items-center bg-orange-500 text-gray-900 rounded-font-semibold px-5 

                                        py-4 hover:bg-orange-600 transition ease-in-out durantion-150">
              <span class="ml-2">Notez un film</span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  @endsection