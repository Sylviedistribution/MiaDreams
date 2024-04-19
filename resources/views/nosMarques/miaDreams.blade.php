<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MIA DREAMS</title>


    <style>

* {
	box-sizing: border-box;
}

.header1{
	background-image: url('img/robe1.png');
	background-repeat: no-repeat;
	background-size: cover;
	height: 100vh;        
}
.titre1{
	position: relative;
	top: 400px;
	color: black; 
	
	text-transform: uppercase;  
	font-family: serif;
	background-color: rgba(255, 255, 255, 0.5); 
	box-sizing: border-box; 
	padding: 10px;
	width: 50%; 
	margin-left: auto;
	margin-right: auto;
	max-width: 600px;       
}

/* sectionn univers? */

.title-uni{
	background-color: #C9C4C0;
	color: black;
	width:200px;
	height:70px;
	padding:10px;
	position: relative;
	top: 75px;
	left: 100px;
	font-size:20px;
	font-family: serif;
	text-transform:capitalize;
	text-align:center;
	letter-spacing: 2px;
}
.univers{
	background-image: url('img/robe2.jpg');
	height: 70vh;
	width:100%;
	display:flex;
	margin-top: 100px;  
}
.img1{
	position: relative;
	left: 977px;
	bottom: 100px;
	width:250px;
	height: 350px;
	background-color:black;
	padding-left: 20px;
	padding-bottom: 20px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);  
}

.img2{
	position: relative;
	left: 400px;
	bottom: 65px;
	width:300px;
	height: 390px;
	background-color:black;
	padding-left: 20px;
	padding-bottom: 20px;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);  
}
.texte-uni{
	color:white;
	position: relative;
	right: 520px;
	top: 50px;
	font-size:20px;
	font-family: serif;
}

/* sectionn collection */
.collection-title{
	position: relative;
	top:80px; 
	margin-left:170px;
	font-size:25px;
	font-family: serif; 
	letter-spacing: 2px; 

}
.collection-title span{
	font-weight: bold; 

}
.collection{
	position: relative;
	top:190px; 
	background-color:#E8E3DE;
	display:flex;
	justify-content:center;
	gap:90px;
	height: 400px;
}

.collection h4{
	position: relative;
	left:65px;
	bottom:84px;
	font-size:15px;
}
.img3{
	width:250px;
	height: 350px;
	position: relative;
	bottom:100px;
	transition: transform 0.5s ease;
}

.img3:hover{
	transform: scale(1.3);
	
}
.button{
	position: relative;
	top:120px;
	left: 380px; 
	border:1px solid black;
	width:550px;
	padding:5px;
	border-radius:15 15 15 15%; 
	background-color:white;
	color: black;
	letter-spacing: 2px;
	text-transform: uppercase;
	font-family: serif;
	
}

.button:hover{
	
	background-color:black!important;
	color: white;
	border:1px solid white!important;
	
}

/* section nouvelle gamme */

.N-gamme{
	position: relative;
	top:220px;
	display:flex;
	justify-content:center;
	gap:50px;
}
.N-gamme-title{
	position: relative;
	top:200px;
	text-transform:capitalize;
	text-align: center;
	font-size:25px;
	font-family: serif;
	letter-spacing: 2px;
}
.N-gamme-img{
	width:300px;
	height: 420px;
	transition: transform 0.5s ease;
}
.N-gamme-img:hover{
	transform: scale(1.1);
	border-radius: 10%;
	box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);
	background-color:#E8E3DE;
	padding-right: 20px;
	padding-left: 20px;
	
}

@media (max-width: 1024px) {
.collection {
	gap: 50px;
    background-color:#E8E3DE; 
      /* padding: 20px; */
      width: 100%;
      height: 160vh;
  }
}

@media (max-width: 768px) {
.univers {
	flex-direction: column;
	align-items: center;
  }

.img1,
.img2 {
	position: static;
	margin-bottom: 20px;
  }

.texte-uni {
	position: static;
	margin-top: 20px;
  }

.collection {
	flex-direction: column;
	align-items: center;
    margin-top:30px;
  }



  .collection-title {
    position: relative;
    right: 80px;
    top: -30px;
    
  }

  
  .collection-title  span{
    font-weight: bold;
    
  }

.collection h4 {
	position: static;
	margin-top: 20px;
  }

.img3 {
	position: static;
	margin-bottom: 20px;
  }

.button {
	position: static;
	margin-top: 20px;
  }

.N-gamme {
	flex-direction: column;
	align-items: center;
  }

.N-gamme-img {
	margin-bottom: 20px;
  }
}

@media (max-width: 480px) {
.title-uni {
	margin-left: 0;
	text-align: center;
  
  }

.univers {
	top: 0;
	height: auto;
  }

.button {
	width: 100%;
  }

.N-gamme-title {
	text-align: center;
    position: relative;
	top: 300px;
    
  }

.N-gamme {
    position: relative;
	top: 400px;
	height: auto;
  }

}

    </style>
</head>
<body>


      <!-- section header -->
<div>
    <div class ="header1">
        <div class="titre1">
             <h1>Votre Maison Virtuelle</h1>
             <p>Do not miss product you want</p>
      
         </div>
    </div>

      <!-- section univers -->

    <h1 class="title-uni">NOTRE UNIVERS</h1> 

    <div class="univers">
        <div>
            <img src="img/img3.jpg" class="img1" alt="">
       </div>
       <div> 
           <img src="img/95.jpg" class="img2" alt="">
       </div>
     <div class="texte-uni">
          <p >Mia Dreams est une marque de mode et de style   de vie aux influence <br>  Afro-vintage ,  créé en 2011   pour apporter une touche d’authenticité <br>  dans vos garde-robes. </p>
          <p>Toutes nos créations sont éditées en petites séries  pour satisfaire <br>  les adeptes  d’exclusivité.  Nous proposons des pièces modernes, <br>  sophistiquées,  élégantes et confortables.</p>
          <p>Mia signifie Made In AFrica, une volonté pour nous de promouvoir    notre <br>  culture   et les savoir-faire des artisans.  A cet effet nous produisons  <br> toutes nos créations  dans notre atelier au Sénégal depuis 2013.</p>
        </div>
    </div>  

    <!-- section collection -->
    <h6 class="collection-title">Collection <span>BCBG</span></h6> 
<div class="collection">
       <div>
           <img src="img/10.jpg" class="img3" alt="">
           <h4>Cape Scarlett</h4>
       </div>
       <div>
            <img src="img/11.jpg" class="img3"  alt="">
            <h4>Cape Scarlett</h4>
       </div>
       <div>
            <img src="img/12.jpg" class="img3" alt="">
             <h4>Cape Scarlett</h4>
       </div>
    </div>

    <button class=" button btn btn-primary" type="button"> Eshop en cours de construction</button>
   
    
</div>  


 <!-- section  nouvelle gamme=====  -->

 <p class="N-gamme-title">nouvelle gamme 100% coton, et tissu teinté à la main</p>  
<div class="N-gamme">

       <div>
           <img src="img/24.jpg" class="N-gamme-img" alt=""> 
       </div>
         <div>
           <img src="img/30.jpg" class="N-gamme-img" alt="">
       </div>
         <div>
           <img src="img/38.jpg" class="N-gamme-img" alt="">
       </div>
         
</div> 

   



   </div>

   
   
   
    
</body>
</html>

