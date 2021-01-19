<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <!-- Main CSS -->
    <link rel="stylesheet" type="text/css" href="main.css">

    <title>Data Penyebaran Covid-19</title>
  </head>
  <body>

  <!-- JUMBOTRON HEADER -->
  <!-- ============================= -->

  <div class="jumbotron jumbotron-fluid bg-danger text-white">
  <div class="container text-center">
    <h1 class="display-4 font-weight-bold">Data Penyebaran Covid-19 Di Dunia</h1>
    <p class="lead">Mari kita menjaga kesehatan dan imun tubuh kita agar terhindar dari paparan Virus Corona.</p>
  </div>
 </div>

  <!-- GRID CARD -->
  <!-- ============================= -->

<div class="container">

    <div class="row">

        <div class="col-md-4">
            <div class="bg-danger box text-white">
                <div class="row">
                 <div class="col-md-6">
                     <h5>Positif</h5>
                     <h2 id="data-kasus"> 0 </h2>
                     <h5>orang </h5>
                 </div>
                 <div class="col-md-6">
                     <img src="img/sad.svg" alt="">
                 </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="bg-success box text-white">
                <div class="row">
                 <div class="col-md-6">
                     <h5>Sembuh</h5>
                     <h2 id="data-kasus-1"> 0 </h2>
                     <h5>orang </h5>
                 </div>
                 <div class="col-md-6">
                     <img src="img/happy.svg" alt="">
                 </div>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="bg-warning box text-white">
                <div class="row">
                 <div class="col-md-6">
                     <h5>Meninggal</h5>
                     <h2 id="data-kasus-2"> 0 </h2>
                     <h5>orang </h5>
                 </div>
                 <div class="col-md-6">
                     <img src="img/cry.svg" alt="">
                 </div>
                </div>
            </div>
        </div>

        <div class="col-md-12 mt-3">
            <div class="bg-primary box">
                <div class="row">
                 <div class="col-md-3">
                     <h2>
                     <span>Indonesia</span>
                     </h2>
                     <h5 id="data-id">Positif: 0 orang<br>Sembuh: 1000000 orang<br>Meninggal: 0 orang</h5>
                     </div>
                 <div class="col-md-6">
                     <img src="img/indonesia.svg" alt="" style="width: 30%;">
                 </div>
                </div>
            </div>

         </div>

    </div><!--  row -->

   <!-- TABLE -->
   <!-- ============================= -->

    <div class="card mt-2">
        <div class="card-header bg-secondary text-white">
         <b>Data penyebaran Covid-19 berdasarkan provinsi</b>
        </div>

        <div class="card-body">
         <table class="table table-bordered">
            <thead class="bg-dark text-white">
                <th>No.</th>
                <th>Nama Provinsi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
            </thead>
            <tbody id="table-prov">

            </tbody>
         </table>

        </div>
    </div>

</div><!-- container -->

  <!-- FOOTER -->
  <!-- ============================= -->

<footer class="text-center text-success mt-3">Dibuat dengan semangat oleh LuluCoding</footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
  </body>
</html>

<script></script>

// <script src="index.js"></script>