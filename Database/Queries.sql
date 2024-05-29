--
-- SELECT all section with reporting office info
--

SELECT ws.id, ws.name, ws.description, s.firstName, s.lastName, s.position, ws.supervisorId FROM WarehouseSection ws
INNER JOIN Staff s ON ws.supervisorId = s.id;

--
-- Get Salary of employees whose salary is greater than 20000
--

SELECT `id`, `firstName`, `lastName`, `position`, `salary` FROM `Staff` WHERE `salary` > 20000
ORDER BY `salary` DESC;

--
-- Get Weekly Salary of top 3 paying employees
--

SELECT `id`, `firstName`, `lastName`, `position`, ROUND(`salary`/52,2) as `Weekly Salary` FROM `Staff`
ORDER BY `salary` DESC
LIMIT 3 OFFSET 0;


--
-- SELECT those staffs who had access to the Warehouse Sections on the date - "2022-06-15"
--

SELECT ws.id, ws.name, ws.description, s.firstName, s.lastName, s.position, swsa.startDate, swsa.endDate FROM WarehouseSection ws
INNER JOIN StaffWarehouseSectionAssignment swsa ON swsa.warehouseSectionId = ws.id
INNER JOIN Staff s ON s.id = swsa.staffId WHERE "2022-06-15" BETWEEN swsa.startDate AND swsa.endDate;

--
-- GET Truck info by license plate
--
SELECT * FROM `WarehouseTruck` WHERE licensePlate LIKE "%DF5%";

--
-- GET Truck info by brand and year of model
--
SELECT * FROM `WarehouseTruck` WHERE brand LIKE "%or%" AND year = "2021";

--
-- GET all the staff whose last name is not Doe
--
SELECT * FROM `Staff` WHERE `lastName` <> 'Doe';

--
-- GET the Staff which ones salary is less than 200000 and position is Driver
--
SELECT * FROM `Staff` WHERE `salary` < '200000' AND `position` = "Driver";

--
-- GET Current Quantity of items in the inventory
--
SELECT ic.id, ic.name, COUNT(*) as `quantity` FROM `ItemCode` ic
INNER JOIN `Item`i ON i.itemCode = ic.id WHERE i.isSold = false 
GROUP BY i.itemCode HAVING quantity > 2;

--
-- Select top most 5 popular items (if same quantity then DESC by name)
--
SELECT ic.id, ic.name, COUNT(*) as `quantity` FROM `ItemCode` ic
INNER JOIN `Item`i ON i.itemCode = ic.id WHERE i.isSold = true
GROUP BY i.itemCode ORDER BY quantity DESC, ic.name DESC
LIMIT 5 OFFSET 0;


--
-- SELECT Route information based on Multiple Destination Post Codes
--
SELECT *
FROM `Route`
WHERE `destinationPostCode` IN ('HD22', 'MN12');

--
-- SELECT Route information without the HD22 and MN12
--
SELECT *
FROM `Route`
WHERE `destinationPostCode` NOT IN ('HD22', 'MN12');

--
-- SELECT ALL items where `manufacturer` is not available
--
SELECT * FROM `ItemCode` WHERE manufacturer IS NULL;

--
-- Which Truck run the Sum of all miles have
--
SELECT wr.id, wr.brand, wr.licensePlate, SUM(`miles`) as totalMiles FROM Route x
    INNER JOIN `TruckRouteAssignment` tra ON  tra.routeId = x.id
    INNER JOIN `WarehouseTruck` wr ON  wr.id = tra.truckId
    GROUP BY wr.id;


--
-- Which Truck avg run BETWEEN the dates
--
SELECT MIN(x.`miles`) as 'min miles', MAX(x.`miles`) 'max miles', AVG(x.`miles`) 'avg miles', SUM(x.`miles`) as 'total miles', COUNT(*) as occurrence, tra.assignmentDate FROM Route x
    INNER JOIN `TruckRouteAssignment` tra ON  tra.routeId = x.id
    INNER JOIN `WarehouseTruck` wr ON  wr.id = tra.truckId
    GROUP BY tra.assignmentDate;


--
-- SELECT all staff show who is assigned to which section (if there is none)
--
SELECT s.firstName, s.lastName, s.position, ws.supervisorId, ws.name, ws.description FROM Staff s
LEFT JOIN WarehouseSection ws ON ws.supervisorId = s.id;


--
-- SELECT all items which was never ordered
--
SELECT ic.id, ic.name, ic.year, ic.manufacturer, i.itemValue, i.datePurchased, i.barcode, i.isSold FROM `Item` i
RIGHT JOIN `ItemCode` ic ON ic.id = i.`itemCode` WHERE i.itemValue IS NULL;

--
-- Only those items which was sold or entered into the inventory after "2021-01-01"
--
SELECT DISTINCT itemCode, name FROM `Item`
INNER JOIN `ItemCode` ON `Item`.`itemCode` = `ItemCode`.id 
WHERE `Item`.datePurchased > "2021-01-01" ;


--
-- SELECT the Warehouse Truck which ones had an assigment on 2019-01-01 and routeId 1
--
SELECT * FROM `WarehouseTruck` WHERE id = 
                    (SELECT DISTINCT truckId FROM `TruckRouteAssignment` 
                    WHERE `assignmentDate` = "2019-01-01" AND `routeId` = 1);

--
-- SELECT items which ones item value is not between 200 and 500
--
SELECT * FROM `Item`
WHERE `itemValue` NOT BETWEEN 200 AND 500;


--
-- GET Item name which ones value is greater than 1000
--
SELECT `name` FROM `ItemCode` WHERE `id` = 
    ANY (SELECT `ItemCode` FROM `Item` WHERE `itemValue` > 1000);

--
-- GET Item name which ones value is 1100 
--
SELECT `name` FROM `ItemCode` WHERE `id` = 
    ALL (SELECT `ItemCode` FROM `Item`
    WHERE `itemValue` = 1100);

--
-- SELECT the item name which entered into the stock 
--
SELECT name, year FROM `ItemCode` AS M WHERE EXISTS
        (SELECT *
        FROM `Item` AS E
        WHERE E.itemCode = M.id);

--
-- SELECT all items on the inventory with items status also
--
SELECT *
FROM `Item` b
LEFT OUTER JOIN `ItemStatus` p ON p.`id` = b.`ItemStatus`
UNION 
SELECT *
FROM `Item` b
RIGHT OUTER JOIN `ItemStatus` p ON p.`id` = b.`ItemStatus`;
        
