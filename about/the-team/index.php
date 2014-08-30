<?php

    /* ========== TEAM PAGE about/the-team/index.php ==
    ============= Tom Wilkins 12/08/13 ===== */

    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - the team");
    $page->setRoot("../../");
    $page->setDescription("Members Area for the Squads.");

    $body= '<article class="theTeam">
        <content>
            <a class="title">The Team</a><br>
            <br><a href="/about-us/The-Team/womens-squad.php" title="Womens Squad"><img width="220" height="150" src="../../images/the-girls-rowing.jpg" alt="The Girls" /><br>The Girls</a>
            <a href="/about-us/The-Team/mens-squad.php" title="Mens Squad"><img width="250" height="150" src="../../images/the-men-rowing.jpg" alt="The Guys" /><br>The Guys</a>
            <a href="/about-us/The-Team/coxes.php" title="Coxes"><img width="220" height="150" src="../../images/the-cox.jpg" alt="Coxswain" /><br>Coxswain</a>
            <a href="/about-us/The-Team/coaches.php" title="Coaches"><img width="150" height="150" src="../../images/the-coach.jpg" alt="Coaches" /><br>Coaches</a>
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
