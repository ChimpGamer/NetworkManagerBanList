<?php

/**
 * @author ChimpGamer
 * @date 11-9-2023
 */

return [
    'navbar_home' => '<i class="fa fa-house"></i> Thuispagina',
    'navbar_bans' => '<i class="fa fa-gavel"></i> Bans <span class="badge badge-danger">:total_bans</span>',
    'navbar_mutes' => '<i class="fa fa-comment-slash"></i> Mutes <span class="badge badge-danger">:total_mutes</span>',
    'navbar_kicks' => '<i class="fa fa-eject"></i> Kicks <span class="badge badge-danger">:total_kicks</span>',
    'navbar_warns' => '<i class="fa fa-triangle-exclamation"></i> Waarschuwingen <span class="badge badge-danger">:total_warns</span>',

    'title_bans' => 'Bans',
    'title_mutes' => 'Mutes',
    'title_kicks' => 'Kicks',
    'title_warns' => 'Waarschuwingen',
    'title_player' => 'Speler :username',

    'variable_playername' => 'Spelernaam',
    'variable_punisher' => 'Stafflid',
    'variable_reason' => 'Reden',

    'variable_banned_on' => 'Verbannen op',
    'variable_banned_until' => 'Verbannen tot',

    'variable_muted_on' => 'Gemute op',
    'variable_muted_until' => 'Gemute tot',

    'variable_kicked_on' => 'Kicked op',

    'variable_warned_on' => 'Gewaarschuwd op',

    'variable_permanent' => 'Permanent',

    'variable_expires' => 'Verloopt op',
    'variable_server' => 'Server',
    'variable_status' => 'Status',
    'variable_global' => 'Globaal',
    'variable_active' => 'ACTIEF',
    'variable_expired' => 'Verlopen',

    'variable_unbanned_by' => 'Unbanned By',
    'variable_unban_reason' => 'Unban Reason',
    'variable_unmuted_by' => 'Unmuted By',
    'variable_unmute_reason' => 'Unmute Reason',

    'variable_datetime_on' => 'op',

    'player_joined' => '<i class="fa fa-calendar-days"></i> Joined',
    'player_last_login' => '<i class="fa fa-clock-rotate-left"></i> Laatste login',
    'player_last_logout' => '<i class="fa fa-delete-left"></i> Laatste logout',
    'player_total_playtime' => '<i class="fa fa-clock"></i> Totale speeltijd',
    'player_current_minecraft_version' => '<i class="fa fa-screwdriver-wrench"></i> Huidige minecraft versie',

    'player_information' => 'Informatie',
    'player_punishments' => 'Straffen :punishments',
    'player_bans' => 'Bans :bans',
    'player_mutes' => 'Mutes :mutes',
    'player_kicks' => 'Kicks :kicks',
    'player_warns' => 'Waarschuwingen :warns',

    'placeholder_search_player' => '&#xf002; Zoek speler...',
    'placeholder_search' => '&#xf002; Zoek...',

    'homepage_text' => '<h1>Welkom op de NetworkManager Ban Lijst.</h1>
<h5>Deze site bevat alle straffen gemaakt met NetworkManager.</h5>
            <h5>Totaal aantal straffen: <span class="badge badge-danger">:total_punishments</span></h5>',

    '404_title' => '404',
    '404_text' => '<p class="h2">Sorry, we kunnen de pagina die u zoekt niet vinden.</p>
                        <p class="lead">Klik op onderstaande knop om terug te gaan naar de startpagina.</p>',
    '404_button_text' => 'Klik om naar de thuispagina te gaan',

    'length_menu' => ':menu resultaten weergeven',

    'tooltip_expires_in' => 'Verloopt :time',
    'tooltip_expired' => ':time verlopen',

    'modal_close' => 'Sluiten',

    'punishment_modal_title' => ':type #:id details',

    'punishment_types' => [
        'ban' => 'Ban',
        'global_ban' => 'Global Ban',
        'temp_ban' => 'Temporary Ban',
        'global_temp_ban' => 'Global Temporary Ban',
        'ip_ban' => 'IP-Ban',
        'global_ip_ban' => 'Global IP-Ban',
        'temp_ip_ban' => 'Temporary IP-Ban',
        'global_temp_ip_ban' => 'Global Temporary IP-Ban',

        'mute' => 'Mute',
        'global_mute' => 'Global Mute',
        'temp_mute' => 'Temporary Mute',
        'global_temp_mute' => 'Global Temporary Mute',
        'ip_mute' => 'IP-Mute',
        'global_ip_mute' => 'Global IP-Mute',
        'temp_ip_mute' => 'Temporary IP-Mute',
        'global_temp_ip_mute' => 'Global Temporary IP-Mute',

        'kick' => 'Kick',
        'global_kick' => 'Global Kick',
        'warn' => 'Warn',
    ],
];
