<?php

    /* ========== COXES PAGE about/the-team/coxes.php ==
    ============= Tom Wilkins 12/08/13 ===== */
  include_once ('layout/page.php');

  $page = new Page();
  $page->setTitle("about - the team - coxes");
  $page->setRoot("../../");
  $page->setDescription("The UEABC coxes - what it takes to become a cox and what you will get out of it as a person. Gives an insight into coxing.");

  $body = '<article class="coxes">
        <content>
            <a class="title">Coxswain</a><br>
            <br><img class="cox1" src="../../images/the-cox.jpg" alt="The Cox" >
            It is not always true that those of diminutive stature have no future in rowing. However lack of strength and length will limit you as an oarsperson and you may find yourself outcompeted for seats by your larger peers. But panic not, there is a way that you can participate in the sport up to the very highest level - as a coxswain(cox).<br>
            <br>A good cox is: <a class="important">small</a> (less than 60kg), <a class="important">assertive, confident, loud, slightly sadistic and competitive</a>.<br>
            <br>A cox is as much a part of the crew as any other member, and utterly indispensible. A good cox can make the difference between winning and losing. Your job is twofold: you steer the boat using rudder wires, and you communicate with the rowers. You are the motivator, the tactician, the voice of calm in stressful situations. During races you select the racing line and fight for it against other boats, but you also hold the crew together, feedback on their technique and call for pushes at the critical points. You know when they&#39;re tired and you find a way not only to get them to keep going but to get them to push harder.<br/><br/>
            <img class="cox2" src="../../images/Coxing3.jpg" alt="The Cox" />
            You have to get inside their heads and work out what they respond to - will they push their hardest at a call to do it for their coach, their mothers or the bacon sandwich that&#39;s waiting for them at the end?Do they respond well to criticism or do you get a better result when you focus on the positives of what&#39;s going on? Does screaming &#39;SMASH THE FOOTPLATE" give you a burst of speed, or a sort of confused wobble? Every crew is different and to get the most out of them you have to get to know them. It&#39;s like driving a racing car but instead of pedals you have your voice and your words.<br>
            
            <br>Coxing is hard - to know the crew as well as you need to you have to train with them all year, through the ups and downs and you have to learn a lot about rowing technique and what produces boat speed. In the winter it&#39;s cold and when the rowing isn&#39;t going well it can be hard to know what to say to improve it. But come the summer you will have the biggest trophy cabinet of everyone, you will be in charge of your crew and racing them down 6-lane lakes. You get all the glory and excitement with none of the pain. What could be better?!
        </content>
    </article>';

  $page->setBody($body);
  $page->printPage();
?>
