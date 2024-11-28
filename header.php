<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <link rel="stylesheet" href="css/header.css">
    <link rel="stylesheet" href="css/footer.css">
    <link rel="stylesheet" href="style.css">
    <title><?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?></title>
    <?php wp_head(); ?> <!-- Essa função é necessária para carregar scripts e estilos do WordPress e plugins -->
    <style>
    header {
  position: relative;
  display:flex;
  justify-content: space-between;
  width:100%;
  max-width:100vw;
  margin: auto;
  height: 0px;
  z-index: 9;
  font-family: 'Glacial Indifference';
}
#home{
  position: fixed;
  height: 80px;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 9;
  box-sizing: border-box;
}
#home::before {
  content: '';
  position: fixed;
  height: 80px;
  left: 0;
  right: 0;
  width: 100vw;
  z-index: 9;
  box-sizing: border-box;
} 
.navbar{   
  display:flex;
  justify-content: space-between;
  position: fixed;
  align-items: center;
  right: 0;
  left: 0;
  top: 10px;
  width: 100%;
  max-width: 1100px;
  margin: auto;
  border-radius: 10px;
  background: #021227;
  backdrop-filter: blur(14.149999618530273px);
  padding: 0 30px 0 30px;
  height: 80px;
  scroll-behavior: smooth;
  transition: 0.7s;
  z-index: 9;
} 
.nonebar{
  display: flex;
  position: relative;
  background-color: transparent;
  width:160px;
}
.menu-links{
  display: flex;
  justify-content: space-between;
  width: 100%;
  max-width: 1400px;
  padding: 0;
  margin: auto;
  align-items: center;  
}
.menu-linksbtn ul{
  list-style: none;
  display: flex;
  margin: 0 auto;
  justify-content:space-between;
  width:370px;
  text-align: center;
}
.menu-linksbtn a {
  display:block;
  text-align: center;
  color:#ffffff70;
  text-decoration:none;
  font-family: 'Poppins';
  font-size: 13.724px;
  font-weight: 600;
  line-height: 120%;
}
.menu-linksbtn a:hover{
  color:#ffffff90;
  transition: 0.2s ease-in-out;
}
.menusocial{
  right: 0;
}
.menusocial img{
  position: relative;
  display: flex;
  justify-content: center;
}
.menusocial ul{
  position: relative;
  list-style: none;
  display: flex;
  align-items: center;
  margin: 0 auto;
  justify-content:right;
  width:370px;
  gap: 8px;
}
.menusocial ul a {
  display: flex;
  text-decoration:none;
  cursor: pointer;
  align-items: center;
}
.callnow a{
  display: flex;
  justify-content: center;
  gap: 10px;
  color: #021227;
  border-radius: 9.372px;
  border: 1.171px solid #021227;
  background: #FFF;
  font-size: 18.744px;
  font-weight: 700;
  line-height: 120%;
  align-items: center;
  padding: 14px 0px;
  width: 159px;
  text-align: center;
  margin: auto;
}
.callnow svg{
  stroke: #021227;
  width: 26px;
}
.callnow a:hover{
background: #021227;
  border: 1.171px solid #fff;
  transition: 0.15s;
color: #fff;
}
.callnow a:hover svg{
  stroke: #fff;
  transition: 0.15s;
}
.btn-toggle{display: none;}
.logo-m{
z-index: 9;
display:block;
width: 70px;
top: -35px;
left: 0;
border-radius: 100%;
position: absolute;
}
.logow, .callm{display: none;}
@media only screen and (max-width: 1100px) {
  .logow{
  z-index: 9;
  display:block;
  width: 70px;
  top:5px;
  border-radius: 100%;
  left: 20px;
  position: absolute;
  }
  .logo-m, .callw{display: none;}
  .callm{
    display: block;
    width: 169px;
    line-height: 150%;
    position: absolute;
    left: 54%;
    top: 50%;
    transform: translate(-50%, -50%);
    z-index: 99;
  }
.box{
  width: fit-content;
  height: 0vh;
  position: relative;
  text-align: left;
  z-index: 1;
  opacity: 0;
  left: -500px;
  pointer-events: none;
  transition: 0.3s;
}
.btn-toggle {
  position:absolute;
  right:20px;
  top:0px;
  display:none;
  flex-direction:column;
  justify-content:space-between;
  width:15px;
  height:15px;
}
.btn-toggle .bar {
  height:3px;
  width:100%;
  border-radius:20px
}
.active_box{
  opacity: 1;
  left: 0px;
  pointer-events: fill;
}
.menu_icon_box{
  display: block;
  z-index: 2;
  width: fit-content;
  height: auto;
  margin: 25px;
  position: absolute;
  border-radius: 4px;
  cursor: pointer;
}
.line1 , .line2 , .line3{
  width: 20px;
  height: 3px;
  margin: 4px 0px;
  border-radius: 50px;
  transition: 0.2s;
}
.active .line1{
  transform: translate(0px , 15px)rotate(45deg);
}
.active .line2{
  opacity: 0;
}
.active .line3{
  transform: translate(0px , 1px)rotate(-45deg);
}
.menu-links{
  background-color:#2A315D;
  flex-direction: column;
  align-items:center;
  margin-top: 60px;
  width: 100%;
  margin-left: 0;
  margin-right: 0;
  padding-top: 0px;
  border-bottom-right-radius: 32px;
  border-bottom-left-radius: 32px;
  height:220px;
}
.menu-links ul{
    display: block;
}
.menu-linksbtn{
    display: flex;
    margin-bottom: 0px;
}
.menu-linksbtn ul{
  display: flex;
  flex-direction: column;
  gap: 3px;
}
.menusocial ul{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    width: 150px;
    justify-content: center;
    margin: auto;
    margin-bottom: 5px;
}
.menusocial ul a {
    text-decoration:none;
    cursor: pointer;
    align-items: center;
}
.menu-links.active{
    margin: auto;
    margin-top: 70px;
display:flex;
}
.menusocial.active {
    display:flex
}
.navbar {
  top: 0;
  padding:0;    
  margin-top: 0;
  backdrop-filter: none;
  border-radius: 0;
}
#home {
display:flex;
flex-direction:column;
max-width: 1400px;
text-align: right;
align-items: end;
}   
}
/* Exemplo básico de estilo responsivo para o menu */
@media (max-width: 768px) {
 .main-navigation {
     display: none;
 }
 
 .menu-toggle {
     display: block; /* Botão de toggle para dispositivos móveis */
 }

 .menu-toggle.active + .main-navigation {
     display: block; /* Exibe o menu quando o botão for clicado */
 }
}

