<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="login.css">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="sweetalert2.all.min.js"></script>
<body>
<div align = left style="background-color:#FFFFFF;
                        margin: 10px;
                        border-radius: 15px; 
                        padding: 50px">
<div align = center><img src="cecyteqlogo.png" height="150" width="60%" /></div>
<br><p align = "center"><font size = "5" color = "#35B729"><b>Examen de Ecología</b></font></p><br><br><br>

<form action="Calificar.php" method="post">
<p><font size = "3" color = "#0D6001">1. La Ecología es la ciencia que estudia:</font></p>
<input type="radio" name = "1" value="a" required />
Los seres vivos, sus relaciones entre ellos y con el medio ambiente.<br>
<input type="radio" name = "1" value="b" required /> 
La contaminación.<br>
<input type="radio" name = "1" value="c" required/> 
La vida en el universo.<br>
<br><br>


<p><font size = "3" color = "#0D6001">2. ¿Qué es la bioesfera?</font></p>
<input type="radio" name = "2" value="a" required/>
Una capa de la tierra.<br>
<input type="radio" name = "2" value="b" required/> 
El conjunto de las zonas de la tierra donde se desarrolla la vida.<br> 
<input type="radio" name = "2" value="c" required/> 
Una esfera con vida.<br>
<br><br>
<p><font size = "3" color = "#0D6001">3. ¿Qué es un desierto?</font></p>
<input type="radio" name = "3" value="a" required/>
Un clima.<br>
<input type="radio" name = "3" value="b" required/> 
Un biotipo.<br>
<input type="radio" name = "3" value="c" required/> 
Un bioma.<br>
<br><br>


<p><font size = "3" color = "#0D6001">4. ¿Qué es una población?</font></p>
<input type="radio" name = "4" value="a" required/>
La mezcla de varias especies que viven juntas.<br>
<input type="radio" name = "4" value="b" required/> 
Las personas que viven en el campo.<br>
<input type="radio" name = "4" value="c" required/> 
El conjunto de individuos de la misma especie que viven en una zona concreta.<br>
<br><br>


<p><font size = "3" color = "#0D6001">5. Lo más importante para estudiar una pobloación es:</font></p>
<input type="radio" name = "5" value="a" required/>
La tasa de natalidad.<br>
<input type="radio" name = "5" value="b" required/> 
La tasa de mortalidad.<br>
<input type="radio" name = "5" value="c" required/> 
Las dos anteriores más el número de individuos emigrantes e inmigrantes.<br>
<br><br>


<p><font size = "3" color = "#0D6001">6. Un bosque maduro debe de tener:</font></p>
<input type="radio" name = "6" value="a" required/>
Cinco estratos verticales bien desarrollados: subterráneo, suelo, herbáceo, arbustivo y arbóreo.<br>
<input type="radio" name = "6" value="b" required/> 
Un buen estrato arbóreo.<br>
<input type="radio" name = "6" value="c" required/> 
Una sola capa o estrato vegetal: el herbáceo.<br>
<br><br>

<p><font size = "3" color = "#0D6001">7. Un ecosistema...</font></p>
<input type="radio" name = "7" value="a" required/>
Es la integración del biotipo más la biocenosis.<br>
<input type="radio" name = "7" value="b" required/> 
Es exclusivo de un biotipo.<br>
<input type="radio" name = "7" value="c" required/> 
Debe de tener una biocenosis formada por pocas poblaciones.<br>
<br><br>


<p><font size = "3" color = "#0D6001">8. Un descomponedor...</font></p>
<input type="radio" name = "8" value="a" required/>
Es un destructor del ecosistema.<br>
<input type="radio" name = "8" value="b" required/> 
Es un nivel trofico del ecosistema.<br>
<input type="radio" name = "8" value="c" required/> 
Es lo opuesto a un productor.<br>
<br><br>


<p><font size = "3" color = "#0D6001">9. Los biomas de la Tierra se organizan según:</font></p>
<input type="radio" name = "9" value="a" required/>
La latitud.<br>
<input type="radio" name = "9" value="b" required/> 
La condiciones climáticas.<br>
<input type="radio" name = "9" value="c" required/> 
La latitud, altitud y las condiciones climáticas.<br>
<br><br>


<p><font size = "3" color = "#0D6001">10. ¿Cuáles son algunas de las ramas de la ecología?</font></p>
<input type="radio" name = "10" value="a" required/>
Neurociencia cultural, computacional, afectiva y aplicada.<br>
<input type="radio" name = "10" value="b" required/> 
Aritmética, GeometrÍa, Álgebra y Probabilidad y estadística.<br>
<input type="radio" name = "10" value="c" required/> 
Ecología individual, de población, del ecosistema, la molecular y biogeográfica.<br>
<br><br>
<div align = right class = "signup">
<input type="submit" value="Calificar"></div>
</form>
</div>
<br><br>
</body>
<?php
?>
</html> 