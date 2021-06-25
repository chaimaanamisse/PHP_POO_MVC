<?php
namespace App\Models;

use App\Models\Model;

class RoomsModel extends Model
{
    public function __construct()
         {
           $this->table = 'rooms';
         }
}