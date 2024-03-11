<div>
    @include('livewire.punishment-details-modal')
    <div class="card">
        <div class="card-header">
            <h2 class="text-center">@lang('messages.title_warns')</h2>

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
                    <th>@lang('messages.punishment_types.warn')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_warned_on')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($warns as $warn)
                    <tr wire:loading.class="opacity-50">
                        <td>@if ($warn->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                      data-mdb-target="#showPunishmentModal"
                                      wire:click="showPunishment({{$warn->id}})">{{ $warn->id }}</a></td>
                        <td><img alt="player head" draggable="false"
                                 src="https://minotar.net/avatar/{{$warn->uuid}}/20"> <a href="/player/{{ $warn->uuid }}">{{ $warn->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://minotar.net/avatar/{{$warn->punisher}}/20"> {{ $warn->getPunisherName() }}
                        </td>
                        <td>{{ $warn->time }}</td>
                        <td>{{ $warn->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $warns->links() }}
        </div>
    </div>
</div>
