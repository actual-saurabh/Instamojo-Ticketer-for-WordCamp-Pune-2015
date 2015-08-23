<?php
/**
 * Template Name: Invitation
 */
$from = strtolower( $_GET[ 'from' ] );
$to = ucfirst( $_GET[ 'to' ] );
?>
<!DOCTYPE html "-//w3c//dtd xhtml 1.0 transitional //en" "http://www.w3.org/tr/xhtml1/dtd/xhtml1-transitional.dtd">
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="viewport" content="width=device-width" />


        <title>Template Base</title>

    </head>
    <body style="width: 100% !important;min-width: 100%;-webkit-text-size-adjust: 100%;-ms-text-size-adjust: 100% !important;margin: 0;padding: 0;background-color: #FFFFFF">
        <style id="media-query">
            body{
                width:100%;
                height:100%;
                margin:0;
                padding:0;
                background:#f1f1f1 none;
                font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
                font-size:14px;
            }
            .inner{
                width:500px;
                max-width:100%;
                margin:0 auto;
                padding: 40px 0;
            }
            p{
                padding:0 20px;
            }

            #hero{
                text-align:center;
            }

            #hero h1{
                font-size: 2.2em;
                margin: 40px auto;
            }
            h2{
                margin: 5px auto;
                font-size: 2.0em;
            }
            a{
                font-weight: bold;
                color:#ef7c00;
                text-decoration: underline;
            }
            a:hover{
                text-decoration:none;
            }
            #hero h3{
                margin: 0 auto 40px 0;
                font-size: 1.8em;
            }
            #hero h4{
                margin: 0;
                font-size: 1.4em;
            }
            #message{
                color:#333;
                background: #e8e8e8;
            }
            #message p{
                font-size:1.2em;
                text-align:justify;
            }

            #call{
                background:#f2f2f2;
                color:#444;
            }
            
            #call p{
                text-align: justify;
            }
            
            #organisers{
                background: #e2e2e2;
            }
            #action{
                text-align:center;
                margin-top: 40px;
            }

            #action h3{
                margin: 40px 0;
                margin-bottom: 20px;
            }

            #social{
                background: #f8f8f8 none;
                text-align:center;
            }

            #social a {
                text-decoration: none;
                display: inline-block;
                margin: 0 3px;
            }

            #sponsors{
                text-align:center;
            }

            #sponsors p{
                font-size: 0.9em;
                margin:0;
                margin-right:3px;
                display:inline-block;
            }
            #sponsors h2, h3, h4, h5{
                margin:0;
                margin-bottom:20px;
                margin-right:3px;
                display:inline-block;
                font-size: 1.4em;
            }

            #sponsors h3{
                font-size: 1.2em;

            }
            #sponsors h4{
                font-size: 1.2em;
            }

            #sponsors h5{
                font-size:1em;
            }
            
            p.level{
                padding:0;
            }
            a.btn, a.btn:active {
                background: #ef7c00;
                background-image: -webkit-linear-gradient(top,#ef7c00,#ff9900);
                background-image: -moz-linear-gradient(top,#ef7c00,#ff9900);
                background-image: -ms-linear-gradient(top,#ef7c00,#ff9900);
                background-image: -o-linear-gradient(top,#ef7c00,#ff9900);
                background-image: linear-gradient(to bottom,#ef7c00,#ff9900);
                -webkit-border-radius: 28;
                -moz-border-radius: 28;
                border-radius: 28px;
                border: none;
                font-family: Arial;
                color: #FFFFF0;
                font-size: 20px;
                padding: 10px 20px;
                text-decoration: none;
            }

            a.btn:active {
                background: #d48f61;
            }

            a.btn:hover {
                background: #d48f61;
                text-decoration: none;
                border: none;
                color: #FEFEFA;
            }


            .wcp-others-avatar img, .wcp-sender-avatar img{
                width:100%;
            }

            
        </style>
        <div id="container">
            <div id="hero">
                <div class="inner">
                    <h1>Hey <?php echo $to; ?>,</h1>
                    <h4>We'll look for you at</h4>
                    <h2>WordCamp Pune 2015</h2>
                    <h3>on 6th September!</h3>
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/iywfypw0.euz.6f598d5fdc3f4d5c971cac110387793c.jpg" style="width:100%" />
                </div>
            </div>
            <div id="message">
                <div class="inner">
                    <p>WordCamp Pune 2015 is coming and it's going to be a grand event with plenty of opportunities to learn, share, collaborate and make long lasting personal and business relationships in the WordPress community.</p>
                    <p>On behalf of the whole team of organisers, I'd like to formally invite you to WordCamp Pune with your entire team. We'd love to have you over. In fact, we're already looking forward to it!</p>
                </div>
            </div>
            <div id="call">
                <div class="inner">
                    <p>While the schedule is still under preparation we've <a href="https://pune.wordcamp.org/2015/speakers/">announced quite a few of sessions and speakers</a>. There're going to be a lot of interesting activities and loads of fun.</p>
                    <div id="action">
                        <a class="btn" href="https://pune.wordcamp.org/2015/tickets/" target="_blank">Book Your Ticket Now</a>

                        <h3>See you at WordCamp Pune 2015!</h3>
                        <h2>Best,</h2>
                        <h2><?php echo ucfirst($from); ?></h2>
                    </div>
                </div>
            </div>
            <div id="organisers">
                <div class="inner">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/org.jpg" />
                    <div style="clear:both;">&nbsp;</div>
                </div>
            </div>
            <div id="social">
                <div class="inner">
                    <a href="http://facebook.com/WordCampPune"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/facebook.png" alt="fb"></a>
                    <a href="http://twitter.com/WordCampPune"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/twitter.png" alt="tw"></a>
                    <a href="http://pune.wordcamp.org/2015/"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/website.png" alt="url"></a>
                </div>

            </div>
            <div id="sponsors">
                <div class="inner">
                    <p class="level">Outstanding Sponsor</p>
                    <h2><a href="http://jetpack.me">JetPack</a></h2>
                    <p class="level">Superb Sponsors</p>
                    <h3><a href="http://www.bluehost.com">Bluehost</a>, <a href="http://www.godaddy.com">GoDaddy</a></h3>
                    <p class="level">Splendid Sponsor</p>
                    <h4><a href="http://wpml.org">WPML</a></h4>
                    <p class="level">Angels</p>
                    <h4><a href="http://woothemes.com/woocommerce/">WooCommerce</a>, <a href="http://opensrs.com">OpenSRS</a>, <a href="http://rtcamp.com">rtCamp</a></h4>
                    <p class="level">Heroes</p>
                    <h5><a href="http://www.wpallimport.com">WPAllImport</a>, <a href="http://www.slidedeck.com">SlideDeck</a>, <a href="http://cyberchimps.com">CyberChimps</a>, <a href="http://slidervilla.com">SliderVilla</a></h5>
                    <p class="level"><a href="http://pune.wordcamp.org/2015/call-for-sponsors">Looking to sponsor?</a></p>

                </div>
            </div>
        </div>
        <table width="100%" cellspacing="0" cellpadding="0">
            <colgroup><col width="20%" /> <col width="20%" /> <col width="20%" /> <col width="20%" /> <col width="20%" /> </colgroup>
            <tbody>
                <tr>
                    <td>
                        <p>Topic</p>
                    </td>
                    <td>
                        <p>Facilitator(s)</p>
                    </td>
                    <td>
                        <p>Language</p>
                    </td>
                    <td>
                        <p>Session Type</p>
                    </td>
                    <td>
                        <p>Useful for</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Importing content from other systems into WordPress and WooCommerce</p>
                    </td>
                    <td>
                        <p>Akshaye Raje</p>
                    </td>
                    <td>
                        <p>Marathi and English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development, Administration</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Unit Testing for WordPress</p>
                    </td>
                    <td>
                        <p>Sudar Muthu</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>An Introduction to the WordPress REST API</p>
                    </td>
                    <td>
                        <p>Gaurav Pareek</p>
                    </td>
                    <td>
                        <p>Hindi and English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development, Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Local, Staging and Production Made Easy</p>
                    </td>
                    <td>
                        <p>Joe Guilmette</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Let your site speak multilingual!</p>
                    </td>
                    <td>
                        <p>Bigul Malayi,
                            Minesh Shah,
                            Ankit Gade,
                            Harshad Mane,
                            Sumit Singh</p>
                    </td>
                    <td>
                        <p>Marathi, Hindi and English</p>
                    </td>
                    <td>
                        <p>Workshop</p>
                    </td>
                    <td>
                        <p>Develpoment, Blogging, Administration</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Growing from a Single Author Blog to a Multi-author Community</p>
                    </td>
                    <td>
                        <p>Arun Prabhudesai</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Blogging, Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Automated Theme Development with Grunt</p>
                    </td>
                    <td>
                        <p>Sagar Jadhav</p>
                    </td>
                    <td>
                        <p>Marathi</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Beyond the Blackboard: Building Education Products for South Asia</p>
                    </td>
                    <td>
                        <p>Mahangu Weerasinghe</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Business, Community</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Theme Customisation</p>
                    </td>
                    <td>
                        <p>Puneet Sahalot</p>
                    </td>
                    <td>
                        <p>Hindi and English</p>
                    </td>
                    <td>
                        <p>Workshop</p>
                    </td>
                    <td>
                        <p>Development, Administration</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>HeroPress: Stories of Success</p>
                    </td>
                    <td>
                        <p>Topher DeRosia</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Community</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>WordPress JSON API</p>
                    </td>
                    <td>
                        <p>Priyanka Goyal</p>
                    </td>
                    <td>
                        <p>Hindi</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Development</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Promote your WordPress Plugin or Theme</p>
                    </td>
                    <td>
                        <p>Shilpa Shah</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>How to Design Useful Websites</p>
                    </td>
                    <td>
                        <p>Jitesh Patil</p>
                    </td>
                    <td>
                        <p>Marathi and English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Administration, Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Podcasting with WordPress</p>
                    </td>
                    <td>
                        <p>Shrikant Joshi</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Workshop</p>
                    </td>
                    <td>
                        <p>Blogging</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Content Creation and Promotion in 2015 and beyond</p>
                    </td>
                    <td>
                        <p>Priya Florence Shah</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Blogging, Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Careers in Development &amp; Support with WordPress</p>
                    </td>
                    <td>
                        <p>Karthikraj Magapu,
                            Jeremy Herve,
                            Joshua Abenazer,
                            Rahul Bansal,
                            Gagan Deep Singh</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Panel Discussion</p>
                    </td>
                    <td>
                        <p>Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>User Experience best practices for a WordPress Blog</p>
                    </td>
                    <td>
                        <p>Siddharth Ashok</p>
                    </td>
                    <td>
                        <p>Hindi and English</p>
                    </td>
                    <td>
                        <p>QnA</p>
                    </td>
                    <td>
                        <p>Development, Administration, Business</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contributing to WordPress, the Project</p>
                    </td>
                    <td>
                        <p>Andy Christian</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Lecture/Talk</p>
                    </td>
                    <td>
                        <p>Blogging, Business, Community</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Contributing to WordPress, the Software</p>
                    </td>
                    <td>
                        <p>Sathish Nagarajan</p>
                    </td>
                    <td>
                        <p>English</p>
                    </td>
                    <td>
                        <p>Workshop</p>
                    </td>
                    <td>
                        <p>Development, Community</p>
                    </td>
                </tr>
                <tr>
                    <td>
                        <p>Building a Good Quality WordPress theme</p>
                    </td>
                    <td>
                        <p>Nisha Singh</p>
                    </td>
                    <td>
                        <p>Hindi</p>
                    </td>
                    <td>
                        <p>Workshop</p>
                    </td>
                    <td>
                        <p>Development</p>
                    </td>
                </tr>
            </tbody>
        </table>

    </body>
</html>
