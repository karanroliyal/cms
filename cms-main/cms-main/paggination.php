<?php

include("dbcon.php");

$limit=3;
$output="";
$page="";
if(isset($_POST['page_no']))
{
    $page=$_POST['page_no'];
}
else{
    $page=1;
}

$offset=($page-1)*$limit;

$sql = "select*from user_master limit {$offset},{$limit}";
$result = mysqli_query($con, $sql);
if ($result->num_rows > 0) {
    if ($result->num_rows > 0) {

        while ($row = $result->fetch_assoc()) {
            $output.= "<tr><td>{$row['id']}</td><td>{$row['create_by']}</td><td>{$row['phone']}</td><td>{$row['email']}</td>
    <td><button  class='btn btn-outline-primary edit-btn p-0' data-id={$row['id']} >Edit</button></td><td><button  class=' btn btn-outline-danger p-0 delete-btn' data-id={$row['id']} >delete</button></td></tr>";
        }
    }
}

  $sql1="select * from user_master";
  
  $records=mysqli_query($con, $sql1);
  $total_records=mysqli_num_rows($records);
   
  $total_page=ceil($total_records/$limit);
  $output .="<div class='page'>";
  for($i=1;$i<=$total_page;$i++){
  $output .="<a id='{$i}'>{$i}</a>";                                 
  }

$output.="</div>";
echo $output;

?>