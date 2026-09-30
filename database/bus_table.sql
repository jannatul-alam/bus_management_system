CREATE TABLE buses(
id INT AUTO_INCREMENT PRIMARY KEY,
bus_name VARCHAR(100),
bus_number VARCHAR(50),
from_district VARCHAR(100),
to_district VARCHAR(100),
departure VARCHAR(50),
price INT,
total_seat INT
);

INSERT INTO buses VALUES
(NULL,'Green Line','DHK-101','Dhaka','Chittagong','08:00 AM',800,40),
(NULL,'Hanif Enterprise','DHK-202','Dhaka','Rajshahi','09:00 AM',600,40);
