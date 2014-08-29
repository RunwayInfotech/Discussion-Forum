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
?>