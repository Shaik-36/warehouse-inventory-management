<?php

$query = "SELECT * FROM itemCode;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Year</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Manufacturer</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['year'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['manufacturer'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>