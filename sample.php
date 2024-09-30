<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Group 8: Team Gin with Nestea</title>
    <link rel="stylesheet" href="style.css">
    <style>
        .contact-section {
            position: absolute;
            bottom: 20px;
            right: 20px;
            width: 250px; 
            padding: 1rem;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
            z-index: 1000;
        }

        .contact-section h2 {
            font-size: 1.2rem; 
            margin-bottom: 1rem;
            text-align: center;
        }

        .contact-section .form-group {
            margin-bottom: 0.5rem; 
        }

        .contact-section input[type="text"],
        .contact-section input[type="email"]
        .contact-section input[type="password"]
         {
            width: 100%;
            padding: 0.3rem;
            font-size: 0.9rem; 
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .contact-section input[type="submit"] {
            width: 100%;
            padding: 0.5rem;
            font-size: 0.9rem; 
            background-color: #5c9e8f;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .contact-section input[type="submit"]:hover {
            background-color: #4a8270;
        }

        .slideshow-container {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .slideshow-container img {
            position: absolute;
            width: 100%;
            height: auto;
            max-height: 100%; 
            object-fit: cover;
            object-position: center; 
            opacity: 0;
            transition: opacity 1s ease-in-out;
        }

        .slideshow-container img.active {
            opacity: 1;
        }
    </style>
</head>
<body>
    <header>
        <h1>Group 8: Team Gin with Nestea</h1>
    </header>

    <div class="container">

        <div class="contact-section">
            <div class="slideshow-container">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/461077379_448299091603968_3154018511542658319_n.jpg?stp=dst-jpg_p320x320&_nc_cat=104&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEjHqlXoYp7wKiN6iPDvNdstUXaSquXjG-1RdpKq5eMb6BhfoxtD0Y0sbL23Dxjit51K7Jm3XLp7wVZCqU3-JL7&_nc_ohc=60Tf4AfMiUAQ7kNvgH2BKQk&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=A1XgeK6KE0QIO1eb-e2C-8o&oh=03_Q7cD1QG0C1pZwiNzMooH5DbMCkWHFJJ6Bwwmf9o92-NX2maFCQ&oe=671DF9D8" class="slide" alt="Slide 1">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/455323578_883378626985626_3142330665925073083_n.jpg?stp=dst-jpg_s280x280&_nc_cat=100&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeGFRKKdY0POtWqqr77U3v1kwZBBJtjwkD7BkEEm2PCQPkOTB_VYoYbjQsMOjFNA1DT0Y9DEEUpDX59yhCgR6q7i&_nc_ohc=9FaNyIJECmEQ7kNvgFXGe2L&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=AadjM3qaa_BvQtRJM7nCa_c&oh=03_Q7cD1QF119AnZvKa4RRyYm6SBiM1xKEstEYqiP2NK3GliVD9vg&oe=671E1364" class="slide" alt="Slide 2">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/456473554_1026343972026449_8564159398090398413_n.jpg?stp=dst-jpg_s526x395&_nc_cat=101&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeHfC1x5U3VGbqh6l_acDtpBDx12TDmEQJAPHXZMOYRAkH5LuEfK5rGNbWOHmd8OxqTPqDt1m_HjyZEf1k3WM9qR&_nc_ohc=TbYavQ-QJ0UQ7kNvgEyh9A9&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=AGYBpTNLuaZULSfg0YQD6Zc&oh=03_Q7cD1QGQHSEJPtbKmX8SeUjVOLB1YhOEriewdn9u5zqc522X2A&oe=671DE931" class="slide" alt="Slide 3">
                <img src="https://scontent.xx.fbcdn.net/v/t1.15752-9/448759565_3349818431978873_1983703846100019516_n.jpg?stp=dst-jpg_p75x225&_nc_cat=105&ccb=1-7&_nc_sid=0024fc&_nc_eui2=AeEDYms4VWaMXMF7eFvn7_sS5g7sWQuqR_jmDuxZC6pH-BQY6LV6ogZ-8SRgFxZuKxnENSU24IztCO2Xwj9TroYZ&_nc_ohc=7rmb_Mrg4mcQ7kNvgF6kBEA&_nc_ad=z-m&_nc_cid=0&_nc_ht=scontent.xx&_nc_gid=AGYBpTNLuaZULSfg0YQD6Zc&oh=03_Q7cD1QFVFNDmaWYxCUkwZNOZN-RLlI6_SXvd9bd2DfwtRh6UoA&oe=671E07F5" class="slide" alt="Slide 4">
                <img src="https://scontent.fmnl9-4.fna.fbcdn.net/v/t1.6435-9/43277912_694582184243835_7401100357570396160_n.jpg?_nc_cat=105&ccb=1-7&_nc_sid=13d280&_nc_eui2=AeHUmXCJXGrXmz6a3kd8iQyfBR2OqKUhtPMFHY6opSG080VgUUUBZLnoO1fER9G4B36BZVGgWS9UviOw6EpPolol&_nc_ohc=1hL_2AqZfYYQ7kNvgH3JRSz&_nc_ht=scontent.fmnl9-4.fna&_nc_gid=AOm-2HADiVRnvLcVi9E1iJS&oh=00_AYAB2mFjjSH6Lx2fBc4SsI4sB_T21bybRPHWpvgqdjQJ0A&oe=671DEEAA" class="slide" alt="Slide 5">
            </div>

            <div class="form-content">
                <h2>Log In</h2>
                <form id="contactForm" method="post" action="process.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                     <div class="form-group">
            <label for="password">Password</label>
            <input type="password" id="password" name="password" required>
            <input type="checkbox" id="showPassword"> 
                     </div>
                    
                    <input type="submit" value="Submit">
                </form>
            </div>
        </div>
    </div>

    <script>
        let slideIndex = 0;
        const slides = document.querySelectorAll('.slideshow-container img');
        const totalSlides = slides.length;

        function showSlides() {
            slides.forEach((slide, index) => {
                slide.classList.remove('active');
                if (index === slideIndex) {
                    slide.classList.add('active');
                }
            });

            slideIndex = (slideIndex + 1) % totalSlides;
        }

        setInterval(showSlides, 3000); 
        showSlides(); 
    </script>
</body>
</html>