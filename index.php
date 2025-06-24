<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PharmaHerbs</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Great+Vibes&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Inter', sans-serif;
            margin: 0;
            overflow-x: hidden;
        }

        .hero-section {
            background-image: url('https://placehold.co/1920x1080/6b7b62/ffffff?text=Background+Herbs');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
            z-index: 0;
            cursor: pointer;
        }

        .hero-overlay {
            background-color: rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: 1;
        }

        .hero-content {
            z-index: 2;
            text-align: center;
            color: white;
            padding: 1rem;
            max-width: 90%;
        }

        .welcome-text {
            font-family: 'Great Vibes', cursive;
            font-size: clamp(2.5rem, 8vw, 6rem);
            font-weight: 500;
            margin-bottom: 1rem;
            line-height: 1.1;
        }

        .quote-text {
            font-size: clamp(1rem, 3vw, 1.5rem);
            font-weight: 400;
            line-height: 1.5;
            margin-bottom: 2rem;
            max-width: 800px;
            margin-left: auto;
            margin-right: auto;
        }

        .click-anywhere-text {
            font-size: clamp(0.9rem, 2.5vw, 1.2rem);
            font-weight: 300;
            margin-top: 2rem;
        }

        .bg-pharma-green {
            background-color: rgb(0, 77, 18);
        }
    </style>
</head>

<body>

    <header class="bg-pharma-green text-white py-3 px-4 sticky top-0 z-50 shadow-md">
        <div class="max-w-7xl mx-auto flex items-center justify-between">
            <div class="flex items-center space-x-2">
                <svg width="28" height="28" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" class="text-white">
                    <path d="M12 2C6.47715 2 2 6.47715 2 12C2 17.5228 6.47715 22 12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2ZM13 17V12L17.5 12C18.0523 12 18.5 11.5523 18.5 11C18.5 10.4477 18.0523 10 17.5 10L13 10L13 7.5C13 6.94772 12.5523 6.5 12 6.5C11.4477 6.5 11 6.94772 11 7.5L11 10L6.5 10C5.94772 10 5.5 10.4477 5.5 11C5.5 11.5523 5.94772 12 6.5 12L11 12V17C11 17.5523 11.4477 18 12 18C12.5523 18 13 17.5523 13 17Z" fill="currentColor"/>
                </svg>
                <span class="text-2xl font-semibold">Pharma Herbs</span>
            </div>

            <nav class="flex items-center space-x-4">
                <button class="text-white hover:text-gray-300 focus:outline-none p-2 rounded-full hover:bg-green-700 transition duration-300">
                    <i class="fas fa-search"></i>
                </button>
                <button class="text-white hover:text-gray-300 focus:outline-none p-2 rounded-full hover:bg-green-700 transition duration-300">
                    <i class="fas fa-bars"></i>
                </button>
            </nav>
        </div>
    </header>

    <main class="hero-section" id="heroSection">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1 class="welcome-text">Welcome to PharmaHerbs</h1>
            <p class="quote-text">
                "Nature holds the cure discover the healing power of herbs, where ancient wisdom meets modern wellness."
            </p>
            <p class="click-anywhere-text">Click Anywhere</p>
        </div>
    </main>

    <script>
        const heroSection = document.getElementById('heroSection');

        heroSection.addEventListener('click', () => {
            window.location.href = 'herbslist.php';
        });
    </script>

</body>

</html>
