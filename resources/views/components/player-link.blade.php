@props(['uuid', 'username'])

<img alt="player head" draggable="false" src="https://minotar.net/avatar/{{$uuid}}/20"> <a wire:navigate href="{{route('player', $uuid)}}">{{ $username }}</a>
