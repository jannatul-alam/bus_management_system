<?php
session_start();
include '../db.php';
if(!isset($_SESSION['role']) || $_SESSION['role']!='admin'){header('location:../login.php');exit();}
?>
<!DOCTYPE html><html><head><title>Admin Dashboard</title><link rel='stylesheet' href='../css/style.css'></head><body><nav class='navbar'><h2>⚙️ Admin Panel</h2><a href='../logout.php'>Logout</a></nav><div class='dashboard'><div class='welcome'><h1>Welcome Admin 👋</h1><p>Manage Bus Management System</p></div><div class='dashboard-cards'><a href='add_bus.php'><div class='dash-card'><h2>➕</h2><h3>Add Bus</h3></div></a><a href='manage_bus.php'><div class='dash-card'><h2>🚌</h2><h3>Manage Bus</h3></div></a><a href='bookings.php'><div class='dash-card'><h2>🎫</h2><h3>Bookings</h3></div></a></div></div></body></html>