var gContext = null;
var gCanvas = null;
var c = 0;
var stype = 0;
var gUM = false;
var webkit = false;
var moz = false;
var v = null, n;

var vidElem = jQuery( '<video id="v" autoplay></video>' );

function initCanvas( w, h ) {
    gCanvas = jQuery( "#qr-canvas" );
    gCanvas.css( {
        'width': w + "px",
        'height': h + "px"
    } );
    gCanvas.width = w;
    gCanvas.height = h;
    gContext = gCanvas[0].getContext( "2d" );
    gContext.clearRect( 0, 0, w, h );
}


function captureToCanvas() {
    if ( stype != 1 )
        return;
    if ( gUM )
    {
        try {
            gContext.drawImage( v, 0, 0 );
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
function readqr( a ) {

    if ( null === a ) {
        return;
    }

    do_ajax( { 'code': a } );

}

function readinput( inputs ) {

    objInputs = { };
    jQuery.each( inputs, function( i, field ) {
        objInputs[field.name] = field.value;
    } );

    do_ajax( objInputs );
}

function do_ajax( object, remove_attendance ) {
    
    if(typeof(remove_attendance)!='undefined' && remove_attendance == true){
        object.remove_attendance = '1';
    }
    jQuery.get(
            'http://ticket.wordcamp.wppune.org/result/',
            //'http://wcp.bvm.iamme.in/result/',
            object,
            function( response ) {
                if ( response != 'not-yet' ) {
                    jQuery( '#result' ).html( response );
                    jQuery( "#mainbody" ).removeClass().addClass( 'scanned' ).css(
                            { height: jQuery( '#result' ).height() }
                    );

                }
            }
    );
}

function isCanvasSupported() {
    var elem = document.createElement( 'canvas' );
    return !!( elem.getContext && elem.getContext( '2d' ) );
}
function success( stream ) {
    window.stream = stream; // make stream available to console
    v.src = window.URL.createObjectURL( stream );
    gUM = true;
    setTimeout( captureToCanvas, 500 );
}

function error( error ) {
    gUM = false;
    return;
}

function load() {
    if ( isCanvasSupported() && window.File && window.FileReader ) {
        initCanvas( 460, 300 );
        qrcode.callback = readqr;
        jQuery( "#mainbody" ).removeClass().addClass( 'scanning' );
        if ( stype == 1 )
        {
            setTimeout( captureToCanvas, 500 );
            return;
        }
        jQuery( "#outdiv" ).append( vidElem );
        startwebcam();
        jQuery( '#camselect' ).on( 'change', function( e ) {
            if ( !!window.stream ) {
                v.src = null;
                window.stream.stop();
            }

            startwebcam();
        } );
    }
    else
    {
        jQuery( "#mainbody" ).append( jQuery( '<p id="mp1">QR code scanner for HTML5 capable browsers</p><br>' +
                '<br><p id="mp2">sorry your browser is not supported</p><br><br>' +
                '<p id="mp1">try <a href="http://www.mozilla.com/firefox"><img src="firefox.png"/></a> or <a href="http://chrome.google.com"><img src="chrome_logo.gif"/></a> or <a href="http://www.opera.com"><img src="Opera-logo.png"/></a></p>' ) );
    }
}

function formdriver() {
    jQuery( '#form-tab' ).on( 'blur', 'input', function( e ) {
        e.preventDefault();
        console.log(jQuery(this));
        inputs = jQuery( '#id-form' ).serializeArray();
        readinput( inputs );

    } ).on( 'keyup', 'input', function( e ) {

        jQuery( "#mainbody" ).removeClass().addClass( 'scanning' );
    } );
}


function startwebcam() {
    v = jQuery( "#v" )[0];

    var videoSource = jQuery( '#camselect' ).val();
    var constraints = {
        video: {
            optional: [ {
                    sourceId: videoSource
                } ]
        },
        audio: false
    };

    n.getUserMedia( constraints, success, error );

    jQuery( "#qrimg" ).css( 'opacity', 0.2 );
    jQuery( "#webcamimg" ).css( 'opacity', 1 );

    stype = 1;
    setTimeout( captureToCanvas, 500 );
}

function gotSources( sourceInfos ) {
    for ( var i = 0; i !== sourceInfos.length; ++i ) {
        var sourceInfo = sourceInfos[i];

        var option = jQuery( '<option/>' );
        option.val( sourceInfo.id );
        if ( sourceInfo.kind === 'video' ) {
            option.text( sourceInfo.label + ' camera ' + ( jQuery( '#camselect option' ).length + 1 ) );
            jQuery( '#camselect' ).append( option );
        }
    }
}

jQuery( 'document' ).ready( function() {
    if ( typeof MediaStreamTrack === 'undefined' ||
            typeof MediaStreamTrack.getSources === 'undefined' ) {
        alert( 'This browser does not support MediaStreamTrack.\n\nTry Chrome.' );
    } else {
        MediaStreamTrack.getSources( gotSources );
    }
    n = navigator;
    n.getUserMedia = n.getUserMedia ||
            n.webkitGetUserMedia || n.mozGetUserMedia;
    load();

    formdriver();
    
    jQuery('#mainbody').on('click', '#result #close', function(e){
        e.preventDefault();
        jQuery('#result').html('');
        jQuery('#mainbody').removeClass().addClass('scanning');
        document.getElementById("id-form").reset();
    });

} );

function remove_attendance(){
    jQuery('#result').html('');
    jQuery('#mainbody').removeClass().addClass('scanning');
    inputs = jQuery( '#id-form' ).serializeArray();
    objInputs = { };
    jQuery.each( inputs, function( i, field ) {
        objInputs[field.name] = field.value;
    } );
    do_ajax(objInputs, true);
    
}
