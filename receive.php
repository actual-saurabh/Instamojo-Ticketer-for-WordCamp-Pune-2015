<?php
/*
 * Template Name: Thanks
 */
?>
<html>
    <head>
        <title>Your WordCamp Pune Ticket is on its way</title>
        <style type="text/css">
            body{
                font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
                background:#f2f2f2;
                margin:0;
            }
            h1{
                color: #ef7c00;
            }
            #container{
                width:500px;
                margin:0 auto;
                text-align:center;
                margin-top: 10px;

            }
            #container div{
                padding:20px;
            }
            #container #hero{
                background: #EAEBEF none;
                padding: 40px;
            }
            #container #details{
                background:#4d515d none;
                color: #E5E5E5;
            }
            #container #support-more{
                background: #fff none;
            }
            #container .badges{
                background: #EAEBEF none; 
            }
            
            #container .badges img{
                display:block;
                margin:0 auto;
                padding:10px;
                background:#f2f2f2 none;
                border:10px #555 solid;
            }
            #container .badges.dark-bg img{
                background: #555 none;
                border: #fff 10px solid;
            }
            #container .badges pre{
                background: #fefefe none;
                white-space: pre-wrap;
                word-wrap: break-word;
                overflow: auto;
                border: 2px #555 solid;
                margin:20px;
                padding:20px;
            }
            #container .badges code{
                background: #fff none;
            }
            @media only screen and (max-width: 500px) {
                #container{
                    width:100%;
                }
            }
        </style>
    </head>
    <body>
        <div id="container">
            <div id="logo">
                <a style="color:#ef7c00" href="https://pune.wordcamp.org/2015"><img src="https://pune.wordcamp.org/2015/files/2015/04/logo-small-trans.png"></a>
            </div>
            <div id="hero">
                <h1>Your ticket is on its way to your inbox!</h1>
                <h2>How about tweeting the good news?</h2>
                <a href="https://twitter.com/share" class="twitter-share-button" data-url="https://pune.wordcamp.org/2015/tickets/" data-text="I just bought a ticket for #WCPune. See you on 6th September!" data-size="large" data-related="WordCampPune" data-dnt="true">Tweet</a>
            </div>
            <div id="details">
                <p>Your tweet can get all your friends and their friends and their friends to WordCamp Pune 2015. Anything is more fun when you are with your friends, isn't it?</p>
                <p>Or, go back to explore more of <a style="color:#ef7c00" href="https://pune.wordcamp.org/2015">WordCamp Pune 2015</a>.</p>

            </div>
            
                <div id="support-more">
                    <p>You could display some badges on your blog's sidebar or elsewhere to support WordCamp Pune 2015.</p>
                    <p>Just copy the code provided under the <em>transparent</em> image of your choice into a text widget.</p>
                </div>
                <div class="badges light-bg">
                    <p><strong>Dark on Light Background</strong></p>
                    <img class="aligncenter size-full wp-image-1149" src="https://pune.wordcamp.org/2015/files/2015/07/attendee-black.png" alt="attendee-black" width="250" height="250" />
                    <pre>&lt;a style="display: block; text-align: center;" href="http://ticket.wordcamp.wppune.org/badge-refer/?type=attendee"&gt;
&lt;img src="https://pune.wordcamp.org/2015/files/2015/07/attendee-black.png" /&gt;
&lt;/a&gt;</pre>
                </div>

                <div class="badges dark-bg">
                    <p><strong>Light on Dark Background</strong></p>
                    <img class="aligncenter size-full wp-image-1148" src="https://pune.wordcamp.org/2015/files/2015/07/attendee-white.png" alt="attendee-white" width="250" height="250" />
                    <pre>&lt;a style="display: block; text-align: center;" href="http://ticket.wordcamp.wppune.org/badge-refer/?type=attendee"&gt;
&lt;img src="https://pune.wordcamp.org/2015/files/2015/07/attendee-white.png" /&gt;
&lt;/a&gt;</pre>
                </div>
            
            <div id="foot">
                <p>Please check your spam folder if you don't receive your ticket in a while.</p>

                <p>See you at WordCamp Pune 2015!</p>
            </div>
        </div>

    </body>
    <script>!function( d, s, id ) {
            var js, fjs = d.getElementsByTagName( s )[0], p = /^http:/.test( d.location ) ? 'http' : 'https';
            if ( !d.getElementById( id ) ) {
                js = d.createElement( s );
                js.id = id;
                js.src = p + '://platform.twitter.com/widgets.js';
                fjs.parentNode.insertBefore( js, fjs );
            }
        }( document, 'script', 'twitter-wjs' );</script>
</html>