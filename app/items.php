<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class items extends Model {

	protected $table = "items";
    public $incrementing = true;
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable = [
        'id_supplier', 'id_kategori', 'nama', 'merk', 'harga', 'stok'
    ];

}
