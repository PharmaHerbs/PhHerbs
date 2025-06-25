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
    <style>
        body {
            background: linear-gradient(to right top, #a8e0b1, #90d3a5, #78c699, #5db98e, #3fac82);
            font-family: "Inter", sans-serif;
            min-height: 100vh;
            overflow-x: hidden; 
        }

        .background-shape {
            position: absolute;
            border-radius: 50%;
            filter: blur(150px);
            z-index: -1;
        }

        .shape1 {
            width: 400px;
            height: 400px;
            background: #90d3a5;
            top: -100px;
            left: -100px;
        }

        .shape2 {
            width: 500px;
            height: 500px;
            background: #3fac82;
            bottom: -150px;
            right: -150px;
        }


        .navbar-green {
           
            background-color: rgba(0, 77, 18, 0.5); 
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px); 
            border-bottom: 1px solid rgba(255, 255, 255, 0.2);
        }

        .card-custom {
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 15px;
            padding: 15px;
            text-align: center;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
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
            background: rgba(255, 255, 255, 0.5);
            padding: 5px;
            display: block;
            margin-left: auto;
            margin-right: auto;
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
            color: #002d09; 
        }

        .card-custom .card-text {
            font-size: 0.9em;
            color: #004d12; 
            flex-grow: 1;
        }

        .search-bar-container {
           
            background: rgba(255, 255, 255, 0.35);
            backdrop-filter: blur(10px);
            -webkit-backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 8px 32px 0 rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            display: none;
            text-align: center;
        }

       
        .offcanvas, .modal-content {
            background: rgba(240, 255, 240, 0.7); /
            backdrop-filter: blur(15px);
            -webkit-backdrop-filter: blur(15px);
            border: 1px solid rgba(255, 255, 255, 0.3);
            color: #002d09; 
        }

        .offcanvas-header, .modal-header {
            border-bottom: 1px solid rgba(0, 77, 18, 0.2);
        }

        .offcanvas-title, .modal-title {
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
            color: #004d12;
            font-weight: 500;
        }

        .list-group-item a:hover {
            color: #002d09;
        }

        .modal-body-content {
            padding: 2rem;
            text-align: center;
        }

        .modal-body-content h1 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #004d12;
            margin-bottom: 1.5rem;
        }

        .modal-body-content p {
            font-size: 1.125rem;
            line-height: 1.8;
            color: #002d09;
            margin-bottom: 1.5rem;
            text-align: justify;
        }
        
        .modal-body p {
            color: #002d09;
        }

        .modal-body-content .team-name {
            font-weight: 600;
            color: #3fac82; 
        }

        .modal-body img {
            display: block;
            margin-left: auto;
            margin-right: auto;
            max-width: 80%;
            height: auto;
            border-radius: 10px;
        }

        .modal-body p strong {
            font-weight: bold;
            color: #004d12;
        }
    </style>
</head>

