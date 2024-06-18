<!DOCTYPE html>
<html <?php language_attributes(); ?> <?php blankslate_schema_type(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header>
        <div class="top-bar">
            <div class="top-bar-left">
                <span>MIUR</span>
                <span class="contact-info">
                    <a href="mailto:KRPC02000L@istruzione.it">KRPC02000L@istruzione.it</a>
                    <span> | </span>
                    <a href="tel:0962905731">0962905731</a>
                    <span> | </span>
                    <span>Codice Meccanografico KRPC02000L</span>
                    <span>Codice Fatturazione UFHY7G</span>
                </span>
            </div>
            <div class="top-bar-right">
                <a href="#" class="login-icon">Accedi</a>
            </div>
        </div>
        <div class="header-main">
            <div class="logo">
                <img src="path/to/logo.png" alt="Liceo Classico Statale Pitagora Crotone">
            </div>
            <div class="title">
                <h1>Liceo Classico Statale</h1>
                <h2>Pitagora</h2>
                <h3>Crotone</h3>
            </div>
            <div class="social-media">
                <a href="#" class="social-icon">Cerca</a>
                <a href="#" class="social-icon">Seguici su: </a>
                <a href="#" class="social-icon">Facebook</a>
                <a href="#" class="social-icon">YouTube</a>
            </div>
        </div>
        <nav class="main-nav">
            <a href="#">Scuola</a>
            <a href="#">Servizi</a>
            <a href="#">Novità</a>
            <a href="#">Didattica</a>
            <a href="#">Prenota un Appuntamento</a>
            <a href="#">Archivio</a>
        </nav>
    </header>
<div id="container">
<main id="content" role="main">


<style>
    body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: white;
}

.top-bar {
    background-color: #e76e51;
    color: white;
    padding: 10px 20px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.top-bar-left {
    display: flex;
    align-items: center;
}

.top-bar-left span {
    margin-right: 10px;
}

.contact-info a, .contact-info span {
    color: white;
    margin-right: 5px;
}

.top-bar-right .login-icon {
    color: white;
    text-decoration: none;
}

.header-main {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 20px;
}

.logo img {
    height: 80px;
}

.title {
    text-align: center;
}

.title h1, .title h2, .title h3 {
    margin: 0;
    color: black;
}

.social-media {
    text-align: right;
}

.social-media .social-icon {
    color: black;
    margin-left: 10px;
    text-decoration: none;
}

.main-nav {
    display: flex;
    justify-content: center;
    background-color: white;
    border-top: 2px solid #e76e51;
    padding: 10px 0;
}

.main-nav a {
    color: #e76e51;
    text-decoration: none;
    margin: 0 15px;
    font-weight: bold;
}

.main-nav a:hover {
    text-decoration: underline;
}

</style>