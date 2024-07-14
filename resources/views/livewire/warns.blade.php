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
                    <h4>@lang('messages.title_warns')</h4>
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
                    <th>@lang('messages.punishment_types.warn')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_warned_on')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @forelse($warns as $warn)
                    <tr wire:loading.class="opacity-50">
                        <td>@if ($warn->active)
                                <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                            @else
                                <i class="fas fa-check-circle fa-lg text-success"></i>
                            @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                      data-mdb-target="#showPunishmentModal"
                                      wire:click="showPunishment({{$warn->id}})">{{ $warn->id }}</a></td>
                        <td><x-player-link :uuid="$warn->uuid" :username="$warn->username"/></td>
                        <td><x-player-link :uuid="$warn->punisher" :username="$warn->getPunisherName()"/></td>
                        <td>{{ $warn->time }}</td>
                        <td>{{ $warn->reason }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="text-center">Sorry - No Data Found</td>
                    </tr>
                @endforelse
                </tbody>
            </table>
            {{ $warns->links() }}
        </div>
    </div>
</div>