<body>
    
    <div class="background-shape shape1"></div>
    <div class="background-shape shape2"></div>

    <nav class="navbar navbar-expand-lg navbar-green sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html">
                <img src="img/logo.png" width="40" height="40" class="d-inline-block align-text-top me-2">
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
                        <button class="btn btn-outline-light" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#offcanvasRight" aria-controls="offcanvasRight">
                            <i class="fas fa-bars"></i>
                        </button>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="container search-bar-container" id="searchBarContainer">
        <form class="d-flex justify-content-center">
            <input class="form-control me-2" type="search" placeholder="Search for herbs..." aria-label="Search"
                style="max-width: 500px;" id="searchInput" />
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
            <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><a href="index.php" class="text-decoration-none">Home</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none" data-bs-toggle="modal"
                        data-bs-target="#aboutUsModal">About Us</a></li>
                <li class="list-group-item"><a href="#" class="text-decoration-none" data-bs-toggle="modal"
                        data-bs-target="#referencesModal">References</a></li>
                 <li class="list-group-item"><a href="LoginForm/index.php" class="text-decoration-none">Admin</a></li>
            </ul>
        </div>
    </div>

    <!-- About Us Modal -->
    <div class="modal fade" id="aboutUsModal" tabindex="-1" aria-labelledby="aboutUsModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="aboutUsModalLabel">About Us</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
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
                        <span class="team-name">Jet Pitogo</span> — created this project with the goal of making
                        knowledge
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
    <div class="modal fade" id="referencesModal" tabindex="-1" aria-labelledby="referencesModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="referencesModalLabel">References</h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body modal-body-content">
                    <h1>References</h1>
                    <ul class="list-unstyled">
                        <li class="mb-2"><strong>Reference 1:</strong>
                            https://philippineherbalmedicine.org/doh_herbs.htm
                        </li>
                        <li class="mb-2"><strong>Reference 2:</strong> Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                        </li>
                        <li class="mb-2"><strong>Reference 3:</strong> Ut enim ad minim veniam, quis nostrud exercitation ullamco
                            laboris.</li>
                        <li class="mb-2"><strong>Reference 4:</strong> Duis aute irure dolor in reprehenderit in voluptate velit esse
                            cillum dolore.</li>
                        <li class="mb-2"><strong>Reference 5:</strong> Excepteur sint occaecat cupidatat non proident, sunt in culpa qui
                            officia.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js"
        crossorigin="anonymous"></script>

    <script>
        const herbs = [
            {
                id: "ampalaya",
                name: "Ampalaya",
                latin: "Momordica charantia",
                short: "Known for its anti-diabetic properties.",
                long: "Ampalaya, or bitter melon, is widely used for lowering blood sugar levels. It contains compounds that act like insulin. It’s also eaten as a vegetable and boosts immunity.",
                remedies: "Lowers blood sugar levels, aids in diabetes management.",
                benefits: "Boosts immunity, rich in vitamins and minerals.",
                img: "img/Ampalaya.png"
            },
            {
                id: "garlic",
                name: "Garlic",
                latin: "Allium sativum",
                short: "Garlic is known as nature's antibiotic.",
                long: "Its juices inhibit the growth of fungi and viruses thus, prevent viral, yeast, and infections.",
                remedies: "Effective against fungal and viral infections, helps prevent various infections.",
                benefits: "Boosts immune system, has anti-inflammatory properties.",
                img: "img/garlic.png"
            },
            {
                id: "ginger",
                name: "Ginger",
                latin: "Zingiber officinale",
                short: "Commonly used for its anti-inflammatory and digestive benefits.",
                long: "Ginger is a widely used spice and traditional medicine. It's effective against nausea, can reduce muscle pain and soreness, and has powerful anti-inflammatory and antioxidant effects.",
                remedies: "Alleviates nausea, reduces muscle pain and soreness.",
                benefits: "Powerful anti-inflammatory and antioxidant effects, aids digestion.",
                img: "img/ginger.png"
            },
            {
                id: "oregano",
                name: "Oregano",
                latin: "Origanum vulgare",
                short: "known herbal medicine for its strong anti-oxidant properties.",
                long: "Its anti-bacterial properties have been proven by recent studies to treat infections of the reproductive tracts, and which make it ideal to be given to women who have just given birth.",
                remedies: "Treats reproductive tract infections, strong antibacterial properties.",
                benefits: "Strong antioxidant properties, supports overall health.",
                img: "img/Oregano.png"
            },
            {
                id: "akapulko",
                name: "Akapulko",
                latin: "Cassia alata",
                short: "Used for treating fungal skin infections.",
                long: "Akapulko, or Senna alata, is a medicinal shrub known for its antifungal properties. It is commonly used in traditional Philippine medicine to treat skin diseases such as ringworm, scabies, and insect bites.",
                remedies: "Treats fungal skin infections like ringworm and scabies, alleviates insect bites.",
                benefits: "Natural antifungal agent, supports skin health.",
                img: "img/Akapulko.png"
            },
            {
                id: "bayabas",
                name: "Bayabas",
                latin: "Psidium guajava",
                short: "Traditionally used as antiseptic and for diarrhea.",
                long: "Bayabas or guava is rich in vitamin C and antioxidants. Its leaves are boiled for rinses or drinks to treat wounds, inflammation, and diarrhea.",
                remedies: "Treats wounds, reduces inflammation, effective against diarrhea.",
                benefits: "Rich in Vitamin C and antioxidants, natural antiseptic.",
                img: "img/bayabas.png"
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
                    <div class="modal-dialog modal-lg modal-dialog-centered">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="${herb.id}Label">${herb.name} (${herb.latin})</h5>
                                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="${herb.img}" class="img-fluid mb-3" alt="${herb.name}">
                                <p>${herb.long}</p>
                                ${herb.remedies ? `<p><strong>Remedies:</strong> ${herb.remedies}</p>` : ''}
                                ${herb.benefits ? `<p><strong>Benefits:</strong> ${herb.benefits}</p>` : ''}
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
            const isSearchHidden = searchBarContainer.style.display === 'none';
            searchBarContainer.style.display = isSearchHidden ? 'block' : 'none';
            cardsContainer.style.display = 'none'; /
            if (isSearchHidden) {
                searchInput.focus();
            } else {
                
                searchInput.value = '';
                renderHerbs(herbs);
                cardsContainer.style.display = 'flex';
            }
        });

        searchInput.addEventListener('input', function () {
            const searchTerm = searchInput.value.toLowerCase();
            if (searchTerm) {
                cardsContainer.style.display = 'flex'; 
                const filteredHerbs = herbs.filter(herb =>
                    herb.name.toLowerCase().includes(searchTerm) ||
                    herb.latin.toLowerCase().includes(searchTerm) ||
                    herb.short.toLowerCase().includes(searchTerm) ||
                    herb.long.toLowerCase().includes(searchTerm)
                );
                renderHerbs(filteredHerbs);
            } else {
                cardsContainer.style.display = 'none'; 
            }
        });

        searchBarContainer.querySelector('form').addEventListener('submit', function (event) {
            event.preventDefault();
        });
    </script>
</body>

</html>