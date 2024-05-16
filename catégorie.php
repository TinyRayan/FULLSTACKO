<?php require_once('header/header.php'); 
      require('PDO.php'); 
      $categories = GetCategories($conn);
?> 


  <header class="d-flex justify-content-center p-0 ">

    <!-- BACKGROUND ------------------------->

    <div class="container-fluid p-0 mx-2 row">
      <div class="col-12 col-md-12 p-0 mt-5">
        <div id="blackshadow" class="img-fluid object-fit-cover d-flex justify-content-center ">
          <img src="Asset/img/SIZEDBANNEr.png" class=" w-100 rounded-bottom-5 rounded-top-5 ">
        </div>
      </div>

      <!-- BACKGROUND----------------------------->

      <!-- SEARCH BAR ---------------------------->

      <div id="whiteshadow" class="col-md-3 d-none d-md-block offset-5 position-absolute align-self-center mt-5">
        <form class="form-inline my-2 my-lg shadow-lg">
          <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        </form>
      </div>
    </div>

  </header>

  <!-- SEARCH BAR ---------------------------->




   <!-- CARDS 1 ------------------------------>
  <main class="mt-5">
    
   <div class="container-fluid mt-3 ">

   <div class="container-fluid mt-3">
    <div id="cardtop" class="row d-flex justify-content-center ">
      <?php foreach ($categories as $categorie): ?>
        <div class="col-10 col-sm-6 col-md-4 col-lg-3 mb-4 mx-lg-3 mx-md-0">
          <div id="cardplat" class="card">
            <a id="colorcards" href="plats.php?categorie=<?php echo $categorie->id_categorie; ?>">
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
   </div>
  </div>
    <!-- CARDS 1 ------------------------------->


  

  <!-- BUTTON ------------------------------------>




    <div class="container-fluid mt-5">
      <div class="col row">

        <div id="blackshadow" class="col d-flex justify-content-start ">

          <a class="btn btn-lg " href="RESTART.HTML" role="button">Précédent</a>

        </div>

        <div id="blackshadow" class="col d-flex justify-content-end">

          <a class="btn btn-lg " href="page2.html" role="button">Suivant</a>

        </div>
      </div>




  </main>




 <?php require_once('footer/footer.php'); ?>

 