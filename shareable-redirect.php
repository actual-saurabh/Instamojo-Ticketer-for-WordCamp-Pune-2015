<?php
/*
 * Template name: Shareable.
 */
$type = isset( $_GET[ 'type' ] ) ? $_GET[ 'type' ] : 'supporter';
$extn = ($type != 'supporter') ? 'jpg' : 'png';

$verbs = array(
        'speaker' => "'m speaking at",
        'attendee' => "'m attending",
        'supporter' => " support",
        'sponsor' => "'m sponsoring",
        'volunteer' => "'m volunteering at",
        'organiser' => "'m organising"
);

$url = 'https://pune.wordcamp.org/2015/';

switch ( $type ) {
    case 'speaker':
        $url .= 'speakers/';
        break;
    case 'organiser':
        $url .= 'organisers/';
        break;
    case 'supporter':
    case 'attendee':
    case 'sponsor':
    default:
        $url .='tickets/';
        break;
}
?>
<html>
    <head>
        <title>I<?php echo $verbs[ $type ]; ?> WordCamp Pune 2015 on 6th September 2015 at Modern College of Arts, Science and Commerce</title>
        <style>
            body{
                width:660px;
                margin:0 auto;
                background:#f2f2f2;
                font-family: Arial, 'Helvetica Neue', Helvetica, sans-serif;
                text-align:center;
                color: #555;
            }
            h1{
                background: #fff;
                color:#555;
                padding: 20px;
                font-weight:bold;
                margin:0;
                padding:20px;
            }
            p{
                background:#f2f2f2;
                color:#555;
                margin: 0;
                padding:20px;
            }
            p.notice{
                background: #C0C4CB none;
                color:#555;
            }

        </style>
    </head>
    <body>
        <h1>I<?php echo $verbs[ $type ]; ?> WordCamp Pune 2015 on 6th September 2015 at Modern College of Arts, Science and Commerce</h1>
        <img src="https://pune.wordcamp.org/2015/files/2015/07/<?php echo $type; ?>-500x250.<?php echo $extn; ?>">
        <p class="notice">I may see you at WordCamp Pune 2015, a one day long conference and uncoference of WordPress lovers with loads of useful and interactive sessions, fun activities and lot of networking.</p>
        <p style="padding-bottom:0;"><img src="<?php echo get_stylesheet_directory_uri(); ?>/email/images/loading.gif"></p>
        <p style="padding-top:0;">Taking you to WordCamp Pune</p>
        <p style="padding-top:0;"><a style="color:#ef7c00; font-weight:bold; text-decoration:none;" href="<?php echo $url; ?>">[or click here]</a></p>
    </body>
    <script>
        setTimeout( function() {
            window.location.href = "<?php echo $url; ?>";
        }, 5000 );
    </script>
</html>


