<?php

    /* ========== BOATHOUSE PAGE training/boathouse.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("training - boathouse");
    $page->setRoot("../");
    $page->setDescription("Information about the boathouse we use as a club, where all our boats are stored and where we do our water training. Also some information about other clubs who share the boathouse with us.");
    $body = '<article class="training">
        <content>
            <a class="title">The Boathouse</a><br>
            <br>
            <img class="boathouse" src="../images/the-boathouse.jpg" alt="The Boathouse" />
            The boathouse site at Whitlingham is shared with the Norwich Rowing Club, the Norwich School Boat Club, the Norwich High School Rowing Club, and the Norwich Canoe Club. Together we make up the Whitlingham Foundation, and the clubs work together closely on many issues.<br/><br/>
            The boathouse facilities themselves are currently undergoing major expansion and refurbishment, with a &pound;1 million shared boathouse under construction. The plans have been completed and the project has began, the upstairs will have; changing and bathroom facilities, gym (weights and an erg roon) and bar so if you are able to help in any way please get in touch with the club president, or donate through the website: <a href="http://www.whitlinghamboathouses.co.uk/">http://www.whitlinghamboathouses.co.uk/</a>
        </content>
    </article>';
    $page->setBody($body);
    $page->printPage();
?>
