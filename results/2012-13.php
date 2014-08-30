<?php

    /* ========== RESULTS 12/13 PAGE results/2012-13.php ==
    ============= Tom Wilkins 12/08/13 ===== */
    include_once ('layout/page.php');

  	$page = new Page();
  	$page->setTitle("results - 2012/13");
  	$page->setRoot("../");
  	$page->setDescription("Results for the year 2012/13, breakdown of the race, category and position.");
    $body = '<article class="results">
    <content>
    	<a class="title">2012/13 Results</a><br>
				<br />
							<table class="ct01" cellspacing="0">  
			<tbody>  
			<tr>  
			<th>Race</th>  
			<th>Crew</th>  
			<th>Position</th></tr>  
			<tr>  
			<td>&nbsp;Cambridge Winter Head</td>  
			<td>  
			<div>&nbsp;W1 - IM3 8+</div>   
			<div>&nbsp;W2 - Nov 8+</div>   
			<div>&nbsp;W3 - Nov 8+</div>   
			<div>&nbsp;W4 - IM3 4+</div>
	                <div>&nbsp;W5 - Nov 4+</div>
			<div>&nbsp;M1 - Nov 8+</div>   
			<div>&nbsp;M2 - Nov 8+</div>   
			<div>&nbsp;M3 - Beg 8+</div>   
	                <div>&nbsp;M4 - Beg 8+</div> 
	                <div>&nbsp;M5 - Nov 4+</div>
			</td>  
			<td>  
			<div>&nbsp; 2nd</div>  
	                <div>&nbsp; 6th</div> 
	                <div>&nbsp; 12th</div>
	                <div>&nbsp; 3rd</div>   
			<div>&nbsp; 6th</div>
	                <div>&nbsp; Won</div>
	                <div>&nbsp; 8th</div>     
			<div>&nbsp; 2nd</div>   
			<div>&nbsp; 9th</div>   
			<div>&nbsp; 2nd</div> 
			</td></tr>  
			<tr>  
			<td>&nbsp;Carrow Cup&nbsp;</td>  
			<td>   
			<div>&nbsp;M1 - Nov 4+</div>  
			<div>&nbsp;M2 - Nov 4+</div>
	                
	                <div>&nbsp;W1 - IM3 4+</div>
	                <div>&nbsp;W2 - Nov 4+</div>
	                <div>&nbsp;W3 - Nov 4+</div>
			</td>  
			<td>  
			<div>&nbsp; Won</div>  
			<div>&nbsp; 8th</div>
	                
			<div>&nbsp; 13th</div>  
			<div>&nbsp; 10th</div> 
	                <div>&nbsp; 13th</div>
			</td></tr>  
			
			<tr>  
			<td>&nbsp;BUCS Head&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 - Int 4+</div>  
			<div>&nbsp;M1 - Int 8+</div>  
			<div>&nbsp;M2 - Beg 8+</div>  
			</td>  
			<td>  
			<div>&nbsp; 2nd</div>  
			<div>&nbsp; 6th</div>  
			<div>&nbsp; 14th</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Norwich Head&nbsp;</td>  
			<td>
			<div>&nbsp;W1 - IM2 8+</div>  
			<div>&nbsp;W2 - Nov 8+</div>  
			<div>&nbsp;M1 - IM2 8+</div>
			<div>&nbsp;M2 - Nov 8+</div>
	                <div>&nbsp;M3 - Nov 4+</div>
			</td>  
			<td>
			<div>&nbsp; 3rd</div>  
			<div>&nbsp; 3rd</div>  
			<div>&nbsp; Won (fastest crew of the day)</div>  
			<div>&nbsp; 3rd</div>
	                <div>&nbsp; 7th</div>
			</td></tr>
	                <tr>  
			<td>&nbsp;BUCs Regatta&nbsp;</td>  
			<td>
			<div>&nbsp;M1 - IM 8+</div>  
			<div>&nbsp;M1 - Beg 4+</div>  
			<div>&nbsp;M1 - IM 4+</div>
			<div>&nbsp;W1 - Beg 8+</div>
			</td>  
			<td>
			<div>&nbsp; 21st</div>  
			<div>&nbsp; 38th</div>  
			<div>&nbsp; 11th</div>  
			<div>&nbsp; 11th</div>
			</td></tr>
	                <tr>  
			<td>&nbsp;Bedford Regatta&nbsp;</td>  
			<td>
			<div>&nbsp;M1 - Nov 8+</div>  
			<div>&nbsp;M1 - Nov 4+</div>  
			<div>&nbsp;M1 - IM 4+</div>
			<div>&nbsp;W1 - Nov 4+</div>
			</td>  
			<td>
			<div>&nbsp; Semi Finals</div>  
			<div>&nbsp; Won</div>  
			<div>&nbsp; Quarter Finals</div>  
			<div>&nbsp; Semi Finals</div>
			</td></tr>
	                <tr>  
			<td>&nbsp;Peterborough Regatta&nbsp;</td>  
			<td>
			<div>&nbsp;M1 - IM3 8+</div>  
			<div>&nbsp;W1 - Nov 4+</div>
	                <div>&nbsp;W1 - Nov 8+</div>
			</td>  
			<td>
			<div>&nbsp; 2nd in final</div>  
			<div>&nbsp; Semi Finals</div>  
			<div>&nbsp; 2nd in final</div>  
			</td></tr>
	                <tr>  
			<td>&nbsp;Met Regatta&nbsp;</td>  
			<td>
			<div>&nbsp;M1 - IM3 4+</div>
			</td>  
			<td>
			<div>&nbsp; 4th</div>  
			</td></tr>
	<tr>  
			<td>&nbsp;Star Regatta&nbsp;</td>  
			<td>
			<div>&nbsp;M1 - Nov 4+</div>
			</td>  
			<td>
			<div>&nbsp; 2nd</div>  
			</td></tr>
	                <td>&nbsp;Women&#39;s Henley&nbsp;</td>  
			<td>
			<div>&nbsp;W1 - 4+</div>
			</td>  
			<td>
			<div>&nbsp; 1st Round</div>  
			</td></tr>
			</tbody>  
			</table>
	    </content>
	</article>';

	$page->setBody($body);
  	$page->printPage();

?>
