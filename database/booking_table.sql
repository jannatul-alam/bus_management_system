CREATE TABLE bookings(
id INT AUTO_INCREMENT PRIMARY KEY,
user_id INT,
bus_id INT,
seat_number INT,
passenger_name VARCHAR(100),
phone VARCHAR(20),
journey_date DATE,
booking_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
