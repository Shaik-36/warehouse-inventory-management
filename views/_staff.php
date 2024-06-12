

<a href="../index.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Home Page</button>
</a>
<h1 class="text-3xl font-bold ">Staff Members</h1>
<div class="my-5">
    <?php
    include '../components/staff_table.php';
    ?>
    <a href="staff_form.php">
        <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Add Staff Member</button>
    </a>
    <div class="mt-5">
        <h1 class="text-xl font-bold ">Staff Members Assigned To Each Warehouse Section</h1>
        <?php
        include '../components/staff_warehouse_section_table.php';
        ?>
    </div>
</div>

