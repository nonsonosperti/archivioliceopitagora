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

<header style="color:rgb(0, 0, 0);position:relative;z-index:1;width: 100%;box-shadow:rgba(0, 0, 0, 0.1) 0px 1.6px 24.8px 0px;background-color:rgb(255, 255, 255);display:block;box-sizing:border-box;">
    <div style="height:40px;padding:0px;margin:0px;font-weight:700;line-height:40px;color:rgb(0, 0, 0);font-size:14px;background-color:rgb(234, 118, 83);box-sizing:border-box;">
        <div style="max-width:1200px;padding-left:14px;padding-right:14px;width: 100%;margin-right: auto;margin-left: auto;box-sizing:border-box;">
            <div style="margin-right:-14px;margin-left:-14px;display:flex;flex-wrap:wrap;box-sizing:border-box;">
                <div style="padding-right:14px;padding-left:14px;flex:0 0 66.6667%;max-width:66.6667%;position:relative;width: 100%;box-sizing:border-box;">
                    <a href="https://www.miur.gov.it/" target="_blank" style="margin-right: 10pxcolor:rgb(0, 0, 0);color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;" aria-label="MIUR - Collegamento esterno - Apre su nuova scheda">
                        <strong style="font-weight:600;box-sizing:border-box;">MIUR</strong> </a> <a href="mailto:KRPC02000L@istruzione.it" style="margin-right: 10pxcolor:rgb(0, 0, 0);color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;" target="_blank" aria-label="Indirizzo email del liceo">
                        <strong style="font-weight:600;box-sizing:border-box;"> <i aria-hidden="true" style="box-sizing:border-box;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;line-height:14px;text-rendering: auto;font-family:'Font Awesome 6 Free';font-weight:900;"></i> KRPC02000L@istruzione.it</strong> </a> <a href="tel:00390962905731" style="margin-right: 10pxcolor:rgb(0, 0, 0);color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;" target="_blank" aria-label="Numero di telefono del liceo">
                        <strong style="font-weight:600;box-sizing:border-box;"> <i aria-hidden="true" style="box-sizing:border-box;-webkit-font-smoothing:antialiased;display:inline-block;font-style:normal;font-variant:normal;line-height:14px;text-rendering: auto;font-family:'Font Awesome 6 Free';font-weight:900;"></i> 0962905731</strong> </a> <span style="box-sizing:border-box;">Codice Meccanografico KRPC02000L Codice Fatturazione UFHY7G</span>
                </div><!-- /col-6 -->
                <div style="padding-right:14px;padding-left:14px;flex:0 0 33.3333%;max-width:33.3333%;position:relative;width: 100%;box-sizing:border-box;">
                    <div style="display:flex;flex-direction:row;justify-content:flex-end;align-items:center;height:42px;box-sizing:border-box;">
                        <button type="button" aria-label="Accedi" data-toggle="modal" data-target="#access-modal" style="background-color:rgba(0, 0, 0, 0);border:0px none rgb(0, 0, 0);color:rgb(0, 0, 0);font-weight:700;display:flex;appearance:button;cursor:pointer;text-transform:none;overflow:visible;margin:0px;font-family:'Titillium Web', Geneva, Tahoma, sans-serif;font-size:14px;line-height:40px;border-radius:0px;box-sizing:border-box;">
                            <span style="display:block;margin:0px 8px 0px 0px;margin-right:8px;box-sizing:border-box;">Accedi</span>
                            <div style="padding:8px 2px 0px 0px;box-sizing:border-box;">
                                <svg style="fill:rgb(0, 0, 0);width: 24px;height:24px;display:block;overflow:hidden;vertical-align:middle;box-sizing:border-box;">
                                    <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-user" style="box-sizing:border-box;"></use>
                                </svg>
                            </div><!-- /icon-wrapper -->
                        </button>
                    </div><!-- /header-utils -->
                </div><!-- /col-6 -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div>
    <div style="max-width:1200px;padding-left:14px;padding-right:14px;padding-top:20px;padding-bottom:20px;width: 100%;margin-right: auto;margin-left: auto;box-sizing:border-box;">
        <div style="margin-right:-14px;margin-left:-14px;display:flex;flex-wrap:wrap;box-sizing:border-box;">
            <div style="padding-right:14px;padding-left:14px;align-items:center;display:flex;flex:0 0 66.6667%;max-width:66.6667%;position:relative;width: 100%;box-sizing:border-box;">
                <button type="button" aria-label="apri chiudi navigazione" aria-hidden="true" tabindex="-1" style="display:none;margin-left:10px;margin-right:20px;padding:0px;cursor:pointer;transition-property:opacity, filter;transition-duration:0.15s;transition-timing-function:linear;color:rgb(0, 0, 0);text-transform:none;background-color:rgba(0, 0, 0, 0);border:0px none rgb(0, 0, 0);margin:0px 20px 0px 10px;overflow:visible;appearance:button;font-family:'Titillium Web', Geneva, Tahoma, sans-serif;font-size:16px;line-height:24px;border-radius:0px;box-sizing:border-box;">
                    <span style="width: 24px;height:16px;display:inline-block;position:relative;box-sizing:border-box;">
                        <span style="transition-duration:0.22s;transition-timing-function:cubic-bezier(0.55, 0.055, 0.675, 0.19);width: 24px;height:2px;background-color:rgb(69, 91, 113);border-radius:4px;position:absolute;transition-property:transform;display:block;top:50%;margin-top:-1px;box-sizing:border-box;"></span> </span> </button> <!-- Left menu element-->
                <div data-ps-id="69fcb724-6003-7bf2-fe26-d8914757db61" style="touch-action:none;overflow:hidden;left:-320px;transition:all 0.2s ease-out 0s;display:block;height:813px;position:fixed;top:0px;width: 320px;z-index:99999;box-sizing:border-box;">
                    <div style="display:flex;align-items:center;height:127px;padding:0px 22px;box-sizing:border-box;">
                        <a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="Vai alla homepage" aria-hidden="true" tabindex="-1" style="color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">
                            <svg width="100%" height="100%" aria-hidden="true" style="width: 64px;height:54px;display:block;fill:rgb(69, 91, 113);vertical-align:middle;overflow:hidden;box-sizing:border-box;">
                                <image href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" xlink:href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" width="100%" height="100%" style="box-sizing:border-box;"></image>
                            </svg> </a>
                        <div style="font-size:21.008px;letter-spacing:normal;line-height:27.1003px;display:block;font-weight:400;margin:0px 0px 0px 25px;color:rgb(0, 0, 0);margin-bottom:0px;box-sizing:border-box;">
                            <a href="https://www.liceopitagoracrotone.edu.it" aria-hidden="true" tabindex="-1" style="color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">
                                <span style="display:block;box-sizing:border-box;">Liceo Classico Statale</span> <span style="display:block;box-sizing:border-box;"><strong style="font-weight:700;box-sizing:border-box;">Pitagora</strong></span> <span style="display:block;box-sizing:border-box;">Crotone</span> </a>
                        </div>
                    </div><!-- /logo-header -->
                    <div style="width: 100%;box-sizing:border-box;">
                        <nav aria-label="Principale" style="display:block;box-sizing:border-box;">
                            <ul data-element="menu" style="position:relative;z-index:0;padding:0px 22px 25px;font-size:20px;display:flex;flex-direction:column;line-height:20px;margin:0px;width: 100%;list-style:outside none none;margin-top:0px;margin-bottom:0px;box-sizing:border-box;">
                                <li style="border-bottom:1px solid rgb(229, 229, 229);color:rgb(234, 118, 83);box-sizing:border-box;">
                                    <a role="button" href="#" aria-expanded="false" title="Vai alla pagina: Scuola" aria-hidden="true" tabindex="-1" style="color:rgb(209, 52, 76);padding:18px 0px;font-weight:600;display:block;position:relative;z-index:0;text-decoration:none solid rgb(209, 52, 76);cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Scuola</a>
                                    <ul aria-labelledby="mainNavDropdown1" data-element="school-submenu" style="padding:0px;display:none;list-style:outside none none;margin:0px;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;">
                                            <div style="font-size:20px;line-height:25px;margin:0px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" data-element="overview" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                        </li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">La Scuola</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/luogo/" data-element="school-locations" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I luoghi</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scuola/le-persone/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le persone</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-numeri-della-scuola/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I numeri della scuola</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/documento/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le carte della scuola</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/struttura/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Organizzazione</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/la-storia/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">La storia</a></li>
                                        <li style="border-bottom:0px none rgb(234, 118, 83);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-nostri-presidi/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I nostri presidi</a></li>
                                    </ul>
                                </li>
                                <li style="border-bottom:1px solid rgb(229, 229, 229);color:rgb(60, 124, 170);box-sizing:border-box;">
                                    <a role="button" href="#" aria-expanded="false" title="Vai alla pagina: Servizi" aria-hidden="true" tabindex="-1" style="color:rgb(178, 29, 208);padding:18px 0px;font-weight:600;display:block;position:relative;z-index:0;text-decoration:none solid rgb(178, 29, 208);cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Servizi</a>
                                    <ul aria-labelledby="mainNavDropdown2" data-element="services-submenu" style="padding:0px;display:none;list-style:outside none none;margin:0px;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;">
                                            <div style="font-size:20px;line-height:25px;margin:0px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/servizi/" data-element="overview" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                        </li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/personale-scolastico/" data-element="service-type" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Personale scolastico</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/famiglie-e-studenti/" data-element="service-type" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Famiglie e studenti</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/indirizzo-di-studio/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Indirizzi di studio</a></li>
                                        <li style="border-bottom:0px none rgb(60, 124, 170);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/servizio/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Tutti i servizi</a></li>
                                    </ul>
                                </li>
                                <li style="border-bottom:1px solid rgb(229, 229, 229);color:rgb(60, 124, 170);box-sizing:border-box;">
                                    <a role="button" href="#" aria-expanded="false" title="Vai alla pagina: Novità" aria-hidden="true" tabindex="-1" style="color:rgb(14, 134, 92);padding:18px 0px;font-weight:600;display:block;position:relative;z-index:0;text-decoration:none solid rgb(14, 134, 92);cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Novità</a>
                                    <ul aria-labelledby="mainNavDropdown3" data-element="news-submenu" style="padding:0px;display:none;list-style:outside none none;margin:0px;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;">
                                            <div style="font-size:20px;line-height:25px;margin:0px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/novita/" data-element="overview" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                        </li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/notizie/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Notizie</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/articoli/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Articoli</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/circolare/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Circolari</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/evento/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Calendario eventi</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://nuvola.madisoft.it/bacheca-digitale/bacheca/KRPC02000L/1/IN_PUBBLICAZIONE/0/show" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Albo Online</a></li>
                                        <li style="border-bottom:0px none rgb(60, 124, 170);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/novita/bacheca-sindacale/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Bacheca Sindacale</a></li>
                                    </ul>
                                </li>
                                <li style="border-bottom:1px solid rgb(229, 229, 229);color:rgb(60, 124, 170);box-sizing:border-box;">
                                    <a role="button" href="#" aria-expanded="false" title="Vai alla pagina: Didattica" aria-hidden="true" tabindex="-1" style="color:rgb(13, 0, 255);padding:18px 0px;font-weight:600;display:block;position:relative;z-index:0;text-decoration:none solid rgb(13, 0, 255);cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Didattica</a>
                                    <ul aria-labelledby="mainNavDropdown4" data-element="teaching-submenu" style="padding:0px;display:none;list-style:outside none none;margin:0px;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;">
                                            <div style="font-size:20px;line-height:25px;margin:0px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/didattica/" data-element="overview" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                        </li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/didattica/offerta-formativa/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Offerta formativa</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scheda-didattica/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le schede didattiche</a></li>
                                        <li style="border-bottom:1px solid rgb(229, 229, 229);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scheda-progetto/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I progetti delle classi</a></li>
                                        <li style="border-bottom:0px none rgb(60, 124, 170);margin-left:0px;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-documento/programmazioni/" aria-hidden="true" tabindex="-1" style="padding:18px 0px;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Programmazioni</a></li>
                                    </ul>
                                </li>
                            </ul><!-- /nav-list -->
                        </nav>
                        <nav aria-label="Argomenti" style="display:block;box-sizing:border-box;">
                            <ul style="position:relative;z-index:0;padding:0px 22px;font-size:16px;display:flex;flex-direction:column;line-height:16px;list-style:outside none none;margin:0px;margin-top:0px;margin-bottom:0px;box-sizing:border-box;">
                                <li style="box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/prenota-un-appuntamento/" aria-hidden="true" style="padding:12px 0px;font-weight:600;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Prenota un Appuntamento</a></li>
                                <li style="box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/archivio/" aria-hidden="true" style="padding:12px 0px;font-weight:600;display:block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Archivio</a></li>
                            </ul>
                        </nav>
                    </div>
                    <div style="left: 0px; bottom: 3px;bottom:3px;display:none;position:absolute;border-radius:4px;opacity:0;transition:background-color 0.2s linear 0s, opacity 0.2s linear 0s;height:8px;box-sizing:border-box;">
                        <div tabindex="0" style="left: 0px; width: 0px;width: 0px;position:absolute;background-color:rgb(170, 170, 170);border-radius:4px;transition:background-color 0.2s linear 0s;bottom:0px;height:8px;box-sizing:border-box;"></div>
                    </div>
                    <div style="top: 0px; right: 3px;right:3px;display:none;position:absolute;border-radius:4px;opacity:0;transition:background-color 0.2s linear 0s, opacity 0.2s linear 0s;width: 5px;box-sizing:border-box;">
                        <div tabindex="0" style="top: 0px; height: 0px;height:0px;position:absolute;background-color:rgb(170, 170, 170);border-radius:4px;transition:background-color 0.2s linear 0s;right:0px;width: 5px;box-sizing:border-box;"></div>
                    </div>
                </div> <!-- End Left menu element-->
                <div style="display:flex;align-items:center;box-sizing:border-box;">
                    <a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="Vai alla homepage" style="color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">
                        <svg width="100%" height="100%" aria-hidden="true" style="width: 64px;height:72px;display:block;fill:rgb(69, 91, 113);vertical-align:middle;overflow:hidden;box-sizing:border-box;">
                            <image href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" xlink:href="https://www.liceopitagoracrotone.edu.it/wp-content/uploads/2023/03/LOGO-LICEO-CLASSICO-optimized.jpg" width="100%" height="100%" style="box-sizing:border-box;"></image>
                        </svg> </a>
                    <div style="font-size:21.008px;letter-spacing:normal;line-height:27.1003px;display:block;font-weight:400;margin:0px 0px 0px 25px;color:rgb(0, 0, 0);margin-bottom:0px;box-sizing:border-box;">
                        <a href="https://www.liceopitagoracrotone.edu.it" aria-label="Vai alla homepage" title="vai alla homepage" style="color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">
                            <span style="display:block;box-sizing:border-box;">Liceo Classico Statale</span> <span style="display:block;box-sizing:border-box;"><strong style="font-weight:700;box-sizing:border-box;">Pitagora</strong></span> <span style="display:block;box-sizing:border-box;">Crotone</span> </a>
                    </div>
                </div><!-- /logo-header -->
                <div style="display:none;box-sizing:border-box;">

                </div><!-- /sticky-main-nav -->
            </div><!-- /col -->
            <div style="padding-right:14px;padding-left:14px;align-items:center;justify-content:flex-end;display:flex;flex:0 0 33.3333%;max-width:33.3333%;position:relative;width: 100%;box-sizing:border-box;">
                <div style="display:none;margin:0px 20px 0px 0px;align-items:center;box-sizing:border-box;">
                    <button type="button" data-toggle="modal" data-target="#search-modal" aria-label="Cerca nel sito" data-element="search-modal-button" style="background-color:rgba(0, 0, 0, 0);border:0px none rgb(0, 0, 0);color:rgb(0, 0, 0);align-items:center;display:flex;appearance:button;cursor:pointer;text-transform:none;overflow:visible;margin:0px;font-family:'Titillium Web', Geneva, Tahoma, sans-serif;font-size:16px;line-height:24px;border-radius:0px;box-sizing:border-box;">
                        <span style="display:block;margin-right:8px;box-sizing:border-box;"><strong style="font-weight:600;box-sizing:border-box;">Cerca</strong></span> <svg style="display:none;width: 19px;height:19px;fill:rgb(0, 0, 0);overflow:hidden;vertical-align:middle;box-sizing:border-box;">
                            <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-search" style="box-sizing:border-box;"></use>
                        </svg> </button>
                </div><!-- /header-search -->
                <div style="box-sizing:border-box;">

                </div>
                <div style="display:flex;box-sizing:border-box;align-items:center;">
                    <span style="font-weight:600;box-sizing:border-box;">Seguici su:</span>
                    <div style="display:flex;align-items:center;box-sizing:border-box;">
                        <a href="https://www.facebook.com/pages/Liceo-classico-Pitagora/702368123282347" aria-label="facebook" title="vai alla pagina facebook" style="color:rgb(69, 91, 113);margin-left:8px;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;padding:15px;"><svg style="fill:rgb(0, 0, 0);width: 18px;height:18px;display:block;vertical-align:middle;overflow:hidden;box-sizing:border-box;">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#it-social-facebook" style="box-sizing:border-box;"></use>
                            </svg></a> <a href="https://www.youtube.com/results?search_query=liceo+classico+crotone" aria-label="youtube" title="vai alla pagina youtube" style="color:rgb(69, 91, 113);margin-left:8px;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;padding:15px;"><svg style="fill:rgb(0, 0, 0);width: 18px;height:18px;display:block;vertical-align:middle;overflow:hidden;box-sizing:border-box;">
                                <use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#it-social-youtube" style="box-sizing:border-box;"></use>
                            </svg></a>
                    </div><!-- /header-social-wrapper -->
                </div><!-- /header-social -->
            </div><!-- /col -->
        </div><!-- /row -->
    </div><!-- /container -->
    <div style="display:block;font-size:18px;position:relative;z-index:1;background-color:rgb(255, 255, 255);box-sizing:border-box;">
        <div style="max-width:1200px;padding-left:14px;padding-right:14px;width: 100%;margin-right: auto;margin-left: auto;box-sizing:border-box;">
            <div style="margin-right:-14px;margin-left:-14px;display:flex;flex-wrap:wrap;box-sizing:border-box;">
                <div style="padding-right:14px;padding-left:14px;display:none;position:static;flex-basis:0px;flex-grow:1;max-width:100%;width: 100%;box-sizing:border-box;">
                    <nav aria-label="Principale" style="display:block;box-sizing:border-box;">
                        <ul data-element="menu" style="float:left;display:flex;font-weight:600;list-style:outside none none;padding:0px;margin:0px;margin-top:0px;margin-bottom:0px;box-sizing:border-box;">
                            <li style="position:relative;z-index:0;color:rgb(234, 118, 83);box-sizing:border-box;">
                                <a data-toggle="dropdown" role="button" href="#" aria-expanded="false" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);white-space:nowrap;cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Scuola</a>
                                <div aria-labelledby="mainNavDropdown1" style="background-color:rgb(255, 255, 255);position:absolute;z-index:1;left:0px;box-shadow:rgba(0, 0, 0, 0.15) 0px 4px 15.008px 0px;border-radius:4px;margin-top:10px;min-width:320px;font-size:16px;font-weight:400;color:rgb(69, 91, 113);top:50px;transform:none;padding:0px;display:none;float:none;margin:10px 0px 0px;text-align:left;list-style:outside none none;-webkit-background-clip:padding-box;border:0px solid rgba(0, 0, 0, 0);box-sizing:border-box;-webkit-background-clip:padding-box;">
                                    <div style="box-sizing:border-box;">
                                        <ul data-element="school-submenu" style="list-style:outside none none;padding:0px;margin:0px;list-style-type:none;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                            <li style="border-bottom:1px solid rgb(229, 229, 229);margin:0px;box-sizing:border-box;">
                                                <div style="font-size:16px;line-height:16px;margin:0px;padding:18px 24px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" data-element="overview" style="font-size:16px;padding:0px;line-height:16px;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);display:block;position:relative;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                            </li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">La Scuola</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/luogo/" data-element="school-locations" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I luoghi</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scuola/le-persone/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le persone</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-numeri-della-scuola/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I numeri della scuola</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/documento/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le carte della scuola</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/struttura/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Organizzazione</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/la-storia/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">La storia</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/la-scuola/i-nostri-presidi/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I nostri presidi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li style="position:relative;z-index:0;color:rgb(60, 124, 170);box-sizing:border-box;">
                                <a data-toggle="dropdown" role="button" href="#" aria-expanded="false" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);white-space:nowrap;cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Servizi</a>
                                <div aria-labelledby="mainNavDropdown2" style="background-color:rgb(255, 255, 255);position:absolute;z-index:1;left:0px;box-shadow:rgba(0, 0, 0, 0.15) 0px 4px 15.008px 0px;border-radius:4px;margin-top:10px;min-width:320px;font-size:16px;font-weight:400;color:rgb(69, 91, 113);top:50px;transform:none;padding:0px;display:none;float:none;margin:10px 0px 0px;text-align:left;list-style:outside none none;-webkit-background-clip:padding-box;border:0px solid rgba(0, 0, 0, 0);box-sizing:border-box;-webkit-background-clip:padding-box;">
                                    <div style="box-sizing:border-box;">
                                        <ul data-element="services-submenu" style="list-style:outside none none;padding:0px;margin:0px;list-style-type:none;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                            <li style="border-bottom:1px solid rgb(229, 229, 229);margin:0px;box-sizing:border-box;">
                                                <div style="font-size:16px;line-height:16px;margin:0px;padding:18px 24px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/servizi/" data-element="overview" style="font-size:16px;padding:0px;line-height:16px;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);display:block;position:relative;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                            </li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/personale-scolastico/" data-element="service-type" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Personale scolastico</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-servizio/famiglie-e-studenti/" data-element="service-type" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Famiglie e studenti</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/indirizzo-di-studio/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Indirizzi di studio</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/servizio/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Tutti i servizi</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li style="position:relative;z-index:0;color:rgb(60, 124, 170);box-sizing:border-box;">
                                <a data-toggle="dropdown" role="button" href="#" aria-expanded="false" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);white-space:nowrap;cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Novità</a>
                                <div aria-labelledby="mainNavDropdown3" style="background-color:rgb(255, 255, 255);position:absolute;z-index:1;left:0px;box-shadow:rgba(0, 0, 0, 0.15) 0px 4px 15.008px 0px;border-radius:4px;margin-top:10px;min-width:320px;font-size:16px;font-weight:400;color:rgb(69, 91, 113);top:50px;transform:none;padding:0px;display:none;float:none;margin:10px 0px 0px;text-align:left;list-style:outside none none;-webkit-background-clip:padding-box;border:0px solid rgba(0, 0, 0, 0);box-sizing:border-box;-webkit-background-clip:padding-box;">
                                    <div style="box-sizing:border-box;">
                                        <ul data-element="news-submenu" style="list-style:outside none none;padding:0px;margin:0px;list-style-type:none;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                            <li style="border-bottom:1px solid rgb(229, 229, 229);margin:0px;box-sizing:border-box;">
                                                <div style="font-size:16px;line-height:16px;margin:0px;padding:18px 24px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/novita/" data-element="overview" style="font-size:16px;padding:0px;line-height:16px;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);display:block;position:relative;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                            </li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/notizie/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Notizie</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-articolo/articoli/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Articoli</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/circolare/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Circolari</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/evento/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Calendario eventi</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://nuvola.madisoft.it/bacheca-digitale/bacheca/KRPC02000L/1/IN_PUBBLICAZIONE/0/show" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Albo Online</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/novita/bacheca-sindacale/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Bacheca Sindacale</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                            <li style="position:relative;z-index:0;color:rgb(60, 124, 170);box-sizing:border-box;">
                                <a data-toggle="dropdown" role="button" href="#" aria-expanded="false" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);white-space:nowrap;cursor:pointer;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Didattica</a>
                                <div aria-labelledby="mainNavDropdown4" style="background-color:rgb(255, 255, 255);position:absolute;z-index:1;left:0px;box-shadow:rgba(0, 0, 0, 0.15) 0px 4px 15.008px 0px;border-radius:4px;margin-top:10px;min-width:320px;font-size:16px;font-weight:400;color:rgb(69, 91, 113);top:50px;transform:none;padding:0px;display:none;float:none;margin:10px 0px 0px;text-align:left;list-style:outside none none;-webkit-background-clip:padding-box;border:0px solid rgba(0, 0, 0, 0);box-sizing:border-box;-webkit-background-clip:padding-box;">
                                    <div style="box-sizing:border-box;">
                                        <ul data-element="teaching-submenu" style="list-style:outside none none;padding:0px;margin:0px;list-style-type:none;margin-bottom:0px;margin-top:0px;box-sizing:border-box;">
                                            <li style="border-bottom:1px solid rgb(229, 229, 229);margin:0px;box-sizing:border-box;">
                                                <div style="font-size:16px;line-height:16px;margin:0px;padding:18px 24px;color:rgb(0, 0, 0);letter-spacing:normal;margin-bottom:0px;font-weight:700;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/didattica/" data-element="overview" style="font-size:16px;padding:0px;line-height:16px;color:rgb(209, 69, 26);text-decoration:none solid rgb(209, 69, 26);display:block;position:relative;background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Panoramica</a></div>
                                            </li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/didattica/offerta-formativa/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Offerta formativa</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scheda-didattica/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Le schede didattiche</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/scheda-progetto/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">I progetti delle classi</a></li>
                                            <li style="display:block;position:relative;z-index:0;margin:0px;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/tipologia-documento/programmazioni/" style="color:rgb(69, 91, 113);padding:12px 24px;display:block;font-size:16px;line-height:24px;position:relative;z-index:0;text-decoration:none solid rgb(69, 91, 113);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Programmazioni</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </li>
                        </ul><!-- /nav-list -->
                    </nav>
                    <nav aria-label="Argomenti" style="display:block;box-sizing:border-box;">
                        <ul style="float:right;font-size:15.2px;margin-top:4px;font-weight:400;display:flex;list-style:outside none none;padding:0px;margin:4px 0px 0px;margin-bottom:0px;box-sizing:border-box;">
                            <li style="box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/prenota-un-appuntamento/" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Prenota un Appuntamento</a></li>
                            <li style="font-weight:600;box-sizing:border-box;"><a href="https://www.liceopitagoracrotone.edu.it/archivio/" style="padding:10px 17px;position:relative;z-index:2;display:inline-block;color:rgb(0, 0, 0);text-decoration:none solid rgb(0, 0, 0);background-color:rgba(0, 0, 0, 0);box-sizing:border-box;">Archivio</a></li>
                        </ul>
                    </nav>
                </div><!-- /col nav-container -->
            </div><!-- /row -->
        </div><!-- /container -->
    </div><!-- /sub-nav -->
</header>