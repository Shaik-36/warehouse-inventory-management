
<a href="./staff.php">
    <button class="bg-sky-500 px-5 rounded py-2 font-bold text-white my-5">Back To Staff Page</button>
</a>
<h1 class="text-3xl font-bold ">Add Staff Member</h1>
<form action="" class="my-5" method="POST">
    <input type="hidden" name="addStaffMember" value="GO"/>
    <div class="flex">
        <div class="mr-2">
            <label for="firstName">First Name</label><br>
            <input required id="firstName" name="firstName"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="First Name" \>
        </div>
        <div>
            <label for="lastName">Last Name</label><br>
            <input required id="lastName" name="lastName"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Last Name" \><br>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="position">Position</label><br>
            <input required id="position" name="position"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Position" \><br>
        </div>
        <div>
            <label for="salary">Salary</label><br>
            <input type="number" required id="salary" name="salary"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Salary" \><br>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="street">Street</label><br>
            <input required id="street" name="street"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Street" \><br>
        </div>
        <div>
            <label for="city">City</label><br>
            <input required id="city" name="city" class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2"
                   type="text" placeholder="City" \><br>
        </div>
    </div>

    <div class="flex">
        <div class="mr-2">
            <label for="postCode">Post Code</label><br>
            <input required id="postCode" name="postCode"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Post Code" \><br>
        </div>
        <div>
            <label for="emailAddress">Email Address</label><br>
            <input required id="emailAddress" type="email" name="emailAddress"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Email Address" \><br>
        </div>
    </div>
    <div class="flex">
        <div class="mr-2">
            <label for="phoneNumber">Phone Number</label><br>
            <input type="tel" id="phoneNumber" name="phoneNumber"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Phone Number" \><br>
        </div>
        <div>
            <label for="dateHired">Date Hired</label><br>
            <input required id="dateHired" type="date" name="dateHired"
                   class="border-2 border-sky-500 rounded p-1 hover:border-sky-400 mb-2" type="text"
                   placeholder="Date Hired" \><br>
        </div>
    </div>

    <button type="submit" class="bg-sky-500 px-5 rounded py-2 font-bold text-white">Submit</button>

    <?php
    include '../components/handle_form_submit.php';
    ?>
</form>
