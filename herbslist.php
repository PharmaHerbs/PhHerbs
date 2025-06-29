<?php
include("Database/herbdb.php");

$listQuery = "SELECT * FROM herblist";
$listResult = executeQuery($listQuery);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="website icon" href="img/logo.png">
  <title>Pharma Herbs</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="background-shape shape1"></div>
  <div class="background-shape shape2"></div>

  <nav class="navbar navbar-expand-lg navbar-green sticky-top">
    <div class="container">
      <a class="navbar-brand d-flex align-items-center" href="index.php">
        <img src="img/navlogo.png" width="40" height="40" class="me-2">
        <span class="h4 mb-0 text-white">Pharma Herbs</span>
      </a>
      <div class="d-flex ms-auto align-items-center">
        <li class="nav-item me-3">
          <button class="btn btn-outline-light rounded-circle" id="showSearchBtn" onclick="showSearchBar()">
            <i class="fas fa-search"></i>
          </button>
          <button class="btn btn-outline-light rounded-circle" id="hideSearchBtn" onclick="hideSearchBar()"
            style="display: none;">
            <i class="fas fa-times"></i>
          </button>
        </li>
        <li class="nav-item">
          <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasRight">
            <i class="fas fa-bars"></i>
          </button>
        </li>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container search-bar-container" id="searchBarContainer" style="display: none;">
    <form class="d-flex justify-content-center w-100">
      <input class="form-control w-100 me-2" type="search" placeholder="Search for herbs..." aria-label="Search"
        id="searchInput" style="max-width: 700px;" />
      <button class="btn btn-success" type="submit">Search</button>
    </form>
  </div>

  <div class="container my-4" id="cardsContainer">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4">
      <?php while($row = mysqli_fetch_assoc($listResult)) { ?>
      <div class="col">
        <div class="card-custom herb-card">
          <img src="<?php echo $row['herbImg']; ?>" alt="<?php echo $row['herbName']; ?>" class="img-fluid">
          <div class="card-body">
            <h5 class="card-title">
              <?php echo $row['herbName']; ?>
            </h5>
            <p class="card-text">
              <?php echo $row['herbDesc']; ?>
            </p>
            <button class="btn btn-success" data-bs-toggle="modal"
              data-bs-target="#modal<?php echo $row['herbID']; ?>">More Info</button>
          </div>
        </div>
      </div>

      <div class="modal fade" id="modal<?php echo $row['herbID']; ?>" tabindex="-1"
        aria-labelledby="modalLabel<?php echo $row['herbID']; ?>" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalLabel<?php echo $row['herbID']; ?>">
                <?php echo $row['herbName']; ?> (
                <?php echo $row['herbLatin']; ?>)
              </h5>
              <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
            </div>
            <div class="modal-body modal-body-content">
              <img src="<?php echo $row['herbImg']; ?>" alt="<?php echo $row['herbName']; ?>">
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
      </div>
      <?php } ?>
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
        <li class="list-group-item"><a href="#" data-bs-toggle="modal" data-bs-target="#referencesModal">References</a>
        </li>
        <li class="list-group-item"><a href="LoginForm/index.php" class="text-decoration-none">Admin</a></li>
      </ul>
    </div>
  </div>


  <div class="modal fade" id="aboutUsModal" tabindex="-1">
    <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-center">About Us</h5>
          <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal"></button>
        </div>
        <div class="modal-body modal-body-content">
          <p>Welcome to our Philippine Herbal Medicine website – your trusted source for reliable, research-based
            information about local herbal plants and their natural healing benefits. This platform is dedicated to
            educating and promoting the rich tradition of herbal medicine in the Philippines, aiming to bridge ancestral
            wisdom with modern understanding.
          </p>
          <p>This website was proudly developed by second-year Diploma in Information Technology students
            from the Polytechnic University of the Philippines – Sto. Tomas Campus. Our team — John Adrian De Mesa,
            Gwyneth Minor, Linel Martin Monta, Margarette Dela Rosa, and Jet Pitogo — created this project with the goal
            of making
            knowledge about Filipino herbal medicine more accessible to the public. Through this initiative, we hope to
            contribute to the preservation of our cultural heritage and support the use of natural, plant-based remedies
            in daily health practices.
          </p>
          <p>Thank you for visiting and joining us in embracing the healing power of nature.
          </p>
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
          <ul>
            <li>
              <strong>Philippine Department of Health - Traditional and Alternative Health Care</strong><br>
              Website: <a href="https://www.doh.gov.ph" target="_blank">https://www.doh.gov.ph</a><br>
              Accessed: June 2025
            </li>
            <li>
              <strong>PITAHC (Philippine Institute of Traditional and Alternative Health Care)</strong><br>
              Website: <a href="https://pitahc.gov.ph" target="_blank">https://pitahc.gov.ph</a><br>
              Accessed: June 2025
            </li>
            <li>
              <strong>Quisumbing, E. (1978).</strong> <em>Medicinal Plants of the Philippines</em><br>
              Katha Publishing Co.
            </li>
            <li>
              <strong>World Health Organization (WHO) - Traditional Medicine</strong><br>
              Website: <a href="https://www.who.int/health-topics/traditional-complementary-and-integrative-medicine"
                target="_blank">
                https://www.who.int/health-topics/traditional-complementary-and-integrative-medicine</a><br>
              Accessed: June 2025
            </li>
            <li>
              <strong>National Center for Biotechnology Information (NCBI) - Herbal Medicine Studies</strong><br>
              Website: <a href="https://www.ncbi.nlm.nih.gov/" target="_blank">https://www.ncbi.nlm.nih.gov/</a><br>
              Accessed: June 2025
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script>
    const searchBarContainer = document.getElementById('searchBarContainer');
    const searchInput = document.getElementById('searchInput');
    const showSearchBtn = document.getElementById("showSearchBtn");
    const hideSearchBtn = document.getElementById("hideSearchBtn");

    function showSearchBar() {
      searchBarContainer.style.display = "flex";
      searchInput.focus();
      showSearchBtn.style.display = "none";
      hideSearchBtn.style.display = "inline-block";
    }

    function hideSearchBar() {
      searchBarContainer.style.display = "none";
      searchInput.value = "";
      hideSearchBtn.style.display = "none";
      showSearchBtn.style.display = "inline-block";

      document.querySelectorAll('.herb-card').forEach(card => {
        card.closest('.col').style.display = 'block';
      });
    }

    searchInput.addEventListener('input', function () {
      const keyword = this.value.toLowerCase().trim();
      const cards = document.querySelectorAll('.herb-card');

      cards.forEach(card => {
        const text = card.innerText.toLowerCase();
        if (text.includes(keyword)) {
          card.closest('.col').style.display = 'block';
        } else {
          card.closest('.col').style.display = 'none';
        }
      });
    });


    searchBarContainer.querySelector('form').addEventListener('submit', function (event) {
      event.preventDefault();
    });
  </script>
</body>

</html>