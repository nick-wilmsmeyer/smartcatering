<?php echo '
<nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
  <i class="fas fa-bars"></i>
</button>
<!-- Collapsible wrapper -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
  <!-- Navbar brand -->
  <a class="navbar-brand mt-2 mt-lg-0" href="index.php">
    <img src="/assets/Panera-Bread-logo.png" height="60" alt="Panera Logo" loading="lazy"/>
  </a>
  <!-- Left links -->
  <ul class="navbar-nav me-auto mb-2 mb-lg-0">
    <li class="nav-item">
      <div class="dropdown show">
        <a class="nav-link dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
          Catering Menu
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Favorite Orders</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Types of Catering</a>
    </li>
  </ul>
  <!-- Left links -->
</div>
<!-- Collapsible wrapper -->
<!-- Right elements -->
<div class="d-flex align-items-center">
  <!-- Icon -->
  <a class="text-reset me-3" href="#">
    <i class="fas fa-shopping-cart"></i>
  </a>
  <!-- Notifications -->
  <div class="dropdown">
    <a class="text-reset me-3 dropdown-toggle hidden-arrow" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <i class="fas fa-bell"></i>
      <span class="badge rounded-pill badge-notification bg-danger">1</span>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
      <li>
        <a class="dropdown-item" href="#">Some news</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Another news</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Something else here</a>
      </li>
    </ul>
  </div>
  <!-- Avatar -->
  <div class="dropdown">
    <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#" id="navbarDropdownMenuAvatar" role="button" data-bs-toggle="dropdown" aria-expanded="false">
      <img src="/assets/person-icon.png" class="rounded-circle" height="25" alt="blank person" loading="lazy"/>
    </a>
    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
      <li>
        <a class="dropdown-item" href="#">My profile</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Settings</a>
      </li>
      <li>
        <a class="dropdown-item" href="#">Logout</a>
      </li>
    </ul>
  </div>
</div>
</div>
</nav>';

?>
