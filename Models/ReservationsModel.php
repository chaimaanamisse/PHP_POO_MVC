<?php
namespace App\Models;

use App\Models\Model;

class ReservationsModel extends Model
{   
    protected $id;
    protected $pension;
    protected $nb_chambres;
    protected $nb_lit_bebe;
    protected $users_id;

    

    public function __construct()
    {
        $this->table = 'reservations';
    }

    public function getId(){
        return $this->id;
    }

    public function setId($id){
        $this->id = $id;
        return $this;
    }


    public function getPension(){
        return $this->pension;
    }

    public function setPension($pension){
        $this->pension = $pension;
        return $this;
    }

    public function getNbChambres(){
        return $this->nb_chambres;
    }

    public function setNbChambres($nb_chambres){
        $this->nb_chambres = $nb_chambres;
        return $this;
    }

    public function getNbLitBebe(){
        return $this->nb_lit_bebe;
    }


    public function setNbLitBebe($nb_lit_bebe){
        $this->nb_lit_bebe = $nb_lit_bebe;
        return $this;
    }

    public function getUsersId(){
        return $this->users_id;
    }


    public function setusersId($users_id){
        $this->users_id = $users_id;
        return $this;
    }

    

}