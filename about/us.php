<?php

    /* ========== ABOUT PAGE about/us.php ==
    ============= Tom Wilkins 12/08/13 ===== */

    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about");
    $page->setRoot("../");
    $page->setDescription("All about how UEABC operates with the university and some of our long term goals as a club, includes information on last season.");

    $body = '<article class="about">
        <content>
        <a class="title">About UEABC</a><br><br>
        UEA Boat Club is a competitive rowing club in Norwich that caters for students of the University of East Anglia, we train and race throughout the year at events across the UK.<br>
        <br>
        <a class="important" href="http://www.ueabc.co.uk/Training/Learn-to-Row.php">Learn to Row</a> courses are run at the beginning of the academic year for those with no prior experience of the sport. The senior crews compete at all the major national competitions including the Head of the River Races, BUCS events and Henley, as well as a wide range of local and regional events.<br>
        <br>
        We are proud to be a Focus Sport of the Union of UEA Students and enjoy good quality equipment and highly experienced coaches.<br>
        <br>
        This year (12/13) has proven to be one of the best (and hardest) yet. Norwich was hit hard by snow which resulted in one race being cancelled and training being disrupted, as well as having some unfortunate boat problems, however both the men&#39;s and women&#39;s squads have been performing consistently, achieving fantastic results in every race so far - which can be seen <a class="important" href="http://www.ueabc.co.uk/Results/2012-13.php">here.</a>
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
