<div>
    <div class="card">
        <div class="card-header h5">
            Warns
            <label for="punishmentSearch" class="float-end mx-2">
                <input id="punishmentSearch" type="search" wire:model="search" class="form-control"
                       placeholder="@lang('messages.placeholder_search')" style="font-family: Roboto, 'FontAwesome'" />
            </label>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.variable_warn')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_muted_on')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($warns as $warn)
                    <tr>
                        <td>@if ($warn->active)
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @else
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @endif {{ $warn->id }}</td>
                        <td><img alt="player head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$warn->uuid}}?size=20"> <a href="/player/{{ $warn->uuid }}">{{ $warn->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$warn->punisher}}?size=20"> {{ $warn->getPunisherName() }}
                        </td>
                        <td>{{ $warn->time }}</td>
                        <td>{{ $warn->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $warns->links() }}
            </div>
        </div>
    </div>
</div>
