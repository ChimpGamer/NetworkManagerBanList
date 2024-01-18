<div>
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">@lang('messages.title_bans')</h2>

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
                    <tr wire:loading.class="opacity-50" wire:key="{{ $ban->id }}">
                        <td>@if ($ban->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif {{ $ban->id }}</td>
                        <td><img alt="player head" draggable="false"
                                 src="https://minotar.net/avatar/{{$ban->uuid}}/20"> <a href="/player/{{ $ban->uuid }}">{{ $ban->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://minotar.net/avatar/{{$ban->punisher}}/20"> {{ $ban->getPunisherName() }}
                        </td>
                        <td>{{ $ban->time }}</td>
                        <td>@if($ban->end == -1)
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @elseif($ban->type->isIP())
                                <span class="label label-danger">@lang('messages.variable_ip_ban')</span>
                            @else
                                <span class="label label-warning" x-data='{ tooltip: "{{ $ban->getExpires() }}"}' x-tooltip="tooltip">{{ $ban->getEndFormatted() }}</span>
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
