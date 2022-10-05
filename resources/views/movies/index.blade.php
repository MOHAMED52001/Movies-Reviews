<x-layout>

<div class="container mx-auto px-4 pt-16">


{{-- Top Rated Plaing --}}
    <div class="pubular-movies border-b border-gray-700">
        <h2 class="ml-2 text-lg uppercase tracking-wider text-orange-500 font-semibold">
            Top Rated Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-x-8 gap-y-4">
            @unless (count($top_rated) == 0)
                @foreach ($top_rated as  $movie)
                    <x-movie-card :movie="$movie" :tags="$genre"/>
                @endforeach  

                @else
                    <p class="bg-slate-800 ml-6 mt-6 mx-auto font-semibold text-white px-4 py-6">
                        No Movies Found
                    </p>
            @endunless
        </div>
    </div>


    {{-- Popular Movies --}}
    <div class="pubular-movies border-b border-gray-700 pt-24">
        <h2 class="ml-2 text-lg uppercase tracking-wider text-orange-500 font-semibold">
            Pobular Movies
        </h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5  gap-x-8 gap-y-4">
            @unless (count($movies) == 0)
                @foreach ($movies as  $movie)
                    <x-movie-card :movie="$movie" :tags="$genre"/>
                @endforeach  

                @else
                    <p class="bg-slate-800 ml-6 mt-6 mx-auto font-semibold text-white px-4 py-6">
                        No Movies Found
                    </p>
            @endunless

        </div>
    </div>

    {{-- Now Plaing --}}
     <div class="Now-Playing-movies border-b border-gray-700 py-24">
        <h2 class="ml-2 text-lg uppercase tracking-wider text-orange-500 font-semibold">
            Now Playing Movies
        </h2>
            
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3  
            lg:grid-cols-5  gap-x-8 gap-y-4">

                 @unless (count($now_playing) == 0)
                @foreach ($now_playing as  $movie)
                    <x-movie-card :movie="$movie" :tags="$genre"/>
                @endforeach  

                @else
                    <p class="bg-slate-800 ml-6 mt-6 mx-auto font-semibold text-white px-4 py-6">
                        No Movies Found
                    </p>
            @endunless
               
            </div>
    </div>

</div>
</x-layout>