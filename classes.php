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

    public function __construct($libelle = null , $prix = null , $image = null , $id_categorie = null , $categorie_libelle = null){

        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->image = $image;
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

}

/* public function cardcat(){
          <?php foreach ($categories as $categorie): ?>
        <div class="col-10 col-sm-6 col-md-4 col-lg-3 mb-4 mx-lg-3 mx-md-0">
          <div id="cardplat" class="card">
            <a type="submit" id="colorcards" href="platsparcat.php?categorie=<?php echo $categorie->id_categorie; ?>">
              <img src="Asset/img/IMAGES/images_the_district/category/<?php echo $categorie->image; ?>" height="600rem"
                class="card-img-top" alt="<?php echo $categorie->libelle; ?>">
              <div class="card-body">
                <h5 class="card-title fs-2 text-center bg-secondary-subtle rounded-pill">
                  <?php echo $categorie->libelle; ?></h5>
                    </a>
         </div>
       </div>
     </div>
    <?php endforeach; ?>
}
 */



?>