<!doctype html>
<html>
    <header>     
    <meta charset="utf8">
	<title>Calculadora PHP</title>
    <link href="css/bootstrap.css" rel="stylesheet">
    </header>
    <body style="background-color:Gray"; >
        <form method=POST action="calculadora.php">
            <center><h1>Calculadora</h1>
                Número1:
                <input type=text name=n1 size=4><br><br>
                Número2:
                <input type=text name=n2 size=4><br><br>
                <button type="submit" name="op" value="somar"class="btn btn-primary" >Somar</button>
                <button type="submit" name="op" value="subtracao"class="btn btn-success" >Subtrair</button>
                <button type="submit" name="op" value="multiplicacao" class="btn btn-warning">Multiplicar</button>
                <button type="submit" name="op" value="divisao"class="btn btn-info" >Dividir</button>
            </center>
        </form>
    </body>
</html>