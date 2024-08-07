<div>
    @include('livewire.punishment-details-modal')

    @section('title')
        @lang('messages.title_player', ['username'=> $player->username])
    @endsection
    <div class="card">
        <div class="card-header h3">
            <img draggable="false" src="https://minotar.net/helm/{{ $player->uuid }}/30" alt="Player Skin Head"> {{ $player->username }}
        </div>
        <div class="card-body table-responsive">
            <h4>@lang('messages.player_information')</h4>
            <hr class="hr">
            <table class="table table-sm table-borderless">
                <tbody>
                <tr>
                    <th scope="row">@lang('messages.player_joined')</th>
                    <td class="text-end">{{$player->firstlogin}}</td>
                </tr>
                <tr>
                    <th scope="row">@lang('messages.player_last_login')</th>
                    <td class="text-end">{{$player->lastlogin}}</td>
                </tr>
                <tr>
                    <th scope="row">@lang('messages.player_last_logout')</th>
                    <td class="text-end">{{$player->lastlogout}}</td>
                </tr>
                <tr>
                    <th scope="row">@lang('messages.player_total_playtime')</th>
                    <td class="text-end">{{$player->playtime}}</td>
                </tr>
                <tr>
                    <th scope="row">@lang('messages.player_current_minecraft_version')</th>
                    <td class="text-end">{{$player->version->name()}}</td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <h4>@lang('messages.player_punishments', ['punishments' => $punishmentsCount])</h4>
            <hr class="hr">
            <h4>@lang('messages.player_bans', ['bans' => $bans->count()])</h4>
            @if(!empty($bans))
                <div class="table-responsive">
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
                        @foreach($bans->take(5) as $ban)
                            <tr>
                                <td>@if ($ban->active)
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @else
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                              data-mdb-target="#showPunishmentModal"
                                              wire:click="showPunishment({{$ban->id}})">{{ $ban->id }}</a></td>
                                <td><x-player-link :uuid="$ban->uuid" :username="$player->username"/></td>
                                <td><x-player-link :uuid="$ban->punisher" :username="$ban->getPunisherName()"/></td>
                                <td>{{ $ban->time }}</td>
                                <td>@if($ban->type->isIP())
                                        <span class="label label-danger">@lang('messages.punishment_types.ip_ban')</span>
                                    @elseif($ban->type->isTemporary())
                                        <span class="label label-warning" x-data x-tooltip.raw="{{ $ban->getExpires() }}">{{ $ban->getEndFormatted() }}</span>
                                    @else
                                        <span class="label label-danger">@lang('messages.variable_permanent')</span>
                                    @endif</td>
                                <td>{{ $ban->reason }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <hr class="hr">
            <h4>@lang('messages.player_mutes', ['mutes' => $mutes->count()])</h4>
            @if(!empty($mutes))
                <div class="table-responsive">
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
                        @foreach($mutes->take(5) as $mute)
                            <tr>
                                <td>@if ($mute->active)
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @else
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                              data-mdb-target="#showPunishmentModal"
                                              wire:click="showPunishment({{$mute->id}})">{{ $mute->id }}</a></td>
                                <td><x-player-link :uuid="$mute->uuid" :username="$player->username"/></td>
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
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <hr class="hr">
            <h4>@lang('messages.player_kicks', ['kicks' => $kicks->count()])</h4>
            @if(!empty($kicks))
                <div class="table-responsive">
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
                        @foreach($kicks->take(5) as $kick)
                            <tr>
                                <td><a href="#" data-mdb-ripple-init data-mdb-modal-init
                                       data-mdb-target="#showPunishmentModal"
                                       wire:click="showPunishment({{$kick->id}})">{{ $kick->id }}</a></td>
                                <td><x-player-link :uuid="$kick->uuid" :username="$player->username"/></td>
                                <td><x-player-link :uuid="$kick->punisher" :username="$kick->getPunisherName()"/></td>
                                <td>{{ $kick->time }}</td>
                                <td>{{ $kick->reason }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <hr class="hr">
            <h4>@lang('messages.player_warns', ['warns' => $warns->count()])</h4>
            @if(!empty($warns))
                <div class="table-responsive">
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
                        @foreach($warns->take(5) as $warn)
                            <tr>
                                <td>@if ($warn->active)
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @else
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @endif <a href="#" data-mdb-ripple-init data-mdb-modal-init
                                              data-mdb-target="#showPunishmentModal"
                                              wire:click="showPunishment({{$warn->id}})">{{ $warn->id }}</a></td>
                                <td><x-player-link :uuid="$warn->uuid" :username="$player->username"/></td>
                                <td><x-player-link :uuid="$warn->punisher" :username="$warn->getPunisherName()"/></td>
                                <td>{{ $warn->time }}</td>
                                <td>{{ $warn->reason }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>
</div>
