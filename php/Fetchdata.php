<?php
include("dbconn.php");

$db= $conn;
$tableName="institutes";
$columns= ['Sno', 'Institute','State','Type','Affiliation', 'Program','Level','Course','Acredtill','Intake'];
$fetchData = fetch_data($db, $tableName, $columns);

function fetch_data($db, $tableName, $columns){
 if(empty($db)){
  $msg= "Database connection error";
 }elseif (empty($columns) || !is_array($columns)) {
  $msg="columns Name must be defined in an indexed array";
 }elseif(empty($tableName)){
   $msg= "Table Name is empty";
}else{

$columnName = implode(", ", $columns);

$query = "SELECT ".$columnName." FROM $tableName "."where Course = 'PHARMACY'";
$result = $db->query($query);

if($result== true){ 
 if ($result->num_rows > 0) {
    $row= mysqli_fetch_all($result, MYSQLI_ASSOC);
    $msg= $row;
 } else {
    $msg= "No Data Found"; 
 }
}else{
  $msg= mysqli_error($db);
}
}
return $msg;
}
?>

<!DOCTYPE html>
<html>
<head>
  <style>
.styled-table {
    border-collapse: collapse;
    margin: 25px 0;
    font-size: 0.9em;
    font-family: sans-serif;
    min-width: 400px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}


.styled-table thead tr {
    background-color: #009879;
    color: #ffffff;
    text-align: left;
}

.styled-table th,
.styled-table td {
    padding: 12px 15px;
}

.styled-table tbody tr {
    border-bottom: 1px solid #dddddd;
}

.styled-table tbody tr:nth-of-type(even) {
    background-color: #f3f3f3;
}

.styled-table tbody tr:last-of-type {
    border-bottom: 2px solid #009879;
}

.styled-table tbody tr.active-row {
    font-weight: bold;
    color: #009879;
}
    </style>
</head>
<body>
<div class="container">
 <div class="row">
   <div class="col-sm-8">
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table  class="styled-table">
       <thead><tr><th>S.N</th>
         <th>Institute</th>
         <th>State</th>
         <th>Type</th>
         <th>Affiliation</th>
         <th>Program</th>
         <th>Level</th>
         <th>Course</th>
         <th>Acredtill</th>
         <th>Intake</th>

    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      <td><?php echo $sn; ?></td>
      <td><?php echo $data['Institute']??''; ?></td>
      <td><?php echo $data['State']??''; ?></td>
      <td><?php echo $data['Type']??''; ?></td>
      <td><?php echo $data['Affiliation']??''; ?></td>
      <td><?php echo $data['Program']??''; ?></td>
      <td><?php echo $data['Level']??''; ?></td>
      <td><?php echo $data['Course']??''; ?></td>  
      <td><?php echo $data['Acredtill']??''; ?></td>  
      <td><?php echo $data['Intake']??''; ?></td>  


     </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html>