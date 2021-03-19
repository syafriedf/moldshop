<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\OrderController;

class Order extends Model
{
    use HasFactory;
    
    // protected $primaryKey = 'id';
    public $timestamps = false;

    protected $fillable = [
       'date_in',
        	'from_dep',
         	'to_dep',
           	'needed',
               	'week',
                  	'item',
                       	'jenis',
                             'jumlah',
                              'problem',
                                 	'maker'	
     ];
}
