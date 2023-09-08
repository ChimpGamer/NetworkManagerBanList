<div>
    <div class="card">
        <div class="card-header h5">
            Kicks
            <label for="punishmentSearch" class="float-end mx-2">
                <input id="punishmentSearch" type="search" wire:model="search" class="form-control"
                       placeholder="Search..." />
            </label>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.variable_kick')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_muted_on')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($kicks as $kick)
                    <tr>
                        <td>{{$kick->id}}</td>
                        <td><img alt="player head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$kick->uuid}}?size=20"> {{ $kick->getPlayerName() }}
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$kick->punisher}}?size=20"> {{ $kick->getPunisherName() }}
                        </td>
                        <td>{{ $kick->time }}</td>
                        <td>{{ $kick->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $kicks->links() }}
            </div>
        </div>
    </div>
</div>
