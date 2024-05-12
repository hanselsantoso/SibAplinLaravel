<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Barang extends Model
{
    // use HasFactory;

    protected $table = 'barang';

    protected $primaryKey = 'id_barang';

    protected $fillable = [
        'id_supplier',
        'nama_barang',
        'stok_barang',
        'harga_barang',
        'status_barang',
    ];

    public $timestamps = false;

    public function supplier(): HasOne
    {
        return $this->hasOne(Supplier::class,'id_supplier','id_supplier');
    }

    public function listSupplier(): BelongsToMany
    {
        return $this->belongsToMany(Supplier::class,'id_supplier','id_supplier');
    }
}
