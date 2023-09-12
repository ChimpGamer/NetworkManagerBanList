<?php

namespace App\Models;

use App\Helpers\TimeUtils;
use Carbon\Carbon;
use Carbon\CarbonInterval;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Player extends Model
{
    use HasFactory;
    use HasUuids;

    /**
     * The connection name for the model.
     *
     * @var string|null
     */
    protected $connection = 'manager';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'players';


    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'uuid';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uuid',
        'username',
        'nickname',
        'language',
        'tagid',
        'ip',
        'country',
        'version',
        'firstlogin',
        'lastlogin',
        'lastlogout',
        'online',
        'playtime'
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        'language' => 'integer',
        'tagid' => 'integer',
        'version' => ProtocolVersion::class,

        'online' => 'boolean'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = [
        'firstlogin',
        'lastlogin',
        'lastlogout'
    ];

    /**
     * Indicates if the model should be timestamped.
     *
     * @var bool
     */
    public $timestamps = false;

    protected function playtime(): Attribute
    {
        return Attribute::make(get: fn(int $value) => TimeUtils::millisToReadableFormat($value));
    }

    protected function firstlogin(): Attribute {
        return Attribute::make(get: fn(int $value) => Carbon::createFromTimestamp($value / 1000)->diffForHumans() . ' ' . __('messages.variable_datetime_on') . ' ' . TimeUtils::formatTimestamp($value));
    }

    protected function lastlogin(): Attribute {
        return Attribute::make(get: fn(int $value) => Carbon::createFromTimestamp($value / 1000)->diffForHumans() . ' ' . __('messages.variable_datetime_on') . ' ' . TimeUtils::formatTimestamp($value));
    }

    protected function lastlogout(): Attribute {
        return Attribute::make(get: fn(int $value) => Carbon::createFromTimestamp($value / 1000)->diffForHumans() . ' ' . __('messages.variable_datetime_on') . ' ' . TimeUtils::formatTimestamp($value));
    }

    public static function getName($uuid)
    {
        if ($uuid == 'f78a4d8d-d51b-4b39-98a3-230f2de0c670') return 'CONSOLE';
        $player = Player::select('username')
            ->where('uuid', $uuid)
            ->first();
        if ($player == null) return $player;
        return $player->username;
    }

    public function getAltAccounts(): Collection
    {
        return Player::all()->where('ip', $this->ip)->where('uuid', '!=', $this->uuid);
    }

    public function getTimestampFormatted($timestamp): string
    {
        return date('d-m-Y H:i:s', $timestamp / 1000);
    }
}
