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
<!-- <header id="header" role="banner">
<div id="branding">
<div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization">
<?php
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '<h1>'; }
echo '<a href="' . esc_url( home_url( '/' ) ) . '" title="' . esc_attr( get_bloginfo( 'name' ) ) . '" rel="home" itemprop="url"><span itemprop="name">' . esc_html( get_bloginfo( 'name' ) ) . '</span></a>';
if ( is_front_page() || is_home() || is_front_page() && is_home() ) { echo '</h1>'; }
?>
</div>
<div id="site-description"<?php if ( !is_single() ) { echo ' itemprop="description"'; } ?>><?php bloginfo( 'description' ); ?></div>
</div>
<nav id="menu" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'link_before' => '<span itemprop="name">', 'link_after' => '</span>' ) ); ?>
<div id="search"><?php get_search_form(); ?></div>
</nav>
</header> -->
<div id="container">
<main id="content" role="main">

<header id="main-header" class="bg-white">
        <div id="pre-header" class="bg-petrol">
    <div class="container">
        <div class="row variable-gutters">
            <div class="col-8">
                <a href="https://www.miur.gov.it/" target="_blank" style="margin-right: 10px" aria-label="MIUR - Collegamento esterno - Apre su nuova scheda">
                    <strong>MIUR</strong>
                </a>
                <a href="mailto:KRPC02000L@istruzione.it" style="margin-right: 10px" target="_blank" aria-label="Indirizzo email del liceo">
                    <strong> <i class="fa fa-envelope" aria-hidden="true"></i> KRPC02000L@istruzione.it</strong>
                </a>
                <a href="tel:00390962905731" style="margin-right: 10px" target="_blank" aria-label="Numero di telefono del liceo">
                    <strong> <i class="fa fa-phone" aria-hidden="true"></i> 0962905731</strong>
                </a>
                <span>Codice Meccanografico KRPC02000L  Codice Fatturazione UFHY7G</span>
            </div><!-- /col-6 -->
            <div class="col-4 header-utils-wrapper">
                <div class="header-utils">
                        <div class="header-notification-alert has-notifications">
        <a href="https://www.liceopitagoracrotone.edu.it/circolare/organizzazione-logistica-per-lo-svolgimento-degli-esami-di-stato-2024/" aria-label="Visualizza notifiche">
            <svg class="svg-bell-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bell-solid"></use></svg>
        </a>
    </div>
    <!-- /header-notification-alert -->


    <a class="toggle-user-menu-mobile toggle-menu menu-right push-body d-xl-none jPushMenuBtn" href="#">
        <div class="avatar-wrapper">
            <img src="https://secure.gravatar.com/avatar/15c527e8c7b8ad3bb6f2a89381fc85c6?s=250&amp;d=mm&amp;r=g" alt="Avatar utente">        </div><!-- /avatar-wrapper -->
    </a>
    <a class="dropdown-toggle d-none d-xl-flex" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" aria-label="dropdown toggle">
        <div class="avatar-wrapper">
            <img src="https://secure.gravatar.com/avatar/15c527e8c7b8ad3bb6f2a89381fc85c6?s=250&amp;d=mm&amp;r=g" alt="Avatar utente">        </div><!-- /avatar-wrapper -->
        <p><strong>admin_liceopitagora</strong></p>
    </a>
    <div class="dropdown-menu dropdown-content menu-user menu-user-blue">
        <div class="menu-user-wrapper">
            <div class="user-details">
                <div class="avatar-wrapper">
                    <img src="https://secure.gravatar.com/avatar/15c527e8c7b8ad3bb6f2a89381fc85c6?s=250&amp;d=mm&amp;r=g" alt="Avatar utente">                </div><!-- /avatar-wrapper -->
                <button type="button" aria-label="chiudi menu utente" class="close-user-menu jPushMenuBtn" tabindex="-1">
                    <svg class="svg-cancel-large">
                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-cancel-large"></use>
                    </svg>
                </button>
                <div class="user-details-content">
                    <p><strong>admin_liceopitagora</strong></p>
                    <p></p>
                    <a class="btn btn-action btn-xs" href="https://www.liceopitagoracrotone.edu.it/wp-admin/" tabindex="-1">Crea e gestisci</a>
                </div>
            </div><!-- /user-details -->
            <div class="menu-user-list">
                <ul>
                    <li class="active">
                        <a href="https://www.liceopitagoracrotone.edu.it/wp-admin/">
                            <span>Area personale</span>
                            <svg class="svg-home-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-home-solid"></use></svg>
                        </a>
                    </li>
                                            <li class="has-notifications">
                            <a href="https://www.liceopitagoracrotone.edu.it/circolare/organizzazione-logistica-per-lo-svolgimento-degli-esami-di-stato-2024/">
                                <span>Notifiche</span>
                                <svg class="svg-bell-solid">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bell-solid"></use>
                                </svg>
                            </a>
                        </li>
                                            <li>
                        <a href="https://www.liceopitagoracrotone.edu.it/wp-admin/profile.php">
                            <span>Modifica Profilo</span>
                            <svg class="svg-bookmark-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-bookmark-solid"></use></svg>
                        </a>
                    </li>
                    <li>
                        <a href="https://www.liceopitagoracrotone.edu.it/author/admin_liceopitagora/">
                            <span>Profilo Pubblico</span>
                            <svg class="svg-user-solid"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-user-solid"></use></svg>
                        </a>
                    </li>
                </ul>
            </div><!-- /menu-user-list -->
            <div class="menu-user-bottom">
                <a href="https://www.liceopitagoracrotone.edu.it/wp-login.php?action=logout&amp;_wpnonce=7ec7e59489">
                    <span>Esci</span>
                    <svg class="svg-exit"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-exit"></use></svg>
                </a>
            </div><!-- /menu-user-bottom -->
        </div><!-- /menu-user-wrapper -->
    </div><!-- /menu-user -->
                </div><!-- /header-utils -->
            </div><!-- /col-6 -->
        </div><!-- /row -->
    </div><!-- /container -->
