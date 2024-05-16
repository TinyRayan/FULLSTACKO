<?php require_once('header/header.php');

require ('PDO.php');

?>
<?php 


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

        <p id="colors_ombre" class="col mt-3 fw-medium fs-1 d-inline-block rounded-4"> Tous nos plats! </p>

      </div>
    </div>

    <!-- CARDS 1 ------------------------------>

    <div class="m-2 mt-3">

      <div class="container-fluid row d-flex justify-content-center m-0">
    
        <div id="platpage" class="row d-flex justify-content-center">
        <?php foreach ($plats as $plat) : ?>
        <?php
        
          if(isset($_GET['categorie']));{
            
          }
          var_dump($id);

        ?>
          










        <?php endforeach ?>
        </div>

      </div>

    </div>
        <!-- CARD 1 -->

  </main>


<?php require_once('footer/footer.php'); 

?>
