<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PharmaHerbs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: #6C6464;
        }
        .sidebar {
            background-color: #89AC4E;
            color: white;
            height: 100vh;
            padding-top: 40px;
        }
        .sidebar h2 {
            font-size: 24px;
            margin-bottom: 30px;
        }
        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            margin: 10px 0;
            font-size: 18px;
            padding-left: 10px;
        }
        .sidebar a:hover {
            text-decoration: underline;
        }
        .content {
            background-color: white;
            height: 100vh;
            padding: 50px;
        }
        .search-box input[type="text"] {
            width: 300px;
            padding: 10px;
        }
        .search-box input[type="submit"] {
            padding: 10px 20px;
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 sidebar">
            <div class="text-start px-3">
                <h2><img src="https://cdn-icons-png.flaticon.com/512/25/25694.png" width="24"> HOME</h2>
                <a href="#">Herbs List</a>
                <a href="#">Remedies</a>
                <a href="#">Guides</a>
                <a href="#">Contacts</a>
            </div>
        </div>

        <div class="col-md-10 content">
            <form class="search-box" action="search.php" method="GET">
                <input type="text" name="query" placeholder="Search herbs...">
                <input type="submit" value="Search" class="btn btn-secondary">
            </form>
        </div>
    </div>
</div>

</body>
</html>
