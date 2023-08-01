<h1>Pull Data from DB</h1>
    <?php
$servername = "localhost";
$username = "malarina";
$password = "9OgUbxpfeM4CWuA";
$dbname = "malarina";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM users";
$result = mysqli_query($conn, $sql);
echo '<table class="table table-hover table-striped">';
echo '<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
</tr>';
if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo '<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['email'].'</td>';
    echo '</tr>';
  }
} else {
  echo "0 results";
}
echo '</table>';
mysqli_close($conn);

?>
  </div>
    </div>
</div>
</body>
</html>
