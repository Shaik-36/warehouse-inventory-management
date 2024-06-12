<?php
$staffQuery = "SELECT * FROM staff;";
$loadingDockQuery = "SELECT * FROM loadingDock;";
$staffMemberResults = $conn->query($staffQuery);
$loadingDockResults = $conn->query($loadingDockQuery);
?>


<a href="./warehouse_truck.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Warehouse Truck Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Warehouse Truck</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addWarehouseTruck" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="licensePlate">License Plate</label><br>
            <input required id="licensePlate" name="licensePlate"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="License Plate" \>
        </div>
        <div>
            <label for="year">Year</label><br>
            <input required id="year" name="year"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="number"
                   placeholder="Year" \><br>
        </div>
    </div>
    <div class="flex">
        <div>
            <label for="brand">Brand</label><br>
            <input required id="brand" name="brand"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Brand" \><br>
        </div>
        <div>
            <label for="driverId">Driver</label><br>
            <select name="driverId" id="driverId" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded ml-2">
                <?php
                while ($staffMember = $staffMemberResults->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$staffMember['id'] . '">' . $staffMember['firstName'] . ' ' . $staffMember['lastName'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="flex mb-2">
        <div>
            <label for="loadingDockId">Loading Dock</label><br>
            <select name="loadingDockId" id="loadingDockId" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($loadingDock = $loadingDockResults->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$loadingDock['id'] . '">' . 'Dock Id: '. $loadingDock['id'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>