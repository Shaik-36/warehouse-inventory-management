<?php
$query = "SELECT * FROM staff;";
$staffMemberResults = $conn->query($query);
?>


<a href="./warehouse_section.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Warehouse Sections Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Warehouse Section</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addWarehouseSection" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="name">Name</label><br>
            <input required id="name" name="name"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Name" \>
        </div>
        <div>
            <label for="description">Description</label><br>
            <input required id="description" name="description"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Description" \><br>
        </div>
        <div>
            <label for="supervisorId">Supervisor</label><br>
            <select name="supervisorId" id="supervisorId" class="border-sky-500 border-2 p-1 hover:border-sky-400 rounded ml-2">
                <?php
                while ($staffMember = $staffMemberResults->fetch_assoc()) {
                   // echo $staffMember;
                    echo '<option value="'.$staffMember['id'] . '">' . $staffMember['firstName'] . ' ' . $staffMember['lastName'] . "</option>";
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