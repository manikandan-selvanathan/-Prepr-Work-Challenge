<?php
 function console_log($output, $with_script_tags = true) {
    $js_code = 'console.log(' . json_encode($output, JSON_HEX_TAG) . 
');';
    if ($with_script_tags) {
        $js_code = '<script>' . $js_code . '</script>';
    }
    echo $js_code;
}


define("email_username_error", "Invalid username. It should not be a email id");
define("password_mismatch_error", "Password doesn't match");
define("registration_successfull", "Registered successfully!! Please <a href='/login' style='color: blue !important'>Login  </a>");
define("user_exists_error", "User already exists. Click <a href='/login' style='color: blue !important'>here</a> to login");
define("password_strength_error", "<ol><li>Must be a minimum of 8 characters</li><li>Must contain at least one uppercase character</li><li>Must contain at least 1 number</li></ol>");
?>
