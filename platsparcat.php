<?php require_once('header/header.php');

require ('PDO.php');
require ('DAO.php')
?>

  <header id="blackshadow" class="d-flex justify-content-center p-0 ">

    <!-- BACKGROUND ------------------------->

    <div class="container-fluid p-0 mx-2 row">
      <div class="col p-0 mt-5">
        <div class="img-fluid object-fit-cover d-flex justify-content-center ">
          <img src="Asset/img/SIZEDBANNEr.png" class=" w-100 rounded-bottom-5 rounded-top-5 " height="">
        </div>
      </div>

      <!-- BACKGROUND----------------------------->


  </header>

  <main class="mt-5">

    <div class="container-lg-fluid d-inline-block mx-2 ">
      <div class="col-12">

        <p id="colors_ombre" class="col mt-3 fw-medium fs-1 d-inline-block rounded-4"> Nos plats !</p>

      </div>
    </div>

    <!-- CARDS 1 ------------------------------>

    <div class="m-2 mt-3">
      <div class="container-fluid row d-flex justify-content-center m-0">
        <div id="platpage" class=" d-flex justify-content-center row">
        
        <?php
        
          $id=$_GET['categorie'];
            
          
          /* var_dump($id); */
          
          $plats= getPlatsbyCategorie($id,$conn);
          /*  var_dump($plats); */
          foreach($plats as $plat)
          
          {?>
        
            <div id="cardplat" class="card rounded col-12 col-lg-3 me-3 ms-3 mt-2 mb-2 p-0 shadow-lg">
             <div class="d-flex align-items-center">
              <img src="Asset/img/IMAGES/images_the_district/food/<?=$plat['image']?>" class="img-fluid rounded" style="object-fit : cover ; height : 20rem ; width : 40rem" alt="<?=$plat['libelle']?>"> 
               </div>
                <div class="card-body col-12 p-0">

                    <p class="card-title fs-4 p-2"><?= $plat['libelle']?></p>
                    <p class="card-text small p-2"><?=$plat['description']?></p>
                    <p class="card-text small p-2">Prix:<?=$plat['prix']?>€</p>

                     <div class="d-flex justify-content-end my-3 position-absolute bottom-0 w-100">
                      <a class="btn btn-outline-dark btn-lg me-2" href="plat_selectionne.php?id=<?= $plat['id']?>">Commander</a>

                    </div>
                   </div>      
                  </div>
                 <?php } ?>
                </div>
               </div>
              </div>

  </main>

<?php require_once('footer/footer.php'); 

?>
