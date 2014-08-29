<?php
foreach($query as $row)
{
	print $row->fname." ";
	print $row->lname." ";
	print $row->age." ";
	print $row->gender." ";
	print $row->address." ";
	print "<br>";
}
	//echo"<pre>";
	//print_r($query);
?>
  hai, <?php echo $query[0]->fname?>.
  your id is <?php echo "=".$query[0]->id?>