</div>
        <div class="container header-top">
            <div class="row variable-gutters">
                <div class="col-8 d-flex align-items-center">
                    <button class="hamburger hamburger--spin-r toggle-menu menu-left push-body d-xl-none jPushMenuBtn" type="button" aria-label="apri chiudi navigazione" aria-hidden="true" tabindex="-1">
                        <span class="hamburger-box">
                          <span class="hamburger-inner"></span>
                        </span>
                    </button>
                    <!-- Left menu element-->
                    <div class="cbp-spmenu cbp-spmenu-vertical cbp-spmenu-left perfect-scrollbar ps-container ps-theme-default" data-ps-id="2ffc36f4-4c96-d87a-336f-769b0cd097d9">
                        <div class="logo-header">
                            <a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="Vai alla homepage" aria-hidden="true" tabindex="-1">
<svg width="100%" height="100%" class="icon" aria-hidden="true">       
     <image href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" xlink:href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" width="100%" height="100%"></image>    
</svg>
</a>                            <div class="h1">
                                <a href="https://www.liceopitagoracrotone.edu.it" aria-hidden="true" tabindex="-1">
                                    <span>Liceo Classico Statale</span>
                                    <span><strong>Pitagora</strong></span>
                                    <span class="d-none d-lg-block">Crotone</span>
                                </a>
                            </div>
                        </div><!-- /logo-header -->
                        <div class="nav-list-mobile dl-menuwrapper">
                            <nav aria-label="Principale">
                                <ul class="dl-menu nav-list nav-list-primary" data-element="menu">
                                                                            <li class="text-redbrown menu-dropdown-simple-wrapper">
                                            <a class="toggle-dropdown toggle-dropdown-simple " role="button" href="#" aria-expanded="false" id="mainNavDropdownMobile1" title="Vai alla pagina: Scuola" aria-hidden="true" tabindex="-1">Scuola</a>
                                            <ul aria-labelledby="mainNavDropdown1" data-element="school-submenu" class="menu-dropdown dl-submenu menu-dropdown-simple"><li class="menu-title"><div class="h3"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" data-element="overview" aria-hidden="true" tabindex="-1">Panoramica</a></div></li><li><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" aria-hidden="true" tabindex="-1">La Scuola</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/luogo/" data-element="school-locations" aria-hidden="true" tabindex="-1">I luoghi</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/scuola/le-persone/" aria-hidden="true" tabindex="-1">Le persone</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-numeri-della-scuola/" aria-hidden="true" tabindex="-1">I numeri della scuola</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/documento/" aria-hidden="true" tabindex="-1">Le carte della scuola</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/struttura/" aria-hidden="true" tabindex="-1">Organizzazione</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/la-storia/" aria-hidden="true" tabindex="-1">La storia</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-nostri-presidi/" aria-hidden="true" tabindex="-1">I nostri presidi</a></li>
