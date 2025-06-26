<?php
include("herbdb.php");

$listQuery = "SELECT * FROM herblist";
$listResult = executeQuery($listQuery);
$herbs = mysqli_fetch_all($listResult, MYSQLI_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="website icon" href="img/logo.png">
  <title>Pharma Herbs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="background-shape shape1"></div>
  <div class="background-shape shape2"></div>

  <nav class="navbar navbar-expand-lg navbar-green sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="img/logo.png" width="40" height="40" class="me-2">
        <span class="h4 mb-0 text-white">Pharma Herbs</span>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav align-items-center">
          <li class="nav-item me-3">
            <button class="btn btn-outline-light rounded-circle" id="searchIconButton"><i class="fas fa-search"></i></button>
          </li>
          <li class="nav-item">
            <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight">
              <i class="fas fa-bars"></i>
            </button>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container search-bar-container" id="searchBarContainer" style="display: none;">
    <form class="d-flex justify-content-center">
      <input class="form-control me-2" type="search" placeholder="Search for herbs..." aria-label="Search" style="max-width: 500px;" id="searchInput" />
      <button class="btn btn-success" type="submit">Search</button>
    </form>
  </div>

  <div class="container my-4" id="cardsContainer">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php foreach ($herbs as $row): ?>
        <div class="col">
          <div class="card-custom">
            <img src="<?= $row['herbImg'] ?>" alt="<?= $row['herbName'] ?>" class="img-fluid">
            <div class="card-body">
              <h5 class="card-title"><?= $row['herbName'] ?></h5>
              <p class="card-text"><?= $row['herbDesc'] ?></p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modal<?= $row['herbID'] ?>">More Info</button>
            </div>
          </div>
        </div>

        <div class="modal fade" id="modal<?= $row['herbID'] ?>" tabindex="-1" aria-labelledby="modalLabel<?= $row['herbID'] ?>" aria-hidden="true">
          <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="modalLabel<?= $row['herbID'] ?>"><?= $row['herbName'] ?> (<?= $row['herbLatin'] ?>)</h5>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
              </div>
              <div class="modal-body modal-body-content">
                <img src="<?= $row['herbImg'] ?>" alt="<?= $row['herbName'] ?>">
                <p><strong>Description:</strong> <?= $row['herbDesc'] ?></p>
                <p><strong>Benefits:</strong> <?= $row['herbBenefits'] ?></p>
                <p><strong>Usage Guide:</strong> <?= $row['herbGuide'] ?></p>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>

  <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title">Menu</h5>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>
    <div class="offcanvas-body">
      <ul class="list-group list-group-flush">
        <li class="list-group-item"><a href="index.php" class="text-decoration-none">Home</a></li>
        <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#aboutUsModal">About Us</a></li>
        <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#referencesModal">References</a></li>
        <li class="list-group-item"><a href="LoginForm/index.php" class="text-decoration-none">Admin</a></li>
      </ul>
    </div>
  </div>

  <div class="modal fade" id="aboutUsModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">About Us</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-body-content">
          <p>We are a group of herbal medicine enthusiasts passionate about Filipino traditional herbs.</p>
        </div>
      </div>
    </div>
  </div>

  <div class="modal fade" id="referencesModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">References</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-body-content">
          <p>Sources include the Department of Health - Philippines, Herbal Books, and Verified Online Databases.</p>
        </div>
      </div>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script>
    const searchBarContainer = document.getElementById('searchBarContainer');
    const cardsContainer = document.getElementById('cardsContainer');
    const searchIconButton = document.getElementById('searchIconButton');
    const searchInput = document.getElementById('searchInput');

    searchIconButton.addEventListener('click', function () {
      const isVisible = searchBarContainer.style.display === 'block';
      searchBarContainer.style.display = isVisible ? 'none' : 'block';
      if (!isVisible) searchInput.focus();
      else searchInput.value = '';
    });

    searchBarContainer.querySelector('form').addEventListener('submit', function (event) {
      event.preventDefault();
    });
  </script>
</body>
</html>
