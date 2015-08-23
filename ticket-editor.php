<?php
/* 
 * Template Name: Ticket Editor
 */

?>
<form method="POST">
    <h2>Please fill in both the following</h2>
    <label for="name"><span>Ticket Code</span><input type="text" name="code" value="<?php echo $code; ?>"></label>
    <label for="payment_id"><span>Instamojo Payment ID</span><input type="text" name="payment_id" value="<?php echo $payment_id; ?>"></label>
    <h2>Please fill in <strong>at least one</strong> of the following</h2></label>
    <label for="phone"><span>Phone Number</span><input type="text" name="phone" value="<?php echo $phone; ?>"></label>
    <label for="email"><span>Email</span><input type="text" name="email" value="<?php echo $email; ?>"></label>
    <label style="display:none;" for="captcha"><span>Captcha</span><input type="checkbox" name="captcha"></label>
</form>

<?php
// create a form to change the details for all fields. Also add a honeypot
?>
<form method="POST">
    <h2>Plese change the details below</h2>
    <label for="name"><span>Ticket Code</span><input type="text" name="code" value="<?php echo $code; ?>"></label>
    <label for="payment_id"><span>Instamojo Payment ID</span><input type="text" name="payment_id" value="<?php echo $payment_id; ?>"></label>
    <h2>Please fill in <strong>at least one</strong> of the following</h2></label>
    <label for="phone"><span>Phone Number</span><input type="text" name="phone" value="<?php echo $phone; ?>"></label>
    <label for="email"><span>Email</span><input type="text" name="email" value="<?php echo $email; ?>"></label>
    <label style="display:none;" for="captcha"><span>Captcha</span><input type="checkbox" name="captcha"></label>
</form>

