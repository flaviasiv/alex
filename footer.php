<?php
/**
 * Footer template
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Urbanist:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="style.css">
    <title>Clauze Cleaning Services - Relax and let our pros handle it!</title>
    <meta name="author" content="Flavia Sigoli"/>
    <meta http-equiv="content-language" content="en-US" />
    <meta name="copyright" content="Copyright © 2024 Clauze Cleaning" />
    <meta http-equiv="content-type" content="html; charset=UTF-8" />
    <meta name="description" content="" />
    <meta name="keywords" content="portfolio, Business, Clauze Cleaning, Clauze, Clauze Cleaning, Services, about, OHIO, USA">
    <meta name="robots" content="index, follow">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
    <style>
    footer{
    background-color: #021227;
}
.footergrid{
    display: flex;
    width: 100%;
    max-width: 1400px;
    justify-content: space-between;
    color: #fff;
    margin: auto;
    padding: 50px 80px 30px 50px;
    font-family: 'Poppins';
}
a{
    color: inherit;
    text-decoration: none;
}
footer ul{
    list-style: none;
}
.locationcontainer ul li{
    display: flex;
    flex-direction: column;
    font-family: 'Poppins';
    font-size: 12px;
    font-weight: 400;
    line-height: 190%; 
    gap: 8px;
}
.locationcontainer ul{
    display: flex;
    flex-direction: column;
    gap: 8px;
}
.locationcontainer ul h5{
    display: flex;
    font-family: 'Poppins';
    font-size: 14px;
    font-weight: 600;
    line-height: 140%; 
    align-items: center;
    gap: 3px;
}
.footernav ul, .opentime ul{
    display: flex;
    flex-direction: column;
    gap: 10px;
}
.opentime ul{
    gap: 1.5px;
}
.opentime ul li{
    font-family: 'Poppins';
    font-size: 12.676px;
    font-weight: 400;
    line-height: 190%; /* 24.085px */
}
.address{
    font-size: 14.789px;
    font-weight: 600;
    line-height: 140%;
}
.address ul{
    display: flex;
    flex-direction: column;
    margin-top: 10px;
    gap: 5px;
}
.address ul li a{
    display: flex;
    align-items: center;
    gap: 5px;
}
.address li svg{
    fill: #fff;
}
.footer-credits{
    position: relative;
    display: flex;
    justify-content: space-between;
    height: 100px;
    width: 100%;
    max-width: 1300px;
    margin: auto;
    padding: 0;
    align-items: center;
    text-align: center;    
    border-top: 1px solid #89DBC9;
}
.footer-credits ul{
    display: flex;
    gap: 20px;
    list-style: none;
}
.footer-credits ul li a{
    color: #fff;
}
.footer-credits p, .footer-credits ul li{
    color: #fff;
    font-size: 14.4px;
    font-weight: 300;
    line-height: 150%;
}
footer a:hover, footer a:hover svg{
    color: #89DBC9;
    fill: #89DBC9;
}
@media screen and (max-width:1100px) {
    .footer-credits{
        padding: 30px 10px 0;
    }
}
@media screen and (max-width:890px) {
    footer{
        padding: 0 10px;
    }
    .footergrid{
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 50px 0 0 0;
    }
    .locationcontainer ul, .locationcontainer li {
        align-items: center;
    }
    .footergrid div{
        padding: 20px 0;
        width: 100%;
    }
    .address ul li{
        margin: auto;
    }
    .footer-credits{
        flex-direction: column;
        margin: 0;
        gap: 20px;
        padding: 30px 0 0 !important;
        height: 150px !important;
    }
    .footer-credits ul{
        flex-direction: column;
        gap: 0px !important;
    }
}
</style>
</head>
<footer id="site-footer" role="contentinfo">

    <!-- Código personalizado antes dos widgets -->
        <div class="footergrid">
            <div class="locationcontainer">
                <ul>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M11.6221 6.29499C12.2641 6.29499 12.8799 6.55004 13.3338 7.00403C13.7878 7.45802 14.0429 8.07377 14.0429 8.71581C14.0429 9.03372 13.9803 9.34852 13.8586 9.64223C13.737 9.93593 13.5586 10.2028 13.3338 10.4276C13.1091 10.6524 12.8422 10.8307 12.5485 10.9524C12.2548 11.074 11.94 11.1366 11.6221 11.1366C10.98 11.1366 10.3643 10.8816 9.91028 10.4276C9.45629 9.9736 9.20124 9.35786 9.20124 8.71581C9.20124 8.07377 9.45629 7.45802 9.91028 7.00403C10.3643 6.55004 10.98 6.29499 11.6221 6.29499ZM11.6221 1.9375C13.4198 1.9375 15.1439 2.65164 16.4151 3.92282C17.6862 5.194 18.4004 6.91809 18.4004 8.71581C18.4004 13.7996 11.6221 21.3041 11.6221 21.3041C11.6221 21.3041 4.84375 13.7996 4.84375 8.71581C4.84375 6.91809 5.55789 5.194 6.82907 3.92282C8.10025 2.65164 9.82434 1.9375 11.6221 1.9375ZM11.6221 3.87416C10.338 3.87416 9.10649 4.38426 8.1985 5.29225C7.29051 6.20023 6.78041 7.43173 6.78041 8.71581C6.78041 9.68415 6.78041 11.6208 11.6221 18.1183C16.4637 11.6208 16.4637 9.68415 16.4637 8.71581C16.4637 7.43173 15.9536 6.20023 15.0456 5.29225C14.1376 4.38426 12.9062 3.87416 11.6221 3.87416Z" fill="#89DBC9"/>
                    </svg> Location</h5>
                    <p>Columbus, OH</p></li>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M21.3041 5.95033C21.3041 4.88517 20.4326 4.01367 19.3675 4.01367H3.87416C2.809 4.01367 1.9375 4.88517 1.9375 5.95033V17.5703C1.9375 18.6355 2.809 19.507 3.87416 19.507H19.3675C20.4326 19.507 21.3041 18.6355 21.3041 17.5703V5.95033ZM19.3675 5.95033L11.6208 10.792L3.87416 5.95033H19.3675ZM19.3675 17.5703H3.87416V7.88699L11.6208 12.7286L19.3675 7.88699V17.5703Z" fill="#89DBC9"/>
                    </svg> Email</h5>
                    <p>alexcleaningoh@gmail.com</p></li>
                    <li><h5><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                      <path d="M18.496 8.7081C20.239 10.4511 20.239 13.1624 18.496 15.0022L19.4643 15.9706C21.8851 13.7434 21.8851 10.0638 19.4643 7.73977L18.496 8.7081ZM17.4308 9.77326L16.4625 10.7416C16.9466 11.4194 16.9466 12.2909 16.4625 12.9688L17.4308 13.9371C18.5928 12.7751 18.5928 11.0321 17.4308 9.77326ZM13.5575 1.25195H3.87416C3.36053 1.25195 2.86793 1.45599 2.50473 1.81919C2.14154 2.18238 1.9375 2.67498 1.9375 3.18861V20.6186C1.9375 21.1322 2.14154 21.6248 2.50473 21.988C2.86793 22.3512 3.36053 22.5552 3.87416 22.5552H13.5575C14.0711 22.5552 14.5637 22.3512 14.9269 21.988C15.2901 21.6248 15.4941 21.1322 15.4941 20.6186V3.18861C15.4941 2.67498 15.2901 2.18238 14.9269 1.81919C14.5637 1.45599 14.0711 1.25195 13.5575 1.25195ZM13.5575 19.6502H3.87416V4.15694H13.5575V19.6502Z" fill="#89DBC9"/>
                    </svg> Phone</h5>
                    <p>(614) 254-9495</p></li>
                </ul>
            </div>
              <div class="footernav">
                  <ul>
                  <li><a href="<?php echo home_url(); ?>"> Home </a></li>
                  <li><a href="<?php echo home_url('#services'); ?>"> Services </a></li>
                  <li><a href="<?php echo home_url('#aboutus'); ?>"> About us </a></li>
                  <li><a href="<?php echo home_url('#portfolio'); ?>"> Portfolio </a></li>
                  <li><a href="<?php echo home_url('#reviews'); ?>"> Reviews </a></li>
                  <li><a href="<?php echo home_url('#contact'); ?>"> Contact </a></li>
                  </ul>
              </div>
                <div class="opentime">
                    <ul>
                        <li style="font-weight:bold;">Our Hours</li>
                        <li>Mon: 8am - 6pm</li>
                        <li>Tue: 8am - 6pm</li>
                        <li>Wed: 8am - 6pm</li>
                        <li>Thu: 8am - 6pm</li>
                        <li>Fri: 8am - 6pm</li>
                        <li>Sat: Closed</li>
                        <li>Sun: Closed</li>
                    </ul>
                </div>
                <div class="address">
                  <h3>Follow us</h3>
                    <ul>
                        <li>
                          <a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                          <path d="M22.6665 12.3033C22.6665 6.7467 18.1894 2.24219 12.6665 2.24219C7.14365 2.24219 2.6665 6.7467 2.6665 12.3033C2.6665 17.325 6.32334 21.4874 11.104 22.2422V15.2116H8.56494V12.3033H11.104V10.0867C11.104 7.56515 12.597 6.17231 14.8811 6.17231C15.9753 6.17231 17.1196 6.36882 17.1196 6.36882V8.8448H15.8587C14.6165 8.8448 14.229 9.62041 14.229 10.4161V12.3033H17.0024L16.5591 15.2116H14.229V22.2422C19.0097 21.4874 22.6665 17.3252 22.6665 12.3033Z" fill="inherit"/>
                        </svg> Facebook</a></li>
                        <li>
                          <a href="#" target="_blank"><svg width="25" height="24" viewBox="0 0 25 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M16.6665 3.24219H8.6665C5.90508 3.24219 3.6665 5.48077 3.6665 8.24219V16.2422C3.6665 19.0036 5.90508 21.2422 8.6665 21.2422H16.6665C19.4279 21.2422 21.6665 19.0036 21.6665 16.2422V8.24219C21.6665 5.48077 19.4279 3.24219 16.6665 3.24219ZM19.9165 16.2422C19.911 18.0348 18.4591 19.4867 16.6665 19.4922H8.6665C6.87385 19.4867 5.42199 18.0348 5.4165 16.2422V8.24219C5.42199 6.44954 6.87385 4.99768 8.6665 4.99219H16.6665C18.4591 4.99768 19.911 6.44954 19.9165 8.24219V16.2422ZM17.4165 8.49219C17.9688 8.49219 18.4165 8.04447 18.4165 7.49219C18.4165 6.93991 17.9688 6.49219 17.4165 6.49219C16.8642 6.49219 16.4165 6.93991 16.4165 7.49219C16.4165 8.04447 16.8642 8.49219 17.4165 8.49219ZM12.6665 7.74219C10.1812 7.74219 8.1665 9.75691 8.1665 12.2422C8.1665 14.7275 10.1812 16.7422 12.6665 16.7422C15.1518 16.7422 17.1665 14.7275 17.1665 12.2422C17.1692 11.0479 16.6959 9.90176 15.8514 9.05727C15.0069 8.21278 13.8608 7.73953 12.6665 7.74219ZM9.9165 12.2422C9.9165 13.761 11.1477 14.9922 12.6665 14.9922C14.1853 14.9922 15.4165 13.761 15.4165 12.2422C15.4165 10.7234 14.1853 9.49219 12.6665 9.49219C11.1477 9.49219 9.9165 10.7234 9.9165 12.2422Z" fill="inherit"/>
                          </svg>
                          Instagram</a></li>
                    </ul>
                </div>
          </div>

    <div class="footer-widgets">
        <?php if ( is_active_sidebar( 'footer-1' ) ) : ?>
            <aside class="widget-area">
                <?php dynamic_sidebar( 'footer-1' ); ?>
            </aside>
        <?php endif; ?>

        <!-- Código personalizado dentro da área de widgets -->
    </div>

    <!-- Código personalizado após os widgets -->

    <div class="footer-credits">
        <p>&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>. All rights reserved.</p>
        <ul>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Terms of Service</a></li>
            <li><a href="#">Cookies Settings</a></li>
        </ul>
    </div>
</footer>

<?php wp_footer(); ?>

</body>
</html>
