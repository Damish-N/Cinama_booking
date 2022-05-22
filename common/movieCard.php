<?php //include(dirname(__FILE__)."/config.php"); ?>

<div class="surfCardWrapper">
    <?php
    for ($i = 0; $i < 3; $i++) {
       echo ' <div class="surfCard">
            <div class="surfCard01">
                <img src=http://localhost/cinama/'.$retrieve_data_imdm_movies[$i]['url'].' alt="">
            </div>
            <div class="surfCard02">
                <p class="surfCardContent">'.$retrieve_data_imdm_movies[$i]['name']. '</p>

                <div class="read-more">
                    <a class="btn22" href="http://localhost/cinama/views/movieDetial.php?movie_id='.$retrieve_data_imdm_movies[$i]['movie_id'].'">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>;';
    }
    ?>

</div>