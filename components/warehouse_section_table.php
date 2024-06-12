<?php

$query = "SELECT * FROM `warehousesection` ws, staff s
where ws.supervisorId = s.id;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Description</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Supervisor Id</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Supervisor First Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Supervisor Last Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Supervisor Email</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['description'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['supervisorId'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['firstName'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['lastName'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['emailAddress'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>