<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Layanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_layanan',
        'harga_layanan',
        'deskripsi',
        'waktu'

    ];

    public function pelanggan()
    {
        $this->hasMany(Pelanggan::class);
    }

    protected function hargaLayanan(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => number_format($value),
            set: fn (string $value) => str($value)->remove(','),
        );
    }
}
