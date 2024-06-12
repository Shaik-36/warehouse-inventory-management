

<a href="../index.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Home Page</button>
</a>
<h1 class="text-3xl font-bold ">Warehouse Truck</h1>
<div class="my-5">
    <?php
    include '../components/warehouse_truck_table.php';
    ?>
    <a href="warehouse_truck_form.php">
        <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Add Warehouse Truck</button>
    </a>
    <div class="mt-5">
        <h1 class="text-xl font-bold ">Trucks Assigned To Each Route</h1>
        <?php
        include '../components/route_truck_table.php';
        ?>
    </div>
</div>

