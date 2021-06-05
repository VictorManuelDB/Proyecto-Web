<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Easy Learning</title>
    <style type="text/css">
  .boxPadre{
    width: 80%;
  }
    .sidebar1 {
  float: left;
  width: 180px;
  height: auto;
  padding-bottom: 10px;
  margin: 0px 5px 200% 0px;
}
.boxPadre{
  display: flex;
  margin-top: 100px;
  padding: 10px;
  margin-bottom: 50px;
  text-align: center;
  position: relative;
}
.boxHijo{
  flex: 1 1 auto;
  font-size: 20px;
}
.boxcol{
  flex-direction: column;
  display: flex;
  text-align: right;
  margin-top: 80px;
  padding: 10px;
  margin-bottom: 50px;
  
}

.boxph{
  text-align: center;
  display:flex;

  
}
.boxPadre12{
  display: flex;
  margin-top: 100px;
  padding: 10px;
  margin-bottom: 50px;
  text-align: center;
  position: relative;
}

.boxHijo12{
  flex: 1 1 auto;
  font-size: 20px;
  padding: 30px;
}
u{
  color: #08a3a3;
}
footer {
  position: relative;
  margin-top: -50px;
  height: 40px;
  padding:80px 100px;
  clear: both;
  background: #286af0;
  text-align: center;
  color: #fff;
  }
  .icono{
    padding: 1px;
  }
  #link{
    color: #fff;
    text-decoration: none;
  }
  #link:hover{
    text-decoration: underline;
  }
  #regresar{
    margin: 7px 80px;
    padding-left: 50px;
    padding-right: 50px;
    height: 40px;
    font-size: 20px;
    text-decoration: none;
    color: #000;
    background-color: #1378BE;
    border: #1378BE;
}
#regresar:hover{
    background-color: #B3D8E8;
}
    </style>
    <link href="estilos1.css" rel="stylesheet" type="text/css">
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
    <script>var __adobewebfontsappname__="dreamweaver"</script>
    <script src="http://use.edgefonts.net/paytone-one:n4:default.js" type="text/javascript"></script>
    </head>
    
    <body>
    <a href="index.html" id="regresar"><-REGRESAR</a>
    <div class="container">
        <div class="green" id="logo"><img src="logo.png" width="170" height="158"  alt=""/></div>
        <header>Easy Learning</header>
        <nav class="top-nav"> <a href="index1.php">Inicio</a> | <a href="Perfil.php">Perfil</a> | <a href="contacto.php">Contactanos</a></nav>
        <div class="sidebar1">
            <nav>
                <ul class="menu">
                    <li><a class="list" href="#">MENU</a>
                        <ul class="submenu">
                        <li><a href="matematicas.html">Matematicas</a></li>
                        <li><a href="español.html">Español</a></li>
                        <li><a href="ciencias.html">Ciencias</a></li>
                        <li><a href="historia.html">Historia</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
      </div>
      <div>
      <div class="body">
      <div><center><link href="word.css" rel="stylesheet" type="text/css">
      <span class="word" id="word"></span></center></div>
      <div class="boxPadre">
      <div class="boxHijo">
      <img src="personas.png" height="300px" width="350px">
      </div>
      <div class="boxHijo">
        <h2>El genio se hace con un 1% de talento, y un 99% de trabajo.</h2>
        <p>Nuestra misión de ofrecer educación gratuita de primer nivel, para cualquier estudiante de primaria.</p>
      </div>
    </div>
    <center>
    <div class="boxcol">
    <div class="boxt">
      <div>
        <center>
          <h1>¿Para que funciona Easy Learning?</h1>
        </center>
        </div>
    </div>
        <div class="boxph">
          <div><img src="apre1.png" HSPACE="90">
          </div>
          <div><img src="cc.png" HSPACE="90"></div>
          </div>
        <div class="boxph">
          <div>
            <h2>Aprendizaje personalizado</h2>
            <p aling="center">Los estudiantes de educación básica practican a su propio ritmo; primero para llenar las lagunas en su comprensión y luego acelerar su aprendizaje. </p>
          </div>
          <div>
            <h2>Contenido de confianza</h2>
            <p aling="center">La biblioteca de lecciones de Easy Learning cubre matemáticas, ciencias y más. Y siempre es gratis para estudiantes de educación básica</p>
            </div>
        </div>
      </div>
    </center>
    <div class="boxPadre12">
      <div class="boxHijo12">
        <img src="tup.png" height="300px" width="350px">
      </div>
      <div class="boxHijo12">
        <h2><u>Tú</u> puedes aprender lo que sea.</h2>
        <p>Construye un entendimiento profundo y sólido en matemáticas, ciencias y más.</p>
      </div>
      </div>
    <div class="boxPadre">
      <div class="boxHijo">
      <img src="n%C3%B1.png" height="300px" width="350px">
      </div>
      <div class="boxHijo">
        <h2>Todos las niños y niñas merecen la oportunidad para aprender.</h2>
        <p>En todo el mundo, 617 millones de niños carecen de habilidades básicas en matemáticas y lectura.</p>
      </div>
    </div>
    </div>
  </div>
  <footer>
  <img style="float:center;" src="facebook.png" height="50px" width="50px">
  <div class="icono">
  <a href="https://web.facebook.com/profile.php?id=100068958335767" target="_blank" id="link">Sigenos en nuetra pagina de Facebook</a></div>
  <p>© 2021 Easy Learning | Gabriel Rivera Polvo y Victor Manuel Dominguez Bernal</p>
  </footer>
  </div>
  <script type="text/javascript" src="word.js"></script>
</body>
</html>