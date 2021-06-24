<?php
date_default_timezone_set('asia/kolkata');
$timezone = date_default_timezone_get();
$date=date('Y/m/d');
$dt = strtotime("$date");
$new_date = date("Y-m-d", strtotime("+1 month", $dt))."\n";


if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];
    // search in all table columns
    // using concat mysql function
    $query = "SELECT * FROM event WHERE DATE BETWEEN '$date' AND '$new_date' && CONCAT(`E_NO`, `NAME_OF_EVENT`,`VENUE`,`BRANCH`,`REGISTRATION`) LIKE '%".$valueToSearch."%'";
    $search_result = filterTable($query);
    
}
 else {
    $query = "SELECT * FROM EVENT WHERE DATE>='$date'";

    $search_result = filterTable($query);
}

// function to connect and execute the query
function filterTable($query)
{
    $connect = mysqli_connect("localhost", "root", "", "projectnew");
    $filter_Result = mysqli_query($connect, $query);
    return $filter_Result;
}

?>

<!DOCTYPE html>
<html>
    <head>
        <title>PHP HTML TABLE DATA SEARCH</title>
        <style>
            table,tr,th,td
            {
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        
        <form action="letstry.php" method="post">
            <input type="text" name="valueToSearch" placeholder="Value To Search"><br><br>
            <input type="submit" name="search" value="Filter"><br><br>
            
            <table>
                <tr>
                    <th>e_no</th>
                    <th>name</th>
                    <th>date</th>
                    <th>time</th>
					<th>venue</th>
					<th>branch</th>
					<th>registration</th>
                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                    <td><?php echo $row['E_NO'];?></td>
                    <td><?php echo $row['NAME_OF_EVENT'];?></td>
                    <td><?php echo $row['DATE'];?></td>
                    <td><?php echo $row['TIME'];?></td>
					<td><?php echo $row['VENUE'];?></td>
					<td><?php echo $row['BRANCH'];?></td>
					<td><?php echo $row['REGISTRATION'];?></td>
                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
    </body>
</html>