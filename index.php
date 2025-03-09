<?php
include 'koneksi.php';

if(isset($_POST['kirim'])) {
    $nama = mysqli_real_escape_string($conn, $_POST['nama']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $pesan = mysqli_real_escape_string($conn, $_POST['pesan']);
    
    $query = "INSERT INTO inkaaa (nama, email, pesan) VALUES ('$nama', '$email', '$pesan')";
    
    if(mysqli_query($conn, $query)) {
        echo "<script>alert('Pesan berhasil dikirim!');</script>";
    } else {
        echo "<script>alert('Error: " . mysqli_error($conn) . "');</script>";
    }
}
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Requierd meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <title>Portofolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- My Style -->
   <link rel="stylesheet"  href="style.css">
   <link rel="stylesheet" href="responsive.css">

    <!--Link Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@300;400;700&display=swap" rel="stylesheet">

    <title>Web Portofolio||Inka Nararya</title>
  </head>
  <body>
    
    <!-- Navbar -->

    <div class="container-fluid position-fixed nav-dark" id="nav">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-dark bg-body-transparant">
                <div class="row justify-content-center">
                    <div class="col-8">
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                            <div class="navbar-nav">
                                <a class="nav-link me-3" aria-current="page" href="#hero">HOME</a>
                                <a class="nav-link me-3" href="#about">ABOUT</a>
                                <a class="nav-link me-3" href="#skill">SKILLS</a>
                                <a class="nav-link me-3" href="#portofolio">PORTOFOLIO</a>
                                <a class="nav-link me-3" href="#contact">CONTACT</a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    
    <!-- End Navbar -->


    <!-- Hero Section -->

    <section id="hero">
        <div class="container">
            <div class="row position-relative">
                <div class="col-lg-5 col-md-6 offset-lg-1 my-auto order-1 text-center text-lg-start">
                    <h2>Hallo</h2>
                    <h1 class="fw-bold">I am Inka Nararya</h1>
                    <p>UI UX Designer || Web Developer || Graphic Designer<br>
                        Student at <span class="fw-bold color-acsent"> SMK TELKOM </span> 
                    </p>

                    <a href="#about"><button class="btn btn-custom1">Let's Talk</button></a>

                    <div class="social-icon position-absolute  bottom-lg-0 ">
                        <!--Linkedin-->
                        <a href="https://www.linkedin.com/in/inka-nararya-332905352/"><img src="img/Linkedin.png"></a>                   
                        <!--Instagram-->
                        <a href="https://www.instagram.com/dhaniinka/?utm_source=ig_web_button_share_sheet"><img src="img/Instagram.png"></a>
                        <!--Pinterest-->
                        <a href="https://id.pinterest.com/541241092i/a"><img src="img/Pinterest.png"></a>
                        <!--Behance-->
                        <a href="https://www.behance.net/inkanararya"><img src="img/Behance.png"></a>
                        <!--Dribble-->
                        <a href="https://dribbble.com/dhaniinka"><img src="img/Dribbble.png"></a>
                        <!--GitHub-->              
                        <a href="https://github.com/dhaniinka"><img src="img/GitHub.png"></a>
                        <br>
                        <a href="#" class="fw-bold text-decoration-none cv"> Inka <span class="color-acsent">Nararya Karuniawardhani</span></a>
                    </div>
                </div>

                <div class="col-lg-5 col-md-6 order-md-2">
                    <img src="img/HERO BANNER.png" width="80%" class="float-lg-end mx-auto d-block" alt="">
                </div>

            </div>
        </div>
    
    </section>

    <!--End Hero Section -->

    <!--About -->

    <section id="about">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h1 class="text-center fw-bold">About Me</h1>
                        <hr>
                    </div>

                    <div class="col-lg-10 col-md-12 mt-3">
                        <p class="text-center color-acsent">"Di mana pun engkau berada selalulah menjadi yg terbaik dan berikan yang terbaik dari yang bisa kita berikan."</p>
                        <p class="text-center">Saya Inka Nararya Karuniawardhani seorang siswi dari <span class="fw-bold"> SMK Telkom Purwokerto </span> jurusan PPLG atau 
                            <span class="fw-bold">Pengembangan Perangkat Lunak dan Gim.</span> 
                             Saya mudah beradaptasi dan mampu bekerja secara individu maupun berkolaborasi dengan tim, bekerja secara cepat dan tepat. 
                             Saat ini saya masih berada di kelas 10, walapun terbilang cukup muda, tapi saya sudah memiliki beberapa skill yang saya pelajari di SMK Telkom ini 
                             <span class="fw-bold"> Frontend, Web Design, UI UX Design.</span>  Cek detail di bawah.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End About -->

    <!-- Skill -->


    <section id="skill">
        <div class="container-fluid">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-10">
                        <h1 class="fw-bold text-center">Skills & Education</h1>
                        <hr>
                    </div>

                    <div class="col-lg-10 col-med-12 text-center mt-5">
                        <img src="img/images 1.png" width="50%" alt="">
                        <br>
                        <img src="img/FG 1.png" width ="30%" alt="">
                        <img src="img/AI 1.png" width="20%" alt="">
                    </div>
                </div>

                <div class="row justify-content-center skill-card">
                    <div class="col-lg-3 col-md-4 col-sm-10">
                        <div class="card p-4">
                            <div class="row text-center text-sm-start">
                                <div class="col pt-5">
                                    <div class="col">
                                        <!-- SD -->
                                        <h1 class="text-center fw-bold ">SD</h1>
                                        <hr>
                                        <p class="text-center fw-bold color-black mt-5">SD Negri 3 <br> Sokanegara</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-10">
                        <div class="card p-4">
                            <div class="row text-sm-start">
                                <div class="col pt-5">
                                    <div class="col">
                                        <!-- SMP -->
                                        <h1 class="text-center fw-bold">SMP</h1>
                                        <hr>
                                        <p class="text-center fw-bold color-black mt-5">SMP Telkom <br> Purwokerto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-10">
                        <div class="card p-4">
                            <div class="row text-sm-start">
                                <div class="col pt-5">
                                    <div class="col">
                                        <!-- SMK -->
                                        <h1 class="text-center fw-bold">SMK</h1>
                                        <hr>
                                        <p class="text-center fw-bold color-black mt-5" >SMK Telkom <br> Purwokerto</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- End Skill -->

    <!-- Portofolio -->

    <section id="portofolio">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12">
                    <h1 class="text-center fw-bold">Portofolio</h1>
                    <hr>
                </div>
            </div>

                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 d-flex pt-5">
                        <div class="card border-3 m-1">
                            <img src="img/P_BG.png" alt="">
                        </div>
                        <div class="card border-3 m-1">
                            <img src="img/P_FIBE.png" alt="">
                        </div>
                        <div class="card border-3 m-1">
                            <img src="img/P_KA.png" alt="">
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-10 col-md-12 d-flex pt-5">
                        <div class="card border-3 m-1">
                            <img src="img/P_STADY.png" alt="">
                        </div>
                        <div class="card border-3 m-1">
                            <img src="img/P_DPKC.png" alt="">
                        </div>
                        <div class="card border-3 m-1">
                            <img src="img/P_HB.png" alt="">
                        </div>
                    </div>
                </div>
        </div>
    </section>

    <!-- End Portofolio-->

    <!-- Contact -->

    <section id="contact">
        <div class="row justify-content-center">
            <div class="col-10 width-800">
                <h1 class="text-center fw-bold">Contact Me</h1>
                <hr>
            </div>
        </div>
        <div class="contact-container">
            <form class="contact-form" action="process_message.php" method="POST">
                <div class="form-group">
                    <label for="name">Nama</label>
                    <input type="text" name="name" placeholder="Full Name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" placeholder="Email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="pesan" placeholder="Message" required></textarea>
                </div>
                <button type="submit">Send Message</button>
            </form> 
        </div>
    </section>
        

    <!--End Contact-->

    <!-- Footer -->

    <footer class="py-5 footer">
        <div class="container">
            <div class="row">
                <div class="social-icon-footer text-center">
                    <!--Linkedin-->
                    <a href="https://www.linkedin.com/in/inka-nararya-332905352/"><img src="img/Linkedin.png"></a>                   
                    <!--Instagram-->
                    <a href="https://www.instagram.com/dhaniinka/?utm_source=ig_web_button_share_sheet"><img src="img/Instagram.png"></a>
                    <!--Pinterest-->
                    <a href="https://id.pinterest.com/541241092i/a"><img src="img/Pinterest.png"></a>
                    <!--Behance-->
                    <a href="https://www.behance.net/inkanararya"><img src="img/Behance.png"></a>
                    <!--Dribble-->
                    <a href="https://dribbble.com/dhaniinka"><img src="img/Dribbble.png"></a>
                    <!--GitHub-->              
                    <a href="https://github.com/dhaniinka"><img src="img/GitHub.png"></a>
                    <br>
                    <a href="#" class="fw-bold text-decoration-none cv"> Inka <span class="color-acsent">Nararya Karuniawardhani</span></a>
                </div>
            </div>
        </div>
    </footer>

    <!-- End Footer -->

    <!-- My Script -->
     
    <script src="/js/script.js"></script>
    <!-- End My Script-->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</body>
</html>
