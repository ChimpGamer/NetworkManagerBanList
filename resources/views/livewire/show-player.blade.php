<div>
    <div class="card">
        <div class="card-header h4">
            <img draggable="false" src="https://crafatar.com/avatars/{{ $player->uuid }}?overlay&size=30"> {{ $player->username }}
        </div>
        <div class="card-body table-responsive">
            <h4>@lang('messages.player_information')</h4>
            <hr>
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
            <hr>
            <h4>@lang('messages.player_bans', ['bans' => $bans->count()])</h4>
            @if(!empty($bans))
                <div class="table-responsive">
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
                        @foreach($bans->take(5) as $ban)
                            <tr>
                                <td>@if ($ban->active)
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @else
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @endif {{ $ban->id }}</td>
                                <td><img alt="player head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$ban->uuid}}?size=20"> {{ $player->username }}
                                </td>
                                <td><img alt="punisher head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$ban->punisher}}?size=20"> {{ $ban->getPunisherName() }}
                                </td>
                                <td>{{ $ban->time }}</td>
                                <td>@if($ban->end == -1)
                                        <span class="label label-danger">@lang('messages.variable_permanent')</span>
                                    @elseif($ban->type->isIP())
                                        <span class="label label-danger">@lang('messages.variable_ip_ban')</span>
                                    @else
                                        <span class="label label-warning">{{ $ban->getEndFormatted() }}</span>
                                    @endif</td>
                                <td>{{ $ban->reason }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <hr>
            <h4>@lang('messages.player_mutes', ['mutes' => $mutes->count()])</h4>
            @if(!empty($mutes))
                <div class="table-responsive">
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
                        @foreach($mutes->take(5) as $mute)
                            <tr>
                                <td>@if ($mute->active)
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @else
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @endif {{ $mute->id }}</td>
                                <td><img alt="player head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$mute->uuid}}?size=20"> {{ $player->username }}
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
                </div>
            @endif
            <hr>
            <h4>@lang('messages.player_kicks', ['kicks' => $kicks->count()])</h4>
            @if(!empty($kicks))
                <div class="table-responsive">
                    <table class="table text-center">
                        <thead>
                        <tr>
                            <th>@lang('messages.variable_kick')</th>
                            <th>@lang('messages.variable_playername')</th>
                            <th>@lang('messages.variable_punisher')</th>
                            <th>@lang('messages.variable_expires')</th>
                            <th>@lang('messages.variable_reason')</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($kicks->take(5) as $kick)
                            <tr>
                                <td>@if ($kick->active)
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @else
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @endif {{ $kick->id }}</td>
                                <td><img alt="player head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$kick->uuid}}?size=20"> {{ $player->username }}
                                </td>
                                <td><img alt="punisher head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$kick->punisher}}?size=20"> {{ $kick->getPunisherName() }}
                                </td>
                                <td>{{ $kick->time }}</td>
                                <td>{{ $kick->reason }}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
            <hr>
            <h4>@lang('messages.player_warns', ['warns' => $warns->count()])</h4>
            @if(!empty($warns))
                <div class="table-responsive">
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
                        @foreach($warns->take(5) as $warn)
                            <tr>
                                <td>@if ($warn->active)
                                        <i class="fas fa-check-circle fa-lg text-success"></i>
                                    @else
                                        <i class="fas fa-exclamation-circle fa-lg text-danger"></i>
                                    @endif {{ $warn->id }}</td>
                                <td><img alt="player head" draggable="false"
                                         src="https://crafatar.com/avatars/{{$warn->uuid}}?size=20"> {{ $player->username }}
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
                </div>
            @endif
        </div>
    </div>
</div>
