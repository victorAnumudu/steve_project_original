<?php require_once('../private/initialize.php'); 
    if(is_post_request())   {
        $user = [];
        $user['email'] = $_POST['email'];
        $user['content'] = $_POST['content'];

        $result = send_message_to_admin($user);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>United Arab Bank</title>
    <link rel="shortcut icon" href="<?php echo url_for('/images/favicon1.png') ?>" type="image/x-icon">

    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

    <!-- font awesome -->
    <script src="https://kit.fontawesome.com/4ea96ace4f.js" crossorigin="anonymous"></script>

    <!-- my css file -->
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/public_navigation.css') ?>">
    <link rel="stylesheet" href="<?php echo url_for('/stylesheets/index.css') ?>">
    
</head>
<body>
    <div class="container-fluid p-0">
        <!-- nav bar section -->
        <?php include('../private/shared/public_navigation.php') ?>
         <!-- END nav bar section -->

         <!-- slideshow section -->
         <div id="demo" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#demo" data-slide-to="0" class="active bg-dark"></li>
                <li data-target="#demo" data-slide-to="1" class="bg-dark"></li>
                <li data-target="#demo" data-slide-to="2" class="bg-dark"></li>
                <li data-target="#demo" data-slide-to="3" class="bg-dark"></li>
            </ul>

            <!-- The slideshow -->
            <div class="carousel-inner" id="goto-home">
                <div class="carousel-item active">
                    <img src="<?php echo url_for('/images/homepage_assets/download.jpg'); ?>" class="img-fluid" alt="Dubai Currency">
                    <div class="carousel-caption">
                        <h3>Experiencing good business</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo url_for('/images/homepage_assets/slide.jpg'); ?>" class="img-fluid" alt="Dubai Currency">
                    <div class="carousel-caption">
                        <h3>Investing in the future</h3>
                        <!-- <p>Investing in the future</p> -->
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo url_for('/images/homepage_assets/slide-c.jpeg'); ?>" class="img-fluid" alt="Business Talk">
                    <div class="carousel-caption">
                        <h3>No limit to your cash</h3>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="<?php echo url_for('/images/homepage_assets/slide-d.png'); ?>" class="img-fluid" alt="Business Talk">
                    <div class="carousel-caption">
                        <h3>No limit to your cash</h3>
                    </div>
                </div>
            </div>

            <!-- Left and right controls -->
            <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            </a>
            <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            </a>
        </div>
         <!-- END of slide show section -->

         <!-- customized-banking  section -->
         <div class="customized-banking container p-3 text-center">
             <h4 class="pt-5 text-danger">CUSTOMIZED BANKING SOLUTIONS</h4>
             <h2 class="pb-5 mt-4">A truly unique banking experience</h2>
             <p class="mb-2">A new personalized online banking experience right at your fingertips. Take advantage of our new online features specifically tailored with your needs in mind ranging from bill payments, transfers, financial management and online applications.</p> 

             <div class="what-you-can-do row no-gutters justify-content-between">
                <div class="col-md-3 p-2 my-2">
                    <i class="fas fa-users fa-5x d-block my-3"></i>
                    <a href="<?php echo url_for('/customer/login.php'); ?>">Manage all your accounts</a>
                    <hr>
                </div>
                <div class="col-md-3 p-2 my-2">
                    <i class="fas fa-door-open fa-5x d-block my-3"></i>
                    <a href="<?php echo url_for('/customer/login.php'); ?>">Apply Online</a>
                    <hr>
                </div>
                <div class="col-md-3 p-2 my-2">
                    <i class="fas fa-chart-line fa-5x d-block my-3"></i>
                    <a href="<?php echo url_for('/customer/login.php'); ?>">Budget and Track</a>
                    <hr>
                </div>
                <div class="col-md-3 p-2 my-2">
                    <i class="fas fa-people-carry fa-5x d-block my-3"></i>
                    <a href="<?php echo url_for('/customer/login.php'); ?>">Easy Withdraw</a>
                    <hr>
                </div>
            </div>

         </div>
         <!--END of customized-banking  section -->

         <!--mobilebanking  section -->
         <div class="mobile-banking container-fluid p-5 row no-gutters justify-content-end text-white">
            <div class="col-12 col-sm-8 col-lg-5 p-2 p-md-5">
                <p class="py-3">Bank anytime, anywhere with new CBD Mobile Banking App</p>
                <h3 class="py-3">Enjoy the convenience of banking on the move, wherever you are, from your mobile device.</h3>
                <ul class="list-unstyled">
                    <li class="my-2">Check account balance, transaction history</li>
                    <li class="my-2">Transfer funds to other UAE Banks</li>
                    <li class="my-2">Apply for products</li>
                </ul>
                <button class="btn btn-danger">Learn more ></button>
            </div>
         </div>
         <!--END of mobilebanking  section -->

         <!--About  section -->
         <div class="about-section container py-3 p-5 p-sm-0" id="about">
            <div class="header-wrapper my-2">
                <h1 class="section-header text-center">About Us</h1>
                <hr class="header-rule">
            </div>

            <div class="row no-gutters align-items-center justify-content-between py-2">
                <div class="col-md-3 text-center text-md-left my-3">
                    <img src="<?php echo url_for('/images/page_assets/uab_image_3.jpeg'); ?>" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8 px-2 about-description">
                    <p>United Arab Bank operates as a secondary market for the trading of securities issued by public shareholding companies, bonds issued by federal or local governments, local public institutions and mutual funds as well as other local or foreign approved financial instruments.</p>
                    <p>The United Arab Bank Financial Market(DFM) is governed and regulated by the UAE Securities and Commodities Authority (SCA) which has the authority to impose laws and standards which the DFM must comply</p>
                </div>
            </div>

            <div class="row no-gutters align-items-center justify-content-between py-2">
                <div class="col-md-3 text-center text-md-left my-3">
                    <img src="<?php echo url_for('/images/page_assets/uab_image_1.jpeg'); ?>" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8 px-2 about-description">
                    <p>United Arab Bank is committed to build sustainable long-term partnerships with our key stakeholders, offering a superior customer experience, creating shareholder value, and adopting an innovative banking approach while remaining loyal to our nation's heritage and contributing to the overall development of the UAE.</p>
                </div>
            </div>

            <div class="row no-gutters align-items-center justify-content-between py-2">
                <div class="col-md-3 text-center text-md-left my-3">
                    <img src="<?php echo url_for('/images/page_assets/uab_image_2.jpeg'); ?>" class="img-fluid rounded-circle">
                </div>
                <div class="col-md-8 px-2 about-description">
                    <p>Established as a public institution with an independent legal entity by virtue of Decree 14/2000 issued by the Government.</p>
                    <p>within a short period of time, has fast developed into a leading financial market across the region. its ongoing efforts and strategic initiatives enhanced its leading postion as a powerful capital market hub which embraces international best practices to meet the evolving needs of its investors locally and internationally.</p>
                </div>
            </div>

         </div>
         <!--END of About  section -->

         <!-- Features section -->
        <div class="features row no-gutters align-items-center justify-content-between p-5">
            <div class="features-aside col-md-4">
                <h2 class="features-aside-header">FEATURED PRODUCTS & SERVICES</h2>
                <p class="features-aside-para">Here are some of our hand-picked products & services that you may be interested in</p>
            </div>
            <div class="features-main col-md-7 d-flex flex-nowrap py-3">
                <div class="features-main-content position-relative">
                    <img class="features-main-img img-fluid" src="<?php echo url_for('/images/page_assets/uab_features_1.jpeg') ?>" alt="features images" >
                    <div class="features-main-hidden position-absolute p-3">
                        <h3 class="feature-header">Islamic Credit Card</h3>
                        <p class="feature-header">The UAB Islamic credit card enables you to manage your finances effectively. With worldwide acceptance at millions of outlets, our Islamic cards offer a host of features and benefits that make your life simpler and more convenient.</p>
                    </div>
                </div>

                <div class="features-main-content position-relative mx-2">
                    <img class="features-main-img img-fluid" src="<?php echo url_for('/images/page_assets/uab_features_4.jpg') ?>" alt="features images" >
                    <div class="features-main-hidden position-absolute p-3">
                        <h3 class="feature-header">All Credit Cards</h3>
                        <p class="feature-header">All Credit Cards is your key to a world of benefits.</p>
                    </div>
                </div>

                <div class="features-main-content position-relative mx-2">
                    <img class="features-main-img img-fluid" src="<?php echo url_for('/images/page_assets/uab_features_3.jpeg') ?>" alt="features images" >
                    <div class="features-main-hidden position-absolute p-3">
                        <h3 class="feature-header">Personal Loan</h3>
                        <p class="feature-header">Since your every aspiration matters to us, UAB offers personal loans with flexible repayment terms under customised banking solution to meet your individual needs.</p>
                    </div>
                </div>

                <div class="features-main-content position-relative">
                    <img class="features-main-img img-fluid" src="<?php echo url_for('/images/page_assets/uab_features_2.jpeg') ?>" alt="features images" >
                    <div class="features-main-hidden position-absolute p-3">
                        <h3 class="feature-header">Raha call Deposit</h3>
                        <p class="feature-header">A first of its kind Call Deposit account with exciting returns, hassle-free and fully accessible deposits & unlimited withdrawals.</p>
                    </div>
                </div>
            </div>
        </div>
         <!-- END of Features section -->

         <!-- contact us section -->

         <div class="contact row no-gutters align-items-center justify-content-between p-5" id="contact">

            <div class="header-wrapper col-12 my-2">
                <h1 class="section-header text-center">Contact Us</h1>
                <hr class="header-rule">
            </div>

            <div class="features-aside col-md-4 text-center">
                <h2 class="features-aside-header">An easier way to get to us</h2>
                <p class="features-aside-para">
                    <i class="fas fa-mail-bulk fa-5x"></i> <br>
                    <span>contact@uab.in.net</span>
                </p>
            </div>
            <form onsubmit="return alertSuccess()" class="col-md-7" method="post" action="<?php echo url_for('/index.php'); ?>" autocomplete="off">
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <span class="input-group-text">Email</span>
                    </div>
                    <input type="email" class="form-control px-3" placeholder="enter your email here!" name="email" required>
                </div>
                <textarea rows="10" class="contact-textarea container-fluid p-2" name="content" required></textarea>

                <div class="text-right">
                    <button class="contact-submit btn text-white mt-2" type="submit" id="send-message">Send</button>
                </div>
            </form>

            <div class="message-sent justify-content-between" id="message-sent">
                <h2 class="message-sent-text text-success font-weight-bolder">Your Message has been sent successfully</h2>
                <button id="message-close-btn" class="btn btn-dark btn-lg">&times;</button>
            </div>
            
        </div>
         <!-- END of contact us section -->

         <!-- footer -->
         <?php include('../private/shared/public_footer.php') ?>
         <!-- END of footer -->
    </div>

    <script src="<?php echo url_for('/jsScripts/index.js') ?>"></script>
</body>
</html>