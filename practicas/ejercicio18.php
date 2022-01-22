<html>  
<head>  amos usando la sentencion de FUNCTION al que le pasamos un valor  
dependiendo de este valor, ejecutamos una condicion IF..ELSE... y  
asignamos un color al tipo de letra para generar la tabla  
 */  
 function muestra($valor) {  
 if ($valor < 0.5)  
$color = "red"; else  
 $color = "blue";  
 echo "<td><font color='$color'>$valor</font></td>\n";  
 }  
?>  
<table border="1"> <?  
 for ($x=0; $x<=2; $x+=0.01){  
 echo "<tr>";  
muestra($x);  
muestra(sin($x));  
muestra(cos($x));  
 echo "</tr>";  
 }  
?>  
</body>  
</html> 