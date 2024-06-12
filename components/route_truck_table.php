<?php

$truckRouteAssignmentQuery = "SELECT *, tra.id as truckRouteAssignmentId FROM truckrouteassignment tra, warehousetruck t, route r
where tra.routeId = r.id and tra.truckId = t.id order by truckRouteAssignmentId;";
$truckRouteAssignmentResults = $conn->query($truckRouteAssignmentQuery);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Truck License Plate</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Route Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Assignment Date</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Actions</th>";
echo "</tr>";
while ($row = $truckRouteAssignmentResults->fetch_assoc()) {
    echo "<tr id='truck_route_assignment_row_id=" . $row['truckRouteAssignmentId'] . "'>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['licensePlate'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['assignmentDate'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded py-2'>
 <form method='POST'>
 <input type='hidden' name='deleteTruckRouteAssignment'/>
 <input name='truckAssignmentId' id='truckAssignmentId' type='hidden' value='" .  $row['truckRouteAssignmentId'] ."'>
  <button type='submit' class='bg-red-500 px-5 rounded py-2 font-bold text-white'>Delete</button>
  </form> </td>";
    echo "</tr>";
}
echo "</table>";


include '../components/handle_form_submit.php';
?>
