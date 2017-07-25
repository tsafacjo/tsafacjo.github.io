<header class=" row " >
			<div class="container-fluid" id="font">
				<div class="container">
			  <h1 class="col-sm-offset-1 col-sm-11">
				<img src="images_cuas/logo4.png" id="logo"/><span class="titre">CHINA UNIVERSITY APPLICATION SYSTEM</span> <span id="description">  
			    Studying in China for <span id="anim">a Better Future  </span></span>
			  </h1>
				 </div>
			</div>
		</header>
		<div class="container " id="m">
			<nav class="col-sm-12 navbar navbar-default">
				<ul class="nav navbar-nav  col-sm-8">
				<li> <a href="index.php">Home</a> </li>
				<li> <a href="universities.php">Universities</a> </li>
				<li> <a href="schoolarship.php">Schoolarship</a> </li>
				<li> <a href="procedure.php">Procedure</a> </li>
				<li> <a href="forum.php">Forum</a> </li>
				</ul>
				
				
				<form  class="navbar-form pull-right col-sm-4">
			
					<input type="text" style="width:75%" class="input-sm form-control"placeholder="Search">
							<button type="submit" class="btn btn-danger btn-sm"><span
							class="	glyphicon glyphicon-search"></span> </button>
				</form>
			</nav>
		</div>
		
	<script>

var num=0 ;

function animer(){




$('#font').animate({

opacity:'0.5'  

},1000) ;


if(num==0)
$('#font').css({

background:'url("images_cuas/entete2.jpg") scroll'

}) ;

else if(num==1)
$('#font').css({

background:'url("images_cuas/entete.jpg") scroll'

}) ;
/*
if(num==2)
$('#font').css({

background:'url("images_cuas/shan2.jpg") scroll'

}) ;*/


$('#font').animate({

opacity:'1'  

},3000) ;



$('#description').animate({
fontSize:'22px ',
color:'red'  

},1000) ;
num=(num+1)%3 ;
 setTimeout(animer2,3000);

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

</script>