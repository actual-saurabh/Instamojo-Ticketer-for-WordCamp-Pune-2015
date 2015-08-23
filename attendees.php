<?php
/*
 * Template Name: Attendees
 */

global $wpdb;

$tbl = $wpdb->prefix . 'wcp_tickets';

$counts = $wpdb->get_results( "SELECT `role`, COUNT(*) as count FROM $tbl GROUP BY `role`" );

$roles = array(
        'Writer/ Blogger',
        'Developer',
        'Site Admin',
        'Designer',
        'Manager',
        'Other'
);

function array_orderby() {
    $args = func_get_args();
    $data = array_shift( $args );
    foreach ( $args as $n => $field ) {
        if ( is_string( $field ) ) {
            $tmp = array();
            foreach ( $data as $key => $row )
                $tmp[ $key ] = $row[ $field ];
            $args[ $n ] = $tmp;
        }
    }
    $args[] = &$data;
    call_user_func_array( 'array_multisort', $args );
    return array_pop( $args );
}

$counts = json_decode( json_encode( $counts ), true );
$total = array_sum(array_column($counts, 'count'));
$percent = intval($total)/5;
$sortcount = $counts;
$sortcount = array_orderby( $counts, 'count', SORT_DESC, 'role', SORT_ASC );

$full = $sortcount[ 0 ][ 'count' ];
$barcount = count( $counts );
$incr = 0;
ob_start();
?>
<ul id="wcp-role-distro">
    <?php
    foreach ( $sortcount as $role ) {
        if ( in_array( $role[ 'role' ], $roles ) ) {

            $role_img = explode( '/', $role[ 'role' ] );
            $role_img = strtolower( trim(str_replace(' ', '-',  $role_img[ 0 ] ) ) );
            ?>
            <li style="height:<?php echo round( ($role[ 'count' ] / $full * 100) * 3 / 4, 2 ); ?>%;left:<?php echo round( $incr / $barcount * 100 ); ?>%;" title="<?php echo $role[ 'role' ] . '(s)'; ?>"><span><img src="https://pune.wordcamp.org/2015/files/2015/07/<?php echo strtolower( $role_img ); ?>.png" alt="<?php echo $role[ 'role' ] . '(s)'; ?>" width="24" height="24" /><sup><?php echo $role[ 'count' ]; ?></sup></span></li>
            <?php
            $incr ++;
        }
    }
    ?>
</ul>
<div id="wcp-ticket-progress">
<div id="wcp-progress-bar" style="width: <?php echo $percent; ?>%">
<div id="wcp-progress-anim">
<div class="wcp-progress-count" style="
    z-index: 90;
    right: 23px;
"><?php echo $total; ?></div>
</div>
</div>
  <div class="wcp-progress-count">/500</div>
</div>
<ul id="wcp-attendees-legend">
    <li><i class="icon-twitter"></i> Twitter</li>
    <li><i class="icon-link"></i> Website</li>
    <li><i class="icon-microphone"></i> Speaker</li>
    <li><i class="icon-hand-up"></i> Volunteer</li>
    <li><i class="icon-group"></i> Organiser</li>
    <li><i class="icon-glass"></i> After-party</li>
</ul>
<div id="wcp-attendees">
    <?php
    $attendees = $wpdb->get_results( "SELECT * from $tbl ORDER BY name ASC" );
 
    $count = 0;
    
        foreach ( $attendees as $attendee ) {

            $count ++;
            $twitter = stripslashes( preg_replace( '/^((http(s)*:\/\/)*twitter.com\/)*(@)*/i', '', $attendee->twitter ) );
			if ( !filter_var( $attendee->website, FILTER_VALIDATE_URL ) ) {
				$attendee->website = 'http://' . $attendee->website;
				if ( !filter_var( $attendee->website, FILTER_VALIDATE_URL ) ) {
					$attendee->website = null;
				}
			}
            $party = boolval( $attendee->party );
            switch ( strtoupper( $attendee->type ) ) {
                case 'ORGR':
                    $icon = 'group';
                    $alt = 'Organiser';
                    break;
                case 'SPKR':
                    $icon = 'microphone';
                    $alt = 'Speaker';
                    break;
                case 'VOLR':
                    $icon = 'hand-up';
                    $alt = 'Volunteer';
                    break;
                case 'PHOT':
                    $icon = 'camera';
                    $alt = 'Photography Volunteer';
                default:
                    $icon = '';
                    break;
            }
            if ( ! empty( $attendee->name ) ) {
                ?>
                <div class="wcp-attendee">
                    <?php echo get_avatar( $attendee->email, 196, 'wavatar', ucwords( $attendee->name ) ); ?>
                    <div class="wcp-attendee-details">
                        <h2><?php echo ucwords( $attendee->name ); ?></h2>
                        <p><?php echo ucwords( $attendee->role ); ?></p>
                        <ul>
                            <?php if ( ! empty( $twitter ) ) { ?>
                                <li class="wcp-twitter wcp-link"><a href="https://twitter.com/<?php echo $twitter; ?>" title="@<?php echo $twitter; ?>"><i class="icon-twitter"></i></a></li>
                            <?php } ?>
                            <?php if ( ! empty( $attendee->website ) ) { ?>
                                <li class="wcp-website wcp-link"><a href="<?php echo $attendee->website; ?>" title="<?php echo $attendee->website; ?>"><i class="icon-link"></i></a></li>
                            <?php } ?>
                            <?php if ( ! empty( $icon ) ) { ?>
                                <li class="wcp-type"><i class="icon-<?php echo $icon; ?> non-link" title="<?php echo $alt; ?>"></i></li>
                            <?php } ?>
                            <?php if ( $party ) { ?>
                                <li class="wcp-party"><i class="icon-glass non-link" title="Coming to the after-party"></i></li>
                                <?php } ?>

                        </ul>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
<div class="wcp-note" style="clear:both;width:100%"><p>Icons used in the bar graph on top are made by <a href="http://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="http://www.flaticon.com" title="Flaticon">www.flaticon.com</a> and are licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0">CC BY 3.0</a></p></div>
<?php
$post_content = ob_get_contents();
ob_end_flush();

require_once trailingslashit( get_stylesheet_directory() ).'/includes/WordpressClient.php';
$endpoint = "https://pune.wordcamp.org/2015/xmlrpc.php";

$wpClient	 = new \HieuLe\WordpressXmlrpcClient\WordpressClient();
$wpClient->setCredentials( $endpoint, RPCBOT_USERNAME, RPCBOT_PASSWORD );
$content	 = array(
	'post_content' => $post_content,
);
$status		 = $wpClient->editPost( 12, $content );
		