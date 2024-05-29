Drop table if exists Supplier;
Drop table if exists CustomerOrder;
Drop table if exists Customer;
drop table if exists BankAccount;

Drop Table if exists WarehouseEquipment;
Drop Table if exists Item;
Drop Table if exists ItemCode;
Drop Table if exists ItemStatus;
Drop Table if exists StaffWarehouseSectionAssignment;
Drop Table if exists TruckRouteAssignment;
Drop Table if exists WarehouseTruck;
Drop Table if exists LoadingDock;
Drop Table if exists WarehouseSection;
Drop Table if exists Staff;
Drop Table if exists Route;
CREATE TABLE ItemStatus (
    id int NOT NULL AUTO_INCREMENT,
    status varchar(255),
    PRIMARY KEY (id)
);
insert into ItemStatus (status)
values ('New'),
    ('Used'),
    ('Refurbished'),
    ('Damaged');
CREATE TABLE ItemCode (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    year int,
    manufacturer varchar(255),
    PRIMARY KEY (id)
);
insert into ItemCode (name, year, manufacturer)
values ('iPhone 12', 2022, 'Apple'),
    ('Samsung Galaxy S22', 2022, 'Samsung'),
    ('Samsung Smart 4k TV', 2023, 'Samsung'),
    ('Playstation 5', 2020, 'Sony'),
    ('Xbox Series S', 2020, 'Microsoft'),
    ('Xbox Series X', 2020, 'Microsoft'),
    ('Samsung S23 Ultra', 2023, NULL);
CREATE TABLE Staff (
    id int NOT NULL AUTO_INCREMENT,
    firstName varchar(255),
    lastName varchar(255),
    position varchar(255),
    salary int,
    street varchar(255),
    city varchar(255),
    postCode varchar(255),
    emailAddress varchar(255),
    phoneNumber int,
    dateHired date,
    PRIMARY KEY (id)
);
insert into Staff (
        firstName,
        lastName,
        position,
        salary,
        street,
        city,
        postCode,
        emailAddress,
        phoneNumber,
        dateHired
    )
values (
        'John',
        'Doe',
        'Supervisor',
        150000,
        'Brook Street',
        'Huddersfield',
        'HD1',
        'john.doe@gmail.com',
        2234455,
        '2021-05-30'
    ),
    (
        'Alex',
        'Doe',
        'Supervisor',
        170000,
        'Heaven Street',
        'Huddersfield',
        'HD2',
        'alex.doe@gmail.com',
        8879933,
        '2020-03-23'
    ),
    (
        'Amanda',
        'Brown',
        'Driver',
        140000,
        'New York Street',
        'London',
        'SW1',
        'amanda.brown@gmail.com',
        4358863,
        '2022-04-01'
    ),
    (
        'Rodger',
        'Samuels',
        'Driver',
        140000,
        'Brooklyn Street',
        'London',
        'SE2',
        'rodger.samuels@gmail.com',
        5674432,
        '2022-11-01'
    ),
    (
        'Brandon',
        'Spence',
        'Truck Loader',
        120000,
        'California Street',
        'Manchester',
        'M16',
        'brandon.spence@gmail.com',
        2235576,
        '2022-07-01'
    ),
    (
        'Lionel',
        'Sharpe',
        'Truck Loader',
        115000,
        'New England Avenue',
        'Manchester',
        'M14',
        'lionel.sharpe@gmail.com',
        4545678,
        '2022-12-01'
    ),
    (
        'Tajay',
        'Camden',
        'Shelf Stacker',
        100000,
        'Miami Avenue',
        'Sheffield',
        'S1 1da',
        'tajay.camden@gmail.com',
        3461123,
        '2022-12-01'
    ),
    (
        'Dylan',
        'Rose',
        'Shelf Stacker',
        97000,
        'San Francisco Avenue',
        'Sheffield',
        'S1 1Dl',
        'dylan.rose@gmail.com',
        9908423,
        '2021-03-07'
    ),
    (
        'Jemielle',
        'Patterson',
        'Shelf Stacker',
        92000,
        'Seattle Avenue',
        'Leeds',
        'LS28',
        'jemielle.patterson@gmail.com',
        3346785,
        '2020-12-10'
    ),
    (
        'Josh',
        'Peterson',
        'Shelf Stacker',
        90000,
        'Toronto Avenue',
        'Leeds',
        'LS10',
        'josh.peterson@gmail.com',
        7674342,
        '2019-12-15'
    );
