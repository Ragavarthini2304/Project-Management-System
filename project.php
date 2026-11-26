
<?php
$conn = new mysqli("localhost","root","","projectdb");

$id=$_POST['project_id'];
$name=$_POST['name'];
$start=$_POST['start'];
$end=$_POST['end'];
$status=$_POST['status'];

if(isset($_POST['insert'])){
$conn->query("INSERT INTO Projects VALUES('$id','$name','$start','$end','$status')");
echo "Inserted";
}

if(isset($_POST['update'])){
$conn->query("UPDATE Projects SET name='$name',start_date='$start',end_date='$end',status='$status' WHERE project_id='$id'");
echo "Updated";
}

if(isset($_POST['delete'])){
$conn->query("DELETE FROM Projects WHERE project_id='$id'");
echo "Deleted";
}

if(isset($_POST['view'])){
$res=$conn->query("SELECT * FROM Projects");
while($r=$res->fetch_assoc()){
echo $r['project_id']." ".$r['name']." ".$r['status']."<br>";
}
}

$conn->close();
?>