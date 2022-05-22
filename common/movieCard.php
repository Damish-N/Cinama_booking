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
                    <a class="btn" href="http://localhost/cinama/views/movieDetial.php?movie_id='.$retrieve_data_imdm_movies[$i]['movie_id'].'">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
            </div>
        </div>;';
    }
    ?>

<!--    <div class="surfCard">-->
<!--        <div class="surfCard01">-->
<!--            <img src=--><?php //echo $retrieve_data_imdm_movies[0]['url'] ?><!-- alt="">-->
<!--        </div>-->
<!--        <div class="surfCard02">-->
<!--            <p class="surfCardContent">--><?php //echo $retrieve_data_imdm_movies[0]['name'] ?><!--</p>-->
<!---->
<!--            <div class="read-more">-->
<!--                <a class="btn" href="">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="surfCard">-->
<!--        <div class="surfCard02">-->
<!--            <img src=--><?php //echo $retrieve_data_imdm_movies[1]['url'] ?><!-- alt="">-->
<!--        </div>-->
<!--        <div class="surfCard02">-->
<!--            <p class="surfCardContent">--><?php //echo $retrieve_data_imdm_movies[1]['name'] ?><!--</p>-->
<!--            <div class="read-more">-->
<!--                <a class="btn" href="../../cinama/views/movieDetial.php">FIND OUT MORE <i class="fa fa-chevron-right"-->
<!--                                                                                          aria-hidden="true"></i></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
<!---->
<!--    <div class="surfCard">-->
<!--        <div class="surfCard01">-->
<!--            <img src=--><?php //echo $retrieve_data_imdm_movies[2]['url'] ?><!-- alt="">-->
<!--        </div>-->
<!--        <div class="surfCard01">-->
<!--            <p class="surfCardContent">--><?php //echo $retrieve_data_imdm_movies[2]['name'] ?><!--</p>-->
<!--            <div class="read-more">-->
<!--                <a class="btn" href=@">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>-->
<!--            </div>-->
<!--        </div>-->
<!--    </div>-->
</div>