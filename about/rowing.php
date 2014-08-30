<?php

    /* ========== ROWING PAGE about/rowing.php ==
    ============= Tom Wilkins 12/08/13 ===== */

    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - rowing");
    $page->setRoot("../");
    $page->setDescription("Rowing as a sport - What is rowing? Why do people row? What do we offer as a University Rowing Club? Some details on training.");

    $body = '<article class="about">
        <content>
            <a class="title">About Rowing</a><br>
            <br>Rowing is both physically and mentally challenging. It can require a substantial time commitment with top crews training 6 days per week and second crews at least 4 times per week thoughout the year.<br>
            <br>HOWEVER it is without doubt the most rewarding of all sports, fosters close bonds between squad members and gives you a pretty amazing body and guaranteed first tan of the year.<br>
            <br>We concentate on sweep-oar rowing, which is where each crew member has a single oar, as opposed to sculling where each rower has two oars.<br>
            <br>Training takes place on land - on the rowing machines (known as ergs) and in the gym doing weights and circuits - as much as on the river.<br>
        </content>
    </article>';

  $page->setBody($body);
  $page->printPage();
?>
