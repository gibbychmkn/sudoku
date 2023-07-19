<?php
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sudoku_matematico</title>
    <link rel="stylesheet" href="estilos_mixta.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>
<header>
    <?php include "header.php";?>
</header>
<body>
    <br>
    <div class="contenedor">
        <h1>MIXTA</h1>
        <table>
            <tr>
            <td class="contiene">5</td>
            <td class="contiene">x</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">20</td>
            <td class="contiene">-</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td></td>
            </tr>
            <tr>
            <td class="contiene">+</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            </tr>
            <tr>
            <td class="no-contiene" id="1" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">-</td>
            <td class="no-contiene" id="2" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">12</td>
            <td class="contiene">:</td>
            <td class="contiene">1</td>
            <td></td>
            </tr>
            <tr>
            <td class="contiene">=</td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            <td></td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            </tr>
            <tr>
            <td class="contiene">21</td>
            <td class="contiene">:</td>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">3</td>
            <td class="contiene">x</td>
            <td class="no-contiene" id="3" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td></td>
            </tr>
            <tr>
            <td class="contiene">+</td>
            <td class="contiene"></td>
            <td></td>
            <td class="contiene">4</td>
            <td class="contiene"></td>
            <td></td>
            <td class="contiene">=</td>
            <td></td>
            </tr>
            <tr>
            <td class="contiene">45</td>
            <td class="contiene">=</td>
            <td class="no-contiene" id="0" ondrop="drop(event)" ondragover="allowDrop(event)"></td>
            <td class="contiene">=</td>
            <td class="contiene">25</td>
            <td class="contiene"></td>
            <td class="contiene">36</td>
            <td></td>
            </tr>
        </table>
        <br>
        <div class="cont-cuadros">
            <div class="caja" draggable="true" ondragstart="drag(event)" id="a">12</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="b">16</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="c">9</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="d">4</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="e"></div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="f">19</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="g">7</div>
            <div class="caja" draggable="true" ondragstart="drag(event)" id="h">66</div>
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
        <script src="mixta .js"></script>
        <script src="tiempo.js"></script>
    </div>
</body>
</html>