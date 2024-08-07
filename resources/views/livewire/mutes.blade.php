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
                    <h4>@lang('messages.title_mutes')</h4>
                </div>
                <div class="col-md-auto ms-auto" wire:ignore>
                    <div class="form-outline w-auto d-inline-block" data-mdb-input-init>
                        <input type="search" id="punishmentSearch" class="form-control form-control-sm" wire:model.live="search"/>
                        <label class="form-label" for="punishmentSearch" style="font-family: Roboto, 'FontAwesome'">@lang('messages.placeholder_search')</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body border-0 shadow table-responsive">
            <table class="table text-center">
                <thead>
                <tr>
                    <th>@lang('messages.punishment_types.mute')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_muted_on')</th>
                    <th>@lang('messages.variable_muted_until')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @forelse($mutes as $mute)
                    <tr wire:loading.class="opacity-50" wire:key="{{ $mute->id }}">
                        <td>@if ($mute->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                      data-mdb-target="#showPunishmentModal"
                                      wire:click="showPunishment({{$mute->id}})">{{ $mute->id }}</a></td>
                        <td><x-player-link :uuid="$mute->uuid" :username="$mute->username"/></td>
                        <td><x-player-link :uuid="$mute->punisher" :username="$mute->getPunisherName()"/></td>
                        <td>{{ $mute->time }}</td>
                        <td>@if($mute->type->isIP())
                                <span class="label label-danger">@lang('messages.punishment_types.ip_mute')</span>
                            @elseif($mute->type->isTemporary())
                                <span class="label label-warning" x-data x-tooltip.raw="{{ $mute->getExpires() }}">{{ $mute->getEndFormatted() }}</span>
                            @else
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @endif</td>
                        <td>{{ $mute->reason }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="text-center">Sorry - No Data Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $mutes->links() }}
        </div>
    </div>
</div>