</ul>                                        </li>
                                                                                                                    <li class="text-purplelight menu-dropdown-simple-wrapper">
                                            <a class="toggle-dropdown toggle-dropdown-simple " role="button" href="#" aria-expanded="false" id="mainNavDropdownMobile2" title="Vai alla pagina: Servizi" aria-hidden="true" tabindex="-1">Servizi</a>
                                            <ul aria-labelledby="mainNavDropdown2" data-element="services-submenu" id="menu-servizi" class="menu-dropdown dl-submenu menu-dropdown-simple"><li class="menu-title"><div class="h3"><a href="https://www.liceopitagoracrotone.edu.it/servizi/" data-element="overview" aria-hidden="true" tabindex="-1">Panoramica</a></div></li><li><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/personale-scolastico/" data-element="service-type" aria-hidden="true" tabindex="-1">Personale scolastico</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/famiglie-e-studenti/" data-element="service-type" aria-hidden="true" tabindex="-1">Famiglie e studenti</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/indirizzo-di-studio/" aria-hidden="true" tabindex="-1">Indirizzi di studio</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/servizio/" aria-hidden="true" tabindex="-1">Tutti i servizi</a></li>
</ul>                                        </li>
                                                                                                                    <li class="text-greendark menu-dropdown-simple-wrapper">
                                            <a class="toggle-dropdown toggle-dropdown-simple active" role="button" href="#" aria-expanded="false" id="mainNavDropdownMobile3" title="Vai alla pagina: Novità" aria-hidden="true" tabindex="-1">Novità</a>
                                            <ul aria-labelledby="mainNavDropdown3" data-element="news-submenu" id="menu-novita" class="menu-dropdown dl-submenu menu-dropdown-simple"><li class="menu-title"><div class="h3"><a href="https://www.liceopitagoracrotone.edu.it/novita/" data-element="overview" aria-hidden="true" tabindex="-1">Panoramica</a></div></li><li><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/notizie/" aria-hidden="true" tabindex="-1">Notizie</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/articoli/" aria-hidden="true" tabindex="-1">Articoli</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/circolare/" aria-hidden="true" tabindex="-1">Circolari</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/evento/" aria-hidden="true" tabindex="-1">Calendario eventi</a></li>
<li><a href="https://nuvola.madisoft.it/bacheca-digitale/bacheca/KRPC02000L/1/IN_PUBBLICAZIONE/0/show" aria-hidden="true" tabindex="-1">Albo Online</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/novita/bacheca-sindacale/" aria-hidden="true" tabindex="-1">Bacheca Sindacale</a></li>
</ul>                                        </li>
                                                                                                                    <li class="text-bluelectric menu-dropdown-simple-wrapper">
                                            <a class="toggle-dropdown toggle-dropdown-simple " role="button" href="#" aria-expanded="false" id="mainNavDropdownMobile4" title="Vai alla pagina: Didattica" aria-hidden="true" tabindex="-1">Didattica</a>
                                            <ul aria-labelledby="mainNavDropdown4" data-element="teaching-submenu" id="menu-didattica" class="menu-dropdown dl-submenu menu-dropdown-simple"><li class="menu-title"><div class="h3"><a href="https://www.liceopitagoracrotone.edu.it/didattica/" data-element="overview" aria-hidden="true" tabindex="-1">Panoramica</a></div></li><li><a href="https://www.liceopitagoracrotone.edu.it/didattica/offerta-formativa/" aria-hidden="true" tabindex="-1">Offerta formativa</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/scheda-didattica/" aria-hidden="true" tabindex="-1">Le schede didattiche</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/scheda-progetto/" aria-hidden="true" tabindex="-1">I progetti delle classi</a></li>
