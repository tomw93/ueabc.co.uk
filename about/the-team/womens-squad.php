<?php

    /* ========== WOMENS SQUAD PAGE about/the-team/womens-squad.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - the team - womens squad");
    $page->setRoot("../../");
    $page->setDescription("The Womens Squad at UEABC - overall goals for the year and some details about previous years of success.");

    $body = '<article class="theSquad">
        <content>
            <a class="title">The Womens Squad</a><br>
            <br /><img width="310" height="156" src="../../images/the-girls.jpg" alt="The Girls" />
            This year we have seen a massive development within UEA Boat Club and with it the women&#39;s squad had achieved some great successes. At the Women&#39;s Head of the River Race we saw the senior squad move up a huge 117 places, from 209th in 2010 to 92nd place in 2011, to 47th in 2012.<br/>
            <br />
            Henley Women&#39;s regatta is one of the most important events in the rowing calendar and in 2011, we were very proud to see the squad get through to the semi-finals, narrowly missing a place in the final. On top of this the women&#39;s squad has had wins at the Bedford and Peterborough regattas. Looking at our achievements in the past few years we have got some great foundations and experiences to build upon for next year and we are striving for even more successes!<br/ >

            <br />The women&#39;s squad is driven and committed and we will be returning to all of the major events in the future to see if we can make those results even better.</p>
            <p><img style="float:right; margin-left:20px; margin-right:0px;" width="267" height="150" src="../../images/the-girls-rowing.jpg" alt="The Girls" />
            We would love to encourage experienced rowers and coxes coming to the university to join our competitive squad. The top boat will be training six times a week, with a combination of water and land sessions; however there will also be the opportunity for experienced rowers to train at a lower intensity and on a more recreational basis.<br /> 
            <br />We cater for all levels of rowing and next year the squad will be made up of three boats, senior, development and novice, with all three having the chance to race throughout the year. So if you have never rowed before and like the sound of it why not sign up to our <a href="http://www.ueabc.co.uk/Training/Learn-to-Row.php">Learn to Row</a> course in September, once you start rowing I assure you that you will become addicted!</p>
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
