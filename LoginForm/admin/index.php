<?php
include("../../herbdb.php");
session_start();

$username = $_SESSION['username'] ?? null;
$password = $_SESSION['password'] ?? null;

if (!isset($username)) {
    header("Location: ../index.php");
    exit();
}


$listQuery = "SELECT * FROM herblist";
$listResult = executeQuery($listQuery);
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="website icon" href="logoadmin.png">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <style>
        body {
            min-height: 100vh;
        }

        .sidebar {
            height: 100vh;
            background-color: #343a40;
            color: white;
        }

        .sidebar a {
            color: white;
            padding: 10px;
            display: block;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .banner {
            background-color: #6c757d;
            color: white;
            padding: 15px;
        }

        .content {
            padding: 20px;
        }
    </style>
</head>

<body>

    <div class="container-fluid banner">
        <div class="row">
            <div class="col d-flex align-items-center justify-content-center gap-2">
                <img src="newadminlogo.png" alt="Admin Logo" style="height: 40px;">
                <h3 class="m-0 text-white">PharmaHerbs</h3>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-md-2 sidebar">
                <h5 class="text-center mt-3">Admin</h5>
                <a href="#">Dashboard</a>
                <a href="../index.php">Logout</a>
            </div>

            <div class="col-md-10 content">
                <h4>Herbs List</h4>
                <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                    <?php while ($row = mysqli_fetch_assoc($listResult)) { ?>
                        <div class="col">
                            <div class="card h-100 border-dark shadow-sm">
                                <img src="<?php echo $row['herbImg']; ?>" class="card-img-top" alt="<?php echo $row['herbName']; ?>" style="height: 200px; object-fit: cover;">
                                <div class="card-body">
                                    <h5 class="card-title text-success">
                                        <?php echo $row['herbName']; ?>
                                        <small class="text-muted fst-italic">(<?php echo $row['herbLatin']; ?>)</small>
                                    </h5>
                                    <p><strong>Description:</strong> <?php echo $row['herbDesc']; ?></p>
                                    <p><strong>Benefits:</strong> <?php echo $row['herbBenefits']; ?></p>
                                    <p><strong>Usage Guide:</strong> <?php echo $row['herbGuide']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
</body>

</html>
