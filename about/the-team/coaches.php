<?php
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("about - the team - coaches");
    $page->setRoot("../../");
    $page->setDescription("The coaches at UEABC that train both the Mens and Womens Squads. Each squad has an assigned coach that creates a training plan for the squads.");

    $body = '<article class="theSquad">
            <content>
                <a class="title">The Coaches</a><br>
                <br><img style="float:right; margin-left:20px; margin-right:0px;" width="156" height="178" src="../../images/the-coach.jpg" alt="The Coach" />
                We are lucky to have two highly experienced coaches working with the senior rowers, with separate coaches dedicated to the senior men&#39;s and women&#39;s squads. The coaches lead the water sessions and provide detailed land training plans, monitoring athletes progress throughout the season. They also usually accompany us to races and look on nervously from the sidelines!<br>
                <br>Novices are largely coached by senior squad members to begin with, led by those who have recently qualified as UKCC Level 2 coaches. There is nothing to prevent novices who are strong and pick up the technique quickly from progressing rapidly into the senior squads.<br>
                <br>There is an opportunity for two club members per year to gain a coaching qualification. You do not necessarily have to be in the top crew to learn to coach, but you will have to be prepared to put in some regular hours coaching lower boats. It is a fun and rewarding thing to do and we would very much encourage members to put themselves forward for this opportunity. For more info contact the club president.
            </content>
        </article>';

    $page->setBody($body);
    $page->printPage();
?>