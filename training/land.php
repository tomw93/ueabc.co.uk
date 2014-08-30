<?php

    /* ========== LAND TRAINING PAGE training/land.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("training - land");
    $page->setRoot("../");
    $page->setDescription("Details on land training. Explains where we do our land training throughout the week and what training we do.");
    $body = '<article class="training">
        <content>
            <a class="title">Land Training</a><br><br>
            <img style="float:right; margin-left:20px; margin-right:0px;" width="256" height="177" src="../images/the-ergos.jpg" alt="The Ergos" />
            Land training facilities including ergs and weights have always been difficult for us to gain access to. However we currently have an arrangement with the Norwich School in the centre of town, and we train there 4 nights a week during the winter and summer seasons, where we have access to an erg room with 12 ergs, and a gym with a good selection of weights and space for running circuit training. <br/> <br/>
            Circuit training and yoga run on Monday and Tuesday mornings, as well as other sports to help improve both fitness and communication within the squads such as; rugby, football, cycling, etc.</p>
        </content>
    </article>';
    $page->setBody($body);
    $page->printPage();
?>
