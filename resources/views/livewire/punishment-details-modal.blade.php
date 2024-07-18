<!-- Show Punishment Modal -->
<div wire:ignore.self class="modal fade" id="showPunishmentModal" tabindex="-1"
     aria-labelledby="showPunishmentModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                @if($punishment != null)
                    <h5 class="modal-title" id="showPunishmentModalLabel">@lang('messages.punishment_modal_title', ['type' => $punishment->type->name(), 'id' => $punishment->id])</h5>
                @endif
                <button type="button" class="btn-close" data-mdb-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                @if($punishment != null)
                    <div class="mb-3">
                        <strong>{{$punishment->type->name()}}</strong>
                        <p>{{ $punishment->id }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>@lang('messages.variable_playername')</strong>
                        <p><x-player-link :uuid="$punishment->uuid" :username="$punishment->username"/></p>
                    </div>
                    <div class="mb-3">
                        <strong>@lang('messages.variable_punisher')</strong>
                        <p><x-player-link :uuid="$punishment->punisher" :username="$punishment->getPunisherName()"/></p>
                    </div>
                    @if($punishment->server != null)
                        <div class="mb-3">
                            <strong>@lang('messages.variable_server')</strong>
                            <p>{{ $punishment->server }}</p>
                        </div>
                    @endif
                    <div class="mb-3">
                        <strong>
                            @if($punishment->type->isBan())
                                @lang('messages.variable_banned_on')
                            @elseif($punishment->type->isMute())
                                @lang('messages.variable_muted_on')
                            @elseif($punishment->type->isKick())
                                @lang('messages.variable_kicked_on')
                            @elseif($punishment->type->isWarn())
                                @lang('messages.variable_warned_on')
                            @endif
                        </strong>
                        <p>{{ $punishment->time }}</p>
                    </div>
                    <div class="mb-3">
                        <strong>
                            @if($punishment->type->isBan())
                                @lang('messages.variable_banned_until')
                            @elseif($punishment->type->isMute())
                                @lang('messages.variable_muted_until')
                            @endif
                        </strong>
                        <p>@if($punishment->type->isIP())
                                <span class="label label-danger">
                                    @if($punishment->type->isBan())
                                        @lang('messages.punishment_types.ip_ban')
                                    @elseif($punishment->type->isMute())
                                        @lang('messages.punishment_types.ip_mute')
                                    @endif
                                </span>
                            @elseif($punishment->type->isTemporary())
                                <span class="label label-warning" x-data x-tooltip.placement.right-end.raw="{{ $punishment->getExpires() }}">{{ $punishment->getEndFormatted() }}</span>
                            @else
                                <span class="label label-danger">@lang('messages.variable_permanent')</span>
                            @endif</p>
                    </div>
                    <div class="mb-3">
                        <strong>@lang('messages.variable_reason')</strong>
                        <p>{!! $punishment->reason !!}</p>
                    </div>
                    <div class="mb-3">
                        <strong>@lang('messages.variable_status')</strong>
                        <p>@if($punishment->active) <span class="label label-danger">@lang('messages.variable_active')</span> @else <span class="label label-success">@lang('messages.variable_expired')</span> @endif</p>
                    </div>

                    @if(!$punishment->active && $punishment->unbanner != null)
                        <div class="mb-3">
                            <strong>@if($punishment->type->isBan()) @lang('messages.variable_unbanned_by') @elseif($punishment->type->isMute()) @lang('messages.variable_unmuted_by')@endif</strong>
                            <p><img alt="player head" draggable="false"
                                    src="https://minotar.net/avatar/{{$punishment->unbanner}}/20"> <a wire:navigate
                                    href="/player/{{ $punishment->unbanner }}">{{ $punishment->getUnbannerName() }}</a>
                        </div>
                        <div class="mb-3">
                            <strong>@if($punishment->type->isBan()) @lang('messages.variable_unban_reason') @elseif($punishment->type->isMute()) @lang('messages.variable_unmute_reason')@endif</strong>
                            <p>{{ $punishment->unbanreason }}</p>
                        </div>
                    @endif
                @endif
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-mdb-dismiss="modal">@lang('messages.modal_close')</button>
            </div>
        </div>
    </div>
</div>
