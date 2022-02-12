<?php
global $title;
global $pageId;

if (isset($_SESSION['username'])){

    $user_id = $_SESSION['user_id'];
    $username = $_SESSION['username'];

    $user_id = $getFromFunc->checkInput($user_id);
    $userInfo = $getFromUser->getUserInfo($user_id);

    $first_name = $userInfo['first_name'];
    $last_name = $userInfo['last_name'];
    $email = $userInfo['email'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="icon" href="assets/img/icons/fav.ico" type="image/x-icon"/>
    <title><?php echo htmlspecialchars($title); ?></title>
</head>

<body id="<?php echo htmlspecialchars($pageId); ?>">
    <header class="sticky-lg-top bg-light">
        <!-- Navigation -->
        <nav class="navbar navbar-expand-md border-bottom">
            <div class="container-fluid px-3 px-xl-5">
                <!--LOGO-->
                <a href="index.php" class="navbar-brand">
                    <img src="assets/img/logo.png" alt="Logo" style="width:160px; height:30px;" class="light-mode-item navbar-brand-item">
                </a>
                <!-- Open Navigation Menu Button For Small Screens -->
                <button class="navbar-toggler ms-auto collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="bi bi-list"></i>
                </button>
                <!-- Collapsable Navigation -->
                <div class="collapse navbar-collapse w-100" id="navbarCollapse">
                    <!--Dropdown Category Menu -->
                    <div id="categories-menu" class="navbar-nav me-auto rounded-3">
                        <div class="nav-item dropdown rounded-3 border">
                            <a class="nav-link " href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-ui-radios-grid"></i><span> Category</span>
                            </a>
                            <!-- Links -->
                            <div class="dropdown-menu shadow-lg" aria-labelledby="navbarDropdownMenuLink">
                                <a class="dropdown-item " href="#"><i class="bi bi-mouse2"></i> PTC sites</a>
                                <a class="dropdown-item " href="#"><i class="bi bi-pie-chart"></i> Revenue Share Sites</a>
                                <a class="dropdown-item " href="#"><i class="bi bi-minecart-loaded"></i> Cloud Mining sites</a>
                                <hr class="dropdown-divider">
                                <a class="dropdown-item" href="#">All Categories</a>
                            </div>
                        </div>
                    </div>
                    <!-- Main Menu -->
                    <div class="navbar-nav navbar-nav-scroll me-auto ">
                        <a href="index.php" class="nav-link"><i class="bi bi-house"></i> Home</a>
                        <a href="news.php" class="nav-link"><i class="bi bi-newspaper"></i> News</a>
                        <?php if (isset($_SESSION['username'])){?>
                        <div class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                <i class="bi bi-plus-lg"></i> Add
                            </a>
                            <!--Dropdown Menu Links -->
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="add_funds.php"><i class="bi bi-coin"></i> Add Funds</a>
                                <a class="dropdown-item" href="add_new_ad.php"><i class="bi bi-badge-ad"></i> New Ad</a>
                                <a class="dropdown-item" href="" data-bs-toggle="modal" data-bs-target="#addProjectModal"><i class="bi bi-clipboard-data"></i> New Project</a>
                                <a class="dropdown-item" href="add_new_post.php"><i class="bi bi-pencil-square"></i> Blog Post</a>
                            </div>
                        </div><!--Add New ad, post.. Dropdown END -->
                        <?php }else{?>
                        <a href="login.php" class="nav-link"><i class="bi bi-box-arrow-in-right"></i> Login</a>
                        <a href="register.php" class="nav-link"><i class="bi bi-person-plus"></i> Register</a>
                        <?php }?>
                        <a href="" class="nav-link" data-bs-toggle="modal" data-bs-target="#reportProjectModal"><i class="bi bi-exclamation-triangle"></i> Report SCAM</a>
                    </div>
                    <!--Live Search -->
                    <div class="nav my-3 my-xl-0 px-4 align-items-center">
                        <div class="nav-item w-100">
                            <!--Live Search icon & input START-->
                            <form class="rounded border border-1 position-relative">
                                <div class="input-group ">
                                    <!-- Search Icon Button -->
                                    <span class="input-group-text border-0 pe-1 bg-white">
                                        <i class="bi bi-search me-1 "></i>
                                    </span>
                                    <!-- Search Input -->
                                    <input id="search" type="text" class="form-control border border-0 px-1 shadow-none ps-3" aria-label="Search our blog..." placeholder="Search..." onkeyup="showResult(this.value)">
                                </div>
                            </form>
                            <!--Live Search icon & input END-->
                        </div>
                        <!--Displaying Search Results START-->
                        <div class="container">
                            <div class="row">
                                <div class="col position-relative">
                                    <div class="position-absolute bg-white rounded-bottom" id="live-search"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php if (isset($_SESSION['username'])){?>
                <!-- Avatar -->
                <div class="dropdown ms-1 ms-lg-0">
                    <a class="position-relative p-0 d-inline-block" href="#" id="navbarDropdownMenu" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" height="35" alt="Avatar" loading="lazy" />
                    </a>
                    <div class="dropdown-menu dropdown-menu-end shadow" aria-labelledby="navbarDropdownMenu" id="avatar-dropdown">
                        <!-- Avatar img, Names & Email-->
                        <div class="px-3 pt-3">
                            <div class="d-flex align-items-center">
                                <div class="avatar me-3">
                                    <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" alt="Avatar" class="avatar-img rounded-circle shadow" width="38px" height="38px" />
                                </div>
                                <div>
                                    <p class="fw-bold"><?php echo htmlspecialchars($first_name ." ".$last_name); ?></p>
                                    <p class="small m-0"><?php echo htmlspecialchars($email) ?></p>
                                </div>
                            </div>
                            <hr>
                        </div>
                        <!-- Dropdown Menu Links-->
                        <a href="account.php" class="dropdown-item"><i class="bi bi-speedometer2 fa-fw me-2"></i>Dashboard</a>
                        <a href="edit_profile.php" class="dropdown-item"><i class="bi bi-gear fa-fw me-2"></i>Edit Profile</a>
                        <a href="../logout.php" class="sign-out dropdown-item"><i class="bi bi-power fa-fw me-2"></i> Sign Out</a>

                    </div>
                    <!--Avatar End-->
                </div>
                <?php } ?>
            </div>
        </nav>
    </header>