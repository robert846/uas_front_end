<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Track Anywhere - Fit&Thrive</title>
    <link rel="stylesheet" href="{{ asset('front/css/styles.css')}}">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #b3acac;
            margin: 0;
            padding: 0;
        }
    </style>
</head>
<body>

    <!-- Header Section (Tetap Sama) -->
    <header id="navbar">
        <div class="logo">Fit&Thrive</div>
    </header>
    

    <!-- Features Section -->
    <section id="features1" class="features-section1">
        <div class="features-container">

            <a href="#" class="feature" data-images='["front/image/abs_exercise/crunch.gif", "front/image/abs_exercise/bicyclecrunch.gif", "front/image/abs_exercise/pulse.gif"]'>
                <img src="front/image/abs.jpg" alt="bmi" class="feature-icon-bmi">
                <h3>Abs Exercise</h3>
                <p><strong>These are our choice of the ten best abs exercises.</strong> Try our abs exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["front/image/chest_exercise/pushup.gif", "front/image/chest_exercise/dip.gif", "front/image/chest_exercise/bench.gif"]'>
                <img src="front/image/chest.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3> Chest Exercise </h3>
                <p><strong>These are our choice of the ten best chest exercises</strong> Try our chest exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["front/image/leg_exercise/squat.gif", "front/image/leg_exercise/lunges.gif", "front/image/leg_exercise/sidelunges.gif"]'>
                <img src="front/image/leg.jpeg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Leg Exercise </h3>
                <p><strong>These are our choice of the ten best leg exercises</strong> Try our leg exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["front/image/arm_exercise/curl.gif", "front/image/arm_exercise/curls.gif", "front/image/arm_exercise/raise.gif"]'>
                <img src="front/image/arm.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Arm Exercise </h3>
                <p><strong>These are our choice of the ten best arm exercises</strong> Try our arm exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["front/image/cardio_exercise/squatjum.gif", "front/image/cardio_exercise/jacks.gif", "front/image/cardio_exercise/jam.gif"]'>
                <img src="front/image/cardio.jpeg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Cardio Exercise </h3>
                <p><strong>These are our choice of the ten best cardio exercises</strong> Try our cardio exercise to get instant results and take control of your health today!</p>
            </a>

             <a href="#" class="feature" data-images='["front/image/fullbody_exercise/pistol.gif", "front/image/fullbody_exercise/burpss.gif", "front/image/fullbody_exercise/all.gif"]'>
                <img src="front/image/fullbody.jpg" alt="bmi" class="feature-icon-bmi"> <!-- Ganti dengan URL gambar/icon -->
                <h3>Full Body Exercise </h3>
                <p><strong>These are our choice of the ten best exercises</strong> Try our exercise to get instant results and take control of your health today!</p>
            </a>
           
            
        </div>

    <!-- Footer Section (Tetap Sama) -->
    <footer>
        <div class="footer-content">
            <h3>Fit&Thrive</h3>
            <p>Your ultimate guide to health and fitness, helping you thrive both mentally and physically.</p>
            <ul class="socials">
                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>&copy; 2024 Fit&Thrive. All rights reserved.</p>
        </div>
    </footer>

    <div id="popupModal" class="popup-modal">
        <div class="popup-content">
            <span class="close">&times;</span>
            <div class="slider">
                <div class="slides">
                    <img id="popupImage1" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                    <img id="popupImage2" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                    <img id="popupImage3" src="" alt="Exercise Image" class="popup-image" style="display:none;">
                </div>
            </div>
            <button class="prev" onclick="changeSlide(-1)">&#10094;</button>
            <button class="next" onclick="changeSlide(1)">&#10095;</button>
        </div>
    </div>

    <script src="{{ asset('front/js/script.js')}}"></script>
</body>
</html>

