<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Herbal Site</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #5a514d;
    }

    .sidebar {
      background-color: #84a55b;
      color: white;
      min-height: 100vh;
      width: 60px;
      transition: width 0.3s ease;
      overflow-x: hidden;
    }

    .sidebar:hover {
      width: 200px;
    }

    .sidebar a {
      color: white;
      text-decoration: none;
      display: block;
      padding: 10px 20px;
      white-space: nowrap;
      overflow: hidden;
    }

    .sidebar a:hover {
      background-color: #728d4f;
    }

    .logo {
      display: block;
      margin: 0 auto 30px;
      width: 40px;
    }

    .search-bar {
      margin-bottom: 20px;
    }

    .content {
      background-color: white;
      padding: 30px;
      min-height: 100vh;
    }

    .card-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(250px, 1fr));
      gap: 1.5rem;
    }

    .card img {
      height: 150px;
      object-fit: cover;
    }

    .sidebar .submenu a {
      padding-left: 40px;
      font-size: 0.9rem;
    }
  </style>
</head>
<body>
  <div class="container-fluid">
    <div class="row">
      <nav class="col-auto sidebar d-flex flex-column align-items-start pt-3">
        <img src="logo.png" alt="Logo" class="logo">
        <a href="home.php">🏠 Home</a>

        <a href="herblist.php">
          🌿 Herbs List
        </a>
        <div class="submenu">
        <a href="about.php">📗 About</a>
          <a href="remedies.php">📗 Remedies</a>
          <a href="guide">📘 Guide</a>
        </div>

        <a href="#">📞 Contacts</a>
      </nav>

      <main class="col content">
        <div class="search-bar d-flex justify-content-end">
          <form class="d-flex" action="search.php" method="GET">
            <input class="form-control me-2" type="text" name="query" placeholder="Search...">
            <button class="btn btn-secondary" type="submit">Search</button>
          </form>
        </div>

        
        <div class="card-grid mt-4">
          <!-- Cards can go here -->
        </div>
      </main>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
