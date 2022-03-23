<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avni</title>
  
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- My CSS -->
    <link rel="stylesheet" href="http://localhost/ujikom_avni/public/asset/css/style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow" style="background-color: grey;">
        <div class="container">
          <a class="navbar-brand" href="#">Avninf</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#About">About</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Project">Project</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact">Contact</a>
              </li>
               <li class="nav-item">
                <a class="nav-link" href ="../admin"><i class="bi bi-gear"></i></a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- Akhir -->
    <!-- Jumboton -->
    <?php foreach($data['profile'] as $pro) : ?>
      <div class="jumbotron text-center pt-4" style="height: 500px">
          <img src="http://localhost/ujikom_avni/public/asset/img/<?= $pro['Image']; ?>" alt="" width="200" class="rounded-circle" data-aos="zoom-in=up" data-aos-duration="2000" />
        <h1 class="display-4"><?= $pro['Nama']; ?></h1>
       <p class="lead"><?= $pro['Jabatan']; ?> | <?= $pro['Perusahaan']; ?></p>
       </div>
       <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a6a4a4" fill-opacity="1" d="M0,288L21.8,250.7C43.6,213,87,139,131,144C174.5,149,218,235,262,272C305.5,309,349,299,393,277.3C436.4,256,480,224,524,202.7C567.3,181,611,171,655,165.3C698.2,160,742,160,785,170.7C829.1,181,873,203,916,224C960,245,1004,267,1047,272C1090.9,277,1135,267,1178,250.7C1221.8,235,1265,213,1309,197.3C1352.7,181,1396,171,1418,165.3L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>       <?php endforeach ?>
      <!-- Akhir -->
      <!-- About -->
      <?php foreach($data['about'] as $ab) : ?>
    <section id="About" style="height: 500px;">
      <div class="row text-center" data-aos="flip-right"data-aos-duration="1000">
        <h2>About Me</h2>
      </div>
      <div class="row justify-content-center fs=5">
        <div class="col-sm-4">
      </div>
      <div class="row justify-content-center fs-5">
        <div class="col-sm-4" data-aos="fade-up"data-aos-duration="3000">
        <p><?= $ab['Column1']; ?></p>
      </div>
      <div class="col-sm-4"data-aos="fade-down"data-aos-duration="3000">
        <p><?= $ab['Column2']; ?></p>
      </div>
    </div>
    </div>
    <?php endforeach ?>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a6a4a4" fill-opacity="1" d="M0,288L21.8,250.7C43.6,213,87,139,131,144C174.5,149,218,235,262,272C305.5,309,349,299,393,277.3C436.4,256,480,224,524,202.7C567.3,181,611,171,655,165.3C698.2,160,742,160,785,170.7C829.1,181,873,203,916,224C960,245,1004,267,1047,272C1090.9,277,1135,267,1178,250.7C1221.8,235,1265,213,1309,197.3C1352.7,181,1396,171,1418,165.3L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>    
    <!-- Project-->
    <?php foreach($data['project'] as $pro) : ?>
    <section id="project">
        <div class="container pt-5">
        <div class="row text-center" data-aos="fade-right" data-aos-duration="2000">
           <h2>project</h2>
           </div>
           <div class="row justify-content-evenly fs-5">
              <div class="col-sm-4">
                <div class="card" data-aos="flip-left" data-aos-duration="2000" style="width:18rem;">
                    <img src="http://localhost/ujikom_avni/public/asset/img/<?= $pro['Foto']; ?>"
                        class="card-img-top" alt="..."/>
                        <div class="card body">
                          <h3><?= $pro['Nama_p']; ?></h3>
                        <p class="card-text"><?= $pro['Ket']; ?></p>
                        </div>
                </div>
              </div>
           </div>
        </div>
    <?php endforeach; ?>
    </section>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a6a4a4" fill-opacity="1" d="M0,288L21.8,250.7C43.6,213,87,139,131,144C174.5,149,218,235,262,272C305.5,309,349,299,393,277.3C436.4,256,480,224,524,202.7C567.3,181,611,171,655,165.3C698.2,160,742,160,785,170.7C829.1,181,873,203,916,224C960,245,1004,267,1047,272C1090.9,277,1135,267,1178,250.7C1221.8,235,1265,213,1309,197.3C1352.7,181,1396,171,1418,165.3L1440,160L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path></svg>   
    <!--Akhir project-->
    <!--contac-->
  <section>
      <div class="row text-center mb-5">
        <h2 >Contact</h2>
      </div>
      <div class="container pt-5">
      <div class="row justify-content-center" data-aos="fade-right" data-aos duration="2000">
      <div class="col-6">
      <form action="http://localhost/ujikom_avni/public/Home/pesan" method="POST">
     <div class="mb-3">
         <label for="name" class="form-label">Nama Lengkap</label>
         <input type="text" class="form-control" name="Nama_k" id="nama" aria-describedby="nama" required>
     </div>
     <div class="mb-3">
         <label for="email" class="form-label">Email</label>
         <input type="email" class="form-control" name="Email" id="email" aria-describedby="email" required>
     </div>
     <div class="mb-3">
         <label for="pesan" class="form-label">Pesan</label>
         <textarea class="form-control" name="Pesan" id="pesan" rows="3" required></textarea>
     </div>
     <button type="submit" class="btn btn-primary">Kirim</button>
</form>
      </div>
      </div>
    </div>
  </section>
  <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320"><path fill="#a6a4a4" fill-opacity="1" d="M0,224L60,192C120,160,240,96,360,112C480,128,600,224,720,224C840,224,960,128,1080,122.7C1200,117,1320,203,1380,245.3L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"></path></svg>
      <footer class="text-center text-white  pb-5" style="background-color: #a6a4a4;">
        <p>Create with <i class="bi bi-heart-fill"></i> by <a href="">Avnif27</a></p>
      </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
  <script>
    AOS.init();
  </script>
    </body>
    </html>