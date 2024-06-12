<?php


function createStaffMember($postObject) {
    global $conn;

    $firstName = $postObject['firstName'];
    $lastName = $postObject['lastName'];
    $position = $postObject['position'];
    $salary = $postObject['salary'];
    $street = $postObject['street'];
    $city = $postObject['city'];
    $postCode = $postObject['postCode'];
    $emailAddress = $postObject['emailAddress'];
    $phoneNumber = $postObject['phoneNumber'];
    $dateHired = $postObject['dateHired'];

    $query = 'insert into Staff(firstName,
        lastName,
        position,
        salary,
        street,
        city,
        postCode,
        emailAddress,
        phoneNumber,
        dateHired)
    values (' .'"' . $firstName .'"' .',' .'
         ' . '"' . $lastName .'"' .',' .'
         ' . '"' .$position .'"' .',' .'
         ' . $salary .',' .'
         ' . '"' .$street .'"' .',' .'
         ' . '"' .$city .'"' .',' .'
         ' . '"' .$postCode .'"' .',' .'
         ' . '"' .$emailAddress .'"' .',' .'
         ' . $phoneNumber .',' .'
         ' . '"' .$dateHired .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Staff Member Added Successfully";
    } else {
        echo "Failed to add Staff member! Error displayed below";
        var_dump($results);
    }
}

function createWarehouseSection($postObject) {
    global $conn;

    $name = $postObject['name'];
    $description = $postObject['description'];
    $supervisorId = $postObject['supervisorId'];

    $query = 'insert into WarehouseSection(
        name,
        description,
        supervisorId)
    values (' .'"' . $name .'"' .',' .'
         ' . '"' . $description .'"' .',' .'
         ' . '"' .$supervisorId .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Warehouse Section Added Successfully";
    } else {
        echo "Failed to add Warehouse Section! Error displayed below";
        var_dump($results);
    }
}
function createItemStatus($postObject)
{
    global $conn;

    $status = $postObject['status'];

    $query = 'insert into ItemStatus(status)
    values (' . '"' .$status .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Item Status Added Successfully";
    } else {
        echo "Failed to add Item Status! Error displayed below";
        var_dump($results);
    }
}

function createItemCode($postObject)
{
    global $conn;

    $name = $postObject['name'];
    $manufacturer = $postObject['manufacturer'];
    $year = $postObject['year'];

    $query = 'insert into ItemCode(
        name,
        manufacturer,
        year)
    values (' .'"' . $name .'"' .',' .'
         ' . '"' . $manufacturer .'"' .',' .'
         ' . '"' .$year .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Item Code Added Successfully";
    } else {
        echo "Failed to add Item Code! Error displayed below";
        var_dump($results);
    }
}

function createLoadingDock($postObject) {
    global $conn;

    $type = $postObject['type'];
    $width = $postObject['width'];
    $height = $postObject['height'];
    $warehouseSectionId = $postObject['warehouseSectionId'];


    $query = 'insert into LoadingDock(
        type,
        width,
        height,
        warehouseSectionId)
    values (' .'"' . $type .'"' .',' .'
         ' . '"' . $width .'"' .',' .'
         ' . '"' . $height .'"' .',' .'
         ' . '"' .$warehouseSectionId .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Loading Dock Added Successfully";
    } else {
        echo "Failed to add Loading Dock! Error displayed below";
        var_dump($results);
    }
}
function createItem($postObject)
{
    global $conn;

    $itemCode = $postObject['itemCode'];
    $itemStatus = $postObject['itemStatus'];
    $itemValue = $postObject['itemValue'];
    $warehouseSection = $postObject['warehouseSection'];
    $barcode = $postObject['barcode'];
    $isSold = 0;
    $datePurchased = $postObject['datePurchased'];

    $query = 'insert into Item(
        itemCode,
        itemStatus,
        itemValue,
        warehouseSection,
        barcode,
        datePurchased,
        isSold)
    values (' .'"' . $itemCode .'"' .',' .'
         ' . '"' . $itemStatus .'"' .',' .'
         ' . '"' . $itemValue .'"' .',' .'
         ' . '"' . $warehouseSection .'"' .',' .'
         ' . '"' . $barcode .'"' .',' .'
         ' . '"' . $datePurchased .'"' .',' .'
         ' . '"' .$isSold .'"'  .');';
    $results = $conn->query($query);

    if($results == true) {
        echo "Item Added Successfully";
    } else {
        echo "Failed to add Item! Error displayed below";
        var_dump($results);
    }
}

function createRoute($postObject)
{
    global $conn;

    $name = $postObject['name'];
    $destinationPostCode = $postObject['destinationPostCode'];
    $miles = $postObject['miles'];

    $query = 'insert into Route(
        name,
        destinationPostCode,
        miles)
    values (' . '"' . $name .'"' .',' .'
         ' . '"' . $destinationPostCode .'"' .',' .'
         ' . '"' .$miles .'"'  .');';

    $results = $conn->query($query);

    if($results == true) {
        echo "Route Added Successfully";
    } else {
        echo "Failed to add Route! Error displayed below";
        var_dump($results);
    }
}

