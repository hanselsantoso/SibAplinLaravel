<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    use HasFactory;
    protected $table = 'supplier';

    protected $primaryKey = 'id_supplier';

    protected $fillable = [
        'nama_supplier',
        'email',
        'telp',
        'status',
    ];

    public $timestamps = false;

    public function barang(): BelongsTo
    {
        return $this->belongsTo(Barang::class,'id_supplier','id_supplier');
    }

    public function listBarang(): HasMany
    {
        return $this->hasMany(Barang::class,'id_supplier','id_supplier');
    }
}
