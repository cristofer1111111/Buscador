<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Search extends Model
{
    use HasFactory;
    protected $table ='search';
    protected $primaryKey = 'id';
    protected $fillable =['name','description','type','images_id'];


    public function images()
    {
        return $this->belongsTo(images::class);

}
}
