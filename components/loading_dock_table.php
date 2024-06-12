<?php

$query = "SELECT * FROM loadingDock d, warehouseSection w
where w.id = d.warehouseSectionId;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Warehouse Section</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Type</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Height</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Width</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['type'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['height'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['width'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>