CREATE TABLE WarehouseSection (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    supervisorId int,
    description varchar(255),
    PRIMARY KEY (id),
    FOREIGN KEY (supervisorId) REFERENCES Staff(id)
);
insert into WarehouseSection (name, supervisorId, description)
values ('Section A', 1, 'Front of Warehouse to the left'),
    (
        'Section B',
        1,
        'Front of Warehouse to the right'
    ),
    ('Section C', 2, 'Back of Warehouse to the right'),
    ('Section D', 2, 'Back of Warehouse to the left');
CREATE TABLE Item (
    id int NOT NULL AUTO_INCREMENT,
    itemCode int,
    itemStatus int,
    itemValue int,
    datePurchased date,
    warehouseSection int,
    barcode int,
    isSold varchar(255),
    PRIMARY KEY (id),
    FOREIGN KEY (itemStatus) REFERENCES ItemStatus(id),
    FOREIGN KEY (itemCode) REFERENCES ItemCode(id),
    FOREIGN KEY (warehouseSection) REFERENCES WarehouseSection(id)
);
insert into Item (
        itemCode,
        itemStatus,
        itemValue,
        datePurchased,
        warehouseSection,
        barcode,
        isSold
    )
values (1, 1, 1100, '2022-01-10', 1, 12345, false),
    (1, 2, 700, '2022-02-15', 1, 76543, false),
    (3, 1, 2000, '2022-11-20', 2, 23457, false),
    (3, 3, 1850, '2022-06-13', 2, 12354, false),
    (5, 1, 500, '2021-07-19', 3, 23467, false),
    (5, 3, 250, '2021-05-21', 3, 324645, false),
    (1, 1, 1200, '2023-02-16', 3, 12345, true),
    (1, 2, 800, '2023-02-16', 3, 76543, true);
CREATE TABLE Route (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    destinationPostCode varchar(255),
    miles int,
    PRIMARY KEY (id)
);
insert into Route (name, destinationPostCode, miles)
values ('Route A', 'HD22', 5),
    ('Route B', 'MN12', 9),
    ('Route C', 'LD23', 8),
    ('Route D', 'SH5', 12),
    ('Route E', 'HD13', 7),
    ('Route F', 'MN55', 15);
CREATE TABLE StaffWarehouseSectionAssignment (
    id int NOT NULL AUTO_INCREMENT,
    staffId int,
    warehouseSectionId int,
    startDate date,
    endDate date,
    PRIMARY KEY (id),
    FOREIGN KEY (staffId) REFERENCES Staff(id),
    FOREIGN KEY (warehouseSectionId) REFERENCES WarehouseSection(id)
);
insert into StaffWarehouseSectionAssignment (staffId, warehouseSectionId, startDate, endDate)
VALUES (3, 1, '2022-01-01', '2022-07-25'),
    (3, 2, '2023-01-01', '2023-02-03'),
    (4, 3, '2019-05-01', '2022-11-15'),
    (4, 4, '2020-03-13', '2022-12-19'),
    (5, 1, '2019-01-01', '2020-02-15'),
    (5, 2, '2020-02-16', '2020-09-25'),
    (5, 3, '2020-09-26', '2021-01-05');
CREATE TABLE LoadingDock (
    id int NOT NULL AUTO_INCREMENT,
    warehouseSectionId int,
    type varchar(255),
    height int,
    width int,
    PRIMARY KEY (id),
    FOREIGN KEY (warehouseSectionId) REFERENCES WarehouseSection(id)
);
insert into LoadingDock (warehouseSectionId, type, height, width)
values (1, 'Entrance', 500, 700),
    (1, 'Exit', 600, 400),
    (2, 'Entrance', 500, 700),
    (2, 'Exit', 200, 400),
    (3, 'Entrance', 600, 600),
    (3, 'Exit', 800, 900);
CREATE TABLE WarehouseTruck (
    id int NOT NULL AUTO_INCREMENT,
    licensePlate varchar(255),
    year int,
    brand varchar(255),
    loadingDockId int,
    driverId int,
    PRIMARY KEY (id),
    FOREIGN KEY (loadingDockId) REFERENCES LoadingDock (id),
    FOREIGN KEY (driverId) REFERENCES Staff(id)
);
insert into WarehouseTruck (
        licensePlate,
        year,
        brand,
        loadingDockId,
        driverId
    )
