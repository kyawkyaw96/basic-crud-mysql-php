<div class="container">
  <nav class="navbar navbar-expand-lg bg-light shadow-sm ">
    <div class="container-fluid d-flex justify-content-between">
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse " id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="<?= url('index.php')?>">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= url('about.php')?>">About</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
              List
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="<?= url('list-create.php')?>">Create List</a></li>
              <li><a class="dropdown-item" href="<?= url('list-index.php')?>">List </a></li>
              <li>
            </ul>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
</div>