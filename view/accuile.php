<?php 
 include_once '../controllers/admincontroller.php';
 
if(!isset($_SESSION['name'])){
  header('Location: http://localhost/admin/E-Lyrics.org/view/');
}
?>
<?php include '../includes/hedear.php';?>
<body class="bg-">
<?php include '../includes/navbar.php'; ?>
  <div class="containarr">
    <?php include '../includes/sidebar.php';?>
    <div class="">
      <main class="ps-3 pt-4 " ><h1 class="text-color-dark ">Dashboard</h1></main>
      <section>
      <div class="row cards" >
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                              <div class="card-body py-5">Primary Card</div>
                              
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                            <div class="card-body py-5">Warning Card</div>
                            
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                            <div class="card-body py-5">Success Card</div>
                            
                          </div>
                      </div>
                  </div>
      </section>
    </div>
  