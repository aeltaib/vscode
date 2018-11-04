<?php

include 'connection.php';
include 'view.php';
include 'function.php';


if(isset($_POST['submit']))
{
 $S_Data = $_POST["start_date"];
 $E_Data = $_POST["end_date"];
 $qselect= $_POST["qselect"];
}


if(isset($_POST["submit"]))
{
  if(!empty($_POST['start_date']) && !empty($_POST['end_date']) && !empty($_POST['qselect']))
   {
      echo '<button id="myButton" class="btn btn-warning btn-xs">download excel</button>';
   }
}

$created_at= date('Y-m-d H:i:s');

//draw table
echo '<div id="table_wrapper">';

echo '<table id="datatable" class="mytable responstable" style="width: 50%; border-collapse:collapse;margin:auto;"border="2" bordercolor="#CCCCCC" cellpadding="0" cellspacing="collapse" align="center"><caption>Call Status</caption> <tr style="background-color:#167F92;color:white;">';
echo '<th  align="center" ><b>Activity period</th>
      <th  align="center" ><b>Created at</th>

</tr><tr>';

if(isset($_POST['submit']))
{
      $total_time = $S_Data." - ".$E_Data;
      echo '<td  align="center">'.$total_time.'</td>';
}

echo '<td  align="center">'.$created_at.'</td>';
echo "</tr>\n";

echo '<table id="datatable" class="mytable responstable" style="border-collapse:collapse;margin:5px;" border="2" bordercolor="#CCCCCC" cellpadding="0" cellspacing="collapse" align="center" width="100%"><tr style="background-color:#167F92;color:white;">';
echo '<th  align="center"><b>QUEUED</th>
      <th  align="center"><b>DISTRIBUTED</th>
      <th  align="center"><b>ABANDONED</th>
</tr>';

echo ' </div>';

if(isset($_POST['submit']))
{
   if(!empty($_POST['start_date']) && !empty($_POST['end_date']) && !empty($_POST['qselect']))
   {
      call_details($conn,$S_Data,$E_Data,$qselect);
   }
  
}

// if () 
// {
//       # code...
// }
              
echo "</table>\n";

mysqli_close($conn);

?>

