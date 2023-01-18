<?php include './includes/hedear.php'; ?>
<?php include './includes/hedear.php';?>
<body class="">
    <?php include './includes/navbar.php'; ?>
  <div class="containarr">
    <?php include './includes/sidebar.php';?>
    <div class="containers">
      <main class="ps-3 pt-4 d-flex justify-content-between w-100">
        <div><h1 class="text-color-dark ">Lyrics</h1></div>
        <!-- model -->
        <button type="button" class="btn btn-primary me-4 btnadd" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@fat">+add Lyrics</button>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"></h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="addin">
            <div>
            <input type="text" class="form-control" id="recipient-titre_0" placeholder="Titre">
            <input type="text" class="form-control" id="recipient-artiste_0" placeholder="Artist">
            <input type="text" class="form-control" id="recipient-album_0" placeholder="Album">                    
            <input type="date" class="form-control" id="recipient-date_0" placeholder="année de création">
            <textarea class="form-control" id="recipient-lyrics_0" placeholder="Lyrics"></textarea>    
            </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" id="rv"><i class="bi bi-trash3-fill"></i></button>
        <button type="button" class="btn btn-success" id="plus"><i class="bi bi-plus-circle"></i></button>
        <button type="button" class="btn btn-secondary" id="close" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary"id ="save">Save</button>
      </div>
    </div>
  </div>
</div>
        <!-- fin mode -->
      </main>
      <section class="w-100">
          <div class="w-100 p-5" >
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">#</th>
                  <th scope="col">First</th>
                  <th scope="col">Last</th>
                  <th scope="col">Handle</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">1</th>
                  <td>Mark</td>
                  <td>Otto</td>
                  <td>@mdo</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                  <td>@fat</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td colspan="2">Larry the Bird</td>
                  <td>@twitter</td>
                </tr>
              </tbody>
            </table>
          </div>
        </section>
    </div>
  </div>
  <script src="./script/script.js"></script>
</body>
</html>