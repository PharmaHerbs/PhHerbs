<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="website icon" href=img/logo.png>
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
    background-image: url('img/welcomepageBg.png');
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
    padding: 2rem;
    max-width: 90%;
    backdrop-filter: blur(20px);
    background: rgba(255, 255, 255, 0.1);
    border-radius: 20px;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 32px rgba(0, 0, 0, 0.3);
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
