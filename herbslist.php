<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Herbs Modal</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>

<body>
  <!-- Navbar -->
  <div class="container-fluid py-3 sticky-top" style="background-color: rgb(0, 77, 18);">
    <div class="container">
      <div class="row align-items-center">
        <div class="col">
          <div class="h3 text-white">LOGO</div>
        </div>
        <div class="col text-center">
          <a href="#herbs-list" class="btn btn-light">Herbs List</a>
        </div>
        <div class="col">
          <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- Herbs List -->
  <div id="herbs-list" class="container my-5">
    <h2 class="mb-4">List of Herbs</h2>
    <div class="row g-4">

      <!-- Card: Akapulko -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/Cassia_alata.jpg" class="card-img-top" alt="Akapulko">
          <div class="card-body">
            <h5 class="card-title">Akapulko</h5>
            <p class="card-text">Used for treating fungal skin infections.</p>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#akapulkoModal">More Info</button>
          </div>
        </div>
      </div>

      <!-- Card: Ampalaya -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Momordica_charantia_fruit.jpg" class="card-img-top" alt="Ampalaya">
          <div class="card-body">
            <h5 class="card-title">Ampalaya</h5>
            <p class="card-text">Known for its anti-diabetic properties.</p>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#ampalayaModal">More Info</button>
          </div>
        </div>
      </div>

      <!-- Card: Bayabas -->
      <div class="col-md-4">
        <div class="card h-100">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Guava_ID.jpg" class="card-img-top" alt="Bayabas">
          <div class="card-body">
            <h5 class="card-title">Bayabas</h5>
            <p class="card-text">Traditionally used as antiseptic and for diarrhea.</p>
            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#bayabasModal">More Info</button>
          </div>
        </div>
      </div>

    </div>
  </div>

  <!-- Modal: Akapulko -->
  <div class="modal fade" id="akapulkoModal" tabindex="-1" aria-labelledby="akapulkoLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="akapulkoLabel">Akapulko (Cassia alata)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://upload.wikimedia.org/wikipedia/commons/7/70/Cassia_alata.jpg" class="img-fluid mb-3" alt="Akapulko">
          <p>Akapulko, or Senna alata, is a medicinal shrub known for its antifungal properties. It is commonly used in traditional Philippine medicine to treat skin diseases such as ringworm, scabies, and insect bites. It also has antibacterial and anti-inflammatory benefits.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Ampalaya -->
  <div class="modal fade" id="ampalayaModal" tabindex="-1" aria-labelledby="ampalayaLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="ampalayaLabel">Ampalaya (Momordica charantia)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://upload.wikimedia.org/wikipedia/commons/0/00/Momordica_charantia_fruit.jpg" class="img-fluid mb-3" alt="Ampalaya">
          <p>Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains charantin and other compounds that act like insulin. It’s also eaten as a vegetable and is known to boost immunity and aid digestion.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal: Bayabas -->
  <div class="modal fade" id="bayabasModal" tabindex="-1" aria-labelledby="bayabasLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="bayabasLabel">Bayabas (Psidium guajava)</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="https://upload.wikimedia.org/wikipedia/commons/5/5f/Guava_ID.jpg" class="img-fluid mb-3" alt="Bayabas">
          <p>Bayabas or guava is rich in vitamin C and antioxidants. Guava leaves are often used in folk medicine for treating wounds, inflammation, and diarrhea. The leaves can be boiled and used as a rinse or drink for various therapeutic effects.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
    crossorigin="anonymous"></script>
</body>

</html>
