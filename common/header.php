<?php include(dirname(__FILE__)."/config.php"); ?>
<div class="containerHeader">
        <dev class=" search">
            <input id="searchBar" class="searchbar" type="text" placeholder="Search in...">
            <a id="btnSearch" class="btn-search"><i class="fa fa-search" aria-hidden="true"></i></a>
        </dev>

        <div class="sear">
            <img src="./image/logo2.png" alt="">
        </div>
        <div class="part headericon">
            <i class="fa fa-user-circle" aria-hidden="true"></i>
            <a href="<?php  echo get_url("views/joinus.php"); ?>" class="join"> Join Us</a> 
        </div>
    </div>
    <hr>
    <header>
        <div id="nav">
            <ul>
                <li><a href="<?php  echo get_url("home.php"); ?>">Home</a></li>
                <li><a href="./views/theaterList.php">Theaters</a></li>
                <li><a href="">Category</a>
                    <ul class="dropdown">
                        <li><a href="<?php  echo get_url("views/movies.php?movie_type=English"); ?>">English Movies  &nbsp; </a></li>
                        <li><a href="<?php echo get_url('views/movies.php?movie_type=Tamil'); ?>">Tamil Movies  &nbsp; </a></li>
                        <li><a href="<?php echo get_url('views/movies.php?movie_type=Sinhala'); ?>">Sinhala Movies  &nbsp; </a></li>
                    </ul>
                </li>
                <li><a href="">About us</a></li>
                <li><a href="<?php  echo get_url("views/signin.php"); ?>">Log in</a></li>

            </ul>
        </div>
    </header>
    <hr>
