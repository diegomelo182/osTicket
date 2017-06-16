<?php
if(!defined('OSTCLIENTINC')) die('Access Denied');

$userid=Format::input($_POST['userid']);
?>
<div class="row">
    <div class="col-md-4">
        <div class="panel panel-primary">
            <div class="panel-heading"><?php echo __('Forgot My Password'); ?></div>
            <div class="panel-body">
                <p>
                    <?php echo __(
                    'Enter your username or email address in the form below and press the <strong>Send Email</strong> button to have a password reset link sent to your email account on file.'); ?>
                </p>

                <form action="pwreset.php" method="post" id="clientLogin">
                    <div style="width:50%;display:inline-block">
                    <?php csrf_token(); ?>
                    <input type="hidden" name="do" value="sendmail"/>
                    <strong><?php echo Format::htmlchars($banner); ?></strong>
                    <br>
                    <div>
                        <label for="username"><?php echo __('Username'); ?>:</label>
                        <input id="username" type="text" name="userid" size="30" value="<?php echo $userid; ?>">
                    </div>
                    <p>
                        <input class="btn" type="submit" value="<?php echo __('Send Email'); ?>">
                    </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>