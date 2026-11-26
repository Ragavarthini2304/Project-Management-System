
<?php
$conn=new mysqli("localhost","root","","projectdb");

$tid=$_POST['task_id'];
$pid=$_POST['project_id'];
$eid=$_POST['emp_id'];
$desc=$_POST['description'];
$due=$_POST['due'];
$status=$_POST['status'];

if(isset($_POST['insert'])){
$conn->query("INSERT INTO Tasks VALUES('$tid','$pid','$eid','$desc','$due','$status')");
echo "Inserted";
}

if(isset($_POST['update'])){
$conn->query("UPDATE Tasks SET description='$desc',due_date='$due',status='$status' WHERE task_id='$tid'");
echo "Updated";
}

if(isset($_POST['delete'])){
$conn->query("DELETE FROM Tasks WHERE task_id='$tid'");
echo "Deleted";
}

if(isset($_POST['view'])){
$res=$conn->query("SELECT * FROM Tasks");
while($r=$res->fetch_assoc()){
echo $r['task_id']." ".$r['description']." ".$r['status']."<br>";
}
}

$conn->close();
?>