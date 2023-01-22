<nav class="navbar bg-danger">
  <div class="container-fluid">
    <b><a class="navbar-brand text-light">E-Lyrics</a></b>
    <form class="d-flex" role="search">
      <div class="respo">
      <button class="navbar-toggler me-2 "  type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon " data-bs-target="#offcanvasRight"></span>
            </button>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight"              aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasRightLabel">welcome</h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <!-- hh -->
          <div class="">
              <li class="siz">
                  <a href="accuile.php"><i class="bi bi-speedometer"></i> Dashboard</a>
            </li>
              <li class="mt-2 siz">
                  <a href="lyrics.php?serach"><i class="bi bi-music-note-beamed"></i> Lyrics</a>
              </li>
              <li class="mt-2 siz">
                  <a href="#"><i class="fa fa-fw fa-table"></i> Admin</a>
              </li>
              <li class="mt-2 siz">
                  <a href="../controllers/admincontroller.php?log"><i class="bi bi-box-arrow-left"></i>Logout</a>
              </li>
          </div>  
          <!-- hh -->
        </div>
      </div>
    </div>
    </form>
  </div>
</nav>