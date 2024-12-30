<?php

include("../dbcon.php");

$limit ="";
$output = "";
$page = "";
$search = "";
$sort = "";

if (isset($_POST['page_no'])) {
    $page = $_POST['page_no'];
   
} else {
    $page = 1;
}

if (isset($_POST['search'])) {
    $search = $_POST['search'];
} else {
    $search = "";
}

//  echo $_POST['colname'];
//  echo $_POST['order'];
if (isset($_POST['colname'])) {

    
if(empty($_POST['colname'])){
    $sort="";
}
else{
    $sort = "order by {$_POST['colname']} {$_POST['order']}";
}

}


if (isset($_POST['row'])) {
    $limit = $_POST['row'];
    
}
else{
    $limit = 2;
}

$sql1 = "select * from user_master where  id  like '%{$search}%' or create_by LIKE '%{$search}%' or phone like '%{$search}%' or email like '%{$search}%' '{$sort}' ";

$records = mysqli_query($con, $sql1);

$total_records = mysqli_num_rows($records);

$total_page = ceil($total_records / $limit);

$output .= "<div class='page'>";




//total pages

for ($i = 1; $i <= $total_page; $i++) {
    if ($i == $page) {
        $class = "active";
    } else {
        $class = "";
    }
    $output .= "<li class='{$class}' id='{$i}'>{$i}</li>";
}

$output .= "</div>";




$output .= "<table class='table table-bordered'>

 <thead>
<tr>
<th>S No.</th>
<th id='id'><img class='short' id='id' src='../images/up-down.svg' >ID</th>
<th id='create_by'><img class='short' id='create_by' src='../images/up-down.svg' >Name</th>
<th id='phone'><img class='short' id='create_by' src='../images/up-down.svg' >Phone</th>
 <th id='email'><img class='short'  id='email' src='../images/up-down.svg'>Email</th>
 <th>Update</th>
 <th>Delete</th>
</tr>
</thead>
<tbody id='tbody'>";

$offset = ($page - 1) * $limit;

$sql = "select*from user_master  where  id  like '%{$search}%' or create_by LIKE '%{$search}%' or phone like '%{$search}%' or email like '%{$search}%'  $sort limit {$offset},{$limit}";

$result = mysqli_query($con, $sql);


if ($result->num_rows > 0) {
    if ($result->num_rows > 0) {
        $offset += 1;
        while ($row = $result->fetch_assoc()) {
            $output .= "<tr><td>{$offset}</td><td>{$row['id']}</td><td>{$row['create_by']}</td><td>{$row['phone']}</td><td>{$row['email']}</td>
    <td><button  class='btn  edit-btn p-0' data-id={$row['id']} ><img src='../images/edit.svg' ></button></td><td><button  class=' btn  p-0 delete-btn' data-id={$row['id']} ><img src='../images/trash.svg' ></button></td></tr>";
            $offset++;
        }
    }
}

$output .= "</tbody></table>";
echo $output;
