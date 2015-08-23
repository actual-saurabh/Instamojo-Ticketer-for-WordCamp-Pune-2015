<?php
/*
 * Template Name: Profile Updater
 */

/*
 * Change
 * ***************************************
 */
$chief_registrar = 'saurabh@yapapaya.com';
/*
 * ***************************************
 */
$confirm_invalid = (isset( $_POST[ 'confirm_invalid' ] ) && ! empty( $_POST[ 'confirm_invalid' ] ));

$invalid = (isset( $_POST[ 'invalid' ] ) && ! empty( $_POST[ 'invalid' ] ));

if ( $confirm_invalid ) {
    
    confirm_invalidate();
    exit();
    
} else if ( $invalid ) {
    
    invalidate();
    $data = false;
    exit();
    //8600400840
    
} else {

    $details[ 'code' ] = $_POST[ 'code' ]; // sanitise this

    $details[ 'email' ] = $_POST[ 'email' ];

    $details[ 'payment_id' ] = $_POST[ 'payment_id' ];

    $details[ 'phone' ] = $_POST[ 'phone' ];

    $details[ 'nonce' ] = $_POST[ 'nonce' ];

// valid nonce

    $verify_methods = array();

    $data = false;

    if (
            ( ! isset( $details[ 'code' ] ) || empty( $details[ 'code' ] )) && ( ! isset( $details[ 'payment_id' ] ) || empty( $details[ 'payment_id' ] ))
    ) {
        if ( ( ! isset( $details[ 'email' ] ) || empty( $details[ 'email' ] ) ) ) {
            $verify_methods[] = 'email';
        }
        if ( ( ! isset( $details[ 'phone' ] ) || empty( $details[ 'phone' ] ) ) ) {
            $verify_methods[] = 'phone';
        }
    } else if ( isset( $details[ 'code' ] ) && ! empty( $details[ 'code' ] ) ) {
        $verify_methods[] = 'code';
    } else if ( isset( $details[ 'payment_id' ] ) && ! empty( $details[ 'payment_id' ] ) ) {
        $verify_methods[] = 'payment_id';
    }


    if ( ! empty( $verify_methods ) ) {
        $details = array_intersect_key( $details, $verify_methods );
        $data = verify();
    }
}

function verify() {
    global $wpdb;

    $tbl = $wpdb->prefix . 'wcp_tickets';

    foreach ( $details as $key => $value ) {
        if ( ! isset( $details[ $key ] ) || empty( $details[ $key ] ) ) {
            continue;
        }
        $where_array[] = " {$details[ $key ]} LIKE {$details[ $value ]}";
    }

    $where_clause = implode( 'AND', $where_array );
    $where_clause = 'WHERE' . $where_clause;

    if ( ! $where_clause ) {
        return false;
    }
    return $wpdb->get_row( "SELECT * FROM $tbl $where_clause", ARRAY_A );
}

function invalidate(){
    ?>
    <form method="post">
        <h2>Are you sure you want to do this?</h2>
        <p>This will make the ticket invalid. Please ask the user to move to the resolution queue.</p>
        <input type="hidden" name="code" value="<?php echo $data[ 'code' ]; ?>">
        <input type="submit" name="confirm_invalid" value="Click to confirm and notify Chief Registrar" />
    </form>  
<?php
}

function confirm_invalidate(){
    // make invalid
    
}

if ( $data ) {
    ?>
    <div id="attendee-data">
        <div id="photo">
            <?php get_avatar( $data[ 'email' ], 320 ); ?>
        </div>
        <div id="details">
            <p id="code"><?php echo $data[ 'code' ]; ?></p>
            <p id="payment_id"><?php echo $data[ 'payment_id' ]; ?></p>
            <h1><?php echo $data[ 'name' ]; ?></h1>
            <p id="type"><?php echo $type; ?></p>
            <p id="tshirt"><?php echo $data[ 'tshirt_preference' ]; ?>&mdash<?php echo $data[ 'tshirt_size' ]; ?></p>
            <p id="role"><?php echo $data[ 'role' ]; ?></p>
        </div>
        <div id="unmark-attendance">
            <form method="post">
                <input type="hidden" name="code" value="<?php echo $data[ 'code' ]; ?>">
                <input type="submit" name="invalid" value="Mark Invalid" />
            </form>         
        </div>
    </div>
    <?php
} else {
    ?>
    <div id="attendee-data">
        <h2>Not Found</h2>
        <p>Please try searching manually</p>
    </div>
    <?php
}

