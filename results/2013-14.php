<?php

    /* ========== RESULTS 12/13 PAGE results/2012-13.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

  	$page = new Page();
  	$page->setTitle("results - 2013/14");
  	$page->setRoot("../");
  	$page->setDescription("Results for the year 2013/14, breakdown of the race, category and position.");
    $body = '<article class="results">
    <content>
    	<a class="title">2013/14 Results</a><br>
				<br />
						<table class="ct01" cellspacing="0">  
		<tbody>  
		<tr>  
		<th>Race</th>  
		<th>Crew</th>  
		<th>Position</th></tr>  
		<tr>  
		<td>&nbsp;Norfolk Sculls</td>  
		<td>  
		<div>&nbsp;M1 - IM3 4+</div>   
		<div>&nbsp;M2 - Nov 4+</div>   
		<div>&nbsp;M3 - Beg 4+</div>   
		</td>  
		<td>  
		<div>&nbsp; 2nd</div>  
                <div>&nbsp; 5th</div> 
                <div>&nbsp; 3rd</div>
		</td></tr>  
		<tr>  
		<td>&nbsp;Cambridge Winter Head</td>  
		<td>  
		<div>&nbsp;M1 - Student Seniors 8+</div>   
		<div>&nbsp;M2 - Student Beginners 8+</div>   
		<div>&nbsp;M3 - Student Seniors 4+</div>   
		<div>&nbsp;W1 - Student Seniors 8+</div> 
		<div>&nbsp;W2 - Student Novice 8+</div>   
		</td>  
		<td>  
		<div>&nbsp; 14th</div>  
                <div>&nbsp; 1st</div> 
                <div>&nbsp; 1st</div>
		<div>&nbsp; 10th</div>
		<div>&nbsp; 9th</div>
		</td></tr>  
		<tr>  
		<td>&nbsp;Carrow Cup</td>  
		<td>  
		<div>&nbsp;M1 - 1st Senior 4+</div>   
		<div>&nbsp;M2 - 2nd Senior 4+</div>   
		<div>&nbsp;M3 - Novice 4+</div>   
		<div>&nbsp;W1 - 1st Senior 4+</div> 
		<div>&nbsp;W2 - 2nd Senior 4+</div>   
		</td>  
		<td>  
		<div>&nbsp; 2nd</div>  
                <div>&nbsp; 3rd</div> 
                <div>&nbsp; 1st</div>
		<div>&nbsp; 1st</div>
		<div>&nbsp; 5th</div>
		</td></tr>  
		
		</tbody>  
		</table>
    </content>
</article>
';

	$page->setBody($body);
  	$page->printPage();

?>
