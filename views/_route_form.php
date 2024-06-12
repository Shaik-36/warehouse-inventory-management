<a href="./route.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Route Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Route</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addRoute" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="name">Name</label><br>
            <input required id="name" name="name"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Name" \>
        </div>
        <div class="mr-2">
            <label for="destinationPostCode">Destination Post Code</label><br>
            <input type="text" required id="destinationPostCode" name="destinationPostCode"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2"
                   placeholder="Destination Post Code" \>
        </div>
    </div>
    <div class="flex">
        <div>
            <label for="miles">Miles</label><br>
            <input required id="miles" name="miles"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="number"
                   placeholder="Miles" \>
        </div>
    </div>
    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>
    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
