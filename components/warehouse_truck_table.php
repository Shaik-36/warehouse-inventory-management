<?php

$query = "SELECT *, t.id as warehouseTruckId FROM warehouseTruck t, warehouseSection s, loadingDock d
where t.loadingDockId = d.id and d.warehouseSectionId = s.id;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>License Plate</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Year</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Brand</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Loading Dock Id</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Loading Dock Type</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Loading Warehouse Section</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Actions</th>";

echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['licensePlate'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['year'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['brand'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['loadingDockId'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['type'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded py-4'>
        <a href='truck_route_assignments.php?warehouseTruckId=" . $row['warehouseTruckId'] ."' class='bg-blue-500 px-5 rounded py-2 font-bold text-white'>Assignments</a>
    </td>";
    echo "</tr>";
}
echo "</table>";

?>