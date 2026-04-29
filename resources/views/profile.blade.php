<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profile SMKN 8 Jember</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
  min-height: 100vh;
  background: linear-gradient(to bottom, #FF9E62, #B25E39);
}

/* SECTION PROFIL */
.profil {
  padding: 40px 20px 80px;
  min-height: 100vh;
}

/* TITLE */
.profil h2 {
  text-align: center;
  color: white;
  margin-bottom: 30px;
  letter-spacing: 1px;
}

/* GRID */
.grid {
  display: grid;
  grid-template-columns: repeat(2, 1fr); /* dari 3 jadi 2 */
  gap: 30px;
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
  height: 250px;
  object-fit: cover;
  border-radius: 3px;
}

/* SAAT DIKLIK */
.card.active {
  transform: scale(1.05);
  box-shadow: 0 12px 25px rgba(0,0,0,0.4);
  z-index: 2;
  position: relative;
}

/* RESPONSIVE */
@media(max-width:1200px){
  .grid {
    grid-template-columns: 1fr;
  }
}
</style>
</head>

<body>

<div class="profil">
  <h2>PROFIL SMKN 8 JEMBER</h2>

  <div class="grid">
    
    <div class="card">
      <img src="{{ asset('images/profil1.jpg') }}" alt="foto 1">
    </div>

    <div class="card">
      <img src="{{ asset('images/profil2.jpg') }}" alt="foto 2">
    </div>

    <div class="card">
      <img src="{{ asset('images/profil3.jpg') }}" alt="foto 3">
    </div>

    <div class="card">
      <img src="{{ asset('images/profil4.jpg') }}" alt="foto 4">
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