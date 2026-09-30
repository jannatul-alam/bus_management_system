-- Bus Route Upgrade Database
-- Add more routes and buses

INSERT INTO buses
(bus_name,bus_number,from_district,to_district,departure,price,total_seat)
VALUES

('Green Line','GL-101','Dhaka','Sylhet','07:00 AM',800,40),
('ENA Transport','ENA-201','Dhaka','Chittagong','08:30 AM',900,40),
('Hanif Enterprise','HE-301','Dhaka','Rajshahi','09:00 AM',650,40),
('Shyamoli Paribahan','SP-401','Dhaka','Khulna','10:00 AM',700,40),
('Shohagh Paribahan','SH-501','Dhaka','Barisal','06:30 AM',750,40),

('Green Line','GL-102','Chittagong','Dhaka','08:00 AM',900,40),
('Hanif Enterprise','HE-302','Rajshahi','Dhaka','07:30 AM',650,40),
('ENA Transport','ENA-202','Sylhet','Dhaka','09:30 AM',800,40),
('Shyamoli Paribahan','SP-402','Khulna','Dhaka','10:30 AM',700,40),

('Unique Service','US-601','Dhaka','Cox''s Bazar','11:00 AM',1000,40),
('Saint Martin','SM-701','Dhaka','Cox''s Bazar','09:00 PM',1200,40),
('Desh Travels','DT-801','Dhaka','Rangpur','08:00 AM',700,40),
('Nabil Paribahan','NP-901','Dhaka','Mymensingh','07:00 AM',400,40);
