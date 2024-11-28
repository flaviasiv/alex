<?php
/**
 * Template Name: Página de Agradecimento
 *
 * Este é um template personalizado para a página de agradecimento.
 *
 * @package SeuTema
 */

get_header(); // Inclui o cabeçalho do tema
?>
<head>
    <style>
        .agradecimento-container {
            display: flex;
            background: var(--Color-Brand-main, #021227);
            flex-direction: column;
            text-align: center;
            padding: 50px;
            margin: 90px auto 50px;
            border-radius: 10px;
        }
        .agradecimento-container h1 {
            color: var(--Color-Brand-main, #021227);
            font-family: "Glacial Indifference";
            font-size: 48px;
            font-weight: 400;
            line-height: 90%; 
        }
        .agradecimento-container p {
            color: var(--Color-Brand-main-high, #021227);
          font-family: 'Inter';
          font-size: 16px;
          font-weight: 400;
          line-height: 150%; /* 24px */
        }
        .agradecimento-container .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #0073aa;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }
        .agradecimento-container .btn-voltar:hover {
            background-color: #fff;
        }
    </style>
</head>
<div class="agradecimento-container">
    <div class="agradecimento-content">
    <img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/logo.png" alt="clean kitchen" class="agradecimentoimg">

        <h1>Your form was successfully submitted!</h1> <br>
        <p>Thank you for reaching out to us and submitting the contact form. We appreciate your interest in our services and are eager to assist you. Our team will review your message and get back to you as soon as possible. If you have any additional questions or need further assistance in the meantime, please don't hesitate to let us know.</p>
        <a href="<?php echo home_url(); ?>" class="btn-voltar">Back to home page!</a>
    </div>
</div>
          <div class="areascontainer container">
            <div class="areastitle aos-fade">
              <img class="logo-areas" src="https://clauzecleaning.com/wp-content/uploads/2024/11/Clauzelogo1.png" alt="">
              <h2>AREAS WE SERVE</h2>
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
                  <li>Marysville</li>
                  <li>Newark</li>
                  <li>New Albany</li>
                  </ul><ul>
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
          <div class="mapcontainer">
            <img src="https://clauzecleaning.com/wp-content/uploads/2024/11/roam-in-color-RryFk4n-vOs-unsplash-7.png" alt="">
          </div>

<?php
get_footer(); // Inclui o rodapé do tema
?>
