<?php
include("../../Database/herbdb.php");
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
    <link rel="website icon" href="img/logo.png">
    <title>Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        crossorigin="anonymous">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            background: url('img/adminSide.png') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
        }

        .wrapper {
            display: flex;
            height: calc(100% - 70px);
        }

        .sidebar {
            width: 220px;
            background-color: rgba(52, 58, 64, 0.95);
            color: white;
            flex-shrink: 0;
            padding-top: 1rem;
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
            background-color: rgba(108, 117, 125, 0.95);
            color: white;
            padding: 15px;
            height: 70px;
        }

        .content {
            flex-grow: 1;
            padding: 20px;
            overflow-y: auto;
            border-radius: 10px;
            margin: 20px;
            color: white;
        }
    </style>
</head>

<body>

    <div class="container-fluid banner d-flex align-items-center">
        <div class="row w-100">
            <div class="col d-flex align-items-center justify-content-center gap-2">
                <img src="img/logoadmin.png" alt="Admin Logo" style="height: 40px;">
                <h3 class="m-0 text-white">PharmaHerbs</h3>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="sidebar">
            <h5 class="text-center">Admin</h5>
            <a href="admin.php">Dashboard</a>
            <a href="../logIn.php">Logout</a>
        </div>

        <div class="content">
            <h4>Herbs List</h4>
            <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
                <?php while ($row = mysqli_fetch_assoc($listResult)) { ?>
                <div class="col">
                    <div class="card h-100 border-dark shadow-sm rounded-5">
                        <img src="<?php echo $row['herbImg']; ?>" class="card-img-top"
                            alt="<?php echo $row['herbName']; ?>" style="height: 65%; width: 100%; object-fit: cover;">
                        <div class="card-body">
                            <h5 class="card-title text-success">
                                <?php echo $row['herbName']; ?>
                                <small class="text-muted fst-italic">(
                                    <?php echo $row['herbLatin']; ?>)
                                </small>
                            </h5>
                            <p><strong>Description:</strong>
                                <?php echo $row['herbDesc']; ?>
                            </p>
                            <p><strong>Benefits:</strong>
                                <?php echo $row['herbBenefits']; ?>
                            </p>
                            <p><strong>Usage Guide:</strong>
                                <?php echo $row['herbGuide']; ?>
                            </p>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>
</body>

</html>