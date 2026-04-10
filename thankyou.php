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
<style>
        body {
            background-color: #021227;
            margin: 0;
        }
        .agradecimento-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            background-color: #021227;
            padding: 80px 20px 80px;
            min-height: 60vh;
        }
        .agradecimento-content {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
            max-width: 600px;
            width: 100%;
        }
        .agradecimentoimg {
            width: 160px;
            margin-bottom: 10px;
        }
        .agradecimento-icon {
            width: 72px;
            height: 72px;
            background-color: #89DBC9;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
        }
        .agradecimento-icon svg {
            width: 36px;
            height: 36px;
        }
        .agradecimento-container h1 {
            color: #fff;
            font-family: "Glacial Indifference";
            font-size: 42px;
            font-weight: 700;
            line-height: 110%;
            margin: 0;
        }
        .agradecimento-container h1 span {
            color: #89DBC9;
        }
        .agradecimento-container p {
            color: rgba(255,255,255,0.82);
            font-family: 'Urbanist', sans-serif;
            font-size: 16px;
            font-weight: 400;
            line-height: 160%;
            max-width: 520px;
            margin: 0;
        }
        .agradecimento-divider {
            width: 50px;
            height: 3px;
            background-color: #89DBC9;
            border-radius: 2px;
        }
        .btn-voltar {
            display: inline-block;
            margin-top: 8px;
            padding: 13px 32px;
            background-color: #fff;
            color: #021227;
            font-family: 'Urbanist', sans-serif;
            font-size: 15px;
            font-weight: 700;
            text-decoration: none;
            border-radius: 9px;
            border: 1.5px solid #fff;
            transition: background-color 0.2s, color 0.2s;
        }
        .btn-voltar:hover {
            background-color: transparent;
            color: #fff;
        }
        @media screen and (max-width: 580px) {
            .agradecimento-container h1 { font-size: 30px; }
            .agradecimento-container { padding: 60px 16px 60px; }
        }
    </style>
<div class="agradecimento-container">
    <div class="agradecimento-content">
        <img src="https://alexcleaningoh.com/wp-content/uploads/2024/11/logo.png" alt="Alex Cleaning Services" class="agradecimentoimg">
        <div class="agradecimento-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="#021227" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round">
                <polyline points="20 6 9 17 4 12"/>
            </svg>
        </div>
        <div class="agradecimento-divider"></div>
        <h1>Thank you for <span>reaching out!</span></h1>
        <p>Your request has been successfully submitted. Our team will review your message and get back to you shortly — we'll be in touch soon!</p>
        <a href="<?php echo home_url(); ?>" class="btn-voltar">Back to home page</a>
    </div>
</div>
<?php
get_footer(); // Inclui o rodapé do tema
?>