values ('ADF56', 2019, 'Mitsubishi', 1, 3),
    ('GFHBDF3421', 2015, 'Ford', 1, 3),
    ('FHB23', 2022, 'Volvo', 2, 4),
    ('GFFB75', 2021, 'Navistar', 2, 4),
    ('AUD883', 2021, 'Ford', 2, 4);
CREATE TABLE TruckRouteAssignment (
    id int NOT NULL AUTO_INCREMENT,
    routeId int,
    truckId int,
    assignmentDate date,
    PRIMARY KEY (id),
    FOREIGN KEY (routeId) REFERENCES Route (id),
    FOREIGN KEY (truckId) REFERENCES WarehouseTruck(id)
);
insert into TruckRouteAssignment (routeId, truckId, assignmentDate)
values (1, 1, '2019-01-01'),
    (2, 1, '2019-06-01'),
    (3, 2, '2019-01-01'),
    (4, 2, '2019-11-01'),
    (1, 3, '2019-06-02');

CREATE TABLE WarehouseEquipment (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(255),
    warehouseSectionId int,
    datePurchased date,
    PRIMARY KEY (id),
    FOREIGN KEY (warehouseSectionId) REFERENCES WarehouseSection(id)
);

insert into WarehouseEquipment(name, warehouseSectionId, datePurchased)
values
('Forklift', 1, '2022-01-01'),
('Pallet Jack', 1, '2022-01-10'),
('Hand Truck', 1, '2022-01-15'),
('Service Cart', 1, '2021-02-08'),
('Crane', 1, '2022-03-07'),
('Monorail', 1, '2022-01-17');

create table Supplier
(
    id int NOT NULL AUTO_INCREMENT,
    companyName varchar(255),
    emailAddress varchar(255),
    amountOwed decimal(15,2),
    PRIMARY KEY (id)
);

insert into Supplier (companyName, emailAddress, amountOwed)
values
('Apple', 'apple@test.com', 50000),
('Amazon', 'amazon@test.com', 76000),
('Microsoft', 'microsoft@test.com', 92000),
('HP', 'hp@test.com', 91000),
('Lidl', 'lidl@test.com', 80000);

create table Customer (
    id int NOT NULL AUTO_INCREMENT,
    companyName varchar(255),
    mobileNumber varchar(255),
    emailAddress varchar(255),
    street varchar(255),
    city varchar(255),
    postCode varchar(255),
    PRIMARY KEY (id)
);

insert into Customer (companyName, mobileNumber, emailAddress, street, city, postCode)
values
('Apple', '1234567', 'apple@test.com', '12 apple street', 'London', 'LN12'),
('Amazon', '2345678', 'amazon@test.com', '13 Amazon street', 'London', 'LN12'),
('Microsoft', '4453344', 'microsoft@test.com', '99 microsoft street', 'London', 'LN12'),
('Intel', '6785544', 'intel@test.com', '65 intel street', 'London', 'LN15'),
('ASDA', '9873344', 'asda@test.com', '56 asda street', 'London', 'LN56');

create table CustomerOrder (
    id int NOT NULL AUTO_INCREMENT,
    customerId int,
    itemCode int,
    amount int,
    deadline date,
    status varchar(255),
    totalValue decimal(15,2),
    PRIMARY KEY (id),
    FOREIGN KEY (customerId) REFERENCES Customer(id),
    FOREIGN KEY (itemCode) REFERENCES ItemCode(id)
);

insert into CustomerOrder (customerId, itemCode, amount, deadline, status, totalValue)
values
(1, 1, 10, '2022-01-01', 'pending', 10000),
(2, 2, 7, '2022-01-01', 'pending', 8000),
(3, 3, 8, '2022-01-01', 'pending', 12000),
(1, 2, 9, '2022-01-01', 'pending', 21000),
(2, 3, 7, '2022-01-01', 'filled', 17000);


create table BankAccount (
id int NOT NULL AUTO_INCREMENT,
accountNumber varchar(255),
bankName varchar(255),
branchCode varchar(255),
type varchar(255),
currency varchar(255),
balance decimal(15,2),
primary key (id)
);

insert into BankAccount (accountNumber, bankName, branchCode, type, currency, balance)
values
('3457953', 'HSBC', 'BC1', 'Savings', 'GBP', 96000),
('2346754', 'Barclays', 'BC2', 'Savings', 'GBP', 20000),
('9472667', 'Starling', 'BC3', 'Savings', 'GBP', 23000),
('3457833', 'Lloyds', 'BC4', 'Savings', 'GBP', 13000),
('0987565', 'NCB', 'BC5', 'Checkings', 'USD', 5000);