function createWarehouseTruck($postObject)
{
    global $conn;

    $licensePlate = $postObject['licensePlate'];
    $brand = $postObject['brand'];
    $year = $postObject['year'];
    $driverId = $postObject['driverId'];
    $loadingDockId = $postObject['loadingDockId'];

    $query = 'insert into WarehouseTruck(
        licensePlate,
        brand,
        year,
        loadingDockId,
        driverId)
    values (' . '"' . $licensePlate .'"' .',' .'
         ' . '"' . $brand .'"' .',' .'
         ' . '"' . $year .'"' .',' .'
         ' . '"' . $loadingDockId .'"' .',' .'
         ' . '"' .$driverId .'"'  .');';

    $results = $conn->query($query);

    if($results == true) {
        echo "Warehouse Truck Added Successfully";
    } else {
        echo "Failed to add Warehouse Truck! Error displayed below";
        var_dump($results);
    }
}

function deleteTruckRouteAssignment($postObject) {
    global $conn;

    $truckAssignmentId = $postObject['truckAssignmentId'];
    $query = "DELETE FROM truckrouteassignment where id = " . $truckAssignmentId;
    $results = $conn->query($query);
    if($results == true) {
        // Forces a true refresh of the page after a form is submitted
        // php automatically refetches data that the request called might have updated.
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Failed to delete Truck Route Assignment! Error displayed below";
        var_dump($results);
    }
}
function deleteStaffWarehouseSectionAssignment($postObject) {
    global $conn;

    $staffWarehouseSectionAssignmentId = $postObject['staffWarehouseSectionAssignmentId'];
    $query = "DELETE FROM staffWarehouseSectionAssignment where id = " . $staffWarehouseSectionAssignmentId;
    $results = $conn->query($query);
    if($results == true) {
        // Forces a true refresh of the page after a form is submitted
        // php automatically refetches data that the request called might have updated.
        echo "<meta http-equiv='refresh' content='0'>";
    } else {
        echo "Failed to delete Staff Warehouse Section Assignment! Error displayed below";
        var_dump($results);
    }
}

function assignStaffToWarehouseSection($postObject)
{
    global $conn;

    $warehouseSectionIds = $postObject['warehouseSectionIds'];
    $startDate = $postObject['startDate'];
    $endDate = $postObject['endDate'];
    $staffId = $postObject['staffId'];

    $success = true;
    $errorMessage = null;

    foreach ($warehouseSectionIds as $warehouseSectionId)
    {

        $query = 'insert into StaffWarehouseSectionAssignment(
        staffId,
        warehouseSectionId,
        startDate,
        endDate)
        values (' .'"' . $staffId .'"' .',' .'
             ' . '"' . $warehouseSectionId .'"' .',' .'
             ' . '"' .$startDate .'"' .',' .'
             ' . '"' .$endDate .'"'  .');';

        $results = $conn->query($query);

        if (!$results) {
            $success = false;
            $errorMessage = var_dump($results);
        }
    }
    if($success) {
        echo "Assigned Staff to Warehouse Section Successfully";
    } else {
        echo "Failed to assign staff to warehouse section! Error displayed below";
        var_dump($errorMessage);
    }
}

function assignTruckToRoutes($postObject) {
    global $conn;

    $success = true;
    $errorMessage = null;

    $routeIds = $postObject['routeIds'];
    foreach ($routeIds as $routeId) {
        $warehouseTruckId = $postObject['warehouseTruckId'];
        $assignmentDate = $postObject['assignmentDate'];

        $query = 'insert into TruckRouteAssignment(
        routeId,
        truckId,
        assignmentDate
        )
        values (' .'"' . $routeId .'"' .',' .'
             ' . '"' . $warehouseTruckId .'"' .',' .'
             ' . '"' .$assignmentDate .'"'  .');';

        $results = $conn->query($query);

        if (!$results) {
            $success = false;
            $errorMessage = var_dump($results);
        }
    }

    if($success) {
        echo "Assigned Truck to Routes Successfully";
    } else {
        echo "Failed to assign truck to routes section! Error displayed below";
        var_dump($errorMessage);
    }
}

if($_SERVER['REQUEST_METHOD'] == "POST") {
    if (isset($_POST['addStaffMember'])) {
        createStaffMember($_POST);
    } else if (isset($_POST['addWarehouseSection'])) {
        createWarehouseSection($_POST);
    }
    else if (isset($_POST['addItemStatus'])) {
        createItemStatus($_POST);
    }
    else if (isset($_POST['addItemCode'])) {
        createItemCode($_POST);
    }
    else if (isset($_POST['addItem'])) {
        createItem($_POST);
    }
    else if (isset($_POST['addLoadingDock'])) {
        createLoadingDock($_POST);
    }
    else if (isset($_POST['addRoute'])) {
        createRoute($_POST);
    }
    else if (isset($_POST['addWarehouseTruck'])) {
        createWarehouseTruck($_POST);
    }
    else if (isset($_POST['deleteTruckRouteAssignment'])) {
        deleteTruckRouteAssignment($_POST);
    }
    else if (isset($_POST['deleteStaffWarehouseSectionAssignment'])) {
        deleteStaffWarehouseSectionAssignment($_POST);
    }
    else if (isset($_POST['assignStaffToWarehouseSection'])) {
        assignStaffToWarehouseSection($_POST);
    }
    else if (isset($_POST['assignTruckToRoutes'])) {
        assignTruckToRoutes($_POST);
    }
}