<!doctype html>
<html lang="pl-PL">
<head>	
<title>Orders</title>
	<meta charset="sUTF-8">	<meta name="viewport" content="width=device-width, initial-scale=1">	<!--  datepicker  HTML -->
	
	<!--css -->	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">	
	<link rel="stylesheet" href="/www/www/css/style.css" type="text/css" />

	<!--//jquery   -->
	<script	src="https://code.jquery.com/jquery-3.3.1.js"	integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="	crossorigin="anonymous"></script>
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
	<script type="text/javascript" src="/www/www/js/skrypt3.js"></script>
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
				<h3>Wprowadź dane </h3>   
			</div>             
			<div class="flex-fill align-self-center ">
			</div> 
		</div>
        <div id="hrline"></div>  
	</div>
</header>
<!-- Tresc strony -->
<section class="container">	
	<div class="container">		
		<div class="row">			
			<div class="col-xs-12 container ramkaLewa ">
				<p>Wybierz zakres raportu: <input type="date" name="datepicker" placeholder="wprowadź date:" style="width:160px; display:inline;" id="datepicker"></p>	
			</div>			
			<div class="col-xs-12 container ramkaLewa">	
				<p> Wybierz raport:</p>	
				<ul class="nav nav-tabs" id="myTab" role="tablist">	
					<li class="nav-item">						
						<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Opoka</a>	
					</li>			
					<li class="nav-item">		
						<a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Mucha</a>					
					</li>				
				</ul>			
				<div class="tab-content" id="myTabContent">	
					<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">						
						<div id="dane_tabela" class="fixed_headers"></div>
					</div>					
					<div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">							
						<div id="dane_tabela3" class="fixed_headers"></div>	
					</div>			
				</div>			
			</div>		
		</div>		
		<div class="w-100"></div>	
		<br />		
		<div class="col-xs-12 container ramkaLewa ">	
			<button type="submit" class="btn btn-success" id="idBtn1">raport</button>
			<button type="button" class="btn btn-success" id="idBtn2">baza</button>	
			<button type="button" class="btn btn-success" id="idBtn3">przycisk</button>		
		</div>
	</div>	
	<div>	
		<br/>		
		<p class="act"><b>Active Tab</b>: <span></span></p>	
	</div>	
	<br/>
</section>
</body>
</html>
