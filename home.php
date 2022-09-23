<?php
   include_once'connect with database/connect.php';
?>
<html>
<head>
     <title>Bug tracking sytem</title>
tr:hover {background-color: #D6EEEE;}


</head>
<body>
<table>
    <tr>
        <th>idBug</th>
        <th>idBugseverity</th>
        <th>idBugPriority</th>
        <th>idBugstatus</th>
        <th>idAccount</th>
        <th>date_reported</th>
        <th>summary</th>
        <th>description</th>
        <th>resolution</th>
        <th>hours</th>
        <th>reposrted_by</th>
        <th>assigned_to</th>
        <th>verified_by</th></tr>
<?php
 $sql="SELECT * FROM Bug;";
 $result=mysqli_query($conn,$sql);
 $resultcheck=mysqli_num_rows($result);
 if($resultcheck->num_rows>0){
    while($row=mysqli>fetch_assoc($result)){
        echo "<tr><td>".$row["idBug"]."<tr><td>".$row["idBugSeverity"]."<tr><td>".$row["idBugPriority"]."<tr><td>".$row["idBugstatus"]."<tr><td>".$row["idAccount"]."<tr><td>".$row["date_reported"]."<tr><td>".$row["summary"]."<tr><td>".$row["description"]."<tr><td>".$row["resolution"]."<tr><td>".$row["hours"]."<tr><td>".$row["reported_by"]."<tr><td>".$row["assigned_to"]."<tr><td>".$row["verified_by"]."</td></tr>";
    }
 }else{ echo "noresult";}
 $conn->close();
?>

</body>
</html>