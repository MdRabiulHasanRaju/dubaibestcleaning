<?php ob_start();
session_start();
$title = "Review - NeatandHealthyCleaning";
$meta_description = "$title - Neat and Healthy Cleaning provides the top-notch villa deep cleaning services all across Dubai. Our clients are 100% satisfied with our work. Call us now +971 56 459 8416";
$meta_keywords = "$title, Neat and Healthy Cleaning, NeatandHealthyCleaning, Neat and Healthy,Neat Healthy Cleaning, cleaning service in dubai, NeatHealthyCleaning, NeatCleaning,best deep cleaning services in dubai, Top 10 cleaning comapany in dubai, deep cleaning services dubai,cheap cleaning services dubai, cleaningdubai, best dubai cleaning, best dubai cleaning service, best dubai cleaning, dubai cleaning service, cleaning service";


include("../../inc/header.php");
include("../../inc/navbar.php");
require_once $_SERVER['DOCUMENT_ROOT'] . "/dubaibestcleaning/lib/Database.php";

$header_active = "Services";
?>

<style>
.review-page{
    width: 50%;
}

@media screen and (max-width:768px) {   
.review-page{
    width: 100%;
}
}
</style>

<div class="container">
    <div class="card card-body offset-md-3 review-page">

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
            <br>
            <input class="form-control btn btn-primary" type="submit" value="Post Review">

        </form>
    </div>

</div>



<?php
include "../explorer/review.php";
// include "../explorer/google-review.php";
include "../../inc/footer.php";
?>
<script src="<?= LINK; ?>public/owl/owl.carousel.min.js"></script>
<!-- <script src="<? //= LINK; 
                    ?>public/bootstrap/bootstrap.min.js"></script> -->
<script src="<?= LINK; ?>public/bootstrap/bootstrap.bundle.min.js"></script>
<script src="<?= LINK; ?>public/WOW-master/dist/wow.min.js"></script>
<script src="<?= LINK; ?>public/bootstrap/popper.min.js"></script>
<script>
    new WOW().init();
</script>
<script src="<?= LINK; ?>main.js"></script>
</body>

</html>