<li><a href="https://www.liceopitagoracrotone.edu.it/tipologia-documento/programmazioni/" aria-hidden="true" tabindex="-1">Programmazioni</a></li>
</ul>                                        </li>
                                                                        </ul><!-- /nav-list -->
                            </nav>
                            <nav aria-label="Argomenti"><ul id="menu-top" class="nav-list nav-list-secondary"><li id="menu-item-2145" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2145"><a href="https://www.liceopitagoracrotone.edu.it/prenota-un-appuntamento/" aria-hidden="true">Prenota un Appuntamento</a></li>
<li id="menu-item-2642" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2642"><a href="https://www.liceopitagoracrotone.edu.it/archivio/" aria-hidden="true">Archivio</a></li>
</ul></nav>                        </div>
                    <div class="ps-scrollbar-x-rail" style="left: 0px; bottom: 3px;"><div class="ps-scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps-scrollbar-y-rail" style="top: 0px; right: 3px;"><div class="ps-scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
                    <!-- End Left menu element-->
                    <div class="logo-header">
						<a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="Vai alla homepage">
<svg width="100%" height="100%" class="icon" aria-hidden="true">       
     <image href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" xlink:href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" width="100%" height="100%"></image>    
</svg>
</a>                        <div class="h1">
                            <a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="vai alla homepage">
                                <span>Liceo Classico Statale</span>
                                <span><strong>Pitagora</strong></span>
                                <span class="d-none d-lg-block">Crotone</span>
                            </a>
                        </div>
                    </div><!-- /logo-header -->
                    <div class="sticky-main-nav">

                    </div><!-- /sticky-main-nav -->

                </div><!-- /col -->
                <div class="col-4 d-flex align-items-center justify-content-end">
                    <div class="header-search d-flex align-items-center">
                        <button type="button" class="d-flex align-items-center search-btn" data-toggle="modal" data-target="#search-modal" aria-label="Cerca nel sito" data-element="search-modal-button">
                            <span class="d-none d-lg-block mr-2"><strong>Cerca</strong></span>
                            <svg class="svg-search">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-search"></use>
                            </svg>
                        </button>
                    </div><!-- /header-search -->
                    <div class="header-utils-sticky">

                    </div>

					                                        <div class="header-social">
                        <span>Seguici su:</span>
                        <div class="header-social-wrapper">
                        <a href="https://www.facebook.com/pages/Liceo-classico-Pitagora/702368123282347" aria-label="facebook" title="vai alla pagina facebook"><svg class="icon it-social-facebook"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#it-social-facebook"></use></svg></a>                            <a href="https://www.youtube.com/results?search_query=liceo+classico+crotone" aria-label="youtube" title="vai alla pagina youtube"><svg class="icon it-social-youtube"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#it-social-youtube"></use></svg></a>                                                                                                                                        </div><!-- /header-social-wrapper -->
                    </div><!-- /header-social -->
                                    </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->

        <div class="bg-white d-none d-xl-block header-bottom" id="sub-nav">
            <div class="container">
                <div class="row variable-gutters">
                    <div class="col nav-container"><nav aria-label="Principale" class="main-nav" id="menu-principale">
                            <ul class="dl-menu nav-list nav-list-primary" data-element="menu">
                                                                    <li class="text-redbrown menu-dropdown-simple-wrapper">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" href="#" aria-expanded="false" id="mainNavDropdown1">Scuola</a>
                                        <div class="dropdown-menu menu-dropdown dl-submenu menu-dropdown-simple" aria-labelledby="mainNavDropdown1">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list" data-element="school-submenu"><li class="menu-title"><div class="h3"><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/la-scuola/" data-element="overview">Panoramica</a></div></li><li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/la-scuola/">La Scuola</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/luogo/" data-element="school-locations">I luoghi</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/scuola/le-persone/">Le persone</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-numeri-della-scuola/">I numeri della scuola</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/documento/">Le carte della scuola</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/struttura/">Organizzazione</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/la-scuola/la-storia/">La storia</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-nostri-presidi/">I nostri presidi</a></li>
