<?php

$codeQuery = "SELECT * FROM itemCode;";
$statusQuery = "SELECT * FROM itemStatus;";
$warehouseSectionQuery = "SELECT * FROM warehouseSection;";

$itemCodeResults = $conn->query($codeQuery);
$itemStatusResults = $conn->query($statusQuery);
$warehouseSectionResults = $conn->query($warehouseSectionQuery);
?>


<a href="./item.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Item Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Item</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addItem" value="GO"/>
    <div class="flex">
        <div>
            <label for="itemCode">Item Code</label><br>
            <select name="itemCode" id="itemCode" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($itemCode = $itemCodeResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$itemCode['id'] . '">' . $itemCode['name'] . ' ' . $itemCode['manufacturer'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="itemStatus">Item Status</label><br>
            <select name="itemStatus" id="itemStatus" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded ml-2">
                <?php
                while ($itemStatus = $itemStatusResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$itemStatus['id'] . '">' . $itemStatus['status'] . "</option>";
                }
                ?>
            </select>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="itemValue">Item Value</label><br>
            <input type="number" required id="itemValue" name="itemValue"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Item Value" \>
        </div>
        <div>
            <label for="datePurchased">Date Purchased</label><br>
            <input type="date" required id="datePurchased" name="datePurchased"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Date Purchased" \>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="warehouseSection">Warehouse Section</label><br>
            <select name="warehouseSection" id="warehouseSection" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded">
                <?php
                while ($warehouseSection = $warehouseSectionResults ->fetch_assoc()) {
                    // echo $staffMember;
                    echo '<option value="'.$warehouseSection['id'] . '">' . $warehouseSection['name'] . "</option>";
                }
                ?>
            </select>
        </div>
        <div>
            <label for="barcode">Bar Code</label><br>
            <input required id="barcode" name="barcode"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="number"
                   placeholder="Bar Code" \>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
