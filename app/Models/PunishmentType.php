<?php

namespace App\Models;

enum PunishmentType: int
{
    case BAN = 1;
    case GBAN = 2;
    case TEMPBAN = 3;
    case GTEMPBAN = 4;
    case IPBAN = 5;
    case GIPBAN = 6;
    case TEMPIPBAN = 7;
    case GTEMPIPBAN = 8;
    case MUTE = 9;
    case GMUTE = 10;
    case TEMPMUTE = 11;
    case GTEMPMUTE = 12;
    case IPMUTE = 13;
    case GIPMUTE = 14;
    case TEMPIPMUTE = 15;
    case GTEMPIPMUTE = 16;
    case KICK = 17;
    case GKICK = 18;
    case WARN = 19;
    case REPORT = 20;
    case NOTE = 21;

    public function name(): string
    {
        return self::getName($this);
    }

    public function isGlobal(): bool
    {
        return match ($this) {
            PunishmentType::GBAN, PunishmentType::GTEMPBAN, PunishmentType::GIPBAN, PunishmentType::GTEMPIPBAN,
            PunishmentType::GMUTE, PunishmentType::GTEMPMUTE, PunishmentType::GIPMUTE, PunishmentType::GTEMPIPMUTE,
            PunishmentType::GKICK, PunishmentType::WARN, PunishmentType::REPORT, PunishmentType::NOTE => true,
            default => false,
        };
    }

    public function isTemporary(): bool
    {
        return match ($this) {
            PunishmentType::GTEMPBAN, PunishmentType::TEMPBAN, PunishmentType::GTEMPIPBAN, PunishmentType::TEMPIPBAN,
            PunishmentType::GTEMPMUTE, PunishmentType::GTEMPIPMUTE, PunishmentType::TEMPMUTE, PunishmentType::TEMPIPMUTE
            => true,
            default => false
        };
    }

    public function isIP(): bool
    {
        return match ($this) {
            PunishmentType::GIPBAN, PunishmentType::GTEMPIPBAN,
            PunishmentType::GIPMUTE, PunishmentType::GTEMPIPMUTE => true,
            default => false,
        };
    }

    public function isBan(): bool
    {
        return match ($this) {
            PunishmentType::BAN, PunishmentType::GBAN, PunishmentType::TEMPBAN,
            PunishmentType::GTEMPBAN, PunishmentType::IPBAN, PunishmentType::GIPBAN,
            PunishmentType::TEMPIPBAN, PunishmentType::GTEMPIPBAN => true,
            default => false,
        };
    }

    public function isMute(): bool
    {
        return match ($this) {
            PunishmentType::MUTE, PunishmentType::GMUTE, PunishmentType::TEMPMUTE,
            PunishmentType::GTEMPMUTE, PunishmentType::IPMUTE, PunishmentType::GIPMUTE,
            PunishmentType::TEMPIPMUTE, PunishmentType::GTEMPIPMUTE => true,
            default => false,
        };
    }

    public function isKick(): bool
    {
        return $this === PunishmentType::KICK || $this === PunishmentType::GKICK;
    }

    public function isWarn(): bool
    {
        return $this === PunishmentType::WARN;
    }

    public static function getName(self $type): string
    {
        //TODO: Make these translatable
        return match ($type) {
            PunishmentType::BAN => __('messages.punishment_types.ban'),
            PunishmentType::GBAN => __('messages.punishment_types.global_ban'),
            PunishmentType::TEMPBAN => __('messages.punishment_types.temp_ban'),
            PunishmentType::GTEMPBAN => __('messages.punishment_types.global_temp_ban'),
            PunishmentType::IPBAN => __('messages.punishment_types.ip_ban'),
            PunishmentType::GIPBAN => __('messages.punishment_types.global_ip_ban'),
            PunishmentType::TEMPIPBAN => __('messages.punishment_types.temp_ip_ban'),
            PunishmentType::GTEMPIPBAN => __('messages.punishment_types.global_temp_ip_ban'),
            PunishmentType::MUTE => __('messages.punishment_types.mute'),
            PunishmentType::GMUTE => __('messages.punishment_types.global_mute'),
            PunishmentType::TEMPMUTE => __('messages.punishment_types.temp_mute'),
            PunishmentType::GTEMPMUTE => __('messages.punishment_types.global_temp_mute'),
            PunishmentType::IPMUTE => __('messages.punishment_types.ip_mute'),
            PunishmentType::GIPMUTE => __('messages.punishment_types.global_ip_mute'),
            PunishmentType::TEMPIPMUTE => __('messages.punishment_types.temp_ip_mute'),
            PunishmentType::GTEMPIPMUTE => __('messages.punishment_types.global_temp_ip_mute'),
            PunishmentType::KICK => __('messages.punishment_types.kick'),
            PunishmentType::GKICK => __('messages.punishment_types.global_kick'),
            PunishmentType::WARN => __('messages.punishment_types.warn'),
            PunishmentType::REPORT => 'Report',
            PunishmentType::NOTE => 'Note',
            default => 'Unknown',
        };
    }
}
