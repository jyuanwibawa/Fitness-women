<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Dashboard Admin - FitnessApp</title>
    <link rel="stylesheet" href="style/dashboard.css" />
</head>

<body>

    <div class="navbar">
        <h1>Admin Panel - FitnessApp</h1>
        <div class="nav-links">
            <a href="#">Dashboard</a>
            <a href="#">Pengguna</a>
            <a href="#">Laporan</a>
            <a href="#">Logout</a>
        </div>
    </div>

    <div class="container">
        <aside class="sidebar">
            <h2>Menu</h2>
            <a href="#">Dashboard</a>
            <a href="#">Data Pengguna</a>
            <a href="#">Goal</a>
            <a href="#">Workout Plan</a>
            <a href="#">Progress</a>
            <a href="#">Logout</a>
        </aside>

        <main class="main">
            <?php include 'main.php'; ?>
        </main>
    </div>

</body>

</html>