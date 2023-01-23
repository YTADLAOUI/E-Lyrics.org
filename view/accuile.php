<?php 
 include_once '../controllers/admincontroller.php';
include_once '../controllers/countStatistique.php';
 
if(!isset($_SESSION['name'])){
  header('Location: http://localhost/admin/E-Lyrics.org/view/');
}
?>
<?php include '../includes/hedear.php';?>
<body class="bg-">
<?php include '../includes/navbar.php'; ?>
  <div class="containarr">
    <?php include '../includes/sidebar.php';?>
    <div class="w-100">
      <main class="ps-3 pt-4 " ><h1 class="text-color-dark ">Dashboard</h1></main>
      <section>
      <div class="row cards" >
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100 ico">
                              <div class="card-body py-5"><i class="bi bi-people-fill text-white "> Admin</i><?= $countadmin[0]["email"]?></div>
                              
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100 ico">
                            <div class="card-body py-5"><i class="bi bi-star text-white "> Artist</i><?= $countartist[0]["artist"] ?></div>
                            
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100 ico">
                            <div class="card-body py-5"><i class="bi bi-disc-fill text-white"> Album</i><?= $countAlbum[0]["album"] ?></div>
                            
                          </div>
                      </div>
                  </div>
      </section>
    </div>
  