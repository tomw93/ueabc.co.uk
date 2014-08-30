<?php

    /* ========== RESULTS 11/12 PAGE results/2011-12.php ==
    ============= Tom Wilkins 12/08/13 ===== */
  	include_once ('layout/page.php');

  	$page = new Page();
  	$page->setTitle("results - 2011/12");
  	$page->setRoot("../");
  	$page->setDescription("Results for the year 2011/12, breakdown of the race, category and position.");
    
    $body = '<article class="results">
    <content>
    	<a class="title">2011/12 Results</a><br>
				<br />
						<table class="ct01" cellspacing="0">  
			<tbody>  
			<tr>  
			<th>Race</th>  
			<th>Crew</th>  
			<th>Position</th></tr>  
			<tr>  
			<td>&nbsp;Cambridge Autumn Head&nbsp;</td>  
			<td>  
			<div>&nbsp;W1 - IM3 8+</div>  
			<div>&nbsp;W2 - IM3 8+</div>
			</td>  
			<td>
			<div>&nbsp; 2nd</div>  
			<div>&nbsp; 5th</div>
			</td></tr>  
			<tr>  
			<td>&nbsp;Cambridge Winter Head</td>  
			<td>  
			<div>&nbsp;W1 - IM3 8+</div>   
			<div>&nbsp;W2 - IM3 8+</div>   
			<div>&nbsp;W3 - Nov 8+</div>   
			<div>&nbsp;W4 - Nov 8+</div>   
			<div>&nbsp;M1 - IM2 4+</div>   
			<div>&nbsp;M2 - Nov 8+</div>   
			<div>&nbsp;M3 - Beg 8+</div>   
			</td>  
			<td>  
			<div>&nbsp; 4th (6th of 81 W8+s overall)</div>   
			<div>&nbsp; 5th</div>   
			<div>&nbsp; Won</div>   
			<div>&nbsp; 2nd</div>   
			<div>&nbsp; Won</div>   
			<div>&nbsp; 2nd</div>   
			<div>&nbsp; 5th</div>   
			</td></tr>  
			<tr>  
			<td>&nbsp;Carrow Cup&nbsp;</td>  
			<td>  
			<div>&nbsp;W1 - 4+</div>  
			<div>&nbsp;M1 - 4+</div>  
			<div>&nbsp;M1 - Nov 4+</div>  
			<div>&nbsp;M2 - Nov 4+</div>  
			</td>  
			<td>  
			<div>&nbsp; Won</div>  
			<div>&nbsp; 3rd</div>  
			<div>&nbsp; Won</div>  
			<div>&nbsp; 2nd</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Quintin Head&nbsp;</td>  
			<td>  
			<div>&nbsp;W1 - IM3 8+</div>  
			<div>&nbsp;W2 - Nov 8+</div>  
			<div>&nbsp;M1 - IM3 8+</div>  
			</td>  
			<td>  
			<div>&nbsp; 3rd</div>   
			<div>&nbsp; 2nd</div>  
			<div>&nbsp; 8th</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Hammersmith W&amp;J Head&nbsp;</td>  
			<td>
			<div>&nbsp;W1 - IM2 8+</div>  
			<div>&nbsp;W2 - Nov 8+</div>  
			</td>  
			<td>
			<div>&nbsp; 2nd</div>   
			<div>&nbsp; 2nd</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;BUCS Head&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 Int 4+</div>  
			<div>&nbsp;M1 Int 8+</div>  
			<div>&nbsp;M2 Beg 8+</div>  
			</td>  
			<td>  
			<div>&nbsp; 10th</div>  
			<div>&nbsp; 17th</div>  
			<div>&nbsp; 16th</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Norwich Head&nbsp;</td>  
			<td>
			<div>&nbsp;W1 - IM2 8+</div>  
			<div>&nbsp;W2 - Nov 8+</div>  
			<div>&nbsp;M1 - IM2 8+</div>
			<div>&nbsp;M2 - Nov 8+</div>
			</td>  
			<td>
			<div>&nbsp; Won - Webster Cup for fastest W8+</div>  
			<div>&nbsp; Won (and 2nd fastest W8+)</div>  
			<div>&nbsp; 3rd</div>  
			<div>&nbsp; Won</div>
			</td></tr>
	                <tr>  
			<td>&nbsp;BUCS Regatta&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 - Beg 8+</div>    
			</td>  
			<td>  
			<div>&nbsp; 5th in there Division</div>  
			</td></tr>
	                <tr>  
			<td>&nbsp;WeHoRR&nbsp;</td>  
			<td>  
			<div>&nbsp;W1 - IM2 8+</div>    
			</td>  
			<td>  
			<div>&nbsp; 47th</div>  
			</td></tr>
	                <tr>  
			<td>&nbsp;HoRR&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 - IM3 8+</div>
	                <div>&nbsp;M1 - Nov 8+</div>     
			</td>  
			<td>  
			<div>&nbsp; 146th</div> 
	                <div>&nbsp; 364th</div>  
			</td></tr>
			</tbody>  
			</table>
	    </content>
	</article>';
    $page->setBody($body);
  	$page->printPage();
?>
