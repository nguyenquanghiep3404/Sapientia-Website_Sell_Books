<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Trị Viên</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.js"></script>
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="public/admin/dist/css/admin.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"
        rel="stylesheet">
    <style>
        nav {
    display: flex;
    align-items: center;
    justify-content: space-between;
    background-color: #fff;
    padding: 10px 20px;
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
}

nav a {
    text-decoration: none;
    color: #333;
    font-weight: 500;
    margin: 0 10px;
    transition: color 0.3s ease;
}

nav a:hover {
    color: #007bff; /* Highlight color for links */
}

/* Dropdown Menu Styling */
.header_account {
    position: relative;
}

.header_account ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
    align-items: center;
}

.header_account .account_link {
    position: relative;
    cursor: pointer;
}

.header_account .dropdown_account_link {
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 5px;
    display: none;
    min-width: 150px;
    z-index: 1000;
}

.header_account .dropdown_account_link li {
    padding: 10px 15px;
    font-size: 14px;
    color: #333;
    cursor: pointer;
}

.header_account .dropdown_account_link li:hover {
    background-color: #f8f9fa;
}

.header_account .account_link:hover .dropdown_account_link {
    display: block;
}

/* Account Greeting Styling */
.header_account .dropdown_account_link li a {
    text-decoration: none;
    color: #333;
    display: block;
    transition: color 0.3s ease;
}

.header_account .dropdown_account_link li a:hover {
    color: #007bff;
}

/* Shopping Cart and Wishlist Styling */
.header_account .shopping_cart {
    position: relative;
}

.header_account .item_count {
    background-color: #ff4757;
    color: #fff;
    font-size: 12px;
    border-radius: 50%;
    padding: 3px 6px;
    position: absolute;
    top: -5px;
    right: -10px;
}

/* Responsive Styling */
@media screen and (max-width: 768px) {
    nav {
        flex-direction: column;
        align-items: flex-start;
    }

    .header_account ul {
        flex-direction: column;
        gap: 10px;
    }

    nav a {
        margin: 5px 0;
    }
}
/* Dropdown Account Styling */
.header_account .dropdown_account_link li a {
    display: flex;
    align-items: center;
    gap: 10px; /* Khoảng cách giữa icon và text */
    font-size: 14px;
}

.header_account .dropdown_account_link li a i {
    font-size: 16px;
    color: #007bff; /* Màu sắc của icon */
    transition: color 0.3s ease;
}

.header_account .dropdown_account_link li a:hover i {
    color: #0056b3; /* Màu icon khi hover */
}
    </style>
</head>

<body></body>