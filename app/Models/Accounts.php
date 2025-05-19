<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Account extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'role',
        'status',
    ];

    /**
     * Get the orders for the account.
     */
    public function orders()
    {
        return $this->hasMany(Order::class);
    }
}
