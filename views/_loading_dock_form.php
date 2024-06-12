<?php

$warehouseSectionQuery = "SELECT * FROM warehouseSection;";

$warehouseSectionResults = $conn->query($warehouseSectionQuery);
?>


<a href="./loading_dock.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Loading Dock Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Loading Dock</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addLoadingDock" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="height">Height</label><br>
            <input type="number" required id="height" name="height"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Height" \>
        </div>
        <div class="mr-2">
            <label for="width">Width</label><br>
            <input type="number" required id="width" name="width"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Width" \>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="warehouseSectionId">Warehouse Section</label><br>
            <select name="warehouseSectionId" id="warehouseSectionId" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($warehouseSection = $warehouseSectionResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$warehouseSection['id'] . '">' . $warehouseSection['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="type">Type</label><br>
            <input required id="type" name="type"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Type" \>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
