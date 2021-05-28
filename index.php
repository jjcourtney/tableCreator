<?php

$table_class = "table_";

echo("<link rel='stylesheet' href='table.css' type='text/css'>");

$form_start = "<form action='table_prepare.php' method='post'>";
$form_end = "</form>";
echo("<center> <br><p>This is a table make please enter how big you want the <br><p><br><p>");
echo($form_start);
echo("enter number of columns: <input type='number' value='1' name='no_of_col' size='2' min='1'></input><br>");
echo("enter number of rows: <input type='number' value='1' name='no_of_row' size='2' min='1'></input><br>");
echo("<input type='submit' name='submit' value='Post' class='button'>");
echo($form_end);

/*
//table components
$tr = "<tr>";
$tr_end = "</tr>";
$td = "<td>";
$td_end = "</td>";
$table_start = "<table class='" . $table_class . "'>";
$table_end = "</table>";

//create a table with the number of columns from length of tablex
echo($table_start . $tr);

for ($j = 0; $j < $no_of_row; $j++){
$tablei = $tablex[$j];

// repeat rows for lenght of table1
for ($i = 0; $i < $no_of_col; $i++){
$current_row = $i + 1;
$current_col = $j + 1;
$text_input = "<input type='input' value='Data for ".$current_col." : ". $current_row . "' name='col_" . $current_col. "_row_" . $current_row ."'>";
echo($td . $text_input . $td_end);
}
echo($tr_end . $tr);
}
//finish the table
echo($tr_end . $table_end);
echo("<input type='submit' name='submit' value='Post' class='button'>");
echo($form_end);
*/
?>