/* Exemplo básico de estilo responsivo para o menu */
@media (max-width: 768px) {
 .main-navigation {
     display: none;
 }
 
 .menu-toggle {
     display: block; /* Botão de toggle para dispositivos móveis */
 }

 .menu-toggle.active + .main-navigation {
     display: block; /* Exibe o menu quando o botão for clicado */
 }
}
</style>
</head>
<body <?php body_class(); ?>>

<header> 
    <div id="home">
        <nav class="navbar" id="homenav">
          <a href="<?php echo home_url(); ?>"><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/logo-blue.png" alt="" class="logohead logow"draggable="false"></a>
          <div class="callnow callm"><a href="tel:+16142549495">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M15.0499 5C16.0267 5.19057 16.9243 5.66826 17.628 6.37194C18.3317 7.07561 18.8094 7.97326 18.9999 8.95M15.0499 1C17.0792 1.22544 18.9715 2.13417 20.4162 3.57701C21.8608 5.01984 22.7719 6.91101 22.9999 8.94M21.9999 16.92V19.92C22.0011 20.1985 21.944 20.4742 21.8324 20.7293C21.7209 20.9845 21.5572 21.2136 21.352 21.4019C21.1468 21.5901 20.9045 21.7335 20.6407 21.8227C20.3769 21.9119 20.0973 21.9451 19.8199 21.92C16.7428 21.5856 13.7869 20.5341 11.1899 18.85C8.77376 17.3147 6.72527 15.2662 5.18993 12.85C3.49991 10.2412 2.44818 7.27099 2.11993 4.18C2.09494 3.90347 2.12781 3.62476 2.21643 3.36162C2.30506 3.09849 2.4475 2.85669 2.6347 2.65162C2.82189 2.44655 3.04974 2.28271 3.30372 2.17052C3.55771 2.05833 3.83227 2.00026 4.10993 2H7.10993C7.59524 1.99522 8.06572 2.16708 8.43369 2.48353C8.80166 2.79999 9.04201 3.23945 9.10993 3.72C9.23656 4.68007 9.47138 5.62273 9.80993 6.53C9.94448 6.88792 9.9736 7.27691 9.89384 7.65088C9.81408 8.02485 9.6288 8.36811 9.35993 8.64L8.08993 9.91C9.51349 12.4135 11.5864 14.4864 14.0899 15.91L15.3599 14.64C15.6318 14.3711 15.9751 14.1858 16.3491 14.1061C16.723 14.0263 17.112 14.0555 17.4699 14.19C18.3772 14.5286 19.3199 14.7634 20.2799 14.89C20.7657 14.9585 21.2093 15.2032 21.5265 15.5775C21.8436 15.9518 22.0121 16.4296 21.9999 16.92Z" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>                        
            Call now </a>
          </div>   
          <div class="btn-toggle menu_icon_box">
              <div class="line1"></div>
              <div class="line2"></div>
              <div class="line3"></div>
          </div>
            <div class="menu-links box">
              <div class="menu-linksbtn">
                <ul>
                  <li><a href="<?php echo home_url(); ?>"> Home </a></li>
                  <li><a href="<?php echo home_url('#services'); ?>"> Services </a></li>
                  <li><a href="<?php echo home_url('#aboutus'); ?>"> About us </a></li>
                  <li><a href="<?php echo home_url('#portfolio'); ?>"> Portfolio </a></li>
                  <li><a href="<?php echo home_url('#reviews'); ?>"> Reviews </a></li>
                </ul>
              </div>
              
              <div class="nonebar">
                <a href="<?php echo home_url(); ?>"><img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/logo-blue.png" alt="" class="logohead logo-m" draggable="false"></a>
              </div>
              <div class="menusocial">
                <ul>
                  <li class="callnow callw"><a class=" btn1" href="tel:+16142549495">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M15.0499 5C16.0267 5.19057 16.9243 5.66826 17.628 6.37194C18.3317 7.07561 18.8094 7.97326 18.9999 8.95M15.0499 1C17.0792 1.22544 18.9715 2.13417 20.4162 3.57701C21.8608 5.01984 22.7719 6.91101 22.9999 8.94M21.9999 16.92V19.92C22.0011 20.1985 21.944 20.4742 21.8324 20.7293C21.7209 20.9845 21.5572 21.2136 21.352 21.4019C21.1468 21.5901 20.9045 21.7335 20.6407 21.8227C20.3769 21.9119 20.0973 21.9451 19.8199 21.92C16.7428 21.5856 13.7869 20.5341 11.1899 18.85C8.77376 17.3147 6.72527 15.2662 5.18993 12.85C3.49991 10.2412 2.44818 7.27099 2.11993 4.18C2.09494 3.90347 2.12781 3.62476 2.21643 3.36162C2.30506 3.09849 2.4475 2.85669 2.6347 2.65162C2.82189 2.44655 3.04974 2.28271 3.30372 2.17052C3.55771 2.05833 3.83227 2.00026 4.10993 2H7.10993C7.59524 1.99522 8.06572 2.16708 8.43369 2.48353C8.80166 2.79999 9.04201 3.23945 9.10993 3.72C9.23656 4.68007 9.47138 5.62273 9.80993 6.53C9.94448 6.88792 9.9736 7.27691 9.89384 7.65088C9.81408 8.02485 9.6288 8.36811 9.35993 8.64L8.08993 9.91C9.51349 12.4135 11.5864 14.4864 14.0899 15.91L15.3599 14.64C15.6318 14.3711 15.9751 14.1858 16.3491 14.1061C16.723 14.0263 17.112 14.0555 17.4699 14.19C18.3772 14.5286 19.3199 14.7634 20.2799 14.89C20.7657 14.9585 21.2093 15.2032 21.5265 15.5775C21.8436 15.9518 22.0121 16.4296 21.9999 16.92Z" stroke="inherit" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>                        
                    Call now </a>
                  </li>
                </ul>
              </div>
            </div>
        </nav>
    </div>
              <?php
                    if ( function_exists( 'wpmm_menu' ) ) {
                        wpmm_menu(); // Exibe o menu responsivo
                    }
              ?>
                    
</header>