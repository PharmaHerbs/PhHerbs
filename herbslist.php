<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap Herbs Modal Loop</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
    crossorigin="anonymous">
</head>

<body>

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
            <input class="form-control me-2" type="search" placeholder="Search" />
            <button class="btn btn-outline-success" type="submit">Search</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div id="herbs-list" class="container my-5">
    <h2 class="mb-4">List of Herbs</h2>
    <div class="row g-4" id="herb-cards"></div>
  </div>


  <div id="herb-modals"></div>


  <script>
    //sample database for now
    const herbs = [
      {
        id: "akapulko",
        name: "Akapulko",
        latin: "Cassia alata",
        short: "Used for treating fungal skin infections.",
        long: "Akapulko, or Senna alata, is a medicinal shrub known for its antifungal properties. It is commonly used in traditional Philippine medicine to treat skin diseases such as ringworm, scabies, and insect bites.",
        img: "img/Akapulko.png"
      },
      
      {
        id: "garlic",
        name: "Garlic",
        latin: "Allium sativum",
        short: "Garlic is known as nature's antibiotic.",
        long: " Its juices inhibit the growth of fungi and viruses thus, prevent viral, yeast, and infections.",
        img: "img/garlic.png"
      },
      {
        id: "oregano",
        name: "Oregano",
        latin: "Origanum vulgare",
        short: "known herbal medicine for its strong anti-oxidant properties.",
        long: "Its anti-bacterial properties have been proven by recent studies to treat infections of the reproductive tracts, and which make it ideal to be given to women who have just given birth.",
        img: "img/oregano.png"
      },
      {
        id: "akapulko",
        name: "Akapulko",
        latin: "Cassia alata",
        short: "Used for treating fungal skin infections.",
        long: "Akapulko, or Senna alata, is a medicinal shrub known for its antifungal properties. It is commonly used in traditional Philippine medicine to treat skin diseases such as ringworm, scabies, and insect bites.",
        img: ""
      },
      {
        id: "ampalaya",
        name: "Ampalaya",
        latin: "Momordica charantia",
        short: "Known for its anti-diabetic properties.",
        long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
        img: ""
      },
       {
        id: "ampalaya",
        name: "Ampalaya",
        latin: "Momordica charantia",
        short: "Known for its anti-diabetic properties.",
        long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
        img: ""
      },
       {
        id: "ampalaya",
        name: "Ampalaya",
        latin: "Momordica charantia",
        short: "Known for its anti-diabetic properties.",
        long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
        img: ""
      },
       {
        id: "ampalaya",
        name: "Ampalaya",
        latin: "Momordica charantia",
        short: "Known for its anti-diabetic properties.",
        long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
        img: ""
      },
       {
        id: "ampalaya",
        name: "Ampalaya",
        latin: "Momordica charantia",
        short: "Known for its anti-diabetic properties.",
        long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
        img: ""
      },
      {
        id: "bayabas",
        name: "Bayabas",
        latin: "Psidium guajava",
        short: "Traditionally used as antiseptic and for diarrhea.",
        long: "Bayabas or guava is rich in vitamin C and antioxidants. Its leaves are boiled for rinses or drinks to treat wounds, inflammation, and diarrhea.",
        img: ""
      }
    ];

    const cardsContainer = document.getElementById("herb-cards");
    const modalsContainer = document.getElementById("herb-modals");

    herbs.forEach(herb => {
   
      cardsContainer.innerHTML += `
        <div class="col-md-4">
          <div class="card h-100">
            <img src="${herb.img}" class="card-img-top" alt="${herb.name}">
            <div class="card-body">
              <h5 class="card-title">${herb.name}</h5>
              <p class="card-text">${herb.short}</p>
              <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#${herb.id}Modal">More Info</button>
            </div>
          </div>
        </div>
      `;


      modalsContainer.innerHTML += `
        <div class="modal fade" id="${herb.id}Modal" tabindex="-1" aria-labelledby="${herb.id}Label" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="${herb.id}Label">${herb.name} (${herb.latin})</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <img src="${herb.img}" class="img-fluid mb-3" alt="${herb.name}">
                <p>${herb.long}</p>
              </div>
            </div>
          </div>
        </div>
      `;
    });
  </script>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
</body>

</html>
