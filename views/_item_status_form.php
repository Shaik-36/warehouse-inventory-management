<a href="./item_status.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Item Status Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Item Status</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addItemStatus" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="status">Status</label><br>
            <input required id="status" name="status"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Status" \>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>