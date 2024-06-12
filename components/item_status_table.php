<?php

$query = "SELECT * FROM itemStatus;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Id</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Status</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 px-3 border-sky-600 border-2 rounded'>" . $row['id'] . "</td>";
    echo "<td class='px-3 px-3 border-sky-600 border-2 rounded'>" . $row['status'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>