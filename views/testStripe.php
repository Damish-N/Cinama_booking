<?php


require ('../controllers/config.php');
$movie_id = $_GET['movie_id'];
$theater_id = $_GET['theater_id'];
$date = $_GET['date'];
$timeSlot = $_GET['time'];
$userId = $_GET['userId']
?>

<form <?php echo 'action="./successPage.php?movie_id='.$movie_id.'&theater_id='.$theater_id.'&date='.$date.'&time='.$timeSlot.'&userId='.$userId.'&tot='.($total).'
&odc='.$temp_no_odc_seat_stripe.'&bal='.$temp_no_bal_seat_stripe.'&box='.$temp_no_box_stripe.'
"'?> method="post">
    <script
        src="https://checkout.stripe.com/checkout.js"
        class="stripe-button"
        data-key="<?php echo $Publishable_key ?>"
        data-amount="<?php echo  $total*100 ?>"
        data-name="Booking Payment"
        data-description = "Booking Payment online"
        data-image="http://localhost/cinama/image/logo.png"
        data-currency="LKR"

    >

    </script>
</form>
