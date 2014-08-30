<?php

    /* ========== TRAINING CAMP PAGE training/camp.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("training - camp");
    $page->setRoot("../");
    $page->setDescription("Gives an insight into last years training camp, with some videos and an image.");
    $body = '<article class="training">
        <content>
            <a class="title">Training Camp</a><br>
            <br>Training camp happens every year, usually during the Easter holidays, and lasts for about 3 to 4 days. It has been a very successful event now for several years, with squads going to venues such as Henley Upon Thames, and Eton Dorney Lake. The experience that is gained by rowing over a few days, training and living with the squad is huge, setting up the transition from the Head season to Regatta season.<br/>
            <br>This year (2013) we went to Eton Dorney, which was the 2012 Olympic Venue for rowing. The camp was spread over a 3-day period, in which the squad trained before and after lunch. We would then head back to our accommodation for an evening meal and banter. Personally I found the camp to be an amazing experience, having gone to see the Olympics it was incredible to row on the same water where Olympic medals had been won less than a year previous.<br/>
            <br>Every year this event has proven to be helpful to both new and experienced rowers as it provides direct training with the coach over a longer time period than normal, meaning improvement is constantly made.<br/>
            <br>There is talk about possibly having a training camp abroad, which has not been done in the past due to cost and planning issues, however with the coming year and the new beginners, we are going to try and make this a reality.</p><br/>
            <img class="camp" src="../media/photos/trainingPhotos/TrainingCamp3-2013.jpg" alt="Eton Dorney" />
            <br>A picture of Eton Dorney from the boat house.<br><br>

           <div class="video2"><iframe src="http://www.youtube.com/embed/sEPN7-gMO6k" frameborder="0" allowfullscreen></iframe>
           <iframe src="http://www.youtube.com/embed/zsZV7CTbkf8" frameborder="0" allowfullscreen></iframe></div>
        </content>
    </article>';   
    $page->setBody($body);
    $page->printPage();
?>
