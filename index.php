<?php 
include_once("librerias/funciones.php");
$titulo_paxina="Inicio";
include('templates/header.php');
?>

<!--CAJA DE AUTOR-->
<div class="jumbotron" id="jumbobox">
  <div class="container" id="autorbox">

      <div class="text-center" id="nombre">
        <h1>Ramón Nicolás</h1>
         <h1>Autor</h1>
      </div>   

      <div class="container" id="autor" style="display:none;">
        <div id="imagenMonchoindex">
          <img class="img-responsive col-sm-5" src="imaxes/fotos/10b.jpg">
        </div>

        <div id="textoMonchoindex" class="text-justify col-sm-5 col-sm-offset-1">
          <p id="dancing"><br><i class="fa fa-quote-left fa-3x fa-pull-left" style="font-style:italic;"></i>Escoitando no meu interior a música das palabras en galego imaxinei como debe soar a música que entoan as fragas de carballos arredor de San Pedro de Ramirás, a música da auga do Río Sil, a do trebón na Fervenza do Xallas.<i class="fa fa-quote-right fa-3x fa-pull-right" style="font-style:italic;"></i>
</p>
<p id="pindex">(Fragmento dunha carta de Hildegarda von Bingen, que trouxo de Rupertsberg e transcribiu do latín Marilar Aleixandre. Lida en Compostela o 7 de novembro de 2016.)</p>
        </div>
      </div>


  </div>

</div>
<!--FIN CAJA DE AUTOR-->

<!--FLECHA 1-->

<div class="page-header uno">
  <div class="row" id="flecha">
    <div id="flecha1" ><a href="#libro"  class="page-scroll"><i class="fa fa-arrow-circle-down fa-4x" aria-hidden="true" style="color:#6683ac;"></i></a>
    </div>
    <h1 class="text-center">O Espello do Mundo</h1>
</div>
</div>
<!--FIN FLECHA 1-->

<!--CAJA DE LIBRO-->
<div class="jumbotron" id="jumbobox2">
<div class="row">
 <div class="container-fluid col-sm-5 col-sm-offset-1" id="libro">
  <img class="img-responsive" src="imaxes/cubertas/libros/OEspelloDoMundo.jpg" >
 </div>
 <div class="container-fluid col-sm-5 text-justify" id="reseñas">
 <p>"Sabia, moi dotada, equilibrada e luminosa". Antonio Piñeiro <a href="http://blog.xerais.gal/2016/sabia-moi-dotada-equilibrada-e-luminosa-o-espello-do-mundo-de-ramon-nicolas-critica-de-antonio-pineiro/" target="_new" class="btn btn-default active">Ler máis...</a></p><br>
 <p>"O espello do mundo é a súa primeira incursión no mundo da novela, e aproba con sobresaliente." Lecturafilia <a href="https://lecturafilia.com/2016/06/29/o-espello-do-mundo/#more-3664" target="_new" class="btn btn-default active">Ler máis...</a></p><br>
 <p>“Esta é unha novela na que un autor non ten medo ao mirar ao espello e mirar as mulleres”. María Reimóndez <a href="http://bretemas.gal/onte-1752/" target="_new" class="btn btn-default active">Ler máis...</a></p>
 <p>"A esencia do libro é que ese pequeno convento de San Pedro de Ramirás convértese no “Espello do mundo” e amosa a través dos comportamentos das monxas clarisas, debilidades tan humanas como a envexa e a traizón..." Montse Fajardo <a href="http://blog.xerais.gal/2016/artigo-de-montse-fajardo-sobre-a-novela-o-espello-do-mundo-de-ramon-nicolas/" target="_new" class="btn btn-default active">Ler máis...</a></p>
 </div>
 </div>
</div>

<!--FIN CAJA DE LIBRO-->

<!--FLECHA 2-->
<div class="page-header">
  <div class="row" id="flecha2">
    <a href="#flecha2" class="page-scroll"><i class="fa fa-arrow-circle-down fa-4x" aria-hidden="true" style="color:#6683ac;"></i></a>
  </div>
  <h1 class="text-center">Os meus libros</h1>
