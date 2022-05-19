<?php
require ('../common/stripe/stripe-php-master/init.php');

$Publishable_key = "pk_test_51JVjfBLr4I2KwBmq4jd2grGrOVrYDFSnjzjnz7BduxIz8vp1AhzYmm0OXUjUi5M5wC9ZFPuzA0PIJNcgxaeOFuCS000zDUTvtm";
$Secret_key = "sk_test_51JVjfBLr4I2KwBmqKEpjOht7cTzCzGsX86LmJ2haqI3AlRsd7mpUnmirXc9IIJrNmHxHzuYh3bqDmhBQajwJpveS009khi3A4D";

\Stripe\Stripe::setApiKey($Secret_key);

?>