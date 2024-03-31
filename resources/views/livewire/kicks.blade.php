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
                    <h4>@lang('messages.title_kicks')</h4>
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
                    <th>@lang('messages.punishment_types.kick')</th>
                    <th>@lang('messages.variable_playername')</th>
                    <th>@lang('messages.variable_punisher')</th>
                    <th>@lang('messages.variable_kicked_on')</th>
                    <th>@lang('messages.variable_reason')</th>
                </tr>
                </thead>

                <tbody>
                @foreach($kicks as $kick)
                    <tr wire:loading.class="opacity-50">
                        <td><a href="#" data-mdb-ripple-init data-mdb-modal-init
                               data-mdb-target="#showPunishmentModal"
                               wire:click="showPunishment({{$kick->id}})">{{ $kick->id }}</a></td>
                        <td><img alt="player head" draggable="false"
                                 src="https://minotar.net/avatar/{{$kick->uuid}}/20"> <a wire:navigate href="/player/{{ $kick->uuid }}">{{ $kick->username }}</a>
                        </td>
                        <td><img alt="punisher head" draggable="false"
                                 src="https://minotar.net/avatar/{{$kick->punisher}}/20"> {{ $kick->getPunisherName() }}
                        </td>
                        <td>{{ $kick->time }}</td>
                        <td>{{ $kick->reason }}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $kicks->links() }}
        </div>
    </div>
</div>
