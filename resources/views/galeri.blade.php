<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galeri SMKN 8 Jember</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  min-height: 100vh;
  background: linear-gradient(to bottom, #FF9E62, #E54500);
}

/* CONTAINER */
.container {
  padding: 40px 20px 80px; /* bawah diperbesar */
  text-align: center;
}

/* TITLE */
h2 {
  color: white;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

/* GRID */
.grid {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 35px; /* diperbesar dari 25px */
  max-width: 1000px;
  margin: auto;
}

/* CARD */
.card {
  background: #e6e6e6;
  padding: 10px;
  border-radius: 5px;
  border: 5px solid #ddd;
  box-shadow: 0 6px 12px rgba(0,0,0,0.2);
  transition: transform 0.3s ease, box-shadow 0.3s ease;
  cursor: pointer;
}

/* IMAGE */
.card img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  border-radius: 3px;
}

/* RESPONSIVE */
@media(max-width: 900px){
  .grid {
    grid-template-columns: repeat(2, 1fr);
  }
}

/* EFEK KLIK */
.card img {
  width: 100%;
  height: 350px;
  object-fit: cover;
  border-radius: 3px;
  cursor: pointer;
  transition: transform 0.3s ease, box-shadow 0.3s ease;
}

/* saat diklik */
.card.active {
  transform: scale(1.05); /* lebih kecil biar tidak terlalu zoom */
  box-shadow: 0 12px 25px rgba(0,0,0,0.4);
  z-index: 2;
  position: relative;
}

@media(max-width: 600px){
  .grid {
    grid-template-columns: 1fr;
  }
}
</style>
</head>

<body>

<div class="container">
  <h2>GALERI SMKN 8 JEMBER</h2>

  <div class="grid">
    
    <div class="card">
      <img src="{{ asset('images/galeri1.jpg') }}" alt="galeri">
    </div>

    <div class="card">
      <img src="{{ asset('images/galeri2.jpg') }}" alt="galeri">
    </div>

    <div class="card">
      <img src="{{ asset('images/galeri3.jpg') }}" alt="galeri">
    </div>

    <div class="card">
      <img src="{{ asset('images/galeri4.jpg') }}" alt="galeri">
    </div>

    <div class="card">
      <img src="{{ asset('images/galeri5.jpg') }}" alt="galeri">
    </div>

    <div class="card">
      <img src="{{ asset('images/galeri6.jpg') }}" alt="galeri">
    </div>

  </div>
</div>

<script>
  const cards = document.querySelectorAll('.card');

  cards.forEach(card => {
    card.addEventListener('click', () => {
      card.classList.toggle('active');
    });
  });
</script>
</body>
</html>