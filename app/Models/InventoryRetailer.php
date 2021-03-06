<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InventoryRetailer extends Model
{
    use HasFactory;

    protected $primaryKey = 'InventoryId';

    protected $hidden = ['created_at', 'updated_at'];

    public function medicine()
    {
        return $this->belongsTo(Medicine::class, 'MedicineId');
    }
}
