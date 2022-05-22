<?php //echo $hello[0]['movie_id'] ?>
<div class="book-slide">

        <div class="book js-flickity" data-flickity-options='{ "wrapAround": true }'>
            <div class="book-cell">
                <div class="book-img">
                    <img src=<?php echo $retrieve_data_post[0]['url'] ?> alt=""
                        class="book-photo">
                </div>
                <div class="book-content">
                    <div class="book-title"><?php echo $retrieve_data_post[0]['name'] ?></div>
                    <div class="book-author">by <?php echo $retrieve_data_post[0]['director_name'] ?></div>
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
                        <span class="book-voters"><?php echo $retrieve_data_post[0]['votes'] ?> voters</span>
                    </div>
                    <div class="book-sum"><?php echo $retrieve_data_post[0]['description'] ?></div>

                    <div class="book-see">
                        <a style="color: unset;background: unset;text-decoration: none" class="btn" href="http://localhost/cinama/views/movieDetial.php?movie_id=<?php echo $retrieve_data_post[0]['movie_id'] ?>">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="book-cell">
                <div class="book-img">
                    <img src=<?php echo $retrieve_data_post[1]['url'] ?> alt=""
                        class="book-photo">
                </div>
                <div class="book-content">
                    <div class="book-title"><?php echo $retrieve_data_post[1]['name'] ?></div>
                    <div class="book-author">by <?php echo $retrieve_data_post[1]['director_name'] ?></div>
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
                        <span class="book-voters"><?php echo $retrieve_data_post[1]['vote'] ?> voters</span>
                    </div>
                    <div class="book-sum"><?php echo $retrieve_data_post[1]['description'] ?> </div>
                    <div class="book-see">
                        <a style="color: unset;background: unset;text-decoration: none" class="btn" href="http://localhost/cinama/views/movieDetial.php?movie_id=<?php echo $retrieve_data_post[1]['movie_id'] ?>">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="book-cell">
                <div class="book-img">
                    <img src=<?php echo $retrieve_data_post[2]['url'] ?>  alt=""
                        class="book-photo">
                </div>
                <div class="book-content">
                    <div class="book-title"><?php echo $retrieve_data_post[2]['name'] ?></div>
                    <div class="book-author">by <?php echo $retrieve_data_post[2]['director_name'] ?> </div>
                    <div class="rate">
                        <fieldset class="rating purple">
                            <input type="checkbox" id="star11" name="rating" value="5" />
                            <label class="full" for="star11"></label>
                            <input type="checkbox" id="star12" name="rating" value="4" />
                            <label class="full" for="star12"></label>
                            <input type="checkbox" id="star13" name="rating" value="3" />
                            <label class="full" for="star13"></label>
                            <input type="checkbox" id="star14" name="rating" value="2" />
                            <label class="full" for="star14"></label>
                            <input type="checkbox" id="star15" name="rating" value="1" />
                            <label class="full" for="star15"></label>
                        </fieldset>
                        <span class="book-voters"><?php echo $retrieve_data_post[2]['votes'] ?> voters</span>
                    </div>
                    <div class="book-sum"><?php echo $retrieve_data_post[2]['description'] ?> </div>
                    <div class="book-see">
                        <a style="color: unset;background: unset;text-decoration: none" class="btn" href="http://localhost/cinama/views/movieDetial.php?movie_id=<?php echo $retrieve_data_post[2]['movie_id'] ?>">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            <div class="book-cell">
                <div class="book-img">
                    <img src=<?php echo $retrieve_data_post[3]['url'] ?>  alt=""
                         class="book-photo">
                </div>
                <div class="book-content">
                    <div class="book-title"><?php echo $retrieve_data_post[3]['name'] ?></div>
                    <div class="book-author">by <?php echo $retrieve_data_post[3]['director_name'] ?></div>
                    <div class="rate">
                        <fieldset class="rating yellow">
                            <input type="checkbox" id="star16" name="rating" value="5" />
                            <label class="full" for="star16"></label>
                            <input type="checkbox" id="star17" name="rating" value="4" />
                            <label class="full" for="star17"></label>
                            <input type="checkbox" id="star18" name="rating" value="3" />
                            <label class="full" for="star18"></label>
                            <input type="checkbox" id="star19" name="rating" value="2" />
                            <label class="full" for="star19"></label>
                            <input type="checkbox" id="star20" name="rating" value="1" />
                            <label class="full" for="star20"></label>
                        </fieldset>
                        <span class="book-voters"><?php echo $retrieve_data_post[3]['votes'] ?> voters</span>
                    </div>
                    <div class="book-sum"><?php echo $retrieve_data_post[3]['description'] ?></div>
                    <div class="book-see">
                        <a style="color: unset;background: unset;text-decoration: none" class="btn" href="http://localhost/cinama/views/movieDetial.php?movie_id=<?php echo $retrieve_data_post[3]['movie_id'] ?>">FIND OUT MORE <i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>