<?php

    /* ========== RESULTS 10/11 PAGE results/2010-11.php ==
    ============= Tom Wilkins 12/08/13 ===== */
  	include_once ('layout/page.php');

  	$page = new Page();
  	$page->setTitle("results - 2010/11");
  	$page->setRoot("../");
  	$page->setDescription("Results for the year 2010/11, breakdown of the race, category and position.");

    $sql = "SELECT year_table.year_value, races.race_name, results.category, results.position ".
                    "FROM races, year_table, results ".
                    "WHERE year_table.year_value = '2010/ 11' AND year_table.year_id = results.year_id ".
                    "AND races.race_id = results.race_id";
    $result = mysqli_query($con, $sql);
    $race_list = array();

    // creates an array of all the races
    while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
        if(!in_array($row['race_name'], $race_list)){
            array_push($race_list, $row['race_name']);
        }
    }

  	$body = '<article class="results">
    	<a class="title">2010/11 Results</a><br>
					<br />
			<table class="ct01" cellspacing="0">  
			<tbody>  
			<tr>  
			<th>Race</th>  
			<th>Crew</th>  
			<th>Position</th></tr>';

    foreach($race_list as $race){
        $body.='<tr><td>&nbsp;'.$race.'</td><td>';
        $result = mysqli_query($con, "select * from results, races, year_table
          where year_table.year_value = '2010/ 11' and results.year_id = year_table.year_id
          and races.race_name = '".$race."' and races.race_id = results.race_id");
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($race == $row['race_name']){
                $body.='<div>&nbsp;'.$row['category'].'</div>';
            }
        }
        $body.='</td><td>';
        $result = mysqli_query($con, "select * from results, races, year_table
          where year_table.year_value = '2010/ 11' and results.year_id = year_table.year_id
          and races.race_name = '".$race."' and races.race_id = results.race_id");
        while($row = mysqli_fetch_array($result,MYSQLI_ASSOC)){
            if($race == $row['race_name']){
                $body.='<div>&nbsp;'.$row['position'].'</div>';
            }
        }
        $body.='</td></tr>';
    }

/*
			<td>&nbsp;Cambridge  
			Winter Head&nbsp;</td>  
			<td>&nbsp;W1 IM3 8+&nbsp;</td>  
			<td>&nbsp; 2nd&nbsp;</td></tr>  
			<tr>  
			<td>&nbsp;Carrow Cup</td>  
			<td>  
			<div>&nbsp;M1 4+</div>  
			<div>&nbsp;W1 4+</div>  
			</td>  
			<td>  
			<div>&nbsp; 2nd</div>  
			<div>&nbsp; Won</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Quintin Head&nbsp;</td>  
			<td>  
			<div>&nbsp;M1  
			IM3 8+</div>  
			<div>&nbsp;W1 IM3 8+&nbsp;</div>  
			</td>  
			<td>  
			<div>&nbsp; 2nd</div>  
			<div>&nbsp; 3rd&nbsp;</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Norwich Head&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 IM3 4+</div>  
			<div>&nbsp;M1 IM3 8+</div>  
			<div>&nbsp;W2 Nov 8+&nbsp;</div>  
			</td>  
			<td>  
			<div>&nbsp;  
			Won</div>  
			<div>&nbsp; Won</div>  
			<div>&nbsp; 3rd</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Hammersmith W&amp;J Head&nbsp;</td>  
			<td>&nbsp;W1 IM3 8+&nbsp;</td>  
			<td>&nbsp; 4th</td></tr>  
			<tr>  
			<td>&nbsp;BUCS Head&nbsp;</td>  
			<td>  
			<div>&nbsp;M1 Int 4+</div>  
			<div>&nbsp;M1  
			Int 8+&nbsp;</div>  
			</td>  
			<td>  
			<div>&nbsp; 6th</div>  
			<div>&nbsp; 5th&nbsp;</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Reading Head&nbsp;</td>  
			<td>&nbsp;M1 IM2 8+&nbsp;</td>  
			<td>&nbsp; 9th&nbsp;</td></tr>  
			<tr>  
			<td>&nbsp;WEHoRR&nbsp;</td>  
			<td>  
			<div>&nbsp;W1 IM3&nbsp;8+</div>  
			<div>&nbsp;W2  
			Nov 8+&nbsp;</div>  
			</td>  
			<td>  
			<div>&nbsp; 92nd</div>  
			<div>&nbsp; 238th&nbsp;</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;HoRR&nbsp;</td>  
			<td>&nbsp;M1 IM3 8+&nbsp;</td>  
			<td>&nbsp;&nbsp;150th</td></tr></tbody>  
			</table>


			<table class="ct01" cellspacing="0">  
			<tbody>  
			<tr>  
			<th>Race</th>  
			<th>Crew</th>  
			<th>Position</th></tr>
			<tr>  
			<td>&nbsp;BUCS Regatta </td>  
			<td>  
			<div>&nbsp;M1&nbsp;Int 8+</div>  
			<div>&nbsp;W1 Int 8+&nbsp;</div>  
			</td>  
			<td>  
			<div>&nbsp;Semi-final</div>  
			<div>&nbsp;Semi-final</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Bedford Regatta</td>  
			<td>  
			<div>&nbsp;M1  
			IM3 4+&nbsp;&nbsp; </div>  
			<div>&nbsp;M2 Nov 4+</div>  
			<div>&nbsp;M1 IM3 8+</div>  
			<div>&nbsp;W1 Nov 8+</div>  
			<div>&nbsp;W1 IM3 8+</div>  
			</td>  
			<td>  
			<div>&nbsp;Won</div>  
			<div>&nbsp;Won</div>  
			<div>&nbsp;Semi-final</div>  
			<div>&nbsp;Won</div>  
			<div>&nbsp;Semi-final</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Peterborough  
			Spring Regatta</td>  
			<td>  
			<div>&nbsp;M1 IM2 4+</div>  
			<div>&nbsp;M2 IM3 4+</div>  
			<div>&nbsp;M1 IM2 2-</div>  
			<div>&nbsp;W1 IM3 8+</div>  
			</td>  
			<td>  
			<div>&nbsp;Won</div>  
			<div>&nbsp;Won</div>  
			<div>&nbsp;2nd</div>  
			<div>&nbsp;Won</div>  
			</td></tr>  
			<tr>  
			<td>&nbsp;Marlow Regatta</td>  
			<td>&nbsp;M1  
			IM2 8+</td>  
			<td>&nbsp;4th</td></tr>  
			<tr>  
			<td>&nbsp;Henley Women&#39;s Regatta</td>  
			<td>&nbsp;W 8+</td>  
			<td>&nbsp;Semi-final</td></tr>  
			<tr>  
			<td>&nbsp;Henley Royal Regatta</td>  
			<td>&nbsp;M 8+</td>  
			<td>&nbsp;1st Round</td></tr>*/

       $body.=' </tbody>
			</table>
	    </content>
	</article>';

	$page->setBody($body);
  	$page->printPage();
?>
