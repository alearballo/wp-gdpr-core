<?php
/**
 * small form to use in table
 * to use in gdpr-template.php
 */
?>
<form method="post" id="wgdpr_delete_comments_form">
    <input type="hidden"  name="gdpr_email" value="<?php echo $email; ?>">
    <button class="btn btn-default waves-effect m-b-5" id="sa-warning">
        <i class="fa fa-trash m-r-5"></i><span><?php _e('Send delete request', 'wp_gdpr'); ?></span> </button>
<!--    <input type="submit" class="button button-primary" name="send_gdp_del_request" value="--><?php //_e('Send delete request', 'wp_gdpr'); ?><!--">-->
<!--    <input type="submit" class="button button-primary" name="gdpr_download_csv" value="--><?php //_e('Download comments', 'wp_gdpr'); ?><!--">-->
    <input type="hidden" name="mail_action" value="gdpr">
</form>
