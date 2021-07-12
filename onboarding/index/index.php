<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="onboarding.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
        integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <title>Onboarding</title>
    <style>
        .pixel-code-content {
            line-height: 1.5;
            border-color: #cbd5e0;
            white-space: pre-wrap;
        }

        @media screen and (max-width:420px) {
            .pixel-icon {
                margin-right: 10px !important;

            }

            .pixel-div-header-text h2 {
                font-size: 1.4rem;
            }

            .scan-button {
                font-size: 0.75rem;
            }

            .pixel-div {
                margin-top: 1.5rem !important;
            }

            .back-button-header {
                font-size: .75rem !important;
                margin-left: .5rem;
            }
        }
    </style>
</head>
<body>
    <?php
    if(isset($_POST["site-category"])||isset($_POST["siteUrl"])||isset($_POST["integrationCategory"])||isset($_POST["pixelSiteUrl"])||isset($_POST["backToIntegrations"])){}else{
    ?>
    <main class="h-100 bg-gray-100 position-relative min-h-screen main-content" >
    <div class="content d-flex justify-content-center">
        <div class="login-content d-flex justify-content-center align-items-center">
            <div class="content-width text-center w-100" style="max-width: 500px;">
                <div data-v-2a70f95c="" class="widget-content align-items-center position-relative d-flex justify-content-center rounded text-center  mb-5 mx-auto animated">
                   <img src="no-data.png" alt="Responsive image" class="img-fluid col-sm-12 col-md-12 col-lg-12 p-0" alt="">
                    
                    </div>
            <h2 class="login-user-text  text-center">
               Welcome to Social Proofy 
            </h2>
            <p class="login-text px-3">
                Congratulations, now power up your website with Social Proofy!
            </p>
            <p class="login-text-continue px-3">
                Setup your first Social Proofy widget in less than 2 minutes.
            </p>
            <button type="button" class="btn btn-primary login-button">
                Let's go
                <i class="fas fa-chevron-right ml-2"></i>
            </button>
        </div>
        </div>
    </div>
</main>
<?php
}
?>
<!-- x2 content -->
<main class="category-main d-none">
        <div class="category-content-top">
            <div class="category-content-center">
                <div class="category-content-buttom mx-auto">
                    <h1 class="content-title pt-3 pt-md-5">
                        Tell us about your website
                    </h1>
                    <div class="category-content-border">
                        <div class="category-content px-3 form-group">
                            <div class="category-flex">
                                <label class="lower-title pt-3 pt-md-0">
                                    Pick the industry that matches your website
                                </label>
                                <form action="" method="post">
                                <ul id="category-box-content">
                                    <li class="category-box-item selecte mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="1">
                                            <div class="icon-container">
                                                <i class='material-icons'>shopping_basket

                                                </i>
                                            </div>
                                            <h3>eCommerce & Retail</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="2">
                                            <div class="icon-container">
                                                <i class='material-icons'>hiking</i>
                                            </div>
                                            <h3>Travel</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="3">
                                            <div class="icon-container">
                                                <i class='material-icons'>apps</i>
                                            </div>
                                            <h3>SaaS & Software</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="4">
                                            <div class="icon-container">
                                                <i class='material-icons'>article</i>
                                            </div>
                                            <h3>Blogs & News</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="5">
                                            <div class="icon-container">
                                                <i class='material-icons'>wc</i>
                                            </div>
                                            <h3>Events & Ticketing</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none " value="6">
                                            <div class="icon-container">
                                                <i class='material-icons'>wc</i>
                                            </div>
                                            <h3>Lead generation</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="7">
                                            <div class="icon-container">
                                                <i class='material-icons'>account_balance</i>
                                            </div>
                                            <h3>Finance & Insurance</h3>
                                        </label>
                                    </li>
                                    <li class="category-box-item mb-3">
                                        <label>
                                            <input type="radio" name="site-category" class="display-none" value="8">
                                            <div class="icon-container">
                                                <i class='material-icons'>info</i>
                                            </div>
                                            <h3>Other</h3>
                                        </label>
                                    </li>
                                    

                                </ul>
                            </div>

                        </div>
                    </div>

                </div>
                <div class="contunie-content">
                    <div class="contunie-button-content px-3 my-3 my-md-4">
                        <a href="">
                        <button type="button" name="backMain" class="btn btn-link back-button">
                            <i class="fas fa-chevron-left mr-2"></i>
                            Back
                        </button>
                        </a>

                        <button  id="continue-button" type="submit" disabled="disabled" class="btn btn-primary contunie-button">
                            Continue
                            <i class="fas fa-chevron-right ml-2"></i>
                        </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </main>
    <!-- x2 end -->
    <!-- x3 start -->
    <?php
    if(isset($_POST["site-category"])){
        
    ?>
   <script>
       
       function none() {
           console.log("none");
            $('.main-content').addClass('d-none');
            
        }
  
   </script>
    <main class="category-main-url">
        <div class="category-content-top-url">
            <div class="category-content-center-url">
                <div class="category-content-buttom-url mx-auto">
                    <h1 class="content-title-url pt-3 pt-md-5">
                        Tell us about your website
                    </h1>
                    <div class="category-content-border-url">
                        <div class="category-content-url pt-5 form-group">
                            <div class="category-flex-url px-3 mx-auto mt-md-5">
                               <label for="url" class="label-url">
                                   What is your website URL
                               
                               <span class="label-icon">
                                <i class="fas fa-question-circle mr-2"></i>
                               </span>
                            </label>
                            <form  action="" method="post">
                            <input id="url" type="text" required="required" name="siteUrl" placeholder="www.example.com" class="form-control form-control-lg">
                            </div>

                        </div>
                    </div>

                </div>
                <div class="contunie-content-url">
                    <div class="contunie-button-content-url px-3 my-3 my-md-4">
                        <button type="button" class="btn btn-link back-button-url">
                            <i class="fas fa-chevron-left mr-2"></i>
                            Back
                        </button>

                        <button type="submit" class="btn btn-primary contunie-url disablebled">
                            Continue
                            <i class="fas fa-chevron-right ml-2"></i>
                        </button>
                        </form>

                    </div>
                </div>
            </div>

        </div>

    </main>
    <?php
    }
    ?>
    <!-- x3 end -->
    <!-- x4 start -->
    <?php
    if(isset($_POST["siteUrl"])||isset($_POST["backToIntegrations"])){
    ?>
    
    <main class="category-main-integration">
        <div class="category-content-top-integration">
            
                <div class="category-content-buttom-integration">
                    <h1 class="content-title-integration mb-3 pt-5">
                        Let's add Social Proofy to your website
                    </h1>
                    <div class="category-content-border-integration mb-3 mt-3">
                        <div class="category-content-integration m-auto">
                            <span>
                                Select a platform to use for
                                <strong>www.lrturkey.org/</strong>
                            </span>
                            <form action="" method="post">
                            <label>
                            
                            
                            <div class="edit-site-content ml-1">
                            <input type="submit" name="site-category" class="display-none"  value="1">
                                 
                                <i id="icon-pen" class="fa fa-pen mr-1"></i>
                                 
                            </div>
                            </label>
                            </form>
                        </div>
                    </div>
                    <div class="category-flex-integration mt-2 mb-4">
                 
                        <input id="form-control" type="search" onkeyup="myFunction()" autocomplete="off" name="search" placeholder="Search for integrations" class="input-search form-control m-auto ">
                     </div>
                        <div class="integration-container mt-3  mx-auto">
                            <div class="integration-content mx-auto mt-5">
                                <div  class="send-message mx-auto mt-6">
                                    <span >Not sure which to choose?</span> 
                                    <a  href="#" target="_self" class="ml-2" role="button">
                                        <i class="fa fa-envelope mr-2"></i>
                                        Email instructions to a colleague
                                     </a>
                                 </div>
                                 <ul class="integration-content" id="myUl" style="margin:0;padding:0;">
                                    
                                 <li><a class="d-none">Add to your HTML</a>
                                 <form action="" method="post">
                                 <label >
                                     <div  class="integration-box">
                                     
                                
                                     <input type="submit" name="integrationCategory" class="display-none"  value="1">
                                     <!-- <input type="submit" value=""> -->
                                         <div class="integration-icon">
                                             <img src=" images/html.png" alt="Add to your HTML" class="img-integration">
                                         </div>
                                         <span>Add to your HTML</span>
                                         
                                         
                                         
                                        </div>
                                    </label>  
                                      
                                    </form>
                                 </li>
                                 <li><a class="d-none">Google Tag Manager</a>
                                    <div class="integration-box">

                                        <div class="integration-icon">
                                            <img src=" images/gtm.png" alt="Google Tag Manager" class="img-integration">
                                        </div>
                                        <span>Google Tag Manager</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">BigCommerce</a>
                                    <div class="integration-box">
                                        <span data-v-739f0b54="" class="badge integration-badge font-size-11 badge-light badge-pill">Native Plugin</span>
                                        <div class="integration-icon">
                                            <img src=" images/bigcommerce.png" alt="BigCommerce" class="img-integration">
                                        </div>
                                        <span>BigCommerce</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Magento</a>
                                    <div class="integration-box">
                                        <span data-v-739f0b54="" class="badge integration-badge font-size-11 badge-light badge-pill">Native Plugin</span>
                                        <div class="integration-icon">
                                            <img src=" images/magento.svg" alt="Magento" class="img-integration">
                                        </div>
                                        <span>Magento</span>
                                    </div>
                                 </li>
                                 
                                    
                                 <li><a class="d-none">Prestashop</a>
                                    <div class="integration-box">
                                        <span data-v-739f0b54="" class="badge integration-badge font-size-11 badge-light badge-pill">Native Plugin</span>
                                        <div class="integration-icon">
                                            <img src=" images/prestashop.png" alt="Prestashop" class="img-integration">
                                        </div>
                                        <span>Prestashop</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">WooCommerce</a>
                                    <div class="integration-box">
                                        <span data-v-739f0b54="" class="badge integration-badge font-size-11 badge-light badge-pill">Native Plugin</span>
                                        <div class="integration-icon">
                                            <img src=" images/woocommerce.png" alt="WooCommerce" class="img-integration">
                                        </div>
                                        <span>WooCommerce</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Wordpress</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/wordpress.png" alt="Wordpress" class="img-integration">
                                        </div>
                                        <span>Wordpress</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">AppDrag</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/appdrag.png" alt="AppDrag" class="img-integration">
                                        </div>
                                        <span>AppDrag</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">AppointmentCore</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/appointment_core.png" alt="AppointmentCore" class="img-integration">
                                        </div>
                                        <span>AppointmentCore</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Bookmark</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/bookmark.png" alt="Bookmark" class="img-integration">
                                        </div>
                                        <span>Bookmark</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">BigMarker</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/bigmarker.png" alt="BigMarker" class="img-integration">
                                        </div>
                                        <span>BigMarker</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Blogger</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/blogger.png" alt="Blogger" class="img-integration">
                                        </div>
                                        <span>Blogger</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Brizy</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/brizy.png" alt="Brizy" class="img-integration">
                                        </div>
                                        <span>Brizy</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Clickfunnels</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/clickfunnels.png" alt="Clickfunnels" class="img-integration">
                                        </div>
                                        <span>Clickfunnels</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Cloudflare</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/cloudflare.png" alt="Cloudflare" class="img-integration">
                                        </div>
                                        <span>Cloudflare</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Cognito Forms</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/cognito_forms.png" alt="Cognito Forms" class="img-integration">
                                        </div>
                                        <span>Cognito Forms</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">ConvertBox</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/convertbox.png" alt=" " class="img-integration">
                                        </div>
                                        <span>ConvertBox</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Convertful</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/convertful.png" alt="Convertful" class="img-integration">
                                        </div>
                                        <span>Convertful</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Convertri</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/convertri.png" alt="Convertri" class="img-integration">
                                        </div>
                                        <span>Convertri</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Cratejoy</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/cratejoy.png" alt="Cratejoy" class="img-integration">
                                        </div>
                                        <span>Cratejoy</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Demio</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/demio.png" alt="Demio" class="img-integration">
                                        </div>
                                        <span>Demio</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Dragdropr</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/dragdropr.png" alt="Dragdropr" class="img-integration">
                                        </div>
                                        <span>Dragdropr</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Duda</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/duda.png" alt="Duda" class="img-integration">
                                        </div>
                                        <span>Duda</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Easy Digital Downloads</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/easy_digital_downloads.png" alt="Easy Digital Downloads" class="img-integration">
                                        </div>
                                        <span>Easy Digital Downloads</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">EKM</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/ekm.png" alt="EKM" class="img-integration">
                                        </div>
                                        <span>EKM</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Elite Funnels</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/elitefunnels.png" alt="Elite Funnels" class="img-integration">
                                        </div>
                                        <span>Elite Funnels</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">EverWebinar</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/everwebinar.png" alt="EverWebinar" class="img-integration">
                                        </div>
                                        <span>EverWebinar</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">FastSpring</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/fastspring.png" alt="FastSpring" class="img-integration">
                                        </div>
                                        <span>FastSpring</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Funnel WL</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/fastfunnels.png" alt="Funnel WL" class="img-integration">
                                        </div>
                                        <span>Funnel WL</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Gumroad</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/gumroad.png" alt="Gumroad" class="img-integration">
                                        </div>
                                        <span>Gumroad</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Gurucan</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/gurucan.png" alt="Gurucan" class="img-integration">
                                        </div>
                                        <span>Gurucan</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Heights</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/heights.jpg" alt="Heights" class="img-integration">
                                        </div>
                                        <span>Heights</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">HeySummit</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/heysummit.png" alt="HeySummit" class="img-integration">
                                        </div>
                                        <span>HeySummit</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Instapage</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/instapage.png" alt="Instapage" class="img-integration">
                                        </div>
                                        <span>Instapage</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Infusionsoft</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/Infusionsoft.png" alt="Infusionsoft" class="img-integration">
                                        </div>
                                        <span>Infusionsoft</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Jocmla</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/joomla.png" alt="Jocmia" class="img-integration">
                                        </div>
                                        <span>Jocmla</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Jvzoo</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/jvzoo.png" alt="Jvzoo" class="img-integration">
                                        </div>
                                        <span>Jvzoo</span>
                                    </div>
                                 </li>
                                
                                 <li><a class="d-none">Kajabi</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/kajabi.png" alt="Kajabi" class="img-integration">
                                        </div>
                                        <span>Kajabi</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Kartra</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/kartra.png" alt="Kartra" class="img-integration">
                                        </div>
                                        <span>Kartra</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Landingi</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/landingi.png" alt="Landingi" class="img-integration">
                                        </div>
                                        <span>Landingi</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">LeadCart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/leadcart.png" alt="LeadCart" class="img-integration">
                                        </div>
                                        <span>LeadCart</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">LeadPages</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/leadpages.png" alt="LeadPages" class="img-integration">
                                        </div>
                                        <span>LeadPages</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Learnyst</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/learnyst.png" alt="Learnyst" class="img-integration">
                                        </div>
                                        <span>Learnyst</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Lightspeed</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/lightspeed.png" alt="Lightspeed" class="img-integration">
                                        </div>
                                        <span>Lightspeed</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Neto</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/neto.png" alt="Neto" class="img-integration">
                                        </div>
                                        <span>Neto</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">NewZenler</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/newzenler.png" alt="NewZenler" class="img-integration">
                                        </div>
                                        <span>NewZenler</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">OptimizerPress</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/optimizer_press.png" alt="OptimizerPress" class="img-integration">
                                        </div>
                                        <span>OptimizerPress</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">PageCloud</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/pagecloud.png" alt="PageCloud" class="img-integration">
                                        </div>
                                        <span>PageCloud</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">PageWiz</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/pagewiz.png" alt="PageWiz" class="img-integration">
                                        </div>
                                        <span>PageWiz</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Podia</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/podia.png" alt="Podia" class="img-integration">
                                        </div>
                                        <span>Podia</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Popupsmart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/popupsmart.png" alt="Popupsmart" class="img-integration">
                                        </div>
                                        <span>Popupsmart</span>
                                    </div>
                                </li>
                                 <li><a class="d-none">SamCart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/samcart.png" alt="SamCart" class="img-integration">
                                        </div>
                                        <span>SamCart</span>
                                    </div>
                                 </li>
                                 
                                 <li><a class="d-none">SendOwl</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/sendowl.png" alt="SendOwl" class="img-integration">
                                        </div>
                                        <span>SendOwl</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Shopify</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/shopify.png" alt="Shopify" class="img-integration">
                                        </div>
                                        <span>Shopify</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Simvoly</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/simvoly.png" alt="Simvoly" class="img-integration">
                                        </div>
                                        <span>Simvoly</span>
                                    </div>
                                 </li>
                                 
                                    <li><a class="d-none">Strikingly</a>
                                        <div class="integration-box">
                                            <div class="integration-icon">
                                                <img src=" images/strikingly.png" alt="Strikingly" class="img-integration">
                                            </div>
                                            <span>Strikingly</span>
                                        </div>
                                    </li>
                                     <li><a class="d-none">Squarespace</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/squarespace.png" alt="Squarespace" class="img-integration">
                                        </div>
                                        <span>Squarespace</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Takedrop</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/takedrop.png" alt="Takedrop" class="img-integration">
                                        </div>
                                        <span>Takedrop</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Teachable</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/teachable.png" alt="Teachable" class="img-integration">
                                        </div>
                                        <span>Teachable</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Teachery</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/teachery.png" alt="Teachery" class="img-integration">
                                        </div>
                                        <span>Teachery</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Thinkific</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/thinkific.png" alt="Thinkific" class="img-integration">
                                        </div>
                                        <span>Thinkific</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">ThriveCart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/thrivecart.png" alt="ThriveCart" class="img-integration">
                                        </div>
                                        <span>ThriveCart</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Unbounce</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/unbounce.png" alt="Unbounce" class="img-integration">
                                        </div>
                                        <span>Unbounce</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Webflow</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/webflow.png" alt="Webflow" class="img-integration">
                                        </div>
                                        <span>Webflow</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Weebly</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/weebly.png" alt="Weebly" class="img-integration">
                                        </div>
                                        <span>Weebly</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">WebinarJam</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/webinarjam.png" alt="WebinarJam" class="img-integration">
                                        </div>
                                        <span>WebinarJam</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">WebWare</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/webwave.png" alt="WebWare" class="img-integration">
                                        </div>
                                        <span>WebWare</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Wishpond</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/wishpond.png" alt="Wishpond" class="img-integration">
                                        </div>
                                        <span>Wishpond</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">Wix</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/wix.png" alt="Wix" class="img-integration">
                                        </div>
                                        <span>Wix</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">WHMCS</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/WHMCS.png" alt="WHMCS" class="img-integration">
                                        </div>
                                        <span>WHMCS</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">WP FluentForms</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/wpfluentform.png" alt="WP FluentForms" class="img-integration">
                                        </div>
                                        <span>WP FluentForms</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">X-Cart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/x-cart.png" alt="Cart" class="img-integration">
                                        </div>
                                        <span>X-Cart</span>
                                    </div>
                                 </li>
                                 <li><a class="d-none">3DCart</a>
                                    <div class="integration-box">
                                        <div class="integration-icon">
                                            <img src=" images/3Dcart.png" alt="3DCart" class="img-integration">
                                        </div>
                                        <span>3DCart</span>
                                    </div>
                                 </li>
                                </ul>
                            </div>

                        </div>

                </div>

                
            

        </div>

    </main>
    <?php
    }
    ?>
    <!-- x4 end -->
    <!-- x5 start -->
    <?php
    if(isset($_POST["integrationCategory"])){
   
    ?>
    <div class="pup-body">
    <div class="pup-back d-none">
        
        <div class="pup-content pup" >
            
            <div class="pup-container">
            <div class="pup-image-content">
                <img src="images/ok.png" alt="" class="pup-image" >
            </div>
            <p class="fantastic mt-2">Fantastic</p>
           
            <div class="pup-text-content mt-4">
               <p class="pup-text">You've successfully added the Pixel to your website. Let's create your first Notification!</p> 
            </div>
            <div class="button-content mt-5">
            <a href="#">
                <button class="btn btn-outline-primary button-add">
                Add your first Notification
                </button></a>
            
        </div>
    
        </div>
        </div>
    
        </div>
    <main class="pixel-main">
        <div class="pixel-container">
            <div class="pixel-setting-container mx-auto">
                <div class="pixel-back mt-4">
                    <form action="" method="post">
                        <label>
                        <input type="submit" name="backToIntegrations" style="display:none;">
                    <div  class="btn btn-outline-primary back-button-header">
                    
                        <i class="fas fa-chevron-left mr-2"></i>
                        Back to Integrations
                    </div>
                    </label>
                    </form>
                </div>
                <div class="pixel-div card-1 card-default mt-5 p-4">
                    <div class="pixel-div-header d-flex mb-4">
                        <div class="pixel-icon mr-4">
                            <img src=" images/html.png" class="pixel-icon-div" alt="">

                        </div>
                        <div class="pixel-div-header-text">
                            <h2 class="mt-2">
                                Installing Social Proofy With HTML
                            </h2>
                            <span class="text-muted">
                                Installing Social Proofy with HTML is really easy and only takes a couple of minutes.
                            </span>
                            <a target="_blank" href="#">Lead more</a>
                        </div>
                    </div>
                    <div class="pixel-body-content">
                        <div>
                            <div>
                                <div class="mb-2">
                                    <div class="point-list mr-3 ml-2 mt-1">1</div>
                                    <p class="card-text ml-5" style="line-height: 2;">
                                        Copy the Pixel code given below.
                                    </p>
                                </div>
                                <div class="border-gray-custom bg-white p-5 mb-2 pixel-key-html"
                                    onclick="copyToClipboard('.pixel')"
                                    data-clipboard-text="
                               <!-- Pixel Code for https://dev.socialproofy.io/ --><script async src=&quot;https://dev.socialproofy.io/pixel/fy6xc2wjpwecz4vjegd1l3a0niun58ni&quot;></script><!-- END Pixel Code -->">
                                    <code class="text-secondary pixel">&lt;!-- Pixel Code for https://dev.socialproofy.io/ --&gt;</code><br>
                                    <code class="text-danger pixel">
&lt;script async src="https://dev.socialproofy.io/pixel/fy6xc2wjpwecz4vjegd1l3a0niun58ni"&gt;&lt;/script&gt;</code><br>
                                    <code class="text-secondary pixel">
&lt;!-- END Pixel Code --&gt;</code>
                                    <p class="btn btn-primary copy-clipboard impHide">Click to copy</p>
                                </div>


                                <div class="mb-2">
                                    <div class="point-list mr-3 ml-2 mt-1">2</div>
                                    <p class="card-text ml-5" style="line-height: 2;">
                                        Paste the code right before your
                                        <code>&lt;/head&gt;</code>
                                        closing tag on each page of your site.
                                    </p>
                                </div>
                                <div class="mt-2">
                                    <div class="point-list mr-3 ml-2 mt-1">3</div>
                                    <p class="card-text ml-5" style="line-height: 2;">
                                        Use the Pixel Scanner below to check that your Pixel is active.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="pixel-scanner-div mb-4 mt-2">
                    <div class="card-1 card-default p-2">
                        <div class="card-body">
                            <div class="pixel-scanner-heading mb-3 d-flex">
                                <span class="pixel-status mr-3 border-0 shadow-none d-block">
                                    <div title="Pixel not active" class="pixel-status-icon red">

                                    </div>
                                </span>
                                <h5 class="pixel-scanner-title">Pixel Scanner</h5>
                            </div>
                            <form action="" method="post">
                            <div class="scanner-area">
                            
                                <input type="text" name="pixelSiteUrl" placeholder="www.example.com" required="required" class="form-control-scanner mr-3">
                                <button type="button" class="btn btn-primary scan-button">
                                    Scan for Pixel
                                </button>
                                
                            </div>
                            </form>
                        </div>

                    </div>
                </div>

            </div>
        </div>

    </main>
</div>
    <?php
    }
    ?>
    




    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script>
         $('.login-button').click(function () {
            $('.main-content').addClass('d-none');
            $('.category-main').removeClass('d-none');
        });
        $('.back-button-url').click(function () {
            $('.category-main-url').addClass('d-none');
            $('.category-main').removeClass('d-none');
        });
        </script>
 
    <script>
        $('.scan-button').click(function () {
            
            $('.pup-back').removeClass('d-none');
            $(".pup-content").removeClass("close-pup");
            $(".pup-content").addClass("pup");
    $('.pup-back').removeClass('close-box');
            function OpacityDelay() {
    
    $('.pup-content').addClass('open-box');
    
    
}

setTimeout(OpacityDelay, 1000);



$('.button-add').click(function () {
$(".pup-content").removeClass("open-box");
$(".pup-content").removeClass("pup");
$('.pup-content').addClass('close-pup');
function OpacityDelay2() {
$('.pup-back').addClass('close-box');
    
    
}

setTimeout(OpacityDelay2, 600);

});
        });
        
        
    </script>
   
    <script>
 var header = document.getElementById("category-box-content");
var btns = header.getElementsByClassName("category-box-item");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  var current = document.getElementsByClassName("selecte");
  current[0].className = current[0].className.replace(" selecte", "");

  this.className += " selected";
 
  });
  
}
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
  
  var current = document.getElementsByClassName("selected");
  current[0].className = current[0].className.replace(" selected", "");

  this.className += " selected";

 
  });
  
}
$('.category-box-item').click(function () {
if($('.category-box-item').hasClass('selected')==1){
    document.getElementById('continue-button').disabled = false;
           
}
    
            
        });


    </script>
     <script>
            function myFunction() {
                var input, filter, ul, li, a, i, txtValue;
                input = document.getElementById("form-control");
                filter = input.value.toUpperCase();
                ul = document.getElementById("myUl");
                li = ul.getElementsByTagName("li");
                for (i = 0; i < li.length; i++) {
                    a = li[i].getElementsByTagName("a")[0];
                    txtValue = a.textContent || a.innerText;
                    if (txtValue.toUpperCase().indexOf(filter) > -1) {
                        li[i].style.display = "";
                    } else {
                        li[i].style.display = "none";
                    }
                }
            }
            </script>
    <script>
        function copyToClipboard(element) {
            var $temp = $("<input>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
        $(document).ready(function () {
            $('.pixel-key-html').click(function () {
                // new ClipboardJS(".pixel-key-html");

                /* Handle on click button */
                let copy_button = $('.copy-clipboard');
                let initial_text = 'Click to copy';
                copy_button.text('Copied to clipboard');

                setTimeout(() => {
                    copy_button.text(initial_text);
                }, 1000);
            }).hover(function (event) {
                $(this).children('.copy-clipboard').removeClass('impHide');
            }, function () {
                $(this).children('.copy-clipboard').addClass('impHide');
            });


        });



        function copyToClipboard(element) {


            var $temp = $("<textarea>");
            $("body").append($temp);
            $temp.val($(element).text()).select();
            document.execCommand("copy");
            $temp.remove();
        }
    </script>     
    <script>

           


</script>   
</body>
</html>
