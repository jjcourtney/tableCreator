<?php

echo("<link rel='stylesheet' href='table.css' type='text/css'>");
echo("<center>");
$table_class = "table_";
$tr = "&lt;tr&gt;<br>";
$tr_end = "&lt;/tr&gt;<br>";
$td = "&lt;td><br>";
$td_end = "<br>&lt;/td&gt;<br>";
$table_start = "&lt;table class='" . $table_class . "'&gt;<br>";
$table_end = "&lt;/table&gt;<br>";


$no_of_col = $_POST["no_of_row"];
$no_of_row = $_POST["no_of_col"];
echo("<div class ='table_'>"); 
echo($table_start);

for ($i = 1; $i < ($no_of_col+1); $i++)
{
echo($tr);

  for ($j = 1; $j < ($no_of_row+1); $j++)
  {
  echo($td);
  $some_va = "col_". $i ."_row_". $j;
  echo($_POST[$some_va]);
  echo($td_end);
  }
  echo($tr_end);
}
echo($table_end);
echo("</div>");
echo("<br><p><br><p>Your table will look like this<br><p><br><p>");

$table_class_r = "table_r";
$tr_r = "<tr>";
$tr_end_r = "</tr>";
$td_r = "<td>";
$td_end_r = "</td>";
$table_start_r = "<table class='" . $table_class_r . "'>";
$table_end_r = "</table>";


$no_of_col_r = $_POST["no_of_row"];
$no_of_row_r = $_POST["no_of_col"];

echo($table_start_r);

for ($i = 1; $i < ($no_of_col_r+1); $i++)
{
echo($tr_r);

  for ($j = 1; $j < ($no_of_row_r+1); $j++)
  {
  echo($td_r);
  $some_va_r = "col_". $i ."_row_". $j;
  echo($_POST[$some_va_r]);
  echo($td_end_r);
  }
  echo($tr_end_r);
}
echo($table_end_r);

/*--------------------

HTML chars

&gt;
&lt;
&ensp;
&quot;
-----------------------*/
?>