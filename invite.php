<?php
/**
 * Template Name: Invitation
 */
$from = ucfirst( $_GET[ 'from' ] );
$to = ucfirst( $_GET[ 'to' ] );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>WordCamp Pune 2015</title>
        <style type="text/css">
			/* /\/\/\/\/\/\/\/\/ CLIENT-SPECIFIC STYLES /\/\/\/\/\/\/\/\/ */
			#outlook a{padding:0;} /* Force Outlook to provide a "view in browser" message */
			.ReadMsgBody{width:100%;} .ExternalClass{width:100%;} /* Force Hotmail to display emails at full width */
			.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div {line-height: 100%;} /* Force Hotmail to display normal line spacing */
			body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:100%; -ms-text-size-adjust:100%;} /* Prevent WebKit and Windows mobile changing default text sizes */
			table, td{mso-table-lspace:0pt; mso-table-rspace:0pt;} /* Remove spacing between tables in Outlook 2007 and up */
			img{-ms-interpolation-mode:bicubic;} /* Allow smoother rendering of resized image in Internet Explorer */

			/* /\/\/\/\/\/\/\/\/ RESET STYLES /\/\/\/\/\/\/\/\/ */
			body{margin:0; padding:0;}
			img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
			table{border-collapse:collapse !important;}
			body, #bodyTable, #bodyCell{height:100% !important; margin:0; padding:0; width:100% !important;}

			/* /\/\/\/\/\/\/\/\/ TEMPLATE STYLES /\/\/\/\/\/\/\/\/ */

			/* ========== Page Styles ========== */

			#bodyCell{padding:20px;}
			#templateContainer{width:500px;}

			/**
			* @tab Page
			* @section background style
			* @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
			* @theme page
			*/
			body, #bodyTable{
				/*@editable*/ background-color:#e8e8e8;
			}

			/**
			* @tab Page
			* @section background style
			* @tip Set the background color and top border for your email. You may want to choose colors that match your company's branding.
			* @theme page
			*/
			#bodyCell{
				/*@editable*/ border-top:none;
			}

			/**
			* @tab Page
			* @section email border
			* @tip Set the border for your email.
			*/
			#templateContainer{
				/*@editable*/ border:none;
				/*@editable*/ border:1px solid #dddddd;
			}

			/* ========== Header Styles ========== */


			/**
			* @tab Header
			* @section header text
			* @tip Set the styling for your email's header text. Choose a size and color that is easy to read.
			*/
			.headerContent{
				/*@editable*/ color:#444444;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:17px;
				/*@editable*/ font-weight:normal;
				/*@editable*/ line-height:100%;
				/*@editable*/ padding-top:0;
				/*@editable*/ padding-right:0;
				/*@editable*/ padding-bottom:0;
				/*@editable*/ padding-left:0;
				/*@editable*/ text-align:center;
				/*@editable*/ vertical-align:middle;
			}

			/**
			* @tab Header
			* @section header link
			* @tip Set the styling for your email's header links. Choose a color that helps them stand out from your text.
			*/
			.headerContent a:link, .headerContent a:visited, /* Yahoo! Mail Override */ .headerContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#1971BC;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			#headerImage{
				height:auto;
				max-width:500px;
			}

			/* ========== Body Styles ========== */

			/**
			* @tab Body
			* @section body style
			* @tip Set the background color and borders for your email's body area.
			*/
			#templateBody{
				/*@editable*/ background-color:#FFFFFF;
			}

			/**
			* @tab Body
			* @section body text
			* @tip Set the styling for your email's main content text. Choose a size and color that is easy to read.
			* @theme main
			*/
			.bodyContent{
				/*@editable*/ color:#444444;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:17px;
				/*@editable*/ line-height:140%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				/*@editable*/ text-align:left;
			}

			/**
			* @tab Body
			* @section body link
			* @tip Set the styling for your email's main content links. Choose a color that helps them stand out from your text.
			*/
			.bodyContent a:link, .bodyContent a:visited, /* Yahoo! Mail Override */ .bodyContent a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#f27a00;
				/*@editable*/ font-weight:normal;
				/*@editable*/ text-decoration:underline;
			}

			.bodyContent img{
				display:inline;
				height:auto;
				max-width:500px;
			}

			.buttonContent {
				/*@editable*/ color:#888888;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:12px;
				/*@editable*/ line-height:140%;
				padding-top:20px;
				padding-right:20px;
				padding-bottom:20px;
				padding-left:20px;
				/*@editable*/ background: #F5F5F5;
				/*@editable*/ text-align:center;
			}

			.bookbutton {
				background:#ef7c00;
				color:#FFFFFF;
				display:block;
				font-family:Arial;
				font-weight:bold;
				font-size: 17px;
				width:240px;
				text-decoration: none;
				padding-top: 15px;
				padding-bottom: 15px;
				margin: 0 auto;
			}

			/* ========== Footer Styles ========== */


			/**
			* @tab Footer
			* @section footer text
			* @tip Set the styling for your email's footer text. Choose a size and color that is easy to read.
			* @theme footer
			*/
			.footerContent{
				/*@editable*/ color:#444444;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-size:10px;
				/*@editable*/ line-height:100%;
				padding-top:0;
				padding-right:0;
				padding-bottom:0;
				padding-left:0;
				/*@editable*/ text-align:left;
			}

			.footerSponsors {
				/*@editable*/ color:#888888;
				/*@editable*/ font-family:Arial;
				/*@editable*/ font-weight:bold;
				/*@editable*/ font-size:14px;
				/*@editable*/ line-height:170%;
				padding-top:10px;
				padding-right:0;
				padding-bottom:20px;
				padding-left:0;
				/*@editable*/ text-align:left;
			}


			/**
			* @tab Footer
			* @section footer link
			* @tip Set the styling for your email's footer links. Choose a color that helps them stand out from your text.
			*/
			.footerSponsors a:link, .footerSponsors a:visited, .buttonContent p.lnks a:link, .buttonContent p.lnks a:visited /* Yahoo! Mail Override */ .footerSponsors a .yshortcuts /* Yahoo! Mail Override */{
				/*@editable*/ color:#0470c3;
				/*@editable*/ font-weight:bold;
				/*@editable*/ text-decoration:none;
			}

			/* /\/\/\/\/\/\/\/\/ MOBILE STYLES /\/\/\/\/\/\/\/\/ */

            @media only screen and (max-width: 480px){
				/* /\/\/\/\/\/\/ CLIENT-SPECIFIC MOBILE STYLES /\/\/\/\/\/\/ */
				body, table, td, p, a, li, blockquote{-webkit-text-size-adjust:none !important;} /* Prevent Webkit platforms from changing default text sizes */
                body{width:100% !important; min-width:100% !important;} /* Prevent iOS Mail from adding padding to the body */

				/* /\/\/\/\/\/\/ MOBILE RESET STYLES /\/\/\/\/\/\/ */
				#bodyCell{padding:10px !important;}

				/* /\/\/\/\/\/\/ MOBILE TEMPLATE STYLES /\/\/\/\/\/\/ */

				/* ======== Page Styles ======== */

				/**
				* @tab Mobile Styles
				* @section template width
				* @tip Make the template fluid for portrait or landscape view adaptability. If a fluid layout doesn't work for you, set the width to 300px instead.
				*/
				#templateContainer{
					max-width:500px !important;
					/*@editable*/ width:100% !important;
				}

				/* ======== Header Styles ======== */

				#templatePreheader{display:none !important;} /* Hide the template preheader to save space */

				/**
				* @tab Mobile Styles
				* @section header image
				* @tip Make the main header image fluid for portrait or landscape view adaptability, and set the image's original width as the max-width. If a fluid setting doesn't work, set the image width to half its original size instead.
				*/
				#headerImage{
					height:auto !important;
					/*@editable*/ max-width:500px !important;
					/*@editable*/ width:100% !important;
				}

				/**
				* @tab Mobile Styles
				* @section header text
				* @tip Make the header content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.headerContent{;
					/*@editable*/ font-size:20px !important;
					/*@editable*/ line-height:100% !important;
				}

				/* ======== Body Styles ======== */

				/**
				* @tab Mobile Styles
				* @section body text
				* @tip Make the body content text larger in size for better readability on small screens. We recommend a font size of at least 16px.
				*/
				.bodyContent{
					/*@editable*/ font-size:17px !important;
					/*@editable*/ line-height:100% !important;
				}

				/* ======== Footer Styles ======== */

				/**
				* @tab Mobile Styles
				* @section footer text
				* @tip Make the body content text larger in size for better readability on small screens.
				*/
				.footerContent{
					/*@editable*/ font-size:14px !important;
					/*@editable*/ line-height:100% !important;
				}

				.footerContent a{display:block !important;} /* Place footer social and utility links on their own lines, for easier access */
			}
		</style>
    </head>
    <body leftmargin="0" marginwidth="0" topmargin="0" marginheight="0" offset="0">
    	<center>
        	<table align="center" border="0" cellpadding="0" cellspacing="0" height="100%" width="100%" id="bodyTable">
            	<tr>
                	<td align="center" valign="top" id="bodyCell">
                    	<!-- BEGIN TEMPLATE // -->
	                  	<table border="0" cellpadding="0" cellspacing="0" id="templateContainer">
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN HEADER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td valign="top" class="headerContent">
                                            	<img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/iywfypw0.euz.6f598d5fdc3f4d5c971cac110387793c.jpg" style="width:100%" id="headerImage" />
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END HEADER -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN BODY // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%" id="templateBody">
                                        <tr>
                                            <td valign="top" class="bodyContent" mc:edit="body_content">
                                                <h2>Hey <?php echo $to; ?>,</h2>

                                                <p><a href="https://pune.wordcamp.org/2015/tickets/" title="" target="_blank">WordCamp Pune 2015</a> is almost here on 6th September with plenty of opportunities to learn, share, collaborate and make long lasting personal and business relationships in the WordPress community.</p>
                                                <p>On behalf of the whole team of organisers, I'd like to formally invite you and your entire team. We'd love to have you over. In fact, we're already looking forward to it!</p>

                                                <p>See you at WordCamp Pune 2015!</p>
                                                <p>Best,<br /><?php echo $from; ?></p>
                                            </td>
                                        </tr>
													<tr>
                                                                                                            <td valign="top" class="buttonContent">
                                                                                                                <p style="text-align: center" class="lnks"><a href="https://pune.wordcamp.org/2015/schedule/">Rich Schedule of 32 Sessions</a> | <a href="https://pune.wordcamp.org/2015/speakers/">40 Awesome Speakers</a></p>
                                                                                                                <p><a href="https://pune.wordcamp.org/2015/tickets/" title="Book Your Ticket Now" class="bookbutton" target="_blank">Book Your Ticket Now</a></p>
														</td>
													</tr>
                                    </table>
                                    <!-- // END BODY -->
                                </td>
                            </tr>
                        	<tr>
                            	<td align="center" valign="top">
                                	<!-- BEGIN FOOTER // -->
                                    <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                        <tr>
                                            <td valign="top" class="footerContent">
                                                <img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/org.jpg" />
                                            </td>
                                        </tr>
                                    </table>
                                    <!-- // END FOOTER -->
                                </td>
                            </tr>
                        </table>
												<table border="0" cellpadding="0" cellspacing="0" width="500px">
														<tr>
																<td valign="top" class="footerSponsors">
																	Outstanding Sponsor: <a href="http://jetpack.me/" title="JetPack" target="_blank">JetPack</a>  |  Superb Sponsors: <a href="http://www.bluehost.com/" title="Bluehost" target="_blank">Bluehost</a>, <a href="http://www.godaddy.com/" title="GoDaddy" target="_blank">GoDaddy</a>  |  Splendid Sponsor: <a href="http://wpml.org/" title="WPML" target="_blank">WPML</a>  |  Angels: <a href="http://woothemes.com/woocommerce/" title="WooCommerce" target="_blank">WooCommerce</a>, <a href="http://opensrs.com/" title="OpenSRS" target="_blank">OpenSRS</a>, <a href="http://rtcamp.com/" title="rtCamp" target="_blank">rtCamp</a>, <a href="http://znetlive.com/" title="ZNetLive" target="_blank">ZNetLive</a>, <a href="http://wedevs.com/" title="WeDevs" target="_blank">WeDevs</a>, <a href="http://buddyboss.com/" title="BuddyBoss" target="_blank">JetPack</a>  |  Heroes: <a href="http://www.wpallimport.com/" title="WP All Import" target="_blank">WP All Import</a>, <a href="http://www.slidedeck.com/" title="SlideDeck" target="_blank">SlideDeck</a>, <a href="http://cyberchimps.com/" title="CyberChimps" target="_blank">CyberChimps</a>, <a href="http://slidervilla.com/" title="SliderVilla" target="_blank">SliderVilla</a>, <a href="http://www.atlassoftweb.com/" title="Atlas Softweb" target="_blank">Atlas Softweb</a>
																</td>
														</tr>
														<tr>
														<td valign="top" align="center"><a href="http://facebook.com/WordCampPune" title="Facebook" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/facebook.png" alt="fb" style="max-width:30px; border:0px" border="0" /></a>&nbsp;<a href="http://twitter.com/WordCampPune" title="Twitter" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/twitter.png" alt="tw" style="max-width:30px; border:0px" border="0" /></a>&nbsp;<a href="http://pune.wordcamp.org/2015/" title="WordCamp Pune 2015" target="_blank"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/website.png" alt="url" style="max-width:30px; border:0px" border="0" /></a></td>
														</tr>
												</table>
												<!-- // END TEMPLATE -->
                    </td>
                </tr>
            </table>
        </center>
    </body>
</html>
