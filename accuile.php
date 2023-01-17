<?php include './includes/hedear.php';?>
<body class="bg-">
  
<nav class="navbar bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand">E-Lyrics</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
      <div class="respo">
      <button class="navbar-toggler me-2" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                <span class="navbar-toggler-icon" data-bs-target="#offcanvasRight"></span>
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
                  <a href="index.html"><i class="bi bi-speedometer"></i> Dashboard</a>
            </li>
              <li class="mt-2 siz">
                  <a href="charts.html"><i class="bi bi-music-note-beamed"></i> Lyrics</a>
              </li>
              <li class="mt-2 siz">
                  <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
              </li>
              <li class="mt-2 siz">
                  <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
              </li>
          </div>  
          <!-- hh -->
        </div>
      </div>
    </div>
    </form>
  </div>
</nav>
<div class="containarr">
  <div class="sidebar">
    <div class="">
      <b><p class="welc">welcome</p></b>
        <li class="siz">
            <b><a href="index.html"><i class="bi bi-speedometer"></i> Dashboard</a></b>
      </li>
        <li class="mt-2 siz">
            <b><a href="charts.html"><i class="bi bi-music-note-beamed"></i> Lyrics</a></b>
        </li>
        <li class="mt-2 siz">
            <a href="tables.html"><i class="fa fa-fw fa-table"></i> Tables</a>
        </li>
        <li class="mt-2 siz">
            <a href="forms.html"><i class="fa fa-fw fa-edit"></i> Forms</a>
        </li>
    </div>               
    
  </div>
    <div class="containers">
      <main class="d-flex justify-content-center" ><h1 class="text-color-dark ">Dashboard</h1></main>
      <section>
      <div class="row cards" >
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                              <div class="card-body py-5">Primary Card</div>
                              <div class="card-footer d-flex">
                                View Details
                                <span class="ms-auto">
                                  <i class="bi bi-chevron-right"></i>
                                </span>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                            <div class="card-body py-5">Warning Card</div>
                            <div class="card-footer d-flex">
                              View Details
                              <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                              </span>
                            </div>
                          </div>
                      </div>
                      <div class="col-md-4 mb-3">
                          <div class="card bg-dark text-white h-100">
                            <div class="card-body py-5">Success Card</div>
                            <div class="card-footer d-flex">
                              View Details
                              <span class="ms-auto">
                                <i class="bi bi-chevron-right"></i>
                              </span>
                            </div>
                          </div>
                      </div>
                  </div>
      </section>
    </div>
  </div>
</body>
</html>