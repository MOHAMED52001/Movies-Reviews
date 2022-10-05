@foreach ($movie['images']['backdrops'] as $img)
    @if ($loop->index <= 15)    
        <div class="mt-8">    
            
            <img src="https://image.tmdb.org/t/p/w500/{{$img['file_path']}}" alt="" 
            class="hover:opacity-75 transition-all ease-in-out duration-200 ">
           
        </div>
    @endif               
@endforeach