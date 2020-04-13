<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body> 
 <style type="text/css">
     
     *{
         margin: 0px;
         padding: 0px;
         box-sizing: border-box;
         text-decoration: none;
         font-family: sans-serif;
     }
/*---------------------------------------*/

  
/* BARRA DE NAVEGACION! */ 
     header{
         position: fixed;
         top: 0;
         left: 0;
         width: 100%;
         height: 80px;
         background: #fff;
         box-shadow: 0 4px 25px -22px black;
         z-index: 2;
        
     }
     
     .header-content{
         max-width: 1200px;
         margin: auto;
         display: flex;
         justify-content: space-between;
     }
     
     .logo{
         height: 80px;
         display: flex;
         justify-content: center;
         align-items: center;
     }
     
     .logo h1 b{
         color: #46a2fd;
         
     }
     
     .menu{
         height: 80px;
         
     }
     
     .menu nav{
         height: 100%;
     }
     .menu nav ul{
         height: 100%;
         display: flex;
         list-style: none;
     }
     .menu nav ul li{
         height: 100%;
         margin: 0px 20px;
         display: flex;
         justify-content: center;
         align-items: center;
         position: relative;
     }
     
     .menu-selected:before{
         content: '';
         width: 100%;
         height: 4px;
         background: #46a2fd;
         position: absolute;
         top: 0;
         left: 0; 
     }
     
     .menu nav ul a{
         color: #777777;
         transition: color 300ms; 
     }
     
     .menu nav ul a:hover{
         color: #46a2fd;
     }
     
     .menu .text-menu-seleted{
         color: #46a2fd;
     }

/* LISTADO DE CONCEPCION */

ol {
    color: black;
	max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
}

/* IMAGEN CENTRO */

.centro{
    width: 45%;
    margin-left: auto;
    margin-right: auto;
    display: block; 
    border-style: solid;
}

/* NOTICIA */

.p1{
   color: black;
	max-width: 1200px;
    margin: auto;
  	  

}
     
     
/* Footer */

footer {
    width: 100%;
    background: #202020;
    color: white;
    padding: 20px;
    
    
}
     .container-footer-all{
         width: 100%;
         max-width: 1200px;
         margin: auto;
         padding: 40px;
         
     }
     
     .container-body{
         display: flex;
         justify-content: space-between;
     }
     
     .column1 img{
         height: auto;
         width: 100px;
         border-radius: 10px;
         opacity: 0.3;
         
     }
     
     .column2{
         max-width: 300px;
         
     }
     .column2 h1{
         font-size: 22px;
     }
     
     .column2 .row{
         margin-top: 20px;
         display: flex;
         
     }
     
     .row img{
         width: 36px;
         height: 36px;
     }
     
     .row label{
         margin-top: 10px;
         margin-left: 20px;
         color: #c7c7c7;
     }
     
     .column3{
         max-width: 300px;
     }
     
     .column3 h1{
         font-size: 22px;
     }
     
     .row2{
         margin-top: 20px;
         display: flex;
     }
     .row2 img{
         width: 36px;
         height: 36px;
     }
     
     .row2 label{
         margin-top: 10px;
         margin-left: 20px;
         max-width: 140px; 
     }
     .container-footer{
         width: 100%;
         background: #101010;
         
     }
     .footer{
         max-width: 1200px;
         margin: auto;
         display: flex;
         justify-content: space-between;
         padding: 20px;
     }
     
     .copyright{
         color: #c7c7c7;
     }
     
    .copyright a{
         text-decoration: none;
        color: white;
        font-weight: bold;
     }
     
     .informacion a{
         text-decoration: none;
         color: #c7c7c7;
     }
     
     .column4 img{
         height: auto;
         width: 250px;
     }
     
     
     
     
     
 </style>
 
 /*-----------------------------------------------------*/
<!kjlkjk>  
     <header>
         
         <div class="header-content">
             
             <div class="logo">
                 <h1><b>Rec</b>Concepcion</h1>
             </div>
             
             <div class="menu">
                 
                 <nav>
                     <ul>
                         <li class="menu-selected" ><a href="#" class="text-menu-seleted" >INICIO</a></li>
                         <li><a href="#">PRODUCTORA</a></li>
                         <li><a href="#">CONTACTO</a></li>
                         <li><a href="#">HORARIOS</a></li>
                     </ul>
                 </nav>
                 
             </div>
             
         </div>
         
         
     </header> <br><br>
      
 <div>
 	<h2 align="center">Lugares populares en Concepciòn </h2>
 </div> <br><br>

<div>
		<ol>
			 	<li>Casa del Arte - Pinacoteca</li>
			 	<br> 
			 	<li>Universidad de Concepcion</li>
			 	<br> 
			 	<li>Parque Ecuador</li> 
			 	<br>
			 	<li>Parque Pedro del Río Zañartu</li>
			 	<br>
			 	<li>Catedral de la Santisima Concepcion</li>
		</ol>
</div> <br><br>


<div>
	<img class="centro" src="imagen.jpg" width="200" alt="" >
</div>  <br>


<div>
	<p class="p1"> La sexta versión del Rock en Conce no ha estado libre de polémicas, ya que si bien se confirmó su realización en el Parque Bicentenario, este punto había sido descartadas por las autoridades por motivos de seguridad.
<br>
	Debido a lo anterior, se anunció que la cita musical se trasladaría al campus de la Universidad de Concepción, siendo desechada esta opción -días más tarde- por el propio rector de la casa de estudios, Carlos Saavedra.
<br>
	Esto último, luego que directores y decanos de la UdeC criticaran el ofrecimiento de realizar el REC en dicho punto, apuntando que no fueron consultados al respecto.
<br>
	Tras el descarte de la Universidad de Concepción, el Sernatur pidió que se revisara nuevamente la posibilidad de hacer uso del Parque Bicentenario, lo que finalmente fue confirmado este martes.
	</p>
</div>  <br><br>


<footer>
   
<div class="container-footer-all">
   
        <div class="container-body">
           
    <div class="column1"><img src="logo.png"></div>
    
    <div class="column2">
        
        <h1>Redes Sociales</h1>
        
        <div class="row">
            <img src="facebook.jpg">
            <label>Siguenos en Facebook</label>
        </div>  
        <div class="row">
            <img src="twitter.png">
            <label>Siguenos en Twitter</label>
        </div>  
        <div class="row">
            <img src="instagram.jpg">
            <label>Siguenos en Instagram</label>
        </div>  
        <div class="row">
            <img src="google.png">
            <label>Siguenos en Google plus</label>
        </div>  
        <div class="row">
            <img src="pinteres.png">
            <label>Siguenos en Pinteres</label>
        </div> 
        
          
    </div>
    
    <div class="column3">
        
        <h1>Informacion contacto</h1>
        
        <div class="row2">
            <img src="ubicacion.png">
            <label>Informacion donde esta ubicado el show</label>
        </div>
        
        <div class="row2">
            <img src="llamar.jpg">
            <label> Numero  telefononico</label>
        </div>
        
        <div class="row2">
            <img src="correo.jpg">
            <label>Correo electronico</label>
        </div>
        
    </div>
    
    <div class="column4"><img src="mapa.png" ></div>
    
        </div>
   
</div> 
    
    
    <div class="container-footer">
      <div class="footer">
       <div class="copyright">
            2020 Todos los Derechos Reservados <a href=""> Rev Concepciòn </a> 
       </div>
       
       <div class="informacion">
        <a href="">  Informacion Compañia </a>| <a href="">Privacion y Politica</a> | <a href=""> Terminos y condiciones</a>
       </div>
       </div>
   </div>
   
</footer>




</body>
</html>
