<?php

$query = "SELECT *, c.name as itemCodeName, w.name as warehouseSectionName FROM item i, itemCode c, itemStatus s, warehouseSection w
where i.itemCode = c.id and i.itemStatus = s.id and i.warehouseSection = w.id;";

$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Status</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>BarCode</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Is Sold</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Date Purchased</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Item Value</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Year</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Manufacturer</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['itemCodeName'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['status'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['barcode'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . (boolval(0) ? 'true' : 'false') . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['datePurchased'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['itemValue'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['year'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['manufacturer'] . "</td>";
    echo "</tr>";
}
echo "</table>";

?>