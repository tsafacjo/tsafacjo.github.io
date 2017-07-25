<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<center>
<div  style="margin:0 auto ;">
<div id="point" style="">TEMPS  :0  -  POINT:0 </div>
<canvas id="c" width="600" height="200" style="">
<p>Désolé metteez votre navigateur à jour !<p>
</canvas>

</div>
</center>

<script>
var points=document.getElementById("point"),point=0;
var temps=0  ;
var speedObstacle=10 ;
var sapinx= new Array() ;
var sapin= new Image() ;
sapin.src="sapin.png"
var p= new Image() ;
p.src="JD.png" ;
var sol= new Image() ;
var images= new Array() ;
var image= new Image() ;
image.src="arrow.png" ;
images.push(image) ;



var solx= [100,132,164]  ;
solx.push(100);
sol.src="sol.png" ;
var L=600,l=500 ;
var x=100,y=100 ;
var xsol=100,ysol=130 

 var canvas= document.querySelector('#c') ;
 var saut=-30,canJump=true  ;
 var  context = canvas.getContext('2d') ;
var gameOver=false ; 
context.fillStyle='rgb(255,255,255)';

 context.fillRect(x,y,L,l) ;

 dessiner() ;
 

document.addEventListener('keyup', function(e) {


if(e.keyCode==37&&x>32)

{

x-=20 ;
}
else if(e.keyCode==39&&x<500)
{x+=20 ;


}

else if(e.keyCode==38)
{


if(canJump==true)
{
canJump=false  ;
sauter() ;


}
}

else if(e.keyCode==40)
{
//y+=20 ;
}




dessiner() ;
 
 
 }, true);


 
function actualiser()
{
/*if(solx.length>40)
solx.shift() ;
*/
solx.push(solx.length*32+100);
for( var i=0;i<solx.length;i++)
{
solx[i]-=10 ;

}


for( var i=0;i<sapinx.length;i++)
{

if(Math.abs(sapinx[i]-x)<10&&Math.abs((ysol-32)>y)>20)
{
point+=5 ;



}


else if(Math.abs(sapinx[i]-x)<20&&Math.abs((ysol-32)-y)<10)
{
alert(" game over ") ;
}


if(images[i].src=="sapin.png")
{
sapinx[i]-=(speedObstacle*2) ;
alert("ok") ;
}
else 
sapinx[i]-=(speedObstacle) ;

if(sapinx[i]<0)
{
sapinx.splice(i,1)  ;
images.splice(i,1)  ;

}

temps+=1 ;
points.innerHTML="TEMPS:  "+temps+"   -   POINTS : "+point ;

}

dessiner() ;
setTimeout(actualiser, 100); 

}


actualiser() ;


function dessiner()
{


context.fillStyle='rgb(255,255,255)';

 context.fillRect(0,0,L,l) ;

 context.fillStyle='gold';


context.drawImage(p,x,y) ;

for( var i=0;i<solx.length;i++)
{
context.drawImage(sol,solx[i],ysol) ;

}

for( var i=0;i<sapinx.length;i++)
{

context.drawImage(images[i],sapinx[i],ysol-32) ;

}




}


function sauter()
{


saut+=6;
y+=saut  ;

if(y>100)
{
y=100 ;
canJump=true ;
saut=-30 ;
dessiner() ;

}

else
{
dessiner() ;

setTimeout(sauter, 100); 

}

}
 
 




function mettreSapin()
{

sapinx.push(800) ;
if(sapinx.length%3==2)
{
image= new Image() ;
image.src="arrow.png" ;
images.push(image) ;
}

else if(sapinx.length%3==0)
{
image= new Image() ;
image.src="sapin.png" ;
images.push(image) ;
}

else if(sapinx.length%3==1)
{
image= new Image() ;
image.src="ghost.png" ;
images.push(image) ;
}






     if(gameOver==false){
   setTimeout(mettreSapin,Math.ceil(5000*((Math.random())+0.01)));
  }


}

mettreSapin() ;
 
</script>
</body>
</html>
