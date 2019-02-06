<!doctype html>
<html lang="pl-PL">
<head>
<title>Orders</title>
<meta charset="UTF-8">
<link rel="stylesheet" href="/www/www/css/bootstrap.min.css">
<link rel="stylesheet" href="/www/www/css/style3.css" type="text/css" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="https://cdn.rawgit.com/rainabba/jquery-table2excel/1.1.0/dist/jquery.table2excel.min.js"></script>
<script src="/www/www/js/printThis.js"></script>
<script src="/www/www/js/skrypt3_raport.js"></script>
</head>
<body>
<!-- gora strony -->
<header class="site-top">
    <div class="container ">
        <div class="d-flex flex-row">
            <div class="flex-fill p-2 bd-highlight">
                <a href="/"><img src="/www/www/img/logo.png"> </a>
            </div>
            <div class="flex-fill align-self-center ">
                <h3 style="width:100%; text-align :left;">Raport  </h3>
            </div>
        </div>
        <div id="hrline">
        </div>
    </div>
</header>
<!-- Tresc strony -->
<section class="container">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 container ramkaLewa">
				<p> Wybierz zakres raportu: <input name="my_datapicker" placeholder="wprowadz datę" type="date" style="width:150px;" id="datepicker"></p>
            </div>
            <div class="col-xs-12 container ramkaLewa">
				<p> Wybierz raport:</p>
				<ul class="nav nav-tabs" id="myTab" role="tablist">
					<li class="nav-item">
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Dzienny</a>
					</li>
					<li class="nav-item">
						<a class="nav-link " id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Miesięczny</a>
					</li>
				</ul>
				<div class="tab-content" id="myTabContent">
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
						<div id="dane_tabela2" ></div>
					</div>
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
						<?php
						//require "dane_do_bazy.php";
							   // lorem
						?>
					</div>
				</div>
            </div>
        </div>
		<div class="w-100"></div>
		<div class="col-xs-12 container ramkaLewa">
			<button type="button" class="btn btn-success" id="idBtn5">Drukuj</button>
			<button type="button" class="btn btn-success" id="idBtn4">Do excel</button>
			<button type="submit" class="btn btn-success btn float-right" id="idBtn2"> Powrót</button>
		</div>
	</div>
</section>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>