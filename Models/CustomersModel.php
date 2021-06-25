<?php
namespace App\Models;

class CustomersModel extends Model
{
   // TO DO ajouter les attributs

   public function __construct()
   {
       $class = str_replace(__NAMESPACE__.'\\','',__CLASS__);
       $this->table = strtolower(str_replace('Model', '', $class));
   }
}