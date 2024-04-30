
<?php require_once('header/header.php'); 


require('PDO.php');
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

      <!-- BACKGROUND----------------------------->

      <!-- SEARCH BAR ---------------------------->
     
      <div id="whiteshadow" class="col-md-3 d-none d-md-block offset-5 position-absolute align-self-center mt-5">
        <form class="form-inline my-2 my-lg shadow-lg" >
          <input class="form-control mr-sm-2" type="search" placeholder="Search" id="searchInput" aria-label="Search">
          <div id="searchResults" class="position-fixed bg-body-tertiary rounded-3 mt-2 col-12 row"></div>
        </form>
    </div>
    
       
  </header>

  <!-- SEARCH BAR ---------------------------->

 <main class="mt-5">

    <!-- CARDS 1 ------------------------------>
 
  <?php $categories = get_categories($conn); ?>
   
    <div class="container-fluid mt-3">

     <div id="cardtop" class="row d-flex justify-content-center ">
     </div>
      <?php foreach($categories as $categorie):  ?>

        <div class="col-10 col-sm-6 col-md-3 col-lg-3 mb-4 ms-lg-5 mx-auto mx-md-0">
          <div id="cardplat" class="card">
            <a id="colorcards" href="plats.html">
              <img src="Asset/img/IMAGES/images_the_district/category/<?php echo $categorie->image; ?>" height="500rem"
                class="card-img-top" alt="<?php echo $categorie->libelle; ?>">
              <div class="card-body">
                <h5 class="card-title"><?php echo $categorie->libelle; ?></h5>
            </a>
          </div>
        </div>
      <?php endforeach; ?> 
    </div>

    <!-- CARDS 1 ------------------------------------>


    <!-- DISHES 1-3 ------------------------------------>
 
  <?php $plats = get_plats($conn); $count = 0;?>

    <div class="container-fluid m-0 p-0 mt-5 d-none d-lg-block ">

      <div class= "m-0 mt-5 d-flex justify-content-center" >
      <?php foreach ($plats as $plat) {

if ($count < 3) {
$count++;

?>
      <div id= "cardplat" class= "card col-12 col-md-4 d-flex flex-row ms-5 mb-4" >

          <img src="Asset/img/IMAGES/images_the_district/food/<?php echo $plat -> image; ?>"
            class=" rounded-3 mt-0 me-2 shadow " alt="" style="width: 11rem; height: 11rem;">

           <div class= "card-body p-0" >

            <h5 class= "card-title fs-3" > <?php echo $plat -> libelle; ?> </h5>
            <p class= "card-text fst-italic" > <?php echo $plat -> description; ?> </p>
            <br>

          </div>

        </div>


      </div>
      
      <?php  }}?>

    </div>


  </main>




<!-- FOOTER PHP REPLACING ----------------------------------------------------------------------------------------------->

 <!--  <footer>

    <div class="container-fluid p-0">
      <div class=" m-2 mt-5 d-flex justify-content-center ">

        <div class="col-2 col-md-2 d-flex justify-content-center ">
          <a class=" d-flex align-content-center" href="#">
            <img id="sociallogo" class="mx-3" src="Asset/img/facebook.svg" width="50rem">
          </a>
        </div>

        <div class="col-2 col-md-2 d-flex justify-content-center">
          <a class=" d-flex align-content-center" href="#">
            <img id="sociallogo" class="mx-3" src="Asset/img/twitter-x.svg" width="50rem">
          </a>
        </div>

        <div class="col-md-2 d-none d-md-block">
          <a class=" d-flex align-content-center justify-content-center" href="#">
            <img id="sociallogo" class="mx-3"
              src="Asset/img/IMAGES/images_the_district/the_district_brand/logo_transparent.png" alt="" width="150rem">
          </a>
        </div>

        <div class="col-2 col-md-2 d-flex justify-content-center">
          <a class=" d-flex align-content-center" href="#">
            <img id="sociallogo" class="mx-3" src="Asset/img/linkedin.svg" width="50rem">
          </a>
        </div>

        <div class="col-2 col-md-2 d-flex justify-content-center">
          <a class=" d-flex align-content-center" href="#">
            <img id="sociallogo" class="mx-3" src="Asset/img/instagram.svg" width="50rem">
          </a>
        </div>

      </div>
    </div>


  </footer>






  </div>
  
  <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
  <script src="Asset/javascript/json.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

</body>

</html> -->


<?php require_once('footer/footer.php'); ?>





