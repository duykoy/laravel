<?php
/**
 * Created by PhpStorm.
 * User: Dell
 * Date: 7/20/2018
 * Time: 2:33 PM
 */

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
        protected $table = 'products';
        public $timestamps = false;
}