<section class="explorer-review" id="explorer-review">
    <style>
        .review-box {
            display: grid;
            gap: 10px;
            align-items: center;
            border: 1px solid #efefef;
            padding: 10px;
            background: #fbfbfb;
            border-radius: 8px;
        }

        .review-box-top {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .review-box-bottom {
            color: black;
            text-align: center;
        }

        .reviewer-name>h6 {
            color: black;
        }

        .reviewer-name>p {
            font-size: 12px;
            color: #acacac;
        }

        .star-box>img {
            background: transparent;
            border: none;
            width: 20px !important;
        }

        .star-box {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .review-count {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 10px;
            background-color: #f6f6f6;
            margin-bottom: 25px;
            border-radius: 10px;
        }



        .owl-carousel {
            display: block;
            padding: 0 8px;
        }

        .owl-carousel .course-details-link:not(:first-child) {
            display: none;
        }

        .owl-carousel img {
            width: 270px;
        }

        .carousel-item {
            display: none;
        }


        @media (max-width:768px) {
            .review-count {
                display: grid;
                place-items: center;
                text-align: center;
                justify-content: center;
            }
        }
    </style>

    <div style="padding:40px 0;" class="container" id="review_row">
        <div class="row">
            <div class="col-12 title-div">
                <h1 class="title-h3 mb-3" style="font-weight:bold;font-size: 30px;color:black;text-align: center;">What Our Customers Say</h1>
            </div>
            <div class="col-12 review-count">
                <div class="review-count-left">
                    <?php
                    $review_sql = "select * from review";
                    $review_stmt = mysqli_query($connection, $review_sql);
                    $total_review = mysqli_num_rows($review_stmt);
                    $average_review = 0;
                    $i = 0;
                    while ($average_review_result = mysqli_fetch_assoc($review_stmt)) {
                        $average_review = $average_review + $average_review_result['star'];
                        $i++;
                    }
                    $average_review  = $average_review / $i;
                    ?>
                    <h2>Our Reviews</h2>

                    <div class="star-box">
                        <span style="font-weight: bold;font-size:18px;"><?= round($average_review,2); ?> </span>
                        <?php
                        $nullaverage_review = 5 - $average_review;
                        for ($i = 1; $i <= floor($average_review); $i++) { ?>
                            <img class="icon-img" src="<?= LINK; ?>public/images/icon/star.png" alt="star-review">
                        <?php   }
                        if (is_float($average_review)) {
                            echo '<img class="icon-img" src="' . LINK . 'public/images/icon/half-star.png" alt="star-review">';
                        }
                        if (is_float($average_review)) {
                            for ($i = 2; $i <= ceil($nullaverage_review); $i++) {
                                echo '<img style="filter:grayscale(1);" class="icon-img" src="' . LINK . 'public/images/icon/star.png" alt="star-review">';
                            }
                        } else {
                            for ($i = 1; $i <= ceil($nullaverage_review); $i++) {
                                echo '<img style="filter:grayscale(1);" class="icon-img" src="' . LINK . 'public/images/icon/star.png" alt="star-review">';
                            }
                        }
                        ?>

                        <span style="font-weight: bold;font-size:12px;color:#acacac;">(<?= $total_review; ?>)</span>
                    </div>
                </div>
                <div class="review-count-right">
                    <button type="button" class="btn btn-primary my-btn blue" style="width: 200px;" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Review Us
                    </button>
                </div>
            </div>
            <div class="row col-12 review-row">

                <div class="owl-carousel owl-theme">

                    <?php
                    mysqli_data_seek($review_stmt, 0); // clear fetch data
                    $count=0;
                    while ($review_result = mysqli_fetch_assoc($review_stmt)) {
                    ?>
                        <div class="item">
                            <div class="review-box">
                                <div class="review-box-top">
                                    <img style="border-radius: 50%;width:70px;aspect-ratio:1/1;" src="<?= LINK; ?>public/images/review/<?= $review_result['image']; ?>" alt="reviewer-image">
                                    <div class="reviewer-name">
                                        <h6><?= $review_result['name']; ?></h6>
                                        <p><?= $format->formatDate($review_result['date']); ?></p>
                                    </div>
                                </div>
                                <div class="star-box">
                                    <?php
                                    $star = $review_result['star'];
                                    $nullStar = 5 - $star;
                                    for ($i = 1; $i <= $star; $i++) { ?>
                                        <img class="icon-img" src="<?= LINK; ?>public/images/icon/star.png" alt="star-review">
                                    <?php   }
                                    for ($i = 1; $i <= $nullStar; $i++) { ?>
                                        <img style="filter:grayscale(1);" class="icon-img" src="<?= LINK; ?>public/images/icon/star.png" alt="star-review">
                                    <?php }
                                    ?>
                                </div>
                                <div class="review-box-bottom">
                                        <?= $review_result['comment']; ?>
                                </div>
                            </div>
                        </div>
                    <?php $count++; } ?>



                </div>

                <div style="text-align: center;">
                    <!-- <a href="#" class="btn btn-success my-btn">VIEW ALL</a> -->
                </div>
            </div>
        </div>
    </div>
</section>



<div class="container">
    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Leave a review</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="add-course-form" action="<?= LINK; ?>controllers/reviewController.php" method="post" enctype="multipart/form-data">

                        <div class="form-group">
                            <label for="profile_picture">Profile Picture <span style="color:red;">*</span></label>
                            <input id="profile_picture" name="profile_picture" type="file" class="form-control" accept="image/*" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Your Name <span style="color:red;">*</span></label>
                            <input id="name" name="name" type="text" class="form-control" placeholder="Enter Your Name" required>
                        </div>

                        <div class="form-group">
                            <label for="star">Select a rating: <span style="color:red;">*</span></label>
                            <style>
                                .wrapper {
                                    max-width: 65ch;
                                    margin: 0 auto;
                                    padding: 0 2rem;
                                }

                                .call-to-action-text {
                                    margin: 2rem 0;
                                    text-align: left;
                                }

                                .star-wrap {
                                    width: max-content;
                                    position: relative;
                                }

                                .star-label.hidden {
                                    display: none;
                                }

                                .star-label {
                                    display: inline-flex;
                                    justify-content: center;
                                    align-items: center;
                                    width: 2rem;
                                    height: 2rem;
                                }

                                @media (min-width: 840px) {
                                    /* .star-label {
                                        width: 2rem;
                                        height: 2rem;
                                    } */
                                }

                                .star-shape {
                                    background-color: gold;
                                    width: 80%;
                                    height: 80%;
                                    clip-path: polygon(50% 0%,
                                            61% 35%,
                                            98% 35%,
                                            68% 57%,
                                            79% 91%,
                                            50% 70%,
                                            21% 91%,
                                            32% 57%,
                                            2% 35%,
                                            39% 35%);
                                }

                                /* make stars *after* the checked radio gray*/
                                .star:checked+.star-label~.star-label .star-shape {
                                    background-color: lightgray;
                                }

                                /*hide away the actual radio inputs*/
                                .star {
                                    position: fixed;
                                    opacity: 0;
                                    /*top: -90000px;*/
                                    left: -90000px;
                                }

                                .star:focus+.star-label {
                                    outline: 2px dotted black;
                                }

                                .skip-button {
                                    display: block;
                                    width: 2rem;
                                    height: 2rem;
                                    border-radius: 1rem;
                                    position: absolute;
                                    top: -2rem;
                                    right: -1rem;
                                    text-align: center;
                                    line-height: 2rem;
                                    font-size: 2rem;
                                    background-color: rgba(255, 255, 255, 0.1);
                                }

                                .skip-button:hover {
                                    background-color: rgba(255, 255, 255, 0.2);
                                }

                                #skip-star:checked~.skip-button {
                                    display: none;
                                }

                                #result {
                                    text-align: center;
                                    padding: 1rem 2rem;
                                }

                                .exp-link {
                                    text-align: center;
                                    padding: 1rem 2rem;
                                }

                                .exp-link a {
                                    color: lightgray;
                                    text-decoration: underline;
                                }
                            </style>


                            <div class="wrapper">
                                <div class="star-wrap">
                                    <input class="star" checked type="radio" value="-1" id="skip-star" name="star-radio" autocomplete="off" />
                                    <label class="star-label hidden"></label>
                                    <input class="star" type="radio" id="st-1" value="1" name="star-radio" autocomplete="off" />
                                    <label class="star-label" for="st-1">
                                        <div class="star-shape"></div>
                                    </label>
                                    <input class="star" type="radio" id="st-2" value="2" name="star-radio" autocomplete="off" />
                                    <label class="star-label" for="st-2">
                                        <div class="star-shape"></div>
                                    </label>
                                    <input class="star" type="radio" id="st-3" value="3" name="star-radio" autocomplete="off" />
                                    <label class="star-label" for="st-3">
                                        <div class="star-shape"></div>
                                    </label>
                                    <input class="star" type="radio" id="st-4" value="4" name="star-radio" autocomplete="off" />
                                    <label class="star-label" for="st-4">
                                        <div class="star-shape"></div>
                                    </label>
                                    <input class="star" type="radio" id="st-5" value="5" name="star-radio" autocomplete="off" />
                                    <label class="star-label" for="st-5">
                                        <div class="star-shape"></div>
                                    </label>
                                    <label class="skip-button" for="skip-star">
                                        &times;
                                    </label>
                                </div>
                                <p id="result"></p>
                            </div>


                        </div>

                        <div class="form-group">
                            <label for="comment">Comment <span style="color:red;">*</span></label>
                            <textarea style="height: 150px;" id="comment" name="comment" type="text" class="form-control" placeholder="Share details of your own experience at this place"></textarea>
                        </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Post Review</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>