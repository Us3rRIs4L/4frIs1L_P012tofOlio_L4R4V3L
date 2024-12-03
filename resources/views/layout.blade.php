<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <style>
        :root {
            --primary-color: #0d6efd; /* Biru */
            --secondary-color: #212529; /* Abu-abu gelap */
            --light-color: #fff; /* Putih */
            --highlight-color: #FFD700; /* Kuning Emas */
            --footer-bg-color: #333; /* Latar footer */
            --footer-text-color: #e3f2fd; /* Teks footer */
        }

        /* Hero Section Styling */
        .hero-section {
            position: relative;
            background: linear-gradient(135deg, rgba(13, 110, 253, 0.8), rgba(255, 255, 255, 0.7)), url('images/astronout.jpeg') no-repeat center center/cover;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .hero-card-3d {
            background: linear-gradient(145deg, rgba(13, 110, 253, 0.8), rgba(0, 0, 0, 0.8));
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.8), inset 0 -5px 15px rgba(255, 255, 255, 0.1);
            max-width: 850px;
            text-align: center;
            z-index: 2;
            animation: fadeIn 1.5s ease-in-out;
        }

        /* Hero Text and Animation */
        .hero-text h1 {
            font-size: 3rem;
            font-weight: bold;
            color: var(--light-color);
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.5);
            margin-bottom: 10px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeUp 1.5s ease-out forwards 0.5s; /* Fade-up effect */
        }

        .hero-text p {
            font-size: 1.25rem;
            color: #d4d4d4;
            text-shadow: 1px 1px 5px rgba(0, 0, 0, 0.5);
            margin-bottom: 20px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeUp 1.5s ease-out forwards 1s; /* Fade-up effect for paragraph */
        }

        /* Typing Animation */
        .typing-animation {
            display: inline-block;
            border-right: 2px solid var(--highlight-color);
            font-size: 1.5rem;
            white-space: nowrap;
            overflow: hidden;
            animation: typing 8s steps(30, end), blink 0.75s step-end infinite;
            color: var(--light-color);
        }

        @keyframes typing {
            from {
                width: 0;
            }
            to {
                width: 22ch;
            }
        }

        @keyframes blink {
            50% {
                border-color: transparent;
            }
        }

        /* Fade-up Animation */
        @keyframes fadeUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        /* Hero Cards */
        .hero-cards {
            margin-top: 40px;
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .hero-card {
            /* background: var(--secondary-color); */
            padding: 20px;
            /* border-radius: 10px; */
            /* box-shadow: 0 8px 15px rgba(0, 0, 0, 0.3); */
            transition: transform 0.3s ease, box-shadow 0.3s ease;
            width: 180px;
            text-align: center;
            margin-bottom: 30px;
            opacity: 0;
            transform: translateY(50px);
            animation: fadeUp 1.5s ease-out forwards 1.5s; /* Fade-up effect for cards */
        }

        .hero-card img {
            width: 70px;
            height: 70px;
            object-fit: contain;
        }

        .hero-card h5 {
            margin-top: 15px;
            color: var(--light-color);
        }

        /* Footer Styling */
        footer {
            background: var(--footer-bg-color);
            color: var(--footer-text-color);
            padding: 30px 0;
            text-align: center;
            box-shadow: 0 -5px 15px rgba(0, 0, 0, 0.1);
        }

        footer p {
            margin: 0;
            font-size: 1rem;
        }

        footer p span {
            color: var(--highlight-color);
            font-weight: bold;
        }

        /* General Section Styling */
        .content-section {
            padding: 60px 0;
        }

        @media (max-width: 768px) {
            .hero-text h1 {
                font-size: 2.5rem;
            }
            .hero-text p {
                font-size: 1rem;
            }
            .hero-card {
                width: 160px;
            }
        }

        @keyframes fadeIn {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
    </style>
</head>
<body>
    <!-- Hero Section -->
    @if(!isset($hideHero))
        <section class="hero-section">
            <div class="hero-card-3d">
                <div class="hero-text">
                    <h1>
                        Hi, I'm <span class="text-warning">Afrisal</span>
                    </h1>
                    <div class="hero-cards">
                        <div class="hero-card">
                            <img src="images/coder.png" alt="Programmer">
                            <h5>Programmer</h5>
                        </div>
                        <div class="hero-card">
                            <img src="images/AI.png" alt="AI Enthusiast">
                            <h5>AI Enthusiast</h5>
                        </div>
                        <div class="hero-card">
                            <img src="images/IoT.png" alt="IoT Innovator">
                            <h5>IoT Innovator</h5>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif

    @yield('content')

    <!-- Footer -->
    <footer>
        <p>&copy; 2024 Portofolio Anda. All rights reserved. | Designed by <span>Afrisal</span></p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
