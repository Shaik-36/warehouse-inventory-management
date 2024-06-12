<?php
$warehouseSectionQuery = "SELECT * FROM warehouseSection;";
$warehouseSectionResults = $conn->query($warehouseSectionQuery);

$currentStaffQuery = "Select * from staff where id = " . htmlspecialchars($_GET['staffId']);
$currentStaffResults = $conn->query($currentStaffQuery);
$currentStaff = $currentStaffResults->fetch_assoc();

?>

<a href="./staff.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Staff Page</button>
</a>
<h1 class="text-3xl font-bold ">Assign Staff To Warehouse Sections</h1>

<div class="flex items-center mt-5">
    <h2 class="text-xl font-bold mr-2">Selected Staff Member: </h2>
    <h2 class="text-xl"><?php  echo $currentStaff['firstName']; ?> <?php echo $currentStaff['lastName']; ?></h2>
</div>



<form action="" class="my-5" method="POST">
    <input type="hidden" name="assignStaffToWarehouseSection" value="GO"/>
    <input type="hidden" name="staffId" value="<?php echo htmlspecialchars($_GET['staffId']) ?>"/>
    <div class="flex">
        <div>
            <label for="startDate">Start Date</label><br>
            <input type="date" required id="startDate" name="startDate"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2"
                   placeholder="Start Date" \>
        </div>
        <div class="ml-2">
            <label for="datePurchased">End Date</label><br>
            <input type="date" required id="endDate" name="endDate"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2"
                   placeholder="End Date" \>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <select required multiple name="warehouseSectionIds[]" id="warehouseSectionIds" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($warehouseSection = $warehouseSectionResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$warehouseSection['id'] . '">' . $warehouseSection['name'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <button type="submit" class="mt-5 bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
