<?php

    /* ========== BOATS PAGE training/boats.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - training - boats");
    $page->setRoot("../");
    $page->setDescription("About the boats we currently own and use at UEABC, along with possible boats we want to get for the future.");
    $body = '<article class="training">
        <content>
            <a class="title">The Boats</a><br>
            <br><img class="boats" src="../images/the-oars.jpg" alt="The Oars" />
            <img class="boats" src="../images/the-stampfli.jpg" alt="The Boat" />
            At UEA Boat Club We have a fleet of four 8+s and four 4+s, including a Stampfli 8+ and 4+ for the top men&#39;s crews, and a Filippi 8+ for the top women&#39;s crew. Our boats are regularly updated and we have access to some small boats and sculls during the summer. We also have 2 coaching launches: a catamaran which was new this year, and an old Tin Fish which is due to be replaced imminently.<br />
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
