<div>
    <div class="card">
        <div class="card-header h3">
            Bans
            <label for="punishmentSearch" class="float-end mx-2">
                <input id="punishmentSearch" type="search" wire:model="search" class="form-control"
                       placeholder="@lang('messages.placeholder_search')" style="font-family: Roboto, 'FontAwesome'" />
            </label>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.variable_ban')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_banned_on')</th>
                    <th>@lang('messages.variable_banned_until')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($bans as $ban)
                    <tr>
                        <td>@if ($ban->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif {{ $ban->id }}</td>
                        <td><img alt="player head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$ban->uuid}}?size=20"> <a href="/player/{{ $ban->uuid }}">{{ $ban->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$ban->punisher}}?size=20"> {{ $ban->getPunisherName() }}
                        </td>
                        <td>{{ $ban->time }}</td>
                        <td>@if($ban->end == -1)
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @elseif($ban->type->isIP())
                                <span class="label label-danger">@lang('messages.variable_ip_ban')</span>
                            @else
                                <span class="label label-warning">{{ $ban->getEndFormatted() }}</span>
                            @endif</td>
                        <td>{{ $ban->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $bans->links() }}
            </div>
        </div>
    </div>
</div>
