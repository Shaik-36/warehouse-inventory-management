<?php

$query = "SELECT * FROM staff;";
$results = $conn->query($query);
//var_dump($results);
echo "<table class='my-5 border-collapse table-auto border-spacing-2 border border-slate-500'>";
echo "<tr>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>First Name</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Last Name</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>position</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Salary</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Street</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>City</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Post Code</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Email Address</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Phone Number</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Date Hired</th>";
echo "<th class='px-3 px-3 border-sky-600 border-2 rounded'>Actions</th>";
echo "</tr>";
while ($row = $results->fetch_assoc()) {
    echo "<tr>";
    echo "<td class='px-3 px-3 border-sky-600 border-2 rounded'>" . $row['firstName'] . "</td>";
    echo "<td class='px-3 px-3 border-sky-600 border-2 rounded'>" . $row['lastName'] . "</td>";
    echo "<td class='px-3 px-3 border-sky-600 border-2 rounded'>" . $row['position'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['salary'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['street'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['city'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['postCode'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['emailAddress'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['phoneNumber'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded'>" . $row['dateHired'] . "</td>";
    echo "<td class='px-3 border-sky-600 border-2 rounded py-4'>
        <a href='staff_assignments.php?staffId=" . $row['id'] ."' class='bg-blue-500 px-5 rounded py-2 font-bold text-white'>Assignments</a>
    </td>";
    echo "</tr>";
}
echo "</table>";

?>