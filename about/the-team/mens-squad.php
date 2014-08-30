<?php

    /* ========== MENS SQUAD PAGE about/the-team/mens-squad.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - the team - mens squad");
    $page->setRoot("../../");
    $page->setDescription("The Mens Squad at UEABC - How the squad has built up over the past few years and the squads successes. Includes the squad goals.");

    $body = '<article class="theSquad">
        <content>
            <a class="title">The Mens Squad</a><br><br>
            <img width="250" height="150" src="../../images/the-men-rowing.jpg" alt="The Guys Rowing" />
            This year the men&#39;s squad has built from 10 or so dedicated members, to a crew of 30+ oarsmen proving the <a href="http://www.ueabc.co.uk/Training/Learn-to-Row.php">Learn to row</a> courses were a massive success at the beginning of the year. <br>
            <br />We took four 8s and one 4 to Cambridge Winter Head and came back with fantastic results including some pots (senior crew won there category), later in the year the senior 4 made a strong performance, winning Carrow Cup. We then improved last years results at BUCs Head with both the senior 8 and 4 gaining automatic qualification (6th and 2nd) to BUCs Regatta later in the year and then went on to win Norwich Head, showing what we as a club are able to achieve. With an experienced coach dedicated just to the men&#39;s squad, the coming season can only bring good things and hopefully many more pots!<br />
            <br />No matter which squad you are part of, no matter how many times a week you are training; you are guaranteed to have a rewarding and amazing time. </p>
            <p><img style="float:right; margin-left:20px; margin-right:0px;" width="250" height="150" src="../../images/the-men.jpg" alt="The Guys" />
            We cater for all levels of rowing. Whether you have rowed for years, want to get straight in the water and train six days a week, or are a complete newbie and want to give our new "Learn to Row" course a shot, you are welcome at UEABC. We have some fantastic Stampfli and Janousek boats at our disposal, so why not come and help us put them to good use!<br />
            <br />We are after people who are committed, always keen to improve and willing to train in a squad where you will be pushed to your full potential. If this is you then we look forward to seeing you on the water!</p>
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