</div>
<!--FIN FLECHA 2-->


<!--CARRUSEL-->
<div class="c-wrapper" id="c-carrusel">
<div class="carousel slide" id="carrusel" data-ride="carousel" data-interval="3500">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carrusel" data-slide-to="0" class="active"></li>
    <li data-target="#carrusel" data-slide-to="1"></li>
    <li data-target="#carrusel" data-slide-to="2"></li>
    <li data-target="#carrusel" data-slide-to="3"></li>
    <li data-target="#carrusel" data-slide-to="4"></li>
    <li data-target="#carrusel" data-slide-to="5"></li>
    <li data-target="#carrusel" data-slide-to="6"></li>
    <li data-target="#carrusel" data-slide-to="7"></li>
    <li data-target="#carrusel" data-slide-to="8"></li>
    <li data-target="#carrusel" data-slide-to="9"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">    

    <div class="item active">
      <a href="guiaSonhoSulagado.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/oSoñoSulagado.jpg" alt="O soño sulagado. Guía de lectura"></a>
    </div>

    <div class="item">
      <a href="dicionarioVerbosGalegos.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/Diccionariodosverbos.jpg" alt="Dicionario dos Verbos Galegos.jpg"></a>
    </div>

    <div class="item">
      <a href="entrevistasAlvaroCunqueiro.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/entrevistas.jpg" alt="Entrevistas a Álvaro Cunqueiro.jpg"></a>
    </div>

    <div class="item">
      <a href="papeisDeLiteratura.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/papeisDeLiteratura.jpg" alt="Papeis de Literatura"></a>
    </div>

    <div class="item">
      <a href="manuelLugrisBiografia.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/LugrísFreireBiografía.jpg" alt="Manuel Lugrís Freire. Biografía e Antoloxía"></a>
    </div>

    <div class="item">
      <a href="manuelLugris"><img class="img-responsive center-block" src="imaxes/cubertas/libros/LugrísFreire.jpg" alt="Lugrís Freire"></a>
    </div>

    <div class="item">
      <a href="conversasConCEF.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/ConversasConCEF.jpg" alt="Conversas Con Celso Emilio Ferreiro"></a>
    </div>

    <div class="item">
      <a href="ondeOMundoSeChamaCEF.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/OndeOMundoSeChamaCEF.jpg" alt="Onde O Mundo Se Chama Celso Emilio Ferreiro"></a>
    </div>

     <div class="item">
      <a href="mariana.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/Mariana(Letras nómades).jpg" alt="Mariana"></a>
    </div>

    <div class="item">
      <a href="oEspelloDoMundo.php"><img class="img-responsive center-block" src="imaxes/cubertas/libros/OEspelloDoMundo.jpg" alt="O Espello Do Mundo"></a>
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#carrusel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carrusel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
 </div>
 <!--FIN CARRUSEL-->

<!--FLECHA 3-->
<div class="page-header">
  <div class="row" id="flecha3">
    <a href="#flecha3" class="page-scroll"><i class="fa fa-arrow-circle-down fa-4x" aria-hidden="true" style="color:#6683ac;"></i></a>
  </div>
  <h1 class="text-center">Outras cousas</h1>
</div>
<!--FIN FLECHA 3-->


<!--SECCIONES-->
<div class="container-fluid" style="background-color:white;">

  <div clas="row">
    <div class="col-md-4 col-md-offset-1 text-justify">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div class="col-md-4 col-md-offset-1 text-justify">
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
  </div>
</div>


<div id="flechabottom" data-spy="affix" data-offset-top="195">
<div class="row" id="flecha4">
<a href="#jumbobox"  class="page-scroll"><i class="fa fa-arrow-circle-up fa-4x" aria-hidden="true" style="color:white; background-color:#6683ac;"></i></a>
</div>
</div>

<?php 
include('templates/footer.php');
?>


 
