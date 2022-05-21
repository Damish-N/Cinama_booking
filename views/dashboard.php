<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
    } ?>

<!DOCTYPE html>
<html>

<head>
    <title>Responsive Admin Dashboard</title>

    <meta name="viewpoint" content="width=device-width,initaial-scale=1.0" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../css/dashboard.css" />
</head>

<body>
    <div class="dashcontainer">
        <?php include './inc/sidebar.php' ;
            header("Location:http://localhost/cinama/views/dashboard/theaterList.php");
        ?>
        <div class="main">
           
        </div>
    </div>



    <script>
    function toggleMenu() {
        let toggle = document.querySelector(".toggle");
        let navigation = document.querySelector(".navigation");
        toggle.classList.toggle("active");
        navigation.classList.toggle("active");
    }
    </script>
</body>

</html>