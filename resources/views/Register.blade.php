<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/desktop.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mobile.css') }}">
    <link rel="stylesheet" href="{{ asset('css/registerstyle.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-zJx7y3+jG0qu8vdp9dlF3qUExj/qVgLlS5Jh44YmY0kOk5BqTOmJi75lxRg/+8k8Z3W5xnImMK5Hz5y7GEPoXQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Registration</title>
</head>
<div class="background">
    <img src="{{ asset('images/admin building cut.jpg') }}" alt="Samantha">
</div>
<body>
    <form method="POST" action="{{ route('register') }}" class="register-form">
        <!-- Laravel CSRF Protection -->
        @csrf 
     <div class="wrapper">
        <h1>Registration</h1>
        
        <div class="form-group">
            <input type="text" name="username" id="username" placeholder="Username" required>
        </div>
        <div class="form-group">
            <input type="email" name="email" id="email" placeholder="Email" required>
        </div>
        <div class="form-group">
            <input type="password" name="password" id="password" placeholder="Password" required>
        </div>
        
        <div class="redirect-home">
            <button type="submit" class="submit-btn"><a href="{{ route('welcome') }}" class="home-link">Register
        </a></button>

        <div class="home">
            <a href="{{ route('welcome') }}" class="home">Already have an account?
        </a></button>
        </div>
    </form>
    </div>

</body>
</html>
