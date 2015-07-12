<?php
/*
 * Template Name: Attendees
 */

global $wpdb;

$tbl = $wpdb->prefix . 'wcp_tickets';

$waste_coupons = array(
        'WCP1557FEM',
        'FREE',
        'WCP15SPKRSAU',
        'WCP15FEM020',
        'WCP15SIR020',
        'WCP15VIP040',
        'WCPFREE9SUCVSFQ8'
);

$waste_coupon_query_str = implode( "', '", $waste_coupons );

$attendees = $wpdb->get_results( "SELECT * from $tbl where coupon NOT IN ('" . $waste_coupon_query_str . "') ORDER BY ticket_id DESC" );
?>
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
    $count = 0;
    foreach ( $attendees as $attendee ) {
        $count++;
        $twitter = stripslashes( preg_replace( '/^((http(s)*:\/\/)*twitter.com\/)*(@)*/i', '', $attendee->twitter ) );
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
        if($count>59 && $count%60===1){
            echo '<!--nextpage-->';
        }
    }
    ?>
</div>