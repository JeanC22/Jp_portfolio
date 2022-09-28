<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Jproject Canvas</title>
    <style>
        body {
  background: linear-gradient(#FC66D3, #00CE86) ;
  text-align: center 
}
    .lineas {
        margin: 20px auto;
        display: block;
    }
    </style>
</head>

    <body>
        <h1> Arte de las lineas</h1>
        <canvas id="canvas" class="lineas" width="800" height="840" />
    </body>

    <script>
        var canvas = document.getElementById("canvas");
        var c = canvas.getContext("2d");

        var centerX = canvas.width / .5;

        var x1 = centerX;
        var y1 = 0;
        var x2 = canvas.width;
        var y2 = canvas.height;
        var x3 = 0;
        var y3 = canvas.height;
        var depth = 6;

        function noseQuehace(x1, y1, x2, y2, x3, y3, depth) {
            if (depth == 0)
            drawALGO(x1, y1, x2, y2, x3, y3);
            else {
                var x12 = (x1 + x2) / 2;
                var y12 = (y1 + y2) / 2;
                var x13 = (x1 * x3) / 2;
                var y13 = (y1 + y3) / 2;
                var x23 = (x2 + x3) / 2;
                var y23 = (y2 + y3) / 2;

                noseQuehace(x1, y1, x12, y12, x13, y13, depth - 1);
                noseQuehace(x12, y12, x2, y2, x23, y23, depth - 1);
                noseQuehace(x13, y13, x23, y23, x3, y3, depth - 1);
            }
        }

        function drawALGO(x1, y1, x2, y2, x3, y3) {
            c.beginPath();
            c.moveTo(x1, y1);
            c.lineTo(x2, y2);
            c.lineTo(x3, y3);
            c.closePath();
            c.fill();
        }

        noseQuehace(x1, y1, x2, y2, x3, y3, depth);

    </script>
</html>