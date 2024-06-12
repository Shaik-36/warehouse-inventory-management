<a href="./item_code.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Item Code Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Item Code</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addItemCode" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="name">Name</label><br>
            <input required id="name" name="name"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Name" \>
        </div>
        <div class="mr-2">
            <label for="manufacturer">Manufacturer</label><br>
            <input required id="manufacturer" name="manufacturer"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Manufacturer" \>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="year">Year</label><br>
            <input type="number" required id="year" name="year"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Year" \>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>