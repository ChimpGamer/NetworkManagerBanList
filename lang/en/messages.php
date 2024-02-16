<?php

return [
    'navbar_home' => '<i class="fa fa-house"></i> Home',
    'navbar_bans' => '<i class="fa fa-gavel"></i> Bans <span class="badge badge-danger">:total_bans</span>',
    'navbar_mutes' => '<i class="fa fa-comment-slash"></i> Mutes <span class="badge badge-danger">:total_mutes</span>',
    'navbar_kicks' => '<i class="fa fa-eject"></i> Kicks <span class="badge badge-danger">:total_kicks</span>',
    'navbar_warns' => '<i class="fa fa-triangle-exclamation"></i> Warns <span class="badge badge-danger">:total_warns</span>',

    'title_bans' => 'Bans',
    'title_mutes' => 'Mutes',
    'title_kicks' => 'Kicks',
    'title_warns' => 'Warns',
    'title_player' => 'Player :username',

    'variable_playername' => 'Playername',
    'variable_punisher' => 'Punisher',
    'variable_reason' => 'Reason',

    'variable_banned_on' => 'Banned On',
    'variable_banned_until' => 'Banned Until',

    'variable_muted_on' => 'Muted On',
    'variable_muted_until' => 'Muted Until',

    'variable_kicked_on' => 'Kicked On',

    'variable_warned_on' => 'Warned On',

    'variable_permanent' => 'Permanent',

    'variable_expires' => 'Expires',
    'variable_server' => 'Server',
    'variable_status' => 'Status',
    'variable_global' => 'Global',
    'variable_active' => 'ACTIVE',
    'variable_expired' => 'EXPIRED',

    'variable_unbanned_by' => 'Unbanned By',
    'variable_unban_reason' => 'Unban Reason',
    'variable_unmuted_by' => 'Unmuted By',
    'variable_unmute_reason' => 'Unmute Reason',

    'variable_datetime_on' => 'on',

    'player_joined' => '<i class="fa fa-calendar-days"></i> Joined',
    'player_last_login' => '<i class="fa fa-clock-rotate-left"></i> Last login',
    'player_last_logout' => '<i class="fa fa-delete-left"></i> Last logout',
    'player_total_playtime' => '<i class="fa fa-clock"></i> Total playtime',
    'player_current_minecraft_version' => '<i class="fa fa-screwdriver-wrench"></i> Current Minecraft version',

    'player_information' => 'Information',
    'player_punishments' => 'Punishments :punishments',
    'player_bans' => 'Bans :bans',
    'player_mutes' => 'Mutes :mutes',
    'player_kicks' => 'Kicks :kicks',
    'player_warns' => 'Warns :warns',

    'placeholder_search_player' => '&#xf002; Search player...',
    'placeholder_search' => '&#xf002; Search...',

    'homepage_text' => '<h1>Welcome to the NetworkManager Ban List.</h1>
<h5>This site contains a list of all punishments by NetworkManager.</h5>
            <h5>Total Punishments: <span class="badge badge-danger">:total_punishments</span></h5>',

    '404_title' => '404',
    '404_text' => '<p class="h2">Sorry, we can’t find the page you’re looking for.</p>
                        <p class="lead">Click the button below to go back to the homepage.</p>',
    '404_button_text' => 'Click to go home',

    'length_menu' => 'Show :menu entries',

    'tooltip_expires_in' => 'Expires in :time',
    'tooltip_expired' => 'Expired :time',

    'modal_close' => 'Close',

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
