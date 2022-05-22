<?php if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
    
    // var_dump($retrieve_data_post);
    // exit; ?>
<div class="book-slide">

    <div class="book js-flickity" data-flickity-options='{ "wrapAround": true }'>
        <?php foreach($retrieve_data_post as $key=>$value): //var_dump($value); ?>
        <div class="book-cell">
            <div class="book-img">
                <img src=<?php echo $value['url'] ?> alt="" class="book-photo">
            </div>
            <div class="book-content">
                <div class="book-title"><?php echo $value['name'] ?></div>
                <div class="book-author">by <?php echo $value['director_name'] ?></div>
                <div class="rate">
                    <fieldset class="rating blue">
                        <input type="checkbox" id="star6" name="rating" value="5" />
                        <label class="full1" for="star6"></label>
                        <input type="checkbox" id="star7" name="rating" value="4" />
                        <label class="full1" for="star7"></label>
                        <input type="checkbox" id="star8" name="rating" value="3" />
                        <label class="full1" for="star8"></label>
                        <input type="checkbox" id="star9" name="rating" value="2" />
                        <label class="full1" for="star9"></label>
                        <input type="checkbox" id="star10" name="rating" value="1" />
                        <label class="full1" for="star10"></label>
                    </fieldset>
                    <span class="book-voters"><?php echo $value['votes'] ?> voters</span>
                </div>
                <div class="book-sum"><?php echo $value['description'] ?></div>


                <?php if (isset($_SESSION['usertype'])): ?>
                <div class="book-see">
                    <a style="color: unset;background: unset;text-decoration: none" class="btn"
                        href="http://localhost/cinama/views/movieDetial.php?movie_id=<?php echo $value['movie_id'] ?>">FIND
                        OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
                <?php endif; ?>

            </div>
        </div>

        <?php endforeach;?>



    </div>
</div>