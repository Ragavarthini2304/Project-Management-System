
<?php

$conn = new mysqli("localhost","root","","projectdb");


$id = $_POST['emp_id'];

$name = $_POST['name'];

$role = $_POST['role'];

$dept = $_POST['department'];


if(isset($_POST['insert'])){

$sql="INSERT INTO Employees VALUES('$id','$name','$role','$dept')";

$conn->query($sql);

echo "Inserted Successfully";

}


if(isset($_POST['update'])){

$sql="UPDATE Employees SET name='$name', role='$role', department='$dept' WHERE emp_id='$id'";

$conn->query($sql);

echo "Updated Successfully";

}


if(isset($_POST['delete'])){

$sql="DELETE FROM Employees WHERE emp_id='$id'";

$conn->query($sql);

echo "Deleted Successfully";

}

if(isset($_POST['view'])){
    $result = $conn->query("SELECT * FROM Employees");
    
    echo "<div class='view-container'>";
    echo "<h3>Employee List</h3>";
    echo "<table>";
    echo "<thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Role</th>
                <th>Department</th>
            </tr>
          </thead>";
    echo "<tbody>";
    
    while($row = $result->fetch_assoc()){
        echo "<tr>
                <td>{$row['emp_id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['role']}</td>
                <td>{$row['department']}</td>
              </tr>";
    }
    
    echo "</tbody></table>";
    echo "</div>";
}

$conn->close();

?>