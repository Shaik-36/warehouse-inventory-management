<?php
$routeQuery = "SELECT * FROM route;";
$routeResults = $conn->query($routeQuery);

$currentTruckQuery = "Select * from warehouseTruck where id = " . htmlspecialchars($_GET['warehouseTruckId']);
$currentTruckResults = $conn->query($currentTruckQuery);
$currentWarehouseTruck = $currentTruckResults->fetch_assoc();

?>

<a href="./warehouse_truck.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Warehouse Truck Page</button>
</a>
<h1 class="text-3xl font-bold ">Assign Truck To Routes</h1>
<div class="flex items-center mt-5">
    <h2 class="text-xl font-bold mr-2">Selected Warehouse Truck License Plate: </h2>
    <h2 class="text-xl"><?php  echo $currentWarehouseTruck['licensePlate']; ?></h2>
</div>

<form action="" class="my-5" method="POST">
    <input type="hidden" name="assignTruckToRoutes" value="GO"/>
    <input type="hidden" name="warehouseTruckId" value="<?php echo htmlspecialchars($_GET['warehouseTruckId']) ?>"/>
    <div class="flex">
        <div class="mr-2">
            <select required multiple name="routeIds[]" id="routeIds" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($route = $routeResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$route['id'] . '">' . $route['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div class="">
            <label for="assignmentDate">Assignment Date</label><br>
            <input type="date" required id="assignmentDate" name="assignmentDate"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2"
                   placeholder="Assignment Date" \>
        </div>
    </div>
    <button type="submit" class="mt-5 bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
