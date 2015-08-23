var gCtx = null;
var gCanvas = null;
var c = 0;
var stype = 0;
var gUM = false;
var webkit = false;
var moz = false;
var v = null;

var imgElem = jQuery( '<div id="qrfile"><canvas id="out-canvas" width="320" height="240"></canvas>' +
        '<div id="imghelp">drag and drop a QRCode here' +
        '<br>or select a file' +
        '<input type="file" />' + // onchange="handleFiles(this.files)"
        '</div>' +
        '</div>' );

var vidElem = jQuery( '<video id="v" autoplay></video>' );


function handleFiles( f )
{
    var o = [ ];

    for ( var i = 0; i < f.length; i++ )
    {
        var reader = new FileReader();
        reader.onload = ( function( theFile ) {
            return function( e ) {
                gCtx.clearRect( 0, 0, gCanvas.width, gCanvas.height );

                qrcode.decode( e.target.result );
            };
        } )( f[i] );
        reader.readAsDataURL( f[i] );
    }
}

function initCanvas( w, h )
{
    gCanvas = jQuery( "#qr-canvas" );
    gCanvas.css( {
        'width': w + "px",
        'height': h + "px"
    } );
    gCanvas.width = w;
    gCanvas.height = h;
    gCtx = gCanvas[0].getContext( "2d" );
    gCtx.clearRect( 0, 0, w, h );
}


function captureToCanvas() {
    if ( stype != 1 )
        return;
    if ( gUM )
    {
        try {
            gCtx.drawImage( v, 0, 0 );
            try {
                qrcode.decode();
            }
            catch ( e ) {
                console.log( e );
                setTimeout( captureToCanvas, 500 );
            }
            ;
        }
        catch ( e ) {
            console.log( e );
            setTimeout( captureToCanvas, 500 );
        }
        ;
    }
}

function htmlEntities( str ) {
    return String( str ).replace( /&/g, '&amp;' ).replace( /</g, '&lt;' ).replace( />/g, '&gt;' ).replace( /"/g, '&quot;' );
}

function read( a )
{
    console.log(a);
}

function isCanvasSupported() {
    var elem = document.createElement( 'canvas' );
    return !!( elem.getContext && elem.getContext( '2d' ) );
}
function success( stream ) {
    if ( webkit )
        v.src = window.webkitURL.createObjectURL( stream );
    else
    if ( moz )
    {
        v.mozSrcObject = stream;
        v.play();
    }
    else
        v.src = stream;
    gUM = true;
    setTimeout( captureToCanvas, 500 );
}

function error( error ) {
    gUM = false;
    return;
}

function load()
{
    if ( isCanvasSupported() && window.File && window.FileReader )
    {
        initCanvas( 800, 600 );
        qrcode.callback = read;
        setwebcam();
    }
    else
    {
        jQuery( "#mainbody" ).append( jQuery( '<p id="mp1">QR code scanner for HTML5 capable browsers</p><br>' +
                '<br><p id="mp2">sorry your browser is not supported</p><br><br>' +
                '<p id="mp1">try <a href="http://www.mozilla.com/firefox"><img src="firefox.png"/></a> or <a href="http://chrome.google.com"><img src="chrome_logo.gif"/></a> or <a href="http://www.opera.com"><img src="Opera-logo.png"/></a></p>' ) );
    }
}


function setwebcam() {
    jQuery( "#result" ).html( "- scanning -" );
    if ( stype == 1 )
    {
        setTimeout( captureToCanvas, 500 );
        return;
    }
    var n = navigator;
    jQuery( "#outdiv" ).append( vidhtml );
    v = document.getElementById( "v" );

    var videoSource = jQuery('#camselect').val();
    var constraints = {
        video: {
            optional: [ {
                    sourceId: videoSource
                } ]
        },
        audio: false
    };

    if ( n.getUserMedia )
        n.getUserMedia( constraints, success, error );
    else
    if ( n.webkitGetUserMedia )
    {
        webkit = true;
        n.webkitGetUserMedia( constraints, success, error );
    }
    else
    if ( n.mozGetUserMedia )
    {
        moz = true;
        n.mozGetUserMedia( constraints, success, error );
    }

    jQuery( "#qrimg" ).css( 'opacity', 0.2 );
    jQuery( "#webcamimg" ).css( 'opacity', 1 );

    stype = 1;
    setTimeout( captureToCanvas, 500 );
}
function setimg()
{
    jQuery( "#result" ).html( '' );
    if ( stype == 2 )
        return;
    jQuery( "#outdiv" ).append( imgElem );
    jQuery( "#qrimg" ).css( 'opacity', 1 );
    jQuery( "#webcamimg" ).css( 'opacity', 0.2 );
    jQuery( "#qrfile" ).on( "dragenter", function( e ) {
        e.stopPropagation();
        e.preventDefault();
    } ).on( "dragover", function( e ) {
        e.stopPropagation();
        e.preventDefault();
    } ).on( "drop", function( e ) {
        e.stopPropagation();
        e.preventDefault();

        var dt = e.dataTransfer;
        var files = dt.files;
        if ( files.length > 0 )
        {
            handleFiles( files );
        }
        else
        if ( dt.getData( 'URL' ) )
        {
            qrcode.decode( dt.getData( 'URL' ) );
        }
    } );
    stype = 2;
}

function gotSources( sourceInfos ) {
    for ( var i = 0; i !== sourceInfos.length; ++i ) {
        var sourceInfo = sourceInfos[i];
        var option = jQuery( 'option' );
        option.val(sourceInfo.id);
        if ( sourceInfo.kind === 'video' ) {
            option.text (sourceInfo.label || camera + ( jQuery('#camselect').length + 1 ));
            jQuery('#camselect').append( option );
        }
    }
}