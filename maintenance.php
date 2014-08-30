<?php
    /* ========== MAINTENANCE PAGE maintenance.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("maintenance");
    $page->setRoot("");
    
    $body='<article class="members">
        <content>
            <a class="title">Maintenance</a><br><br>
            The site is currently under maintenance, check back in a few hours.
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
