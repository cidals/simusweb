<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Data extends Model
{
    use HasFactory;


    public $table = "datas";

    protected $fillable = [
        'name',
        'address',
        'no_nib',
        'kbli_code',
        'kbli_name',
        'date_input',
        'user_id',
        'risk_id',
    ];

    /**
     * Get the user that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    /**
     * Get the user that owns the Data
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function risk(): BelongsTo
    {
        return $this->belongsTo(Risk::class, 'risk_id', 'id');
    }

}
