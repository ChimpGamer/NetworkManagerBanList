<div>
    <div class="card">
        <div class="card-header">
            <h3 class="d-inline">Warns</h3>

            <div class="float-end d-inline" wire:ignore>
                <div class="form-outline" data-mdb-input-init>
                    <input type="search" id="punishmentSearch" class="form-control" wire:model.live="search"/>
                    <label class="form-label" for="punishmentSearch" style="font-family: Roboto, 'FontAwesome'">@lang('messages.placeholder_search')</label>
                </div>
            </div>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.variable_warn')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_expires')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($warns as $warn)
                    <tr wire:loading.class="opacity-50">
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
