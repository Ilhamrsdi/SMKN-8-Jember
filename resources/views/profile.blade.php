<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Profil SMKN 8 Jember</title>

<style>
body {
  margin: 0;
  font-family: Arial, sans-serif;
}

/* SECTION PROFIL */
.profil {
  background: linear-gradient(to bottom, #ee935d, #b85c2d);
  padding: 40px 20px;
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
  grid-template-columns: repeat(2, 1fr);
  gap: 25px;
  max-width: 900px;
  margin: auto;
}

/* CARD */
.card {
  background: #dcdcdc;
  padding: 10px;
  border-radius: 5px;
  border: 5px solid #eee;
  box-shadow: 0 4px 10px rgba(0,0,0,0.2);
}

/* IMAGE */
.card img {
  width: 100%;
  height: 199px;
  object-fit: cover;
  border-radius: 3px;
}

/* RESPONSIVE */
@media(max-width:768px){
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
      <img src="https://smkn8jember.sch.id/wp-content/uploads/2025/11/572890972_25171343909166641_5889162738581101429_n.jpg" alt="foto 1">
    </div>

    <div class="card">
      <img src="profile2.jpg" alt="foto 2">
    </div>

    <div class="card">
      <img src="profile3.jpg" alt="foto 3">
    </div>

    <div class="card">
      <img src="profile4.jpg" alt="foto 4">
    </div>  

  </div>
</div>

</body>
</html>