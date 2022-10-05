@props(['movie','tags'])


<div class="mt-8">

    <a href="/movie/{{$movie['id']}}" target="_blank">
        <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="" class="hover:opacity-75 transition-all ease-in-out duration-200 ">
    </a>
    
    <div class="mt-1">
        
        <a href="/movie/{{$movie['id']}}" target="_blank" class="mt-2 text-lg hover:text-gray-400">{{$movie['original_title']}}</a>
        
        <div class="flex items-center text-gray-400 mt-1 text-sm">
            <span class="text-orange-500"><i class="fa-solid fa-star"></i></span>
            <span class="ml-1">{{$movie['vote_average'] * 10}}%</span>
            <span class="mx-2">|</span>
            <span>{{$movie['release_date']}}</span>
        </div>

       
        <x-movie-tags :tags="$tags"  :mov="$movie['genre_ids']" />
        

    </div>

</div>