</ul>                                            </div>
                                        </div>
                                    </li>
                                                                                                        <li class="text-purplelight menu-dropdown-simple-wrapper">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" href="#" aria-expanded="false" id="mainNavDropdown2">Servizi</a>
                                        <div class="dropdown-menu menu-dropdown dl-submenu menu-dropdown-simple" aria-labelledby="mainNavDropdown2">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list" data-element="services-submenu"><li class="menu-title"><div class="h3"><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/servizi/" data-element="overview">Panoramica</a></div></li><li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/personale-scolastico/" data-element="service-type">Personale scolastico</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/famiglie-e-studenti/" data-element="service-type">Famiglie e studenti</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/indirizzo-di-studio/">Indirizzi di studio</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/servizio/">Tutti i servizi</a></li>
</ul>                                            </div>
                                        </div>
                                    </li>
                                                                                                        <li class="text-greendark menu-dropdown-simple-wrapper">
                                        <a class="nav-link dropdown-toggle active" data-toggle="dropdown" role="button" href="#" aria-expanded="false" id="mainNavDropdown3">Novità</a>
                                        <div class="dropdown-menu menu-dropdown dl-submenu menu-dropdown-simple" aria-labelledby="mainNavDropdown3">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list" data-element="news-submenu"><li class="menu-title"><div class="h3"><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/novita/" data-element="overview">Panoramica</a></div></li><li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/notizie/">Notizie</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/articoli/">Articoli</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/circolare/">Circolari</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/evento/">Calendario eventi</a></li>
<li><a class="list-item" href="https://nuvola.madisoft.it/bacheca-digitale/bacheca/KRPC02000L/1/IN_PUBBLICAZIONE/0/show">Albo Online</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/novita/bacheca-sindacale/">Bacheca Sindacale</a></li>
</ul>                                            </div>
                                        </div>
                                    </li>
                                                                                                        <li class="text-bluelectric menu-dropdown-simple-wrapper">
                                        <a class="nav-link dropdown-toggle " data-toggle="dropdown" role="button" href="#" aria-expanded="false" id="mainNavDropdown4">Didattica</a>
                                        <div class="dropdown-menu menu-dropdown dl-submenu menu-dropdown-simple" aria-labelledby="mainNavDropdown4">
                                            <div class="link-list-wrapper">
                                                <ul class="link-list" data-element="teaching-submenu"><li class="menu-title"><div class="h3"><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/didattica/" data-element="overview">Panoramica</a></div></li><li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/didattica/offerta-formativa/">Offerta formativa</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/scheda-didattica/">Le schede didattiche</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/scheda-progetto/">I progetti delle classi</a></li>
<li><a class="list-item" href="https://www.liceopitagoracrotone.edu.it/tipologia-documento/programmazioni/">Programmazioni</a></li>
</ul>                                            </div>
                                        </div>
                                    </li>
                                                                </ul><!-- /nav-list -->
                        </nav>
                        
	                    <nav aria-label="Argomenti"><ul id="menu-top-1" class="nav-list nav-list-secondary"><li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-2145"><a href="https://www.liceopitagoracrotone.edu.it/prenota-un-appuntamento/">Prenota un Appuntamento</a></li>
<li class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2642"><a href="https://www.liceopitagoracrotone.edu.it/archivio/">Archivio</a></li>
</ul></nav>
                    </div><!-- /col nav-container -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /sub-nav -->


    </header>