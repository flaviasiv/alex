<?php
/*
Template Name: custom
*/
?>


    <!-- Aqui você pode colocar conteúdo HTML estático --><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="style.css">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
</head>
    
<div class="gallerycontainer container" id="portfolio">
              <div class="gallerytitle aos-fade">
                <div class="title">
                  <small>See Our Dedication</small>
                  <h2>IN ACTION</h2>
                </div>
              </div>
              <div class="gallerygrid gallerygridd">
                <div class="gallerycard"><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery1.png" alt=""><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery2.png" alt=""></div>
                <div class="gallerycard cardm-t"><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery3.png" alt=""><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery4.png" alt=""></div>
                <div class="gallerycard"><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery5.png" alt=""><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/Gallery6.png" alt=""></div>
              </div>
              <!-- <div class="gallerygrid gallerygridm">
                <swiper-container class="mySwiper2 aos-fade" pagination="true" pagination-clickable="true" space-between="10" slides-per-view="auto" loop="true" navigation="true" autoplay-delay="4000" pagination-dynamic-bullets="true">
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                  <swiper-slide class="swiper2">
                    <div>
                      <img src="" alt="">
                    </div>
                  </swiper-slide>
                </swiper-container>              
              </div> -->
          </div>
          <div class="reviewscontainer container" id="reviews">
            <div class="reviewstitle aos-fade">
              <small>Reviews</small>
              <h2>CUSTOMERS LOVE
                ALEX CLEANING</h2>
            </div>  
            <!-- reviews aqui -->
            <br><br>
            <button class="btnestimate aos-fade"><a href="#contact"><svg xmlns="http://www.w3.org/2000/svg" width="23" height="23" viewBox="0 0 23 23" fill="none">
            <g clip-path="url(#clip0_28135_69)">
              <path d="M18.802 12.8995C19.077 13.1745 19.2314 13.5475 19.2314 13.9364C19.2314 14.3253 19.077 14.6983 18.802 14.9733L12.202 21.5733C11.927 21.8483 11.554 22.0027 11.1651 22.0027C10.7762 22.0027 10.4032 21.8483 10.1282 21.5733L3.52816 14.9733C3.26099 14.6967 3.11316 14.3262 3.1165 13.9417C3.11985 13.5571 3.27409 13.1893 3.54603 12.9173C3.81796 12.6454 4.18582 12.4911 4.57037 12.4878C4.95493 12.4845 5.32541 12.6323 5.60203 12.8995L9.69843 16.8697L9.69843 2.93639C9.69843 2.54741 9.85295 2.17436 10.128 1.8993C10.4031 1.62425 10.7761 1.46973 11.1651 1.46973C11.5541 1.46973 11.9271 1.62425 12.2022 1.8993C12.4772 2.17436 12.6318 2.54741 12.6318 2.93639L12.6318 16.8697L16.7282 12.8995C17.0032 12.6245 17.3762 12.47 17.7651 12.47C18.154 12.47 18.527 12.6245 18.802 12.8995Z" fill="inherit"/>
            </g>
            <defs>
              <clipPath id="clip0_28135_69">
                <rect width="22" height="22" fill="white" transform="translate(22.165 0.736328) rotate(90)"/>
              </clipPath>
            </defs>
          </svg> Get a free estimate</a></button> 
          </div>
          <div class="ig-embed">
            <div class="preferencetitle igtitle aos-fade">
              <svg xmlns="http://www.w3.org/2000/svg" width="44" height="43" viewBox="0 0 44 43" fill="none">
                <path d="M14.5618 3.66553H29.4369C35.1035 3.66553 39.7077 8.26969 39.7077 13.9364V28.8114C39.7077 31.5354 38.6256 34.1478 36.6994 36.0739C34.7733 38.0001 32.1608 39.0822 29.4369 39.0822H14.5618C8.89518 39.0822 4.29102 34.478 4.29102 28.8114V13.9364C4.29102 11.2124 5.37312 8.59994 7.29927 6.67378C9.22543 4.74763 11.8379 3.66553 14.5618 3.66553ZM14.2077 7.20719C12.5169 7.20719 10.8954 7.87884 9.69988 9.07439C8.50433 10.2699 7.83268 11.8914 7.83268 13.5822V29.1655C7.83268 32.6895 10.6837 35.5405 14.2077 35.5405H29.791C31.4818 35.5405 33.1033 34.8689 34.2988 33.6733C35.4944 32.4778 36.166 30.8563 36.166 29.1655V13.5822C36.166 10.0582 33.315 7.20719 29.791 7.20719H14.2077ZM31.2962 9.86344C31.8833 9.86344 32.4463 10.0967 32.8614 10.5118C33.2766 10.9269 33.5098 11.4899 33.5098 12.077C33.5098 12.6641 33.2766 13.2271 32.8614 13.6422C32.4463 14.0573 31.8833 14.2905 31.2962 14.2905C30.7092 14.2905 30.1461 14.0573 29.731 13.6422C29.3159 13.2271 29.0827 12.6641 29.0827 12.077C29.0827 11.4899 29.3159 10.9269 29.731 10.5118C30.1461 10.0967 30.7092 9.86344 31.2962 9.86344ZM21.9993 12.5197C24.3476 12.5197 26.5997 13.4525 28.2602 15.113C29.9207 16.7735 30.8535 19.0256 30.8535 21.3739C30.8535 23.7221 29.9207 25.9742 28.2602 27.6347C26.5997 29.2952 24.3476 30.228 21.9993 30.228C19.6511 30.228 17.399 29.2952 15.7385 27.6347C14.078 25.9742 13.1452 23.7221 13.1452 21.3739C13.1452 19.0256 14.078 16.7735 15.7385 15.113C17.399 13.4525 19.6511 12.5197 21.9993 12.5197ZM21.9993 16.0614C20.5904 16.0614 19.2391 16.6211 18.2428 17.6174C17.2466 18.6136 16.6868 19.9649 16.6868 21.3739C16.6868 22.7828 17.2466 24.1341 18.2428 25.1304C19.2391 26.1267 20.5904 26.6864 21.9993 26.6864C23.4083 26.6864 24.7596 26.1267 25.7559 25.1304C26.7521 24.1341 27.3118 22.7828 27.3118 21.3739C27.3118 19.9649 26.7521 18.6136 25.7559 17.6174C24.7596 16.6211 23.4083 16.0614 21.9993 16.0614Z" fill="#021227"/>
              </svg>
              <h2>FOLLOW US</h2>
            </div>
            <div class="ig-iframe">
            <iframe src="https://www.instagram.com/instagram/embed" frameborder="0" scrolling="no" allowtransparency="true"></iframe>
            </div>
          </div>
          <div class="contactcontainer container" id="contact">
            <div class="contact">
              <img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/logo.png" alt="">
              <div class="contacttitle">
                <small>Get a Free Estimate</small>
                <h2>Contact us today for a personalized quote!</h2>
              </div>
            </div>
            <div class="form">
               <!-- form plugin -->
              <?php echo do_shortcode('[forminator_form id="63"]'); ?>
            </div>
          </div>
          <div class="areascontainer container">
            <img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/map.png" alt="" class="mapimg">
            <div class="mapsgrid">
              <div class="areastitle title aos-fade">
                <h2>Locate us and enjoy
                  top-quality cleaning services!</h2>
                  <button class="btnestimate btngoogle aos-fade"><a href="https://www.google.com/maps/place/Alex+Cleaning+Services/@40.3633984,-82.669505,7z/data=!4m8!3m7!1s0x66a6f5bb9542d15f:0xf19a84a57bcf7b8b!8m2!3d40.3633984!4d-82.669505!9m1!1b1!16s%2Fg%2F11w1hlw17m?hl=en&entry=ttu&g_ep=EgoyMDI0MTEyNC4xIKXMDSoJLDEwMjExMjMzSAFQAw%3D%3D"><svg width="22" height="21" viewBox="0 0 22 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.5 7.2334C21.5 8.6034 20.324 9.7334 18.875 9.7334C17.426 9.7334 16.25 8.6034 16.25 7.2334C16.25 8.6034 15.074 9.7334 13.625 9.7334C12.176 9.7334 11 8.6034 11 7.2334C11 8.6034 9.824 9.7334 8.375 9.7334C6.926 9.7334 5.75 8.6034 5.75 7.2334C5.75 8.6034 4.574 9.7334 3.125 9.7334C1.676 9.7334 0.5 8.6034 0.5 7.2334L1.9595 1.8134C1.9595 1.8134 2.264 0.733398 3.335 0.733398H18.665C19.736 0.733398 20.0405 1.8134 20.0405 1.8134L21.5 7.2334ZM20.45 10.9334V18.7334C20.45 19.8334 19.505 20.7334 18.35 20.7334H3.65C2.495 20.7334 1.55 19.8334 1.55 18.7334V10.9334C2.24025 11.2048 2.99451 11.2942 3.73355 11.1921C4.47259 11.0901 5.16913 10.8004 5.75 10.3534C6.4745 10.9034 7.388 11.2334 8.375 11.2334C9.3725 11.2334 10.286 10.9034 11 10.3534C11.7245 10.9034 12.638 11.2334 13.625 11.2334C14.6225 11.2334 15.536 10.9034 16.25 10.3534C16.964 10.9034 17.888 11.2334 18.875 11.2334C19.4315 11.2334 19.967 11.1234 20.45 10.9334ZM18.35 16.0634C18.35 15.8634 18.35 15.6534 18.2975 15.4334L18.266 15.2734H15.1475V16.4434H17.048C16.985 16.6634 16.901 16.8834 16.7225 17.0634C16.376 17.3934 15.9035 17.5734 15.3995 17.5734C14.8745 17.5734 14.36 17.3634 13.982 17.0134C13.2575 16.3034 13.2575 15.1534 14.003 14.4334C14.7275 13.7334 15.9245 13.7334 16.6805 14.4034L16.8275 14.5334L17.7095 13.6834L17.5415 13.5434C16.9535 13.0234 16.1765 12.7334 15.3575 12.7334H15.347C14.4965 12.7334 13.6985 13.0434 13.1 13.6034C12.4805 14.1834 12.134 14.9434 12.134 15.7334C12.134 16.5334 12.4595 17.2734 13.058 17.8234C13.6817 18.4032 14.5175 18.7295 15.389 18.7334H15.41C16.25 18.7334 16.9955 18.4434 17.5415 17.9334C18.035 17.4534 18.35 16.7334 18.35 16.0634Z" fill="white"/>
                    </svg>
                    Google My Business</a></button> 
                    <svg width="125" height="26" viewBox="0 0 125 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <path d="M12.5 0.733398L15.3064 9.37069H24.3882L17.0409 14.7088L19.8473 23.3461L12.5 18.008L5.15268 23.3461L7.95911 14.7088L0.611794 9.37069H9.69357L12.5 0.733398Z" fill="#E7C673"/>
                      <path d="M37.5 0.733398L40.3064 9.37069H49.3882L42.0409 14.7088L44.8473 23.3461L37.5 18.008L30.1527 23.3461L32.9591 14.7088L25.6118 9.37069H34.6936L37.5 0.733398Z" fill="#E7C673"/>
                      <path d="M62.5 0.733398L65.3064 9.37069H74.3882L67.0409 14.7088L69.8473 23.3461L62.5 18.008L55.1527 23.3461L57.9591 14.7088L50.6118 9.37069H59.6936L62.5 0.733398Z" fill="#E7C673"/>
                      <path d="M87.5 0.733398L90.3064 9.37069H99.3882L92.0409 14.7088L94.8473 23.3461L87.5 18.008L80.1527 23.3461L82.9591 14.7088L75.6118 9.37069H84.6936L87.5 0.733398Z" fill="#E7C673"/>
                      <path d="M112.5 0.733398L115.306 9.37069H124.388L117.041 14.7088L119.847 23.3461L112.5 18.008L105.153 23.3461L107.959 14.7088L100.612 9.37069H109.694L112.5 0.733398Z" fill="#E7C673"/>
                      </svg>
              </div>
              <div class="border"></div>
              <div class="areas">
                <h2>Areas <br>We Serve</h2>
                <div class="listareas">
                  <ul>
                    <li>Bexley</li>
                    <li>Blacklick</li>
                    <li>Buckeye Lake</li>
                    <li>Canal Winchester</li>
                    <li>Clintonville</li>
                    <li>Columbus</li>
                    <li>Delaware</li>
                    <li>Galena</li>
                    <li>Gahanna</li>
                    <li>Galloway</li>
                  </ul><ul>
                    <li>Grove City</li>
                    <li>Groveport</li>
                    <li>Heaton</li>
                    <li>Hilliard</li>
                    <li>Johnstown</li>
                    <li>Lancaster</li>
                    <li>Lewis Center</li>
                    <li>Marion</li>
                    <li>Marysville</li>
                    <li>Newark</li>
                  </ul><ul>
                    <li>New Albany</li>
                    <li>Pataskala</li>
                    <li>Pickerington</li>
                    <li>Plain City</li>
                    <li>Powell</li>
                    <li>Reynoldsburg</li>
                    <li>Sunbury</li>
                    <li>Upper Arlington</li>
                    <li>Westerville</li>
                    <li>Worthington</li>
                  </ul>
                </div>
              </div>
            </div>
          </div>


<script src="./js/jquery.min.js"></script>
 <script src="./js/javascript.js"></script>
 <script src="./js/swiper-bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-element-bundle.min.js"></script>
 <script>
   document.addEventListener("DOMContentLoaded", function () {
 const buttons = document.querySelectorAll(".scroll-to");
 buttons.forEach((button) => {
     button.addEventListener("click", function () {
         // Fecha o popup
         const popup = this.closest(".pum-overlay");
         if (popup) {
             PUM.close(popup);
         }
     });
 });
});
    </script>
</body>
</html>
