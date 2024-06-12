<?php

$staffWarehouseSectionQuery = "select *, swa.id as staffWarehouseSectionAssignmentId from staff s, warehousesection w, staffwarehousesectionassignment swa
where swa.staffId = s.id and swa.warehouseSectionId = w.id order by staffWarehouseSectionAssignmentId;";

$staffWarehouseSectionResults = $conn->query($staffWarehouseSectionQuery);

//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>First Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Last Name</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Email Address</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Warehouse Section</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Start Date</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>End Date</th>";
echo "<th class='px-3 border-sky-600 border-2 rounded'>Actions</th>";
echo "</tr>";
while ($row = $staffWarehouseSectionResults->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['firstName'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['lastName'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['emailAddress'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['name'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['startDate'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['endDate'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded py-2'>
 <form method='POST'>
 <input type='hidden' name='deleteStaffWarehouseSectionAssignment'/>
 <input name='staffWarehouseSectionAssignmentId' id='staffWarehouseSectionAssignmentId' type='hidden' value='" .  $row['staffWarehouseSectionAssignmentId'] ."'>
  <button type='submit' class='bg-red-500 px-5 rounded py-2 font-bold text-white'>Delete</button>
  </form> </td>";
    echo "</tr>";
}
echo "</table>";


include '../components/handle_form_submit.php';
?>
