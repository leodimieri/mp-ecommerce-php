<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="./assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="./assets/category.css" media="screen, print">

    <link rel="stylesheet" href="./assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="./assets/fonts" media="">
    <style>
        .as-filter-button-text {
            font-size: 26px;
            font-weight: 700;
            color: #333;
        }
        .row.as-fixed-nav {
            border-bottom: 1px solid #ddd;
        }
        .as-producttile-tilehero.with-paddlenav.with-paddlenav-onhover {
            height: 330px;
        }
        .as-footnotes {
            background: #333;
            color: #fff;
            padding: 16px 40px;
        }
    </style>
</head>



<body class="as-theme-light-heroimage">

    <div class="stack">
        
        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    <img src="./assets/music-audio-alp-201709" alt="" width="1440" height="320" data-scale-params-2="wid=2880&amp;hei=640&amp;fmt=jpeg&amp;qlt=95&amp;op_usm=0.5,0.5&amp;.v=1503948581306" class="pd-billboard-hero ir">
                                </div>
                                <div class="pd-billboard-info">
                                    <h1 class="pd-billboard-header pd-util-compact-small-18">Tienda e-commerce</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="as-search-results as-filter-open as-category-landing as-desktop" id="as-search-results">

                <div id="accessories-tab" class="as-accessories-details">
                    <div class="as-accessories" id="as-accessories" style="height: 70vh;">
                        <div class="as-accessories-header">
                            <div class="as-search-results-count">
                                <span class="as-search-results-value"></span>
                            </div>
                        </div>
                        <div class="as-searchnav-placeholder" style="height: 77px;">
                            <div class="row as-search-navbar" id="as-search-navbar" style="width: auto;">
                                <div class="as-accessories-filter-tile column large-6 small-3">

                                    <button class="as-filter-button" aria-expanded="true" aria-controls="as-search-filters" type="button">
                                        <h2 class=" as-filter-button-text">
                                            Smartphones
                                        </h2>
                                    </button>


                                </div>

                            </div>
                        </div>
                        <div class="as-accessories-results  as-search-desktop">
                            <div class="width:60%">
                                <div class="as-producttile-tilehero with-paddlenav " style="float:left;">
                                    <div class="as-dummy-container as-dummy-img">

                                        <img src="./assets/wireless-headphones" class="ir ir item-image as-producttile-image  " style="max-width: 70%;max-height: 70%;"alt="" width="445" height="445">
                                    </div>
                                    <div class="images mini-gallery gal5 ">
                                    

                                        <div class="as-isdesktop with-paddlenav with-paddlenav-onhover">
                                            <div class="clearfix image-list xs-no-js as-util-relatedlink relatedlink" data-relatedlink="6|Powerbeats3 Wireless Earphones - Neighborhood Collection - Brick Red|MPXP2">
                                                <div class="as-tilegallery-element as-image-selected">
                                                    <div class=""></div>
                                                    <img src="./assets/003.jpg" class="ir ir item-image as-producttile-image" alt="" width="445" height="445" style="content:-webkit-image-set(url(<?php echo $_POST['img'] ?>) 2x);">
                                                </div>
                                                
                                            </div>

                                            
                                        </div>

                                        

                                    </div>

                                </div>

                                <?php
                                require __DIR__ .  '/vendor/autoload.php';

                                $url = "https://" . $_SERVER["SERVER_NAME"];

                                MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
                                //TEST-6317427424180639-042414-17afbab8a24694cba7fdeb436bf09594-469485398
                                //APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398
                                
                                $preference = new MercadoPago\Preference();
                                $preference->payment_methods = array(
                                "excluded_payment_methods" => array(
                                    array("id" => "amex")
                                ),
                                "excluded_payment_types" => array(
                                    array("id" => "atm")
                                ),
                                "installments" => 6
                                );

                                $payer = new MercadoPago\Payer();
                                $payer->name = "Lalo";
                                $payer->surname = "Landa";
                                $payer->email = "test_user_63274575@testuser.com";
                                $payer->phone = array(
                                    "area_code" => "011",
                                    "number" => "2222-3333"
                                );
                                
                                $payer->identification = array(
                                    "type" => "DNI",
                                    "number" => "22333444"
                                );
                                
                                $payer->address = array(
                                    "street_name" => "Falsa",
                                    "street_number" => 123,
                                    "zip_code" => "1111"
                                );

                                $item1 = new MercadoPago\Item();
                                $item1->id = "1234";
                                $item1->title = $_POST['title'];
                                $item1->description = "Dispositivo móvil de Tienda e-commerce";
                                $item1->quantity = 1;
                                $item1->currency_id = "ARS";
                                $item1->picture_url = $url . substr($_POST['img'], 1);
                                $item1->unit_price = $_POST['price'];

                                $preference->items = array($item1);
                                $preference->payer = $payer;

                                $preference->back_urls = array(
                                    "success" => $url ."/success",
                                    "failure" => $url ."/failure",
                                    "pending" => $url ."/pending"
                                );

                                $preference->auto_return = "approved";
                                
                                $preference->external_reference = "ABCD1234";

                                $preference->notification_url = $url ."/notifications";

                                $preference->save();
                                ?>

                                <div class="as-producttile-info" style="float:left;min-height: 168px;">
                                    <div class="as-producttile-titlepricewraper" style="min-height: 128px;">
                                        <div class="as-producttile-title">
                                            <h3 class="as-producttile-name">
                                                <p class="as-producttile-tilelink">
                                                    <span data-ase-truncate="2" style="font-size:2em;"><?php echo $_POST['title'] ?></span>
                                                </p>

                                            </h3>
                                        </div>
                                        
                                        <h3 style="font-size:2em;">
                                           <b><?php echo "$" . $_POST['price'] ?> </b>
                                        </h3>
                                        <h3 >
                                            <?php 
                                            if($_POST['unit'] > 1) {
                                                echo "x ". $_POST['unit'] . " unidades";
                                            } else {
                                                echo "x ". $_POST['unit'] . " unidad";
                                            }
                                            ?>
                                        </h3>
                                    </div>

                                    <form action="./states.php" method="POST">
                                        <script
                                            src="https://www.mercadopago.com.ar/integrations/v1/web-payment-checkout.js"
                                            data-preference-id="<?php echo $preference->id; ?>"
                                            data-button-label="Pagar la compra"
                                            data-header-color="#2D3277"
                                            data-elements-color="#2D3277"
                                            >
                                        </script>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div role="alert" class="as-loader-text ally" aria-live="assertive"></div>
        <div class="as-footnotes">
            <div class="as-footnotes-content">
                <div class="as-footnotes-sosumi">
                    Todos los derechos reservados Tienda Tecno 2019
                </div>
            </div>
        </div>

    

</div>

</body></html>