<!DOCTYPE php>
<?php
include_once('tools.php');
if (isset($_SESSION["user"])) {
    top_module("ANZAC Douglas Raymond Baker - Admin");

    echo '<main>
    <article>
        <h1><b>UNDER CONSTRUCTION</b></h1>
    </article>
</main>
</php>';
    footer_module();

    // admin page content
} else {
    //access denied 
    http_response_code(401);
    // die('Access Denied');
}


?>
