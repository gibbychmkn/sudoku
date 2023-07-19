<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sudoku_matematico</title>
    <link rel="stylesheet" href="estilos_restar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <br>
    <div class="contenedor">
        <h1>RESTAR</h1>
        <table>
            <tr>
            <td class="contiene">12</td>
            <td class="contiene">-</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">7</td>
            </tr>
            <tr>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
            <td></td>
            <td class="contiene">-</td>
            </tr>
            <tr>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">25</td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
            <tr>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
            </tr>
            <tr>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="contiene">18</td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="4" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            </tr>
        </table>
        <br>
        <div class="cont-cuadros">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="f">30</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="g">2</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="h">5</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="i">20</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="j">5</div>
        </div>
        <br>
        <div class="marco">
            <div class="tiempo" id="tiempo">00:00:00.000</div>
            <div class="botones-contenedor">
            <div class="btn" onclick="iniciar()">
            <i class="fas fa-play"></i>
        </div>
        <div class="btn" onclick="pausar()">
            <i class="fas fa-pause"></i>
        </div>
        <div class="btn" onclick="reiniciar()">
            <i class="fas fa-undo-alt"></i>
        </div>
        <br>
        <br>
        <div class="resultado">
            <h2>resultado</h2>
        </div>
        <script src="resta.js"></script>
        <script src="tiempo.js"></script>
    </div>
</body>
</html>