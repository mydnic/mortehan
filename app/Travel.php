<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    protected $fillable = ['start', 'end'];

    protected $dates = ['start', 'end', 'created_at', 'updated_at'];

    public function participants()
    {
        return $this->belongsToMany(Uses::class);
    }

    public static function current()
    {
        return self::where('end', '>=', now())->first();
    }
}
