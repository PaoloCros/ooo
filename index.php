<!DOCTYPE html>
<html lang="es-mx">

<head>
    <meta charset="UTF-8">
    <title>EVALUACION</title>
    <link rel="stylesheet" href="css/problemaStem.css" />

    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script src="js/calculaSteam.js"></script>
</head>

<body>
    <section class="wrapper">
        <header>
            <h1 class="logo">Uso de la Ciencia, Tecnologia, Ingeniería y Matemáticas para resolver problemas</h1>
        </header>
        <br>
        <br>
        <br>
        <br>
        <br>
        <main>
            <section id="contenedor">
                <section class="problema">
                    <h2>PROBLEMA A RESOLVER</h2><br>
                    <p>Una hélice de turbina de motor a reacción de un avión
                        tiene un momento de inercia de 2,5 kg · m2 alrededor de su
                        eje de rotación. Al arrancar la turbina su velocidad angular en
                        función del tiempo es ω = 40 (rad/s3 )t2 .
                        a) Calcular el momento angular de la hélice en función del
                        tiempo y en t = 3 s.
                        b) Determinar el momento neto que actúa sobre la hélice en
                        función del tiempo y en t = 3 s</p>
                </section>
                <section class="esquemaProblema">
                    <h2>ESQUEMA</h2>
                    <!--Buscar o crear una impagen que represente el problema jpg o png-->
                    <center>
                        <img class="imgProblema" src="images/elice.jpg">
                    </center>
                </section>
                <section class="formulas">
                    <h2>Fórmulas</h2>
                    <br>
                    <h3>Momento algular L</h3>
                    <h3>a) L(t) = I * W(t)</h3>
                    <br>
                    <h3>b) T = I * D(W(t)) * t</h3>
                </section>
                <section class="datos">
                    <h2>DATOS:</h2>
                    <p>Momento de la inercia de la elice: I = 2.5 kg * m^2</p>
                    <p>Velocidad angular en funcion al tiempo: W = 40t^2*rad/s^3</p>
                    <p>Tiempo en el que calcularemos: 3s </p>
                    <!--A partir del enunciado del problema, ecribir una lista de los datos proporcionados para calcular en las unidades de Sistema Internacional de medidas. Incluir valores de constantes y datos de otras fuentes-->
                </section>
                <section class="calculos">
                    <center>
                        <table>
                            <center>
                                <tr>
                                    <td>
                                        <h2>Solución</h2>
                                        <h3>Para inciso a)</h3>
                                        <label>L(t)=I⋅ω(t)=2.5⋅40t^2=100t^2</label><br><br>
                                        <label>L(t)=100t^2kg⋅m^2⋅rad/s</label><br><br>
                                        <label>L(3)=100⋅(3)^2=100⋅9=900kg⋅m^2⋅rad/s</label>
                                    </td>
                                    <td>
                                        <h2>Solución</h2>
                                        <h3>Para inciso b)</h3>
                                        <label>N(t)=dt/dL=dt/d(100t^2)=200t</label><br><br>
                                        <label>N(3)=200⋅3=600N⋅m</label>
                                    </td>
                                </tr>
                            </center>
                        </table>
                    </center>
                </section>

                <section class="resultado">
                    <?php

                    $op1 = 2.5;
                    $op2 = 40;
                    $x= ($op1 * $op2)*9;
                    $y= ($op1 * $op2)*6;
                    echo "<br><br><br><br>";
                    echo "Resultado de a) (2.5 * 40)*9 = el valor es $x kg⋅m^2⋅rad/s <br><br>";
                    echo "Resultado de b) (2.5 * 40)*6 = el valor es $y N*m";
                ?>
                </section>
            </section>
        </main>
        <footer class="pie">
            <label>Alexis Paolo Carvajal Mejia - 21090981</h3></label>
        </footer>
    </section>
</body>

</html>