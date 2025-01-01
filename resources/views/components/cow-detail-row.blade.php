@if(!$editFlag)
    <div class="flex justify-between border-b-2 border-solid border-gray-400 p-2">
        <p>{{$key}}</p>
        <p>{{$value}}</p>
    </div>
@else
    <div class="flex justify-between border-b-2 border-solid border-gray-400 p-2">
        <p>{{$key}}</p>
        {{$slot}}
    </div>
@endif

