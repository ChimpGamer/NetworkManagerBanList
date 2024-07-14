<div>
    @include('livewire.punishment-details-modal')

    <div class="card">
        <div class="card-header">
            <div class="row mt-2 justify-content-between text-center">
                <div class="col-md-auto me-auto">
                    <label>@lang('messages.length_menu', ['menu' => '<select class="form-select form-select-sm" style="display: inherit; width: auto" wire:model.live="per_page">
                        <option value=10>10</option>
                        <option value=25>25</option>
                        <option value=50>50</option>
                        <option value=100>100</option>
                   </select>'])
                    </label>
                </div>
                <div class="col-md-auto">
                    <h4>@lang('messages.title_bans')</h4>
                </div>
                <div class="col-md-auto ms-auto" wire:ignore>
                    <div class="form-outline w-auto d-inline-block" data-mdb-input-init>
                        <input type="search" id="punishmentSearch" class="form-control form-control-sm"
                               wire:model.live="search"/>
                        <label class="form-label" for="punishmentSearch"
                               style="font-family: Roboto, 'FontAwesome'">@lang('messages.placeholder_search')</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.punishment_types.ban')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_banned_on')</th>
                    <th>@lang('messages.variable_banned_until')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @forelse($bans as $ban)
                    <tr wire:loading.class="opacity-50" wire:key="{{ $ban->id }}">
                        <td>@if ($ban->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                      data-mdb-target="#showPunishmentModal"
                                      wire:click="showPunishment({{$ban->id}})">{{ $ban->id }}</a></td>
                        <td><x-player-link :uuid="$ban->uuid" :username="$ban->username"/></td>
                        <td><x-player-link :uuid="$ban->punisher" :username="$ban->getPunisherName()"/></td>
                        <td>{{ $ban->time }}</td>
                        <td>@if($ban->type->isIP())
                                <span class="label label-danger">@lang('messages.punishment_types.ip_ban')</span>
                            @elseif($ban->type->isTemporary())
                                <span class="label label-warning" x-data
                                      x-tooltip.raw="{{ $ban->getExpires() }}">{{ $ban->getEndFormatted() }}</span>
                            @else
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @endif</td>
                        <td>{{ $ban->reason }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Sorry - No Data Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $bans->links() }}
        </div>
    </div>
</div>
