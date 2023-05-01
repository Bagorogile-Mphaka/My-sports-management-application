<!DOCTYPE html>
<html>
    <title>Competitions</title>

    <h1><?php echo "Competitions"; ?>
</h1>
<body>


<?php $servername = "localhost";
$username = "root";
$dbname = "sportsmanagement";
$conn = new mysqli($servername, $username, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//create table
$sql="CREATE TABLE COMPETITIONS ( ID INT(14) NOT NULL AUTO_INCREMENT PRIMARY KEY, 
Competition varchar (50) NOT NULL, 
Actions varchar(50) NOT NULL)";
$conn->query($sql);


//insert data
$sql="INSERT INTO COMPETITIONS (Competition, Actions) VALUES
    ('Premier soccer league',),
    ('MTN 8',)";

    //display the table
$sql = "SELECT * FROM COMPETITIONS";
$result = $conn->query($sql);

if($result-> num_rows > 0){
<table border="1 px solid black">
     <tr>
    <th>ID</th>
        <th>Competition</th>
        <th>Actions</th>
    </tr>

    while($row=$result -> fetch_assoc()){
        $ID= $row["ID"];
        $Competition= $row["Competition"];
        $Actions= $row["Actions"];
    <tr>
        <td>1</td>
           <td> Premier Soccer League</td>
    
        <td>
            <a href="edit.php?id=$id">Edit</a> 
        <a href="delete.php?id=$id" onClick = 'return confirm(\"Are you sure you want to delete this  item?"\)'>Delete</a>
        </td> 
    </tr>}

</table>}

else{"no items found"}
<form>
    <label label for="addcompetitions">Add competition</label>
    <input type="text" id="addcompetion" name="addcompetition">



</body>



</html>

$conn->close ();
