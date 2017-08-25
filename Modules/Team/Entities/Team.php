<?php

namespace Modules\Team\Entities;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    // Auto cast attributes to specific data type
    protected $casts = [
        'races' => 'array',
    ];

    protected $fillable = [
        'fullname',
        'nickname',
        'description',
        'races',
        'team_color_1',
        'team_color_2',
        'established_at',
        'manager_id',
        'captain_id',
        'logo',
        'svg',
    ];
}
