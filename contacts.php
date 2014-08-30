<?php
    include_once ('layout/page.php');

    $page = new Page();
    $page->setTitle("contacts");
    $page->setRoot("");
    $page->setDescription("The UEABC committee - faces of the rowing club - with their respected title, description and contact details.");
    $body = '<article class="contacts">
    <a class="title">UEA Union</a><br><br>
    <p>Address to UEA Rowing at the following address: Union of UEA Students, Union House, UEA, Norwich NR4 7TJ</p><br><br>
    <a class="title">Committee</a><br><br>';

    $sql = mysql_query("SELECT * FROM `committee` ORDER BY `id` ASC LIMIT 6") or die("MySQL Error - Failed to Select news");

    while ($results = mysql_fetch_array($sql)){
        $body.='<ul><li><img src="images/committee/'.str_replace(" ", "",$results['position']) . '.jpg" alt="'.
            $results['firstname'] . ' ' . $results['surname'].'" /></li>
            <li>' . $results['position'] . ' : ' . $results['firstname'] . ' ' . $results['surname'] .
            '<br><a href="mailto:{{ person.email }}" title="email">' . $results['email'] . '</a><br>'.
            $results['contact_description'] . '<br></li></ul>';
        if($results['id'] != 6){
            $body.='<hr>';
        }
    }

       $body.='</article>';
  $page->setBody($body);
  $page->printPage();
?>
