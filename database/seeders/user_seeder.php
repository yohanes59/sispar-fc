<?php 
$check_admin = "SELECT * FROM users WHERE username = 'admin'";
$result = mysqli_query($conn, $check_admin);
if(mysqli_num_rows($result) == 0){
    $hashed_password = password_hash('Admin123', PASSWORD_DEFAULT);
    $insert_admin = "INSERT INTO users(username, password, role, created_at, updated_at) VALUES ('admin', '$hashed_password', 'Admin', NOW(), NOW())";
    $seeder = mysqli_query($conn, $insert_admin);
}
