
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Multifab Check Up COVID-19</title>
  <meta content="Multifab Check Up COVID-19" name="descriptison">
  <meta content="Multifab Check Up COVID-19" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url() ?>assets/img/mfg.png" rel="icon">
  <link href="<?= base_url() ?>assets/img/mfg.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="<?= base_url() ?>temp/https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>temp/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>temp/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>temp/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url() ?>temp/assets/vendor/line-awesome/css/line-awesome.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>temp/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>temp/assets/css/style.css" rel="stylesheet">

  <!-- =======================================================
  * Template Name: SoftLand - v2.0.0
  * Template URL: https://bootstrapmade.com/softland-bootstrap-app-landing-page-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  <!-- ======= Mobile Menu ======= -->
  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icofont-close js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <!-- ======= Header ======= -->
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

    <div class="container">
      <div class="row align-items-center">

        <div class="col-6 col-lg-2">
          <h1 class="mb-0 site-logo">
                  <!-- <a href="index.html" class="mb-0">Multifab Self Check Up COVID-19</a> -->
                  <img src="<?= base_url() ?>assets/img/logohd.png" width="100px;">
                </h1>
        </div>

        <div class="col-12 col-md-10 d-none d-lg-block">
          <nav class="site-navigation position-relative text-right" role="navigation">

            <ul class="site-menu main-menu js-clone-nav mr-auto d-none d-lg-block">
              <li class="active"><a href="<?= base_url() ?>" class="nav-link">Home</a></li>
              <li><a href="<?= base_url() ?>main/checkup" class="nav-link">Check Up Now</a></li>
               
            </ul>
          </nav>
        </div>

        <div class="col-6 d-inline-block d-lg-none ml-md-0 py-3" style="position: relative; top: 3px;">

          <a href="#" class="burger site-menu-toggle js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
            <span></span>
          </a>
        </div>

      </div>
    </div>

  </header>

  
  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Self Check Up COVID-19</h2>
          </div>
        </div> 
        
        <div class="row" id="step1">
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
              <p> 
                Pernah Kontak dengan pasien dengan pasien positif COVID-19 (Berada dalam satu ruangan yang sama/kontak dalam jarak 1 meter) ATAU Pernah berkunjung ke negara/daerah endemis COVID-19 dalam 14 hari terakhir
              </p>
              <br><br>
              <p align="center">
                <button class="btn btn-success btn-sm" onclick="step1(1)">YA</button>
                <button class="btn btn-primary btn-sm" onclick="step1(0)">TIDAK</button>
              </p>
            </div>
          </div>  
        </div>

        <div class="row" id="step2_no" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
              <p>
                Sedang atau pernah mengalami : <br>
                <table width="50%">
                  <tr>
                    <td>-</td>
                    <td>Demam (> 38 C)</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Pilek</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Batuk</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Sesak Nafas</td>
                  </tr>
                </table>
              </p>
              <br><br>
              <p align="center">
                <button class="btn btn-success btn-sm" onclick="step2_no(1)">YA</button>
                <button class="btn btn-primary btn-sm" onclick="step2_no(0)">TIDAK</button>
              </p>
            </div>
          </div>  
        </div>

        <div class="row" id="step2_yes" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
               <p>
                Sedang atau pernah mengalami : <br>
                <table width="50%">
                  <tr>
                    <td>-</td>
                    <td>Demam (> 38 C)</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Pilek</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Batuk</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Sesak Nafas</td>
                  </tr>
                </table>
              </p>
              <br><br>
              <p align="center">
                <button class="btn btn-success btn-sm" onclick="step2_yes(1)">YA</button>
                <button class="btn btn-primary btn-sm" onclick="step2_yes(0)">TIDAK</button>
              </p>
            </div>
          </div>  
        </div>

        <div class="row" id="step3_no" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
              <p>
                <img src="<?= base_url() ?>assets/img/tidak.png" width="100px;">
              </p> 
              <p>
                Anda Tidak perlu memeriksa diri kerumah sakit. Selalu Jaga Kesehatan Anda
              </p>
              <br><br>
              <p align="center">
                <a href="<?= base_url() ?>" class="btn btn-success btn-sm" onclick="">Kembali ke beranda</a> 
                 
              </p>
            </div>
          </div>  
        </div>

        <div class="row" id="step3_yes" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
             <p>
                <img src="<?= base_url() ?>assets/img/ya.png" width="100px;">
              </p> 
              <p>
                Periksa diri kedokter terdekat dan istirahat yang cukup.
              </p>
              <br><br>
              <p align="center">
                <a href="<?= base_url() ?>" class="btn btn-success btn-sm" onclick="">Kembali ke beranda</a> 
                 
              </p>  
            </div>
          </div>  
        </div>

         <div class="row" id="step3_yes_yes" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
             <p>
                <img src="<?= base_url() ?>assets/img/ya.png" width="100px;">
              </p> 
              <p>
                Hubungi 119 EXT 9 Atau periksakan diri ke rumah sakit rujukan COVID-19 didaerah anda.
              </p>
              <br><br>
              <p align="center">
                <a href="<?= base_url() ?>" class="btn btn-success btn-sm" onclick="">Kembali ke beranda</a> 
                 
              </p>  
            </div>
          </div>  
        </div>



        <div class="row" id="step3_yes_no" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;"> 
               <p>
                Karantina diri anda selama 14 Hari, terhitung setelah kontak/kunjungan<br>
                Selama 14 Hari Karantina diri, Anda mengalami : 
                <table width="50%">
                  <tr>
                    <td>-</td>
                    <td>Demam (> 38 C)</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Pilek</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Batuk</td>
                  </tr>
                  <tr>
                    <td>-</td>
                    <td>Sesak Nafas</td>
                  </tr>
                </table>
              </p>
              <br><br>
              <p align="center">
                <button class="btn btn-success btn-sm" onclick="step4(1)">YA</button>
                <button class="btn btn-primary btn-sm" onclick="step4(0)">TIDAK</button>
              </p>
            </div>
          </div>  
        </div>





        <div class="row" id="step4_no" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
              <p>
                <img src="<?= base_url() ?>assets/img/tidak.png" width="100px;">
              </p> 
              <p>
                Anda Tidak perlu memeriksa diri kerumah sakit. Selalu Jaga Kesehatan Anda
              </p>
              <br><br>
              <p align="center">
                <a href="<?= base_url() ?>" class="btn btn-success btn-sm" onclick="">Kembali ke beranda</a> 
                 
              </p>
            </div>
          </div>  
        </div>

        <div class="row" id="step4_yes" hidden>
          <div class="col-md-12">
            <div class="step"  style="border: 1px solid #54de1d;">
               
             <p>
                <img src="<?= base_url() ?>assets/img/ya.png" width="100px;">
              </p> 
              <p>
                Hubungi 119 EXT 9 Atau periksakan diri ke rumah sakit rujukan COVID-19 didaerah anda.
              </p>
              <br><br>
              <p align="center">
                <a href="<?= base_url() ?>" class="btn btn-success btn-sm" onclick="">Kembali ke beranda</a> 
                 
              </p>  
            </div>
          </div>  
        </div>
 




      </div>
    </section>

    <section class="section">

      <div class="container"> 



      </div>

    </section>
 

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>COVID-19</h3>
          <p>Self assesment ini adalah alat sederhana yang bisa membantu menentukan apakah Anda sehat-sehat saja atau ada gejala yang memerlukan penilaian, pemeriksaan dan pengujian lebih lanjut untuk COVID-19.</p>
          <p class="social">
            <a href="#"><span class="icofont-twitter"></span></a>
            <a href="#"><span class="icofont-facebook"></span></a>
            <a href="#"><span class="icofont-dribbble"></span></a>
            <a href="#"><span class="icofont-behance"></span></a>
          </p>
        </div>
        <div class="col-md-7 ml-auto">
          <div class="row site-section pt-0">
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Website</h3>
              <ul class="list-unstyled">
                <li><a href="https://ncov2019.live/data">Live Data Covid-19</a></li>
                <li><a href="https://multifab.co.id">Multifab</a></li>
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Media Sosial</h3>
              <ul class="list-unstyled">
                <li><a href="#">COVID-19</a></li>
                <li><a href="#">Corona</a></li>
                <li><a href="#">Virus</a></li> 
              </ul>
            </div>
            <div class="col-md-4 mb-4 mb-md-0">
              <h3>Hubungi</h3>
              <ul class="list-unstyled">
                <li><a href="#">Call center (021) 7800824</a></li>
                <li><a href="#">Jl. Ampera Raya No.20, Cilandak Tim., Kec. Ps. Minggu, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12560</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright IT Department. All Rights Reserved</p>
          <div class="credits"> 
            Designed by <a href="https://multifab.co.id">PT. Multi Fabrindo Gemilang</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url() ?>temp/assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/aos/aos.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="<?= base_url() ?>temp/assets/vendor/jquery-sticky/jquery.sticky.js"></script>

  <!-- Template Main JS File -->
  <script src="<?= base_url() ?>temp/assets/js/main.js"></script>

</body>

</html>

<div style="overflow:auto; z-index: 2000;
  position: absolute; width:100%; height:968px;">
    <div class="float-button-wrapper">
        <div   style="position: fixed;    left: 10px; bottom: 10px;">
            <a target="_blank" href="https://web.whatsapp.com/send?phone=62895367330194&text=Help Covid-19 ?">
                <img src="<?= base_url() ?>assets/img/doctor-help.png" title="Contact Me" style="width:150px;" >
            </a>
        </div>
    </div>
</div>




<script type="text/javascript">
  function step1(step1) {
      document.getElementById('step1').hidden = true;
    if (step1=="0"){
      document.getElementById('step2_no').hidden = false;
    }else{
      document.getElementById('step2_yes').hidden = false;
    }
  }


  function step2_no(step2_no) {
    document.getElementById('step2_no').hidden = true;
    if (step2_no=="0"){
      document.getElementById('step3_no').hidden = false;
    }else{
      document.getElementById('step3_yes').hidden = false;
    }
  }

  function step2_yes(step2_yes) {
    document.getElementById('step2_yes').hidden = true;
    if (step2_yes=="0"){
      document.getElementById('step3_yes_no').hidden = false;
    }else{
      document.getElementById('step3_yes_yes').hidden = false;
    }
  }

  function step4(step4) {
    document.getElementById('step3_yes_no').hidden = true;
    if (step4=="0"){
      document.getElementById('step4_no').hidden = false;
    }else{
      document.getElementById('step4_yes').hidden = false;
    }
  }
</script>