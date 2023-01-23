<?php 
 include_once '../controllers/admincontroller.php';
 include_once '../controllers/read.php';
if(!isset($_SESSION['name'])){
  header('Location: http://localhost/admin/E-Lyrics.org/view/');
}
?>

<?php include '../includes/hedear.php'; ?>
<body class="">
    <?php include '../includes/navbar.php'; ?>
  <div class="containarr">
    <?php include '../includes/sidebar.php';?>
    <div class="containers">
      <main class="ps-3 pt-4 d-flex justify-content-between w-100">
        <div><h1 class="text-color-dark ">Lyrics</h1></div>
        <!-- model -->
        <button type="button" class="btn btn-primary me-4 btnadd" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">Add Lyrics</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <div id= aleart></div>
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addin">
            <div>
            <input type="hidden" id="hid" placeholder="hid">
            <input type="text" class="form-control" id="recipient-titre_0" placeholder="Titre" >
            <input type="text" class="form-control" id="recipient-artiste_0" placeholder="Artist">
            <input type="text" class="form-control" id="recipient-album_0" placeholder="Album" >                    
            <input type="date" class="form-control" id="recipient-date_0" placeholder="année de création">
            <textarea class="form-control" id="recipient-lyrics_0" placeholder="Lyrics" ></textarea>    
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="rv"><i class="bi bi-trash3-fill"></i></button>
        <button type="button" class="btn btn-success" id="plus"><i class="bi bi-plus-circle"></i></button>
        <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" id ="save" >Save</button>
        <button type="button" class="btn btn-warning" id ="send" data-bs-dismiss="modal">update</button>
      </div>
    </div>
  </div>
</div>
        <!-- fin mode -->
      </main>
      <section class="w-100">
          <div class="w-100 p-5"  style="overflow-x: scroll;
  overflow-y: hidden;">
            <!-- <table class="table"> -->
            <table id="table" class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">Titre</th>
                  <th scope="col">Nom d'artiste</th>
                  <th scope="col">Nom d'album</th>
                  <th scope="col">année de creation</th>
                  <th scope="col">Lyrics</th>
                  <th scope="col">options</th>
                </tr>
              </thead>
              <tbody>
                <?php 
                for ($i=0; $i <sizeof($lyrics) ; $i++) {?>
                  <tr>
                  <th scope="row"><?= $lyrics[$i]["id"] ?></th>
                  <td><?= $lyrics[$i]["Titre"] ?></td>
                  <td><?= $lyrics[$i]["nom_artist"] ?></td>
                  <td><?= $lyrics[$i]["nom_album"] ?></td>
                  <td><?= $lyrics[$i]["annee"] ?></td>
                  <td><?= $lyrics[$i]["lyrics"] ?></td>
                  <td>
                    <div class="btn-group" role="group" aria-label="Basic mixed styles example">
                    <button type="button" id="upd" class="update btn btn-warning me-1"  data-bs-toggle="modal" data-bs-target="#exampleModal" ><i class="bi bi-pencil-square"></i></button>
                    <a href="../controllers/delete.php?idd=<?= $lyrics[$i]["id"]?>"><button type="button" class="btn btn-danger"><i class="bi bi-trash"></i></button></a>
                    </div>
                  </td>
                </tr>
                 <?php } ?>
                
              </tbody>
            </table>
          </div>
        </section>
    </div>
  </div>
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
  <script src="../script/script.js"></script>
</body>
</html>