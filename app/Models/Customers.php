<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customers extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $fillable=['member_code',
    'phone','password',
    'last_active_at'];

    public $datetime = true;
    public function ticket():HasMany{
        return $this->hasMany(Ticket::class);
    }
}
