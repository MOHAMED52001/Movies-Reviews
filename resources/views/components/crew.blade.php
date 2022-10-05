@props(['movie'])


<div class="mt-12">
    <h2 class="font-semibold text-lg text-white">Featured Cast</h2>
    
    <div class="flex mt-4">

        @foreach ($movie['credits']['crew'] as $crew)
            @if ($loop->index <= 2)
                <div class="ml-8">
                    <div>{{$crew['name']}}</div>
                    <div class="mt-2">{{$crew['job']}}</div>
                </div>        
            @endif               
        @endforeach

    </div>
</div>