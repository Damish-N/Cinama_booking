<?php include(dirname(__FILE__) . "/config.php");
// echo ($_SESSION['usertype']);
// echo ($_SESSION['firstName']);
// exit;
?>

<div class="containerHeader">
    <dev class=" search">
        <input id="searchBar" class="searchbar" type="text" placeholder="Search in...">
    </dev>

    <div class="sear">
        <img src="<?php echo get_url("image/logo2.png"); ?>" alt="">
    </div>
    <?php
    if (isset($_SESSION['email'])) { ?>
    <div class="part headericon">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        
        <?php if ($_SESSION['usertype'] == 1): ?>
            
            <a href="<?php echo get_url("views/profilePage.php"); ?>" class="join"><?php echo $_SESSION['firstName']; ?></a>
            <?php else: ?>
                
                <a href="<?php echo get_url("views/tprofilePage.php"); ?>" class="join"><?php echo $_SESSION['theaterName']; ?></a>
            <?php endif ?>
        
        <a href="<?php echo get_url("./controllers/logout.php"); ?>" class="join"> LogOut</a>
    </div>
    <?php } else {
        ?>
    <div class="part headericon">
        <i class="fa fa-user-circle" aria-hidden="true"></i>
        <a href="<?php echo get_url("views/joinus.php"); ?>" class="join"> Join Us</a>
        <a href="<?php echo get_url("views/signin.php"); ?>" class="join"> Login</a>
    </div>

    <?php } ?>

</div>
<hr>


<?php if (isset($_SESSION['usertype'])): ?>
    <?php if ($_SESSION['usertype'] == 1): ?>
    <header>
        <div id="nav">
            <ul>
                <li><a href="<?php echo get_url("home.php"); ?>">Home</a></li>
                <li><a href="<?php echo get_url("views/theaterList.php"); ?>">Theaters</a></li>
                <li><a href="">Category</a>
                    <ul class="dropdown">
                        <li><a href="<?php echo get_url("views/movies.php?movie_type=English"); ?>">English Movies
                                &nbsp; </a></li>
                        <li><a href="<?php echo get_url('views/movies.php?movie_type=Tamil'); ?>">Tamil Movies
                                &nbsp; </a>
                        </li>
                        <li><a href="<?php echo get_url('views/movies.php?movie_type=Sinhala'); ?>">Sinhala Movies
                                &nbsp; </a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <?php elseif ($_SESSION['usertype'] == 2): ?>
    <header>
        <div id="nav">
            <ul>
                <li><a href="<?php echo get_url("home.php"); ?>">Home</a></li>
                <li><a href="<?php echo get_url("views/addMoive.php"); ?>">Add movie</a></li>

            </ul>
    </header>
    </div>
    <?php else:?>
    <?php endif; ?>
<?php endif; ?>
<hr>