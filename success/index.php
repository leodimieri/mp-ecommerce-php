<!DOCTYPE html>
<html class="supports-animation supports-columns svg no-touch no-ie no-oldie no-ios supports-backdrop-filter as-mouseuser" lang="en-US"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta name="viewport" content="width=1024">
    <title>Tienda e-commerce</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="format-detection" content="telephone=no">

    <script
    src="https://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../assets/category-landing.css" media="screen, print">

    <link rel="stylesheet" href="../assets/category.css" media="screen, print">

    <link rel="stylesheet" href="../assets/merch-tools.css" media="screen, print">

    <link rel="stylesheet" href="../assets/fonts" media="">
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

                            <?php
                                require __DIR__ .  '/vendor/autoload.php';

                                MercadoPago\SDK::setAccessToken('APP_USR-6317427424180639-042414-47e969706991d3a442922b0702a0da44-469485398');
                                
                                $idd = $_POST['payment_id']; 
                                if($_POST['payment_status']=='approved') {
                                    $payment = MercadoPago\Payment::find_by_id($idd);
                                }

                            ?>

    <div class="stack">
        
        <div class="as-search-wrapper" role="main">
            <div class="as-navtuck-wrapper">
                <div class="as-l-fullwidth  as-navtuck" data-events="event52">
                    <div>
                        <div class="pd-billboard pd-category-header" style="background-color:#21c87a;">
                            <div class="pd-l-plate-scale">
                                <div class="pd-billboard-background">
                                    
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
                            <div style="margin-top:20px;text-align:center;">
                                <svg style="max-width:60px;max-height:60px;" xmlns="http://www.w3.org/2000/svg" height="512px" viewBox="0 0 512 512" width="512px"><g><path d="m369.164062 174.769531c7.8125 7.8125 7.8125 20.476563 0 28.285157l-134.171874 134.175781c-7.8125 7.808593-20.472657 7.808593-28.285157 0l-63.871093-63.875c-7.8125-7.808594-7.8125-20.472657 0-28.28125 7.808593-7.8125 20.472656-7.8125 28.28125 0l49.730468 49.730469 120.03125-120.035157c7.8125-7.808593 20.476563-7.808593 28.285156 0zm142.835938 81.230469c0 141.503906-114.515625 256-256 256-141.503906 0-256-114.515625-256-256 0-141.503906 114.515625-256 256-256 141.503906 0 256 114.515625 256 256zm-40 0c0-119.394531-96.621094-216-216-216-119.394531 0-216 96.621094-216 216 0 119.394531 96.621094 216 216 216 119.394531 0 216-96.621094 216-216zm0 0" data-original="#000000" class="active-path" data-old_color="#000000" fill="#69E781"/></g> </svg>
                            </div>
                            <center>
                                <h2>¡Tu pago fue aprobado!</h2>
                                <h4>
                                    Pagaste: <b><?php echo "$" . $payment->transaction_amount; ?></b>,
                                    con <b><?php echo $payment->payment_method_id; ?></b> (<b><?php echo $payment->installments; ?></b> cuota/s de <b><?php echo "$ " . $payment->transaction_details->installment_amount; ?></b>)<br>
                                    Tu referencia para el pago es: <b><?php echo $_POST['external_reference']; ?></b><br>
                                    Tu ID del pago es: <b><?php echo $_POST['payment_id']; ?></b> (Conservalo para posibles revisiones)<br>
                                    <br>
                                    Pagaste la preferencia con ID: <b><?php echo $_POST['preference_id']; ?></b>
                                </h4>
                                <p><b>Muchas gracias por tu compra</b><br>
                                    En tu cuenta, en la sección de compras vas a poder ver el detalle y el estado de tu pedido.
                                </p>
                                <a href="../" class="mercadopago-button">Volver a la tienda</a>
                            </center>
                            
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