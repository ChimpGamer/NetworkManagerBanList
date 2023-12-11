<div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">@lang('messages.title_mutes')</h2>

            <div class="d-inline">
                <label>@lang('messages.length_menu', ['menu' => '<select class="form-select" style="display: inherit; width: auto" wire:model.live="per_page">
                        <option value=10>10</option>
                        <option value=25>25</option>
                        <option value=50>50</option>
                        <option value=100>100</option>
                   </select>'])
                </label>
            </div>
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
                    <th>@lang('messages.variable_mute')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_muted_on')</th>
                    <th>@lang('messages.variable_muted_until')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($mutes as $mute)
                    <tr wire:loading.class="opacity-50">
                        <td>@if ($mute->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif {{ $mute->id }}</td>
                        <td><img alt="player head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$mute->uuid}}?size=20"> <a href="/player/{{ $mute->uuid }}">{{ $mute->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://crafatar.com/avatars/{{$mute->punisher}}?size=20"> {{ $mute->getPunisherName() }}
                        </td>
                        <td>{{ $mute->time }}</td>
                        <td>@if($mute->end == -1)
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @elseif($mute->type->isIP())
                                <span class="label label-danger">@lang('messages.variable_ip_mute')</span>
                            @else
                                <span class="label label-warning">{{ $mute->getEndFormatted() }}</span>
                            @endif</td>
                        <td>{{ $mute->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {{ $mutes->links() }}
            </div>
        </div>
    </div>
</div>
