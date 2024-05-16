<?php 
require 'PDO.php';
require_once 'header/header.php';
require 'classes.php';
?>

<!-- NAVBAR 1 --------------------------------->

<header class="d-flex justify-content-center p-0 ">

  <!-- BACKGROUND ------------------------->

  <div class="container-fluid p-0 mx-2 row">
    <div class="col-12 col-md-12 p-0 mt-5">
      <div id="blackshadow" class="img-fluid object-fit-cover d-flex justify-content-center ">
        <img src="Asset/img/SIZEDBANNEr.png" class=" w-100 rounded-bottom-5 rounded-top-5 ">
      </div>
    </div>
  </div>

  <!-- BACKGROUND----------------------------->

  <!-- SEARCH BAR ---------------------------->

  <div class="container-fluid d-flex justify-content-center p-0 align-self-center position-absolute ">
    <div id="whiteshadow" class="col-md-4 d-none d-md-block ">
      <form class="form-inline my-2 my-lg shadow-lg">
        <input class="form-control" type="search" placeholder="Search" id="searchInput" aria-label="Search">
        <div id="searchResults" class="position-fixed bg-body-tertiary rounded-3 mt-2 col-12 row"></div>
      </form>
    </div>
  </div>

</header>

<!-- SEARCH BAR ---------------------------->

<main class="mt-5">

  <!-- CARDS 1 ------------------------------>

  <?php $categories = GetCategories($conn); ?>

  <div class="container-fluid mt-3">
    <div id="cardtop" class="row d-flex justify-content-center ">
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
   </div>
  </div>

  <!-- CARDS 1 ------------------------------------>


  <!-- DISHES 1-3 ------------------------------------>

  <?php $plats = GetPlats($conn);
   $count = 0; ?>
    <div class="container-fluid m-0 p-0 mt-5 d-none d-lg-block ">
     <div class="m-0 mt-5 d-flex row justify-content-center">
      <?php foreach ($plats as $plat) {
       if ($count < 3) {
        $count++; ?>
         <div id="cardplat" class="card col-12 col-md-4 d-flex flex-row mb-4 mx-4 p-0">
          <img src="Asset/img/IMAGES/images_the_district/food/<?php echo $plat->image; ?>"
           class=" rounded-3 mt-0 me-2 shadow " alt="" style="width: 11rem; height: 11rem;">
            <div class="card-body p-0">
             <h5 class="card-title fs-2"> <?php echo $plat->libelle; ?> </h5>
              <p class="card-text fst-italic"> <?php echo $plat->description; ?> </p>
               <br>
         </div>
        </div>
       <?php }}?>
      </div>
     </div>
    </main>
   <?php require_once ('footer/footer.php'); ?>