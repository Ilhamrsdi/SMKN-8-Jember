<<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Poppins', sans-serif;
}

body{
background:#f2f2f2;
display:flex;
justify-content:center;
align-items:flex-start; /* 🔥 ini penting */
height:100vh;
padding-top:60px; /* 🔥 dorong ke atas */
}

.login-container{
width:340px;
text-align:center;
}

.title{
color:#f5a623;
font-size:36px;
font-weight:700;
margin-bottom:5px;
margin-top:-40px;
}

.welcome{
font-size:14px;
color:#222;
margin-bottom:35px;
}

.input-group{
background:#efe1c7;
padding:14px;
border-radius:10px;
margin-bottom:15px;
}

.input-group input{
border:none;
background:transparent;
outline:none;
width:100%;
font-size:14px;
}

.password{
display:flex;
align-items:center;
justify-content:space-between;
}

.password i{
color:#f5a623;
cursor:pointer;
}

.forgot{
text-align:right;
margin-top:-5px;
margin-bottom:20px;
}

.forgot a{
font-size:12px;
color:#f5a623;
text-decoration:none;
}

.login-btn{
width:100%;
background:#f5a623;
border:none;
padding:13px;
border-radius:10px;
color:white;
font-size:16px;
cursor:pointer;
margin-bottom:15px;
}

.register{
font-size:13px;
color:#333;
margin-bottom:120px;
}

.divider{
font-size:12px;
color:#666;
margin-bottom:15px;
}

.social-login{
display:flex;
justify-content:center;
gap:20px;
}

.icon{
width:40px;
height:40px;
border-radius:50%;
background:white;
display:flex;
justify-content:center;
align-items:center;
box-shadow:0 2px 5px rgba(0,0,0,0.1);
font-size:18px;
cursor:pointer;
}

.google{
color:#db4437;
}

.facebook{
color:#1877f2;
}

</style>
</head>

<body>

<div class="login-container">

<h2 class="title">Login</h2>

<p class="welcome">Selamat Datang di<br>Website Kami</p>

<form>

<div class="input-group">
<input type="email" placeholder="Email">
</div>

<div class="input-group password">
<input type="password" id="password" placeholder="Password">
<i class="fa-solid fa-eye-slash" id="togglePassword"></i>
</div>

<div class="forgot">
<a href="#">Lupa Kata Sandi?</a>
</div>

<button class="login-btn">Masuk</button>

<p class="register">Buat Akun Baru</p>

</form>

<div class="divider">Or continue with</div>

<div class="social-login">

<div class="icon google">
<i class="fa-brands fa-google"></i>
</div>

<div class="icon facebook">
<i class="fa-brands fa-facebook-f"></i>
</div>

</div>

</div>

<script>
const toggle = document.getElementById("togglePassword");
const password = document.getElementById("password");

toggle.addEventListener("click", function () {
  if (password.type === "password") {
    password.type = "text";
    this.classList.remove("fa-eye-slash");
    this.classList.add("fa-eye");
  } else {
    password.type = "password";
    this.classList.remove("fa-eye");
    this.classList.add("fa-eye-slash");
  }
});
</script>

</body>
</html>