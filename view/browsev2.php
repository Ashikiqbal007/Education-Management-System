<!DOCTYPE html>
<html lang="en">
<head>
  <title>Browse Courses</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="page-header">
     <h2>Browse courses</h2>

<div class="bs-docs-example">
    <ul id="myTab" class="nav nav-tabs">
        <li class="active"><a href="#cse" data-toggle="tab">CSE Department</a>
        </li>
        <li><a href="#eee" data-toggle="tab">EEE Department</a>
        </li>
        <li><a href="#other" data-toggle="tab">Other Departments</a>
        </li>
    </ul>
    
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade in active" id="cse">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Class Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
    if($row["coursetype"] === "CSE"){
        $name = $row['name'];
        echo "<tr>";
        echo "<td>" . ''.$name.'' . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['teacher'] . "</td>";
        echo "<td>" . $row['appointment'] . "</td>";
        echo "<tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
        
        <div class="tab-pane fade" id="eee">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Class Time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
    if($row["coursetype"] === "EEE"){
        $name = $row['name'];
        echo "<tr>";
        echo "<td>" . ''.$name.'' . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['teacher'] . "</td>";
        echo "<td>" . $row['appointment'] . "</td>";
        echo "<tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
        <div class="tab-pane fade" id="other">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Course Name</th>
                        <th>Description</th>
                        <th>Teacher</th>
                        <th>Class time</th>
                    </tr>
                </thead>
                <tbody>
                <?php
$conn = mysqli_connect("localhost", "root", "", "testsite");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, description, teacher, coursetype, appointment FROM course";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
while($row = mysqli_fetch_array($result)) {
    if($row["coursetype"] === "OTH"){
        $name = $row['name'];
        echo "<tr>";
        echo "<td>" . ''.$name.'' . "</td>";
        echo "<td>" . $row['description'] . "</td>";
        echo "<td>" . $row['teacher'] . "</td>";
        echo "<td>" . $row['appointment'] . "</td>";
        echo "<tr>";
    }
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
                </tbody>
            </table>
        </div>
    </div>
</div>

</body>
</html>
