<?php
/*
 * Template Name: Results
 */
global $wpdb;

$tbl = $wpdb->prefix . 'wcp_tickets';

$fields = array( 'code' =>'', 'payid' =>'', 'email' =>'', 'phone' =>'' );
$filtered_fields = array_intersect_key($_GET, $fields);

$empty_removed = array_filter($filtered_fields);

$sql = "SELECT * from $tbl WHERE";

if(!empty($code)){
    $sql .= " code='$code'";
    
} else if(!empty($empty_removed)){
    foreach($empty_removed as $field=>$value){
        $sql.=" $field='$value'";
    }
}

$attendee = $wpdb->get_row( $sql );

if(!$attendee){
    die('not-yet');
}

switch ( strtoupper( $attendee->type ) ) {
                case 'ORGR':
                    $alt = 'Organiser';
                    break;
                case 'SPKR':
                    $alt = 'Speaker';
                    break;
                case 'VOLR':
                    $alt = 'Volunteer';
                    break;
                case 'PHOT':
                    $alt = 'Photography Volunteer';
                default:
                    $alt = 'Attendee';
                    break;
            }
            
            switch($attendee->tshirt_preference){
                
                
                case 'F':
                    $tpref = 'Women&quot;s';
                    break;
                default:
                    $tpref = 'Men&quot;s';
                    break;
            }

?>
<div class="wcp-attendee">
    <a id="close" href="#">Close [x]</a>
    <?php echo get_avatar( $attendee->email, 460, 'wavatar', ucwords( $attendee->name ) ); ?>
    <div class="t-shirt t-shirt-<?php echo $attendee->tshirt_preference;?>"><p><?php echo $attendee->tshirt_size; ?></p></div>
    
    <h2><?php echo ucwords( $attendee->name ). ' ('.$attendee->gender[0] . ')'; ?></h2>
    <p class="descr"><?php echo ucwords( $alt ); ?>/ <?php echo ucwords( $attendee->level ) . ' ' . ucwords( $attendee->role ); ?></p>
    <p class="codes"><?php echo $attendee->code; ?></p>
    <p class="codes"><?php echo $attendee->payment_id; ?></p>
    <p class="codes"><?php echo $attendee->coupon; ?></p>
</div>

