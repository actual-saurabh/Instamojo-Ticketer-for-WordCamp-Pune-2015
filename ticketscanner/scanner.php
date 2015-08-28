<?php
/*
 * Template Name: Scanner
 */

$path = trailingslashit( get_stylesheet_directory_uri() );
wp_enqueue_script( 'jquery' );

$scripts = array(
        'grid',
        'version',
        'detector',
        'formatinf',
        'errorlevel',
        'bitmat',
        'datablock',
        'bmparser',
        'datamask',
        'rsdecoder',
        'gf256poly',
        'gf256',
        'decoder',
        'qrcode',
        'findpat',
        'alignpat',
        'databr'
);

$deps = array();
foreach ( $scripts as $script ) {
    wp_register_script( 'qrcode-' . $script, $path . 'jsqrcode/src/' . $script . '.js', $deps );

    array_push( $deps, 'qrcode-' . $script );
}

array_push( $deps, 'jquery' );
wp_enqueue_script( 'qrcode-scanner', $path . 'ticketscanner/scanner.js', $deps );
?>
<html>
    <head>
        <meta name="viewport" content="width=device-width">
        <style>
            body{
                margin:0;
                padding:0;
            }
            #mainbody{
                position:relative;
                padding-top: 20px;
                width:460px;
                margin:0 auto;
                border: 20px #fff solid;
            }
            #result table{
                width:100%;
            }

            #outdiv{
                width: 460px;
                margin:0 auto;
            }
            @keyframes scanning { 
                50% { border-color: #fffff0 } 
            }
            #mainbody.scanning{ /*or other element you want*/
                animation: scanning .5s step-end infinite alternate;
            }
            @keyframes scanned { 
                50% { border-color: #fff; } 
            }
            #mainbody.scanned{
                animation: scanned .5s step-end 3 alternate;
                border-color: #8AC007;
            }
            @keyframes failed { 
                50% { border-color: #fff; } 

            }
            #mainbody.failed{
                animation: failed .5s step-end 3 alternate;
                border-color: #ff0000;
            }
            #v{
                width:460px;
                height:300px;
            }
            #controls{
                font-size:2em;
            }

            #mainbody.scanned #result{
                position:absolute;
                top:0;
                left:0;
            }
            #result h2{
                font-size:2em;
                clear:none;
                padding: 5px 0 10px 0;
            }
            div.t-shirt{
                height:120px;
                width:112px;
                background: transparent url(<?php echo $path; ?>ticketscanner/tshirt.jpg) 0 0 no-repeat;
                text-align:center;
                position:relative;
                float:left;
                margin-right:20px;
            }
            div.t-shirt-F{
                background-position: -112px 0;
            }
            div.t-shirt p{
                position:absolute;
                top:50%;
                right:0;
                margin-top: -12px;
                padding: 5px;
                font-weight:bold;
                background: #666 none;
                color:#fff;
            }
            #result p.descr{
                font-size: 20px;
                padding: 5px 0 10px 0;
            }
            
            #result p.codes{
                font-size: 10px;
                padding: 0 0 5px 0;
            }

            #result a#close{
                position: absolute;
                top: -20px;
                right: -20px;
                padding: 2px 5px;
                background: none;
                color: #990000;
                font-weight: bold;
                text-decoration: none;
                text-transform: uppercase;
            }
        </style>
        <?php wp_head(); ?>
    </head>

    <body>

        <div id="mainbody">
            <div class="tab" id="scanner-tab">
                <div id="controls">
                    Camera: <select id="camselect"></select>
                </div>
                <div id="outdiv">

                </div>
            </div>
            <div class="tab" id="form-tab">
                <h3>Fill in any of the below</h3>
                <form id="id-form">
                    <input type="text" name="code" placeholder="Ticket Code" />
                    <input type="text" name="payid" placeholder="Instamojo Payment ID" />
                    <input type="text" name="email" placeholder="Email" />
                    <input type="text" name="phone" placeholder="Phone"/>
                </form>
            </div>
            <div id="result">

            </div>
        </div>
        <canvas id="qr-canvas" width="800" height="600" style="display:none;"></canvas>
        <a class="attribution" href='http://www.freepik.com/free-vector/t-shirt-vector-art_718287.htm'>T-shirtDesigned by Freepik</a>
    </body>

</html>