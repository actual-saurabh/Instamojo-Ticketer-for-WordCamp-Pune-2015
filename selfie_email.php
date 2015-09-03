<html><head>
        <title>Your complementary WordCamp Pune Ticket</title>
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
                padding:20px 0;
                overflow:auto;
            }
            #container .detail{
                background:#4d515d none;
                color: #E5E5E5;
                width:48%;
                float:left;
                padding:0;
                margin:1%;
            }
            #container .detail p{
                padding:20px;
            }
            #container .detail:nth-child(odd){
                clear:both;
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
                text-transform: uppercase;
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
                <h1>Hey Visitor!</h1>
                <h2>Here are your clues. This is a sample ticket. Just to give you a feel. The actual ticket will be different.</h2>
            </div>
			<div id="details">
			<?php 
			$questions = generate_selfie_hunt();
			foreach($questions as $question) { ?>
            
                <div class="detail">
                    <p><?php echo $question ?></p>
                    <p><a href="https://twitter.com/intent/tweet?button_hashtag=SelfieHunt&text=<?php echo urlencode( $question) ?>" class="twitter-hashtag-button" data-size="large" data-related="WordPress,WordCampMumbai,WordCampPune">Tweet #SelfieHunt</a></p>
                </div>
			
			<?php } ?>
            </div>
            <div id="foot">
                <p><a href="https://twitter.com/intent/tweet?button_hashtag=BINGO&text=Completed%20%23SelfieHunt%20%23WCPune" class="twitter-hashtag-button" data-size="large" data-related="WordPress,WordCampMumbai,WordCampPune">Tweet #Bingo</a>
                    <script>!function( d, s, id ) {
                            var js, fjs = d.getElementsByTagName( s )[0], p = /^http:/.test( d.location ) ? 'http' : 'https';
                            if ( !d.getElementById( id ) ) {
                                js = d.createElement( s );
                                js.id = id;
                                js.src = p + '://platform.twitter.com/widgets.js';
                                fjs.parentNode.insertBefore( js, fjs );
                            }
                        }( document, 'script', 'twitter-wjs' );</script></p>
                <p>Rules for selfie hunt.</p>

                <p>Other stuff.</p>

            </div>

        </div>

        <table dir="ltr" border="1" cellspacing="0" cellpadding="0" id="wcp-schedule">
            <colgroup><col width="10%" /><col width="22.5%" /><col width="22.5%" /><col width="22.5%" /><col width="22.5%" /></colgroup>
            <tbody>
                <tr>
                    <td class="wcp-schedule-time">9:00 am</td>
                    <td colspan="4" rowspan="1">
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="8" class="wcp-schedule-break">
                        Registration
                            +
                            Breakfast
                            +
                            Networking
                            +
                            Treasure Hunt</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">9:40 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="4" class="wcp-schedule-key">
                        <ul class="wcps-meta">
                            <li>Keynote</li>
                        </ul>
                        <span class="wcps-session">WordPress for India</span>
                        <span class="wcps-speaker">Saurabh Shukla (lead organiser)</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">10:00 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">10:10 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="12" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Panel</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">A Career (in Support/Develop)with WordPress</span>
                        <span class="wcps-speaker">Moderator: Karthik Magapu</span>
                            <span class="wcps-speaker">Panelists: Jeremy Herve, Rahul Bansal, Puneet Sahalot, (Gagan Deep Singh)</span>
                    </td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">म</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">How to Design Useful Websites</span>
                        <span class="wcps-speaker">Jitesh Patil</span>
                    </td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">म</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Indian Payment Gateways</span>
                        <span class="wcps-speaker">Vachan Kudmule</span>
                    </td>
                    <td colspan="1" rowspan="4">
                        <span class="wcps-session">To be confirmed</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">10:30 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">10:40 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Content Creation and Promotion in 2015 and beyond</span>
                        <span class="wcps-speaker">Priya Florence Shah</span>
                    </td>
                    <td colspan="1" rowspan="16" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">The Blogger Gym</span>
                        <span class="wcps-speaker">Ramya Pandyan</span></td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">QnA</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">User Experience best practices for a WordPress Blog</span>
                        <span class="wcps-speaker">Siddharth Ashok</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">11:00 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">11:10 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <span class="wcps-session">QnA</span></td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Contributing to WordPress, the Project</span>
                        <span class="wcps-speaker">Andy Christian</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">11:30 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">11:40 am</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">म</li>
                        </ul>
                        <span class="wcps-session">Automate Theme Development with Grunt</span>
                        <span class="wcps-speaker">Sagar Jadhav</span>
                    </td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Security, efficiency and a touch of Varnish – Efficient WordPress for everybody</span>
                        <span class="wcps-speaker">Shaunak De</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">12:00 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="12" class="wcp-schedule-break">
                        Lunch &amp; Networking</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">1:00 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="16" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">म</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Let your site speak multilingual!</span>
                        <span class="wcps-speaker">Bigul Malayi, Harshad Mane, Ankit Gade, Sumit Singh, Minesh Shah</span>
                    </td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">HeroPress: Stories of Success</span>
                        <span class="wcps-speaker">Topher Kenobe</span></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Lightning</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Site Showcases</span></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">An Introduction to the WordPress REST API</span>
                        <span class="wcps-speaker">Gaurav Pareek</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">1:20 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">1:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Lightning</li>
                            <li class="wcps-language">म</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Product Showcase</span></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">हि</li>
                        </ul>
                        <span class="wcps-session">WordPress JSON API</span>
                        <span class="wcps-speaker">Priyanka Goyal</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">1:50 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">2:00 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Beyond the Blackboard: Building Education Products for South Asia</span>
                        <span class="wcps-speaker">Mahangu Weerasinghe</span>
                    </td>
                    
                    <td colspan="1" rowspan="10" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Unit Testing for WordPress</span>
                        <span class="wcps-speaker">Sudar Muthu</span>
                    </td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Theme Customisation</span>
                        <span class="wcps-speaker">Puneet Sahalot</span>
                    </td>
                    
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">2:20 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">2:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Increase user engagement with BuddyPress</span>
                        <span class="wcps-speaker">Michael Eisenwasser</span></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">म</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Importing content from other systems into WordPress and WooCommerce</span>
                        <span class="wcps-speaker">Akshay Raje</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">2:50 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="4" class="wcp-schedule-break">
                        Tea Break</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">3:10 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="16" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Contributing to WordPress, the Software</span>
                        <span class="wcps-speaker">Sathish Nagarajan</span>
                    </td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Promote your WordPress Plugin or Theme</span>
                        <span class="wcps-speaker">Shilpa Shah</span>
                    </td>
                    <td colspan="1" rowspan="16" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Podcasting with WordPress</span>
                        <span class="wcps-speaker">Shrikant Joshi</span>
                    </td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Workshop</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">An Experiential Workshop on Accessibility with WordPress</span>
                        <span class="wcps-speaker">Raghavendra Peri</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">3:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">3:40 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Panel</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">To be confirmed</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">4:00 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">4:10 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Critique</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">The most popular SEO plugins/solutions for WordPress</span>
                        <span class="wcps-speaker">Alexander Gounder</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">4:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="6" class="wcp-schedule-break">
                        Tea Break</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">5:00 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-user">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Growing from a Single Author Blog to a Multi-author Community</span>
                        <span class="wcps-speaker">Arun Prabhudesai</span>
                    </td>
                    <td colspan="1" rowspan="4" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">हि</li>
                        </ul>
                        <span class="wcps-session">Building a Good Quality WordPress theme</span>
                        <span class="wcps-speaker">Nisha Singh</span></td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-dev">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Talk</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Local, Staging and Production Made Easy</span>
                        <span class="wcps-speaker">Joe Guilmette</span>
                    </td>
                    <td colspan="1" rowspan="10" class="wcp-schedule-biz-com">
                        <ul class="wcps-meta">
                            <li class="wcps-type">Panel</li>
                            <li class="wcps-language">हि</li>
                            <li class="wcps-language">En</li>
                        </ul>
                        <span class="wcps-session">Hosting WordCamps in India</span>
                        <span class="wcps-speaker">panelists to be announced</span>
                    </td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">5:20 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="2" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">5:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="2" rowspan="9" class="wcp-schedule-biz-com">
                        <span class="wcps-session">Open House &amp; QnA</span>
                        <span class="wcps-speaker">Moderator to be announced</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">5:50 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="1" rowspan="5" class="wcp-schedule-break">
                        Break</td>
                    <td colspan="1" rowspan="5" class="wcp-schedule-break">
                        Break</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">6:15 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="3">
                        <span class="wcps-session">Vote of Thanks/ Closing Ceremony</span></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">6:30 pm</td>
                </tr>
                <tr>
                    <td></td>
                    <td colspan="4" rowspan="6" class="wcp-schedule-break">
                        Commute to After Party</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">7:00 pm</td>
                </tr>
                <tr>
                    <td class="wcp-schedule-time">onwards</td>
                    <td colspan="4" rowspan="5">
                        After Party</td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
                <tr>
                    <td></td>
                </tr>
            </tbody>
        </table>

    </body></html>