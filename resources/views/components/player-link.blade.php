@props(['uuid', 'username'])
<img alt="player head" draggable="false" src="https://minotar.net/avatar/{{$uuid}}/20"> @if($uuid == 'f78a4d8d-d51b-4b39-98a3-230f2de0c670')
    <span>{{ $username }}</span>
@else
    <a wire:navigate href="{{route('player', $uuid)}}">{{ $username }}</a>
@endif
