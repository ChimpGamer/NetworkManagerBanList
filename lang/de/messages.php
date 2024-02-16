<?php

/**
 * @author ChimpGamer
 * @date 27-12-2023
 */

return [
    'navbar_home' => '<i class="fa fa-house"></i> Startseite',
    'navbar_bans' => '<i class="fa fa-gavel"></i> Verbannungen <span class="badge badge-danger">:total_bans</span>',
    'navbar_mutes' => '<i class="fa fa-comment-slash"></i> Gestummte <span class="badge badge-danger">:total_mutes</span>',
    'navbar_kicks' => '<i class="fa fa-eject"></i> Gekickte <span class="badge badge-danger">:total_kicks</span>',
    'navbar_warns' => '<i class="fa fa-triangle-exclamation"></i> Verwarnungen <span class="badge badge-danger">:total_warns</span>',

    'title_bans' => 'Verbannungen',
    'title_mutes' => 'Gestummte',
    'title_kicks' => 'Gekickte',
    'title_warns' => 'Verwarnungen',
    'title_player' => 'Spieler :username',

    'variable_playername' => 'Spielername',
    'variable_punisher' => 'Bestrafer',
    'variable_reason' => 'Grund',

    'variable_ban' => 'Verbannungen',
    'variable_banned_on' => 'Gebannt Am',
    'variable_banned_until' => 'Gebannt Bis',

    'variable_mute' => 'Stumm',
    'variable_muted_on' => 'Stummgeschaltet Am',
    'variable_muted_until' => 'Stummgeschaltet Bis',

    'variable_kicked_on' => 'Gekickt Am',

    'variable_warned_on' => 'Verwarnt Am',

    'variable_permanent' => 'Permanent',

    'variable_expires' => 'Läuft ab in',
    'variable_server' => 'Server',
    'variable_status' => 'Status',
    'variable_global' => 'Global',
    'variable_active' => 'AKTIV',
    'variable_expired' => 'ABGELAUFEN',

    'variable_unbanned_by' => 'Unbanned By',
    'variable_unban_reason' => 'Unban Reason',
    'variable_unmuted_by' => 'Unmuted By',
    'variable_unmute_reason' => 'Unmute Reason',

    'variable_datetime_on' => 'am',

    'player_joined' => '<i class="fa fa-calendar-days"></i> Beigetreten',
    'player_last_login' => '<i class="fa fa-clock-rotate-left"></i> Letzte Anmeldung',
    'player_last_logout' => '<i class="fa fa-delete-left"></i> Letzte Abmeldung',
    'player_total_playtime' => '<i class="fa fa-clock"></i> Gesamtspielzeit',
    'player_current_minecraft_version' => '<i class="fa fa-screwdriver-wrench"></i> Aktuelle Minecraft-Version',

    'player_information' => 'Information',
    'player_punishments' => 'Strafen :punishments',
    'player_bans' => 'Verbannungen :bans',
    'player_mutes' => 'Gestummte :mutes',
    'player_kicks' => 'Gekickte :kicks',
    'player_warns' => 'Verwarnungen :warns',

    'placeholder_search_player' => '&#xf002; Spieler suchen...',
    'placeholder_search' => '&#xf002; Suchen...',

    'homepage_text' => '<h1>Willkommen auf der NetworkManager Bann Liste.</h1>
<h5>Diese Seite enthält eine Liste aller Strafen von NetworkManager.</h5>
            <h5>Gesamtstrafen: <span class="badge badge-danger">:total_punishments</span></h5>',

    '404_title' => '404',
    '404_text' => '<p class="h2">Leider können wir die von Ihnen gesuchte Seite nicht finden.</p>
                        <p class="lead">Klicken Sie auf die Schaltfläche unten, um zur Startseite zurückzukehren.</p>',
    '404_button_text' => 'Klicken Sie hier, um zur Startseite zu gelangen',

    'length_menu' => ':menu Zeilen anzeigen',

    'tooltip_expires_in' => 'Läuft in :time ab',
    'tooltip_expired' => ':time abgelaufen',

    'modal_close' => 'Schließen',

    'punishment_modal_title' => ':type #:id details',

    'punishment_types' => [
        'ban' => 'Verbannungen',
        'global_ban' => 'Global Ban',
        'temp_ban' => 'Temporary Ban',
        'global_temp_ban' => 'Global Temporary Ban',
        'ip_ban' => 'IP-Ban',
        'global_ip_ban' => 'Global IP-Ban',
        'temp_ip_ban' => 'Temporary IP-Ban',
        'global_temp_ip_ban' => 'Global Temporary IP-Ban',

        'mute' => 'Stumm',
        'global_mute' => 'Global Mute',
        'temp_mute' => 'Temporary Mute',
        'global_temp_mute' => 'Global Temporary Mute',
        'ip_mute' => 'IP-Mute',
        'global_ip_mute' => 'Global IP-Mute',
        'temp_ip_mute' => 'Temporary IP-Mute',
        'global_temp_ip_mute' => 'Global Temporary IP-Mute',

        'kick' => 'Kick',
        'global_kick' => 'Global Kick',
        'warn' => 'Verwarnung',
    ],
];
