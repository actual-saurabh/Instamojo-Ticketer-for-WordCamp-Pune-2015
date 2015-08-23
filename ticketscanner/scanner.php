<?php
/*
 * Template Name: Scanner
 */

$path = trailingslashit( get_stylesheet_directory() );
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
        'databr',
        'qrcode',
);

$deps = array();
foreach ( $scripts as $script ) {
    if ( empty( $deps ) ) {
        $deps = NULL;
    }
    wp_register_script( 'qrcode-' . $script, $path . 'jsqrcode/src/' . $script . '.js', $deps );

    array_push( $deps, 'qrcode-' . $script );
}
wp_enqueue_script( 'qrcode-scanner', $path . 'ticketscanner/scanner.js', array( 'jquery', 'qrcode-qrcode' ) );
?>

<div id="mainbody">
    <div id="controls">
        <img src="<?php echo $path . 'ticketscanner/vid.png'; ?>/">
        <select id="camselect"></select>
        <img src="<?php echo $path . 'ticketscanner/cam.png'; ?>/">
    </div>
    <div id="outdiv">
        
    </div>
    <div id="result">
        
    </div>
</div>
<canvas id="qr-canvas" width="800" height="600"></canvas>

