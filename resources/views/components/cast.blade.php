@foreach ($movie['credits']['cast'] as $cast)
    @if ($loop->index <= 10)    
        <div class="mt-8">    
            
            <img src="https://image.tmdb.org/t/p/w300/{{$cast['profile_path']}}" alt="" 
            class="hover:opacity-75 transition-all ease-in-out duration-200 ">
            
            <div class="mt-1">
                <div class="text-gray-400 mt-1 text-sm">
                    <h4 class="text-lg text-white">{{$cast['character']}}</h4>
                    <span>{{$cast['name']}}</span>
                </div>
            </div>
        </div>
    @endif               
@endforeach





            