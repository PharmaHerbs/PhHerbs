
<?php
include("herbdb.php");

$hlistQuery = "SELECT * FROM herbs JOIN herbInfo ON herbs.herbID = herbInfo.herbID";
$hlistResult = $conn->query($hlistQuery);
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="website icon" href=img/logo.png>
    <title>Pharma Herbs</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet"
        xintegrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            background-color: #e6ffe6; 
        }

        .navbar-green {
            background-color: #004d12; 
        }

        .card-custom {
            background-color: #f0f0f0;
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%; 
        }

        .card-custom img {
            max-width: 100%;
            height: 180px;
            object-fit: contain; 
            border-radius: 10px;
            margin-bottom: 10px;
            background-color: white;
        }

        .card-custom .card-body {
            flex-grow: 1; 
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .card-custom .card-title {
            font-weight: bold;
            margin-bottom: 5px;
        }

        .card-custom .card-text {
            font-size: 0.9em;
            color: #555;
            flex-grow: 1; 
        }

        .search-bar-container {
            background-color: #ffffff; 
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            display: none; 
            text-align: center;
        }

       
        .offcanvas {
            background-color: #f0f0f0;
        }
        .offcanvas-header {
            border-bottom: 1px solid #ddd;
        }
        .offcanvas-title {
            font-weight: bold;
            color: #004d12;
        }
        .list-group-item {
            background-color: transparent;
            border: none;
            padding: 1rem 1.5rem;
        }
        .list-group-item a {
            font-size: 1.1rem;
            color: #333;
        }
        .list-group-item a:hover {
            color: #004d12;
        }

       
        .modal-body-content {
            padding: 2rem;
            text-align: center;
        }
        .modal-body-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #333;
            margin-bottom: 1.5rem;
        }
        .modal-body-content p {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #555;
            margin-bottom: 1.5rem;
            text-align: justify;
        }
        .modal-body-content .team-name {
            font-weight: 600;
            color: #004d12;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-green sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="img/logo.png"  width="40" height="40" class="d-inline-block align-text-top me-2">
                <span class="h4 mb-0" style="color: white;">Pharma Herbs</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav align-items-center">
                    <li class="nav-item me-3">
                        <a class="nav-link text-white" href="#" id="listsButton">Lists</a>
                    </li>
                    <li class="nav-item me-3">
                        <button class="btn btn-outline-light rounded-circle" id="searchIconButton">
                            <i class="fas fa-search"></i>
                        </button>
                    </li>
                    <li class="nav-item">
                        <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container search-bar-container" id="searchBarContainer">
        <form class="d-flex justify-content-center">
            <input class="form-control me-2" type="search" placeholder="Search for herbs..." aria-label="Search" style="max-width: 500px;" id="searchInput" />
            <button class="btn btn-success" type="submit">Search</button>
        </form>
    </div>

    <div class="container my-4" id="cardsContainer">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 g-4" id="herb-cards">
        </div>
    </div>

    <div id="herb-modals">
    </div>

    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasRight" aria-labelledby="offcanvasRightLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasRightLabel">Menu</h5>
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="index.html" class="text-decoration-none text-dark">Home</a></li>
                <!-- About Us link now triggers a modal -->
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#aboutUsModal">About Us</a></li>
                <!-- References link now triggers a modal -->
                <li class="list-group-item"><a href="#" class="text-decoration-none text-dark" data-bs-toggle="modal" data-bs-target="#referencesModal">References</a></li>
            </ul>
        </div>
    </div>

    <!-- About Us Modal -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel">About Us</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-content">
                    <h1>About Us</h1>
                    <p>
                        Welcome to our Philippine Herbal Medicine website – your trusted source for reliable,
                        research-based information about local herbal plants and their natural healing
                        benefits. This platform is dedicated to educating and promoting the rich tradition of
                        herbal medicine in the Philippines, aiming to bridge ancient ancestral wisdom with modern
                        understanding.
                    </p>
                    <p>
                        This website was proudly developed by second-year Bachelor of Science in Information
                        Technology students from the Polytechnic University of the Philippines – Sto. Tomas
                        Campus. Our team — <span class="team-name">John Adrian De Mesa</span>,
                        <span class="team-name">Gwyneth Minor</span>,
                        <span class="team-name">Linel Martin Monta</span>,
                        <span class="team-name">Margareth Dela Rosa</span>, and
                        <span class="team-name">Jet Pitogo</span> — created this project with the goal of making knowledge
                        about Filipino herbal medicine more accessible to the public. Through this initiative, we
                        hope to contribute to the preservation of our cultural heritage and support the use of
                        natural, plant-based remedies in daily health practices.
                    </p>
                    <p>
                        Thank you for visiting and joining us in embracing the healing power of nature.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <!-- References Modal -->
    <div class="modal fade" id="referencesModal" tabindex="-1" aria-labelledby="referencesModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referencesModalLabel">References</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-content">
                    <h1>References</h1>
                    <ul class="list-disc pl-5 text-lg text-gray-700 leading-relaxed">
                        <li class="mb-2">Reference 1: Lorem ipsum dolor sit amet, consectetur adipiscing elit.</li>
                        <li class="mb-2">Reference 2: Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</li>
                        <li class="mb-2">Reference 3: Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris.</li>
                        <li class="mb-2">Reference 4: Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore.</li>
                        <li class="mb-2">Reference 5: Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        xintegrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q"
        crossorigin="anonymous"></script>

    <script>
        const herbs = [
            {
                id: "ampalaya",
                name: "Ampalaya",
                latin: "Momordica charantia",
                short: "Known for its anti-diabetic properties.",
                long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
                img: "https://placehold.co/180x180/ffffff/000000?text=Ampalaya"
            },
            {
                id: "garlic",
                name: "Garlic",
                latin: "Allium sativum",
                short: "Garlic is known as nature's antibiotic.",
                long: "Its juices inhibit the growth of fungi and viruses thus, prevent viral, yeast, and infections.",
                img: "img/garlic/png"
            },
            {
                id: "ginger",
                name: "Ginger",
                latin: "Zingiber officinale",
                short: "Commonly used for its anti-inflammatory and digestive benefits.",
                long: "Ginger is a widely used spice and traditional medicine. It's effective against nausea, can reduce muscle pain and soreness, and has powerful anti-inflammatory and antioxidant effects.",
                img: "https://placehold.co/180x180/ffffff/000000?text=Ginger"
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
                img: "img/Akapulko.png"
            },
            {
                id: "bayabas",
                name: "Bayabas",
                latin: "Psidium guajava",
                short: "Traditionally used as antiseptic and for diarrhea.",
                long: "Bayabas or guava is rich in vitamin C and antioxidants. Its leaves are boiled for rinses or drinks to treat wounds, inflammation, and diarrhea.",
                img: "https://placehold.co/180x180/ffffff/000000?text=Bayabas"
            }
        ];

        const cardsContainer = document.getElementById("herb-cards");
        const modalsContainer = document.getElementById("herb-modals");
        const listsButton = document.getElementById('listsButton');
        const searchIconButton = document.getElementById('searchIconButton');
        const searchBarContainer = document.getElementById('searchBarContainer');
        const searchInput = document.getElementById('searchInput');

        function renderHerbs(filteredHerbs) {
            cardsContainer.innerHTML = '';
            modalsContainer.innerHTML = '';

            filteredHerbs.forEach(herb => {
                const cardCol = document.createElement('div');
                cardCol.className = 'col';
                cardCol.innerHTML = `
                    <div class="card-custom">
                        <img src="${herb.img}" class="img-fluid" alt="${herb.name}">
                        <div class="card-body">
                            <h5 class="card-title">${herb.name}</h5>
                            <p class="card-text">${herb.short}</p>
                            <button class="btn btn-success" data-bs-toggle="modal" data-bs-target="#${herb.id}Modal">More Info</button>
                        </div>
                    </div>
                `;
                cardsContainer.appendChild(cardCol);

                const modalDiv = document.createElement('div');
                modalDiv.className = 'modal fade';
                modalDiv.id = `${herb.id}Modal`;
                modalDiv.setAttribute('tabindex', '-1');
                modalDiv.setAttribute('aria-labelledby', `${herb.id}Label`);
                modalDiv.setAttribute('aria-hidden', 'true');
                modalDiv.innerHTML = `
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
                `;
                modalsContainer.appendChild(modalDiv);
            });
        }

        renderHerbs(herbs);

        cardsContainer.style.display = 'none';
        searchBarContainer.style.display = 'none';

        listsButton.addEventListener('click', function (event) {
            event.preventDefault();
            cardsContainer.style.display = 'flex';
            searchBarContainer.style.display = 'none';
            searchInput.value = '';
            renderHerbs(herbs);
        });

        searchIconButton.addEventListener('click', function () {
            if (searchBarContainer.style.display === 'none') {
                searchBarContainer.style.display = 'block';
                cardsContainer.style.display = 'none';
                searchInput.focus();
            } else {
                searchBarContainer.style.display = 'none';
                cardsContainer.style.display = 'flex';
                searchInput.value = '';
                renderHerbs(herbs);
            }
        });

        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            const filteredHerbs = herbs.filter(herb =>
                herb.name.toLowerCase().includes(searchTerm) ||
                herb.latin.toLowerCase().includes(searchTerm) ||
                herb.short.toLowerCase().includes(searchTerm) ||
                herb.long.toLowerCase().includes(searchTerm)
            );
            renderHerbs(filteredHerbs);
        });

        searchBarContainer.querySelector('form').addEventListener('submit', function(event) {
            event.preventDefault();
        });
    </script>
</body>

</html>
