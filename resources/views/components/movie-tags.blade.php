@props(['tags','mov'])




<div class="text-gray-400 text-sm">
    @foreach ($mov as $key => $value)

        @if (is_array($value))
          
            {{ $value['name'] }}@if(!$loop->last), @endif
            
        @else
            
            {{ $tags->get($value) }}@if(!$loop->last), @endif
            
        @endif
    @endforeach
</div>


