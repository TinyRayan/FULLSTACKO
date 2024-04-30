<?php require_once('header/header.php'); 
require ('PDO.php');
$plats = get_plats($conn);
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

    <div class=" m-2 mt-3">

      <div class="container-fluid row d-flex justify-content-center m-0">
    
        <div id="platpage" class="row d-flex justify-content-center">

        <?php foreach ($plats as $plat): ?>

         <div id="cardplat" class="card col-4 flex-row ms-lg-5 mt-4" style="width: 40rem;">


          <img src="Asset/img/<?php echo $plat -> image; ?>" class=" rounded-3 border border-muted img-fluid m-auto" alt=""
            style="width: 10rem; height: fit-content;">

          <div class="card-body">

            <h5 class="card-title fs-3 mt-md-4 mt-1"><?php echo $plat -> libelle; ?></h5>
            <p class="card-text fst-italic mb-3"><?php echo $plat -> description; ?></p>
            <div id="OMBRE" class="d-flex justify-content-center">
              <a href="#" class="btn d-flex justify-content-center fw-medium shadow-lg w-75" id="bouton">Commander</a>
            </div>
          </div>
          <?php endforeach; ?>
        </div>

        <!-- CARD 1 -->

        <div class="container-fluid mt-5">
          <div class="col row">

            <div id="OMBRE" class="col d-flex justify-content-start ">

              <a class="btn btn-lg" href="RESTART.HTML" role="button">Précédent</a>

            </div>

            <div id="OMBRE" class="col d-flex justify-content-end ">

              <a class="btn btn-lg px-4" href="page2.html" role="button">Suivant</a>

            </div>
          </div>

  </main>


<?php require_once('footer/footer.php'); ?>

