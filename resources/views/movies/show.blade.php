
{{-- {{dd($movie)}} --}}


<x-layout>
<div class="movie-info border-b border-gray-700">
    <div class="container mx-auto  flex flex-col  md:flex-row px-10 py-16">
        <img src="https://image.tmdb.org/t/p/w500/{{$movie['poster_path']}}" alt="" class="w-64 md:w-96">
        <div class=" md:ml-24">
            
           <h2 class="text-4xl mt-8 md:mt-0 font-semibold">{{$movie['original_title']}}</h2>

            <div class="mt-1">
                <div class="flex flex-wrap items-center text-gray-400 text-sm">
                    <span class="text-orange-500"><i class="fa-solid fa-star"></i></span>
                    <span class="ml-1">{{$movie['vote_average'] * 10}}%</span>
                    <span class="mx-2">|</span>
                    <span>{{$movie['release_date']}}</span>
                    <span class="mx-2">|</span>
                    <x-movie-tags :tags="$genre"  :mov="$movie['genres']" />

                </div>
                <p class=" text-gray-300 mt-8">{{$movie['overview']}}</p>
                 
                <x-crew :movie="$movie"/>
                
                <div class="mt-12">
                    @if (!empty($movie['videos']['results'][0]))    
                    <a href="https://www.youtube.com/watch?v={{$movie['videos']['results'][0]['key']}}" target="_blank"
                    class="bg-orange-500 font-semibold rounded-md text-gray-900 
                    px-5 py-4 hover:bg-orange-600 transition-all ease-in-out duration-200">
                    <i class="fa-regular fa-circle-play"></i> Play Now
                    </a>    
                    @else
                    <a href="#" 
                    class="bg-orange-500 font-semibold rounded-md text-gray-900 
                    px-5 py-4 hover:bg-orange-600 transition-all ease-in-out duration-200">
                    <i class="fa-regular fa-circle-play"></i> No Trailer
                    </a>
                    @endif
                    

                </div>

            </div>
        </div>
    </div>
</div>


{{-- Cast Info --}}
<div class="cast-info border-b border-gray-700">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Cast</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:gird-cols-3 lg:grid-cols-5 gap-x-8 gap-y-4">
            
            <x-cast :movie="$movie"/>

        </div>
    </div>
</div>


{{-- Movie Imgs --}}
  
<div class="movie-img border-b border-gray-700">
    <div class="container mx-auto px-4 py-16">
        <h2 class="text-4xl font-semibold">Images</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-8 gap-y-4">
            <x-movie-img :movie="$movie"/>
        </div>
    </div>
</div>




</x-layout>