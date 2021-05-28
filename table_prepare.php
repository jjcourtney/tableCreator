<?php
$no_of_col = $_POST["no_of_col"];
$no_of_row =  $_POST["no_of_row"];

$table_class = "table_";

echo("<link rel='stylesheet' href='table.css' type='text/css'>");

$form_start = "<form action='table_create.php' method='post'>";
$form_end = "</form>";
$send_no_of_row = "<input type='hidden' name='no_of_row' value='".$no_of_row."'>";
$send_no_of_col = "<input type='hidden' name='no_of_col' value='".$no_of_col."'>";
$form_start_with_col_row = $form_start.$send_no_of_col.$send_no_of_row;

//table components
$tr = "<tr>";
$tr_end = "</tr>";
$td = "<td>";
$td_end = "</td>";
$table_start = "<table class='" . $table_class . "'>";
$table_end = "</table>";

echo($form_start_with_col_row);

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
?>