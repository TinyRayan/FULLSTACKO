<?php 
class Categorie {
    public $id_categorie;
    public $libelle;
    
    public function __construct($id_categorie , $libelle){

        $this->id_categorie = $id_categorie ;
        $this->libelle = $libelle ;
        
    }

    public function GetIdCat(){
    return $this->id_categorie;
    }
    
    public function GetLibelle(){
        return $this->libelle;
    }

}

class Plat {
    public $libelle;
    public $prix;
    public $image;
    public $id_categorie;
    public $categorie_libelle;
    public $description;

    public function __construct($libelle = null , $prix = null , $image = null , $description , $id_categorie = null , $categorie_libelle = null){

        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->image = $image;
        $this->description = $description;
        $this->id_categorie = $id_categorie;
        $this->categorie_libelle = $categorie_libelle;

    }

    public function GetLibelle() {
        return $this->libelle ;
    }

    public function GetPrix() {
        return $this->prix ;
    }
    
    public function GetImage(){
        return $this->image ;
    }

    public function GetIdCat(){
        return $this->id_categorie ;
    }

    public function GetCatLib(){
        return $this->categorie_libelle ;
    }

    public function GetDescription(){
        return $this->description;
    }



public function cardcat(){
        
   echo "        
    <div id='cardplat' class='card col-4 flex-row ms-lg-5 me-lg-5 mt-4' style='width: 40rem;'>
 
   <img src='Asset/img/IMAGES/images_the_district/food/".$this->GetImage()."' class=' rounded-3 border border-muted img-fluid m-auto' alt=''
      style='width: 10rem; height: 7rem;'>
       <p id='etiquette' class= 'position-absolute rounded-bottom fs-5 p-1' >".$this->GetPrix()."</p>   
    <div class='card-body'>
      <h5 class='card-title fs-3 mt-md-4 mt-1'>".$this->GetLibelle()."</h5>
      <p class='card-text fst-italic mb-3'>".$this->GetDescription()."</p>
      <div id='OMBRE' class='d-flex justify-content-center'>
        <a href='#' class='btn d-flex justify-content-center fw-medium shadow-lg w-75'  id='bouton'>Commander</a>
      </div>

    </div>  

  </div>" ;
    
}

}






?>