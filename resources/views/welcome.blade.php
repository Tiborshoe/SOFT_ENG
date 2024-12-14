<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-zJx7y3+jG0qu8vdp9dlF3qUExj/qVgLlS5Jh44YmY0kOk5BqTOmJi75lxRg/+8k8Z3W5xnImMK5Hz5y7GEPoXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>UCSR CSU-MAIN</title>
</head>
<body>
    


    <div class="header">
        <ul>
        <img src="{{ asset('images/vectorsports.webp') }} " alt="Samantha">
            <li><a href="#home">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="#Serv">Services</a></li>
            <li><a href="#Appoint">Forms</a></li>
            <li><a href="#Feedback">Feedback</a></li>
      

        </ul>
    </div>
    
    <div id="menu">
    <button id="burger-menu" class="burger-icon">☰</button>
</div>

<div id="login" class="login-section hidden">
    <h2>Login</h2>
    <form action="/login" method="POST">
        @csrf
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" placeholder="Enter your email" required>
        
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" placeholder="Enter your password" required>
        
        <button type="submit">Login</button>
        
        <div class="Register">
            <p>Don't have an account? <a href="{{ route('Register') }}">Register</a></p>
        </div>
        
    
    </form>
    
</div>





    <div class="mainhome">
        <div class="backg">
        <img src="{{ asset('images/admin building cut.jpg') }}" alt="Samantha">
        </div>
    <div class="Title" id="home">
        <h1>CSU, University Center for Sports and Recreation </h1>
        <p>Welcome to Caraga State University, a distinguished institution committed to fostering academic excellence and holistic development. Our University Center for Sports and Recreation 
            aims to provide students with comprehensive opportunities to engage in various sports and recreational activities. We believe in the importance of physical fitness, teamwork, and
             personal growth, offering state-of-the-art facilities and expert guidance. Through our diverse programs, we strive to enhance the student experience and promote a balanced lifestyle. Join us as we cultivate not only skilled athletes but also well-rounded individuals prepared to excel in their endeavors</p>
    </div>
    <div class="button">
    <a href="https://web.facebook.com/ucsrcsumain/?_rdc=1&_rdr" target="_blank">Discover us</a>
</div>

    </div>
    
    <div id="desktop-only-message" class="desktop-only-message hidden">
    <p>Desktop view only, not available on mobile.</p>
</div>

   
  
    
    
<div id="about" class="aboutmore">
        <h2>
            <strong>ABOUT ME:</strong>
            <br><br>
            <span style=" font-weight: 490; text-decoration: underline;">Christian Amondina Balasabas</span>
            <br>
            <em>Graphic Designer / Illustrator / Digital Artist / Web Developer</em><br><br>
            
            <strong>EXPERIENCE:</strong><br><br>
            <em>
                2022-2023 | CSU Otaku Guild Illustrator Director<br>
                2023-2024 | CSU Local Student Government Graphic Designer
            </em><br><br>
            
            <strong>EDUCATION:</strong><br><br>
            <em>Bachelor of Science in Computer Science | Caraga State University<br></em><br><br>
            
            - My journey began when I entered university, and I’m now in my third year. I've had the opportunity to meet many talented individuals for collaboration and teamwork. My passion for this field has grown as I’ve worked with various organizations in roles ranging from illustrator to graphic designer. These experiences have shaped me into a better artist. Building connections and communicating with my peers is a key focus for me, and I’ve met countless people in the industry. If you’d like to learn more about me, feel free to check out my Instagram linked on the site!
        </h2>
        
     
        <div class="slideshow-container">
            <div class="mySlides fade">
            <img src="{{ asset('images/admin building.webp') }}" alt="Samantha">
            </div>
          
            
            <div class="button-container">
                <a href="https://www.facebook.com/csumain.ccislsg" target="_blank" class="visit-button">Explore us</a>
            </div>
    </div>
    </div>
  




    
    <div class="about" id="Serv">
    <div class="background"></div> <!-- New div for background image -->
    <div class="servtitle">
    <h1>SERVICES WE OFFER</h1>
    <p>The Sports University Center provides a range of free services to help students and athletes enhance their skills and enjoy their sports experience to the fullest.</p>

    </div>
    
    <ul>
        <li>
            
            <h1>Free Borrowing of Sports Equipment</h1>
            <p>We offer a variety of sports equipment available for students to borrow free of charge. Our inventory includes basketballs, tennis rackets, soccer balls, volleyball nets, and more. All equipment is regularly inspected and maintained to ensure it's in great condition for use. Students can visit the equipment room and borrow what they need by presenting their student ID. This makes it easy to access the gear you need for practice, games, or recreational activities.</p>
        </li>
        <li>
            <h1>Free Coaching Lessons</h1>
            <p>Our coaching lessons are designed to help students of all skill levels improve their abilities in various sports. Experienced coaches offer both individual and group sessions, focusing on developing techniques, strategies, and overall performance. Whether you're just starting or looking to refine advanced skills, our coaches provide personalized feedback to meet your needs. Lessons are free and scheduled regularly, making it convenient to fit them into your routine. This is a great opportunity to learn from professionals and enhance your game.</p>
        </li>
        <li>
            <h1>Free Training Sessions</h1>
            <p>We provide free training sessions aimed at improving physical fitness, endurance, and sport-specific skills. Led by certified trainers, these sessions include strength training, agility exercises, and conditioning workouts. They are open to all students, regardless of experience, allowing everyone to benefit from structured training programs. Sessions are held regularly, and students can join based on their fitness goals or upcoming competitions. These training programs are perfect for those looking to stay active and improve their athletic performance.</p>
        </li>
    </ul>
</div>


    

    <div class="testimonials" id="testimonials">
        <h1>What our student says</h1>
        <p>Some of our university reviews</p>
        
        <div class="row" id="Feedback">
            <div class="testimonials-col">
                <img src="{{ asset('images/user 1.jpg') }}" alt="Emily">
                <div class="text">
                    <p>"I've had an amazing experience at this university..."</p>
                    <h3>Emily</h3>
                    <div class="stars">
                        <h4> ⭐⭐⭐⭐⭐</h4>
                    </div>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="{{ asset('images/user 2.jpg') }}" alt="Michael">
                <div class="text">
                    <p>"Studying at this university has been a life-changing experience for me..."</p>
                    <h3>Michael</h3>
                    <div class="stars">
                        <h4> ⭐⭐⭐⭐⭐</h4>
                    </div>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="{{ asset('images/user 3.jpg') }}" alt="Alexander">
                <div class="text">
                    <p>"I couldn't be happier with my decision to attend this university..."</p>
                    <h3>Alexander</h3>
                    <div class="stars">
                        <h4> ⭐⭐⭐⭐⭐</h4>
                    </div>
                </div>
            </div>
            <div class="testimonials-col">
                <img src="{{ asset('images/user 4.jpg') }}" alt="Samantha">
                <div class="text">
                    <p>"My time at this university has been nothing short of exceptional..."</p>
                    <h3>Samantha</h3>
                    <div class="stars">
                        <h4> ⭐⭐⭐⭐</h4>
                    </div>
                </div>
            </div>
        </div>
    
     <!---
        <div class="contact" id="contact">
            <h1>Enroll for various Online Courses <br> Anywhere From The World</h1>
            <a href="CONTACT US">Enroll Now</a>
        </div>

        <div class="footer" id="about">
            <strong><h4>ABOUT US</h4></strong> 
            <p>Discover more about our social media presence and explore our various online platforms...</p>
            <div class="icons">
                <img src="{{ asset('images/8679364_facebook_circle_icon.png') }}" alt="Facebook">
                <img src="{{ asset('images/5279112_camera_instagram_social media_instagram logo_icon.png') }}" alt="Instagram">
                <img src="{{ asset('images/5279120_play_video_youtube_youtuble logo_icon (1).png') }}" alt="YouTube">
                <img src="{{ asset('images/8547041_tiktok_icon.png') }}" alt="TikTok">
            </div>
        </div> --->


        <div class="footer">

        </div>
   
    </body>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const links = document.querySelectorAll('.header ul li a');
            links.forEach(function(link) {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = this.getAttribute('href');
                    const targetElement = document.querySelector(targetId);
                    targetElement.scrollIntoView({ behavior: 'smooth' });
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
    const burgerMenu = document.getElementById("burger-menu");
    const loginSection = document.getElementById("login");

  // Show/hide menu when clicking the burger
burgerMenu.addEventListener("click", function (event) {
    // Prevent the click event from propagating to the document
    event.stopPropagation();

    // Toggle the visibility
    if (loginSection.classList.contains("hidden")) {
        loginSection.classList.remove("hidden"); // Remove hidden state
        loginSection.classList.add("show"); // Add sliding animation
    } else {
        loginSection.classList.remove("show"); // Remove sliding animation
        loginSection.classList.add("hidden"); // Set back to hidden
    }
});

// Close menu when clicking outside
document.addEventListener("click", function (event) {
    // Check if the click happened outside the login section and burger menu
    if (!loginSection.contains(event.target) && !burgerMenu.contains(event.target)) {
        loginSection.classList.remove("show"); // Remove sliding animation
        loginSection.classList.add("hidden"); // Set back to hidden
    }
});

    
    document.addEventListener("DOMContentLoaded", function() {
    // Check the screen width on page load
    if (window.innerWidth <= 1308) {
        document.getElementById("desktop-only-message").style.display = "block"; // Show message
    }

   
});

});

    </script>
</html>
