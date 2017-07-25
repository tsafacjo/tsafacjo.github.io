<!DOCTYPE html>
<html>

<title>Cuas</title>
<head>
	<meta name="viewport" content="width=device-width, initialscale=1.0">
	<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
	<link href="bootstrap/css/bootstrap-theme.min.css" rel="stylesheet">
	<link href="css.css" rel="stylesheet">
</head>

<body>

		<div id="barre">
					
			<div class="container">
				<div class="pull-right" id="con">
					<a class="" data-toggle="modal" href="#connexion"> Connexion</a> |
						
										
					<a class="" data-toggle="modal" href="#sign" id="red" >Sign Up</a> 					
				</div>	
						
			</div>
												
		</div>
					<!--fenetre modale de l'inscription-->	
					<div class="modal fade" id="sign">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button  class="close" data-dismiss="modal">x</button>
												<h4 class="modal-title">Create Your Account</h4>
										</div>
									<div class="modal-body">
									
									
							
									Ici Un jolie formulaire d'inscription!
									
									
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal">Fermer</button>
									</div>
									</div>
									</div>
								</div>
							</div>	
						<!--fenetre modale de la connexion-->
							<div class="modal fade" id="connexion">
								<div class="modal-dialog">
									<div class="modal-content">
										<div class="modal-header">
											<button  class="close" data-dismiss="modal">x</button>
												<h4 class="modal-title">Connexion</h4>
										</div>
									<div class="modal-body">
									
														
										<form class="form-horizontal">
															<fieldset>

															<!-- Form Name -->
															<legend></legend>

															<!-- Text input-->
															<div class="form-group">
															  <label class="col-md-4 control-label" for="Name">Name :</label>  
															  <div class="col-md-4">
															  <input id="Name" name="Name" placeholder="Name" class="form-control input-md" type="text">
																
															  </div>
															</div>

															<!-- Password input-->
															<div class="form-group">
															  <label class="col-md-4 control-label" for="passwordinput">Password :</label>
															  <div class="col-md-4">
																<input id="passwordinput" name="passwordinput" placeholder="Password" class="form-control input-md" type="password">
																
															  </div>
															</div>

															<!-- Button (Double) -->
															<div class="form-group">
															  <label class="col-md-4 control-label" for="button1id"></label>
															  <div class="col-md-8">
																<button id="button1id" name="button1id" class="btn btn-info">Connexion</button>
																<button id="button2id" name="button2id" class="btn btn-danger">Cancel</button>
															  </div>
															</div>

															</fieldset>
										</form>
													
									
									
									<div class="modal-footer">
										<button class="btn btn-danger" data-dismiss="modal">Fermer</button>
									</div>
									</div>
									</div>
								</div>
							</div>
						
		</div>
		
		<?php include("entete.php"); ?>
		
		<div class="container-fluid" id="couleur">
		<div class="container" id="corps">
					







		</div>

		</div>
<?php include("footer.php"); ?>

</body>
<script src="jquery.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="fonctions.js">

</script>
<script src="jquery.color-2.1.0.min.js">

</script>

<script>
$(function (){
$('a').tooltip();
});
</script>

<!--script>

var num=0 ;

function animer(){




$('#font').animate({

opacity:'0.5'  

},1000) ;


if(num==0)
$('#font').css({

background:'url("cou2.jpg") scroll'

}) ;

else if(num==1)
$('#font').css({

background:'url("cou3.jpg") scroll'

}) ;

if(num==2)
$('#font').css({

background:'url("shan2.jpg") scroll'

}) ;


$('#font').animate({

opacity:'1'  

},3000) ;



$('#description').animate({
fontSize:'22px ',
color:'red'  

},1000) ;
num=(num+1)%3 ;
 setTimeout(animer2,5000);

}

function animer2(){



$('#description').animate({
fontSize:'12px ',
color:'#C72136'  

},1000) ;


 setTimeout(animer,5000);

}

animer2() ;
$(function (){
$("#pop").popover();
});

</script-->



</html>
