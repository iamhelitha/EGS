<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile - Elite Grooming Studio</title>
    <link rel="stylesheet" href="/EGS/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>

<body>
    <?php require $_SERVER['DOCUMENT_ROOT'] . '/EGS/elements/header.php'; ?>

    <main class="profile-container">
        <div class="profile-sidebar">
            <ul>
                <li><a href="/EGS/profile/settings.php">Profile Settings</a></li>
                <li><a href="/EGS/profile/orders.php">Order History</a></li>
                <li><a href="/EGS/profile/appointments.php">Appointment History</a></li>
                <li><a href="/EGS/profile/logout.php" class="logout">Logout</a></li>
            </ul>
        </div>

        <div class="profile-content">
            <h1>Welcome to Your Profile</h1>
            <p>Select a section from the sidebar to manage your account.</p>
        </div>
    </main>

    <?php require $_SERVER['DOCUMENT_ROOT'] . '/EGS/elements/footer.php'; ?>
</body>

</html>