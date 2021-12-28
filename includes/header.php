<?php
include ('core/init.php');
global $title;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="../assets/css/style.css" type="text/css">
    <link rel="icon" href="../img/icons/fav.ico" type="image/x-icon" />
    <title><?php echo htmlspecialchars($title); ?></title>
</head>
<body>
<header class="sticky-lg-top bg-light">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md border-bottom">
       <div class="container-fluid px-3 px-xl-5">
           <!--LOGO-->
           <a href="index.php" class="navbar-brand">
               <img src="assets/img/logo.png" alt="Logo" style="width:160px; height:30px;"
               class="light-mode-item navbar-brand-item">
           </a>
           <!-- Open Menu Button For Small Screens -->
           <button class="navbar-toggler ms-auto collapsed" type="button"
                   data-bs-toggle="collapse"
                   data-bs-target="#navbarCollapse"
                   aria-controls="navbarCollapse"
                   aria-expanded="false" aria-label="Toggle navigation">
               <i class="bi bi-list"></i>
           </button>
           <!-- Collapsing Navigation Links -->
           <div class="collapse navbar-collapse w-100" id="navbarCollapse">
               <!--Dropdown Category Menu -->
               <ul class="navbar-nav me-auto ">
                   <li class="nav-item dropdown rounded-3 border">
                       <a class="nav-link "
                          href="#"
                          id="navbarDropdownMenuLink"
                          role="button"
                          data-bs-toggle="dropdown"
                          aria-expanded="false">
                           <i class="bi bi-ui-radios-grid"></i><span> Category</span>
                       </a>
                       <!-- Links -->
                       <ul class="dropdown-menu shadow-lg"
                           aria-labelledby="navbarDropdownMenuLink">
                           <li><a class="dropdown-item " href="#"><i class="bi bi-mouse2"></i> PTC sites</a></li>
                           <li><a class="dropdown-item " href="#"><i class="bi bi-pie-chart"></i> Revenue Share Sites</a></li>
                           <li><a class="dropdown-item " href="#"><i class="bi bi-minecart-loaded"></i> Cloud Mining sites</a></li>
                           <li><hr class="dropdown-divider"></li>
                           <li><a class="dropdown-item" href="#">All Categories</a></li>
                       </ul>
                   </li>
               </ul>
               <!-- Main Menu -->
               <ul class="navbar-nav navbar-nav-scroll me-auto ">
                   <li class="nav-item">
                       <a href="index.php" class="nav-link">Home</a>
                   </li><!--Home END-->
                   <!--Dropdown Menu-->
                   <li class="nav-item dropdown">
                       <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                           +Add
                       </a>
                       <!--Dropdown Menu Links -->
                       <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                           <li><a class="dropdown-item" href="#">PTC</a></li>
                           <li><a class="dropdown-item" href="#">Revenue Shares</a></li>
                       </ul>

                   </li><!--Category Dropdown END -->
                   <li class="nav-item">
                       <a href="login.php" class="nav-link">Login</a>
                   </li><!--Login END-->
                   <li class="nav-item">
                       <a href="register.php" class="nav-link">Register</a>
                   </li><!--Register END-->

               </ul><!-- Nav Links END -->

               <!--Live Search Input -->
               <form class="d-flex">
                   <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                   <button class="btn btn-outline-success" type="submit">Search</button>
               </form><!--Live Search END -->

           </div>

           <!-- Avatar -->
           <div class="dropdown ms-1 ms-lg-0">
               <a class="position-relative p-0 d-inline-block"
                  href="#"
                  id="navbarDropdownMenu"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false">
                   <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                        class="rounded-circle"
                        height="35"
                        alt="Avatar"
                        loading="lazy" />
               </a>
               <ul class="dropdown-menu dropdown-animation dropdown-menu-end  shadow"
                   aria-labelledby="navbarDropdownMenu"
                   id="avatar-dropdown">
                   <!-- Avatar img, Names & Email-->
                   <li class="px-3 pt-3">
                       <div class="d-flex align-items-center">
                           <div class="avatar me-3">
                               <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                                    alt="Avatar"
                                    class="avatar-img rounded-circle shadow" width="38px" height="38px"/>
                           </div>
                           <div>
                               <p class="fw-bold">Firstname Lastname</p>
                               <p class="small m-0">admin@adminemail.com</p>
                           </div>
                       </div>
                       <hr>
                   </li>
                   <!-- Dropdown Menu Links-->
                   <li>
                       <a href="account.php" class="dropdown-item"><i class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard</a>
                   </li>
                   <li>
                       <a href="profile_settings.php" class="dropdown-item"><i class="bi bi-gear fa-fw me-2"></i>Profile Settings</a>
                   </li>
                   <li>
                       <a href="logout.php" id="sign-out" class="dropdown-item"><i class="bi bi-power fa-fw me-2"></i> Sign Out</a>
                   </li>
               </ul><!--Avatar End-->
           </div>

       </div>
    </nav>

</header>

