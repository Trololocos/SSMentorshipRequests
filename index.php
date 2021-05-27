<html lang="en">
<head>
  <meta charset="utf-8">

  <title>SS mentor requests</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
    <table id="requests">
        <tr>
            <th>Date added </th>
            <th>Discord Username</th>
            <th>Rank</th>
            <th>Region</th>
            <th>Op.gg</th>
            <th>Role</th>
            <th>Champion</th>
            <th>Timezone</th>
            <th>Additional information</th>
            <th>Status</th>
            <th>Mentor</th>
            <th>Date Accepted</th>
            <th>Date Completed</th>
            <th>Remarks</th>
        </tr>
        
        <?php
    function add_row($row_array){ //st
        foreach($row_array as $cell)
        {
        //Add cell
        echo "<td>".$cell."</td>";
        }
    }
    //They should be outside of the source code in a config file for later implementation
    $DBpass = "root";
    $DBuser = "root";
    $DBname = "SSMR";
    $conn = new mysqli("localhost:3306", $DBuser, $DBpass, $DBname);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
    
    ?> 
</table>
</body>
</html>