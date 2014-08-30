<?php

    /* ========== L2R PAGE training/learn-to-row.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("training - learn to row");
    $page->setRoot("../");
    $page->setDescription("We offer a learn to row course at the begining of the year, this page explains how it operates.");
    $body = '<article class="training">
        <content>
            <a class="title">Learn to Row</a><br>
            <br><img width="278" height="261" src="../images/learn-to-row.jpg" alt="Learn to Row" />
            At UEA Boat Club If you have never rowed before then you will need to complete our Learn to Row course to equip you with an understanding of the basics. The course will comprise 8 sessions over 4 weeks in October, and will cover basic technique on the rowing machines, an introduction to the equipment that we use, a swim test and capsize drill, a day trip to the rowing tanks in London (a stable boat built into a swimming pool) and several sessions rowing on the river in a coxed 8. You will be rowing on Wednesday afternoons and Sunday mornings, and will be expected to turn up for every session (see note below). Every session will be led by a coach on a motorised launch that accompanies you up the river.<br />
            <br>Once you complete the Learn to Row course you will be organised into crews and a training plan will be tailored for your crew to provide the right intensity of training to match your ambitions. Novice crews will race as early as November at the Cambridge Winter Head so we will need to get you up and rowing as quickly as possible! If you stay with us for the season you will also have the opportunity to race in Norwich for the Carrow Cup and the Norwich Head and will venture further afield for the Women&#39;s and Men&#39;s Eight Head of the River Race (WEHoRR/ HoRR) through central London and multi-lane racing in Nottingham, Bedford and Peterborough during the Spring/ Summer. It&#39;s hard work but a lot of fun!<br>
        </content>
    </article>';

    $page->setBody($body);
    $page->printPage();
?>
