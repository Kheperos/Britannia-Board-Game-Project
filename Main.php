<html>

<head>

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"> </script>


    <script>
        $(document).ready(function() {
            $('#canvas').click(function(e)
            {
                var offset = $(this).offset();
                var relativeX = (e.pageX - offset.left);
                var relativeY = (e.pageY - offset.top);

                //alert("X: " + relativeX + "  Y: " + relativeY);
                $.get("Click.php", { x: relativeX, y : relativeY} , function (data)
                {
                    alert("Data: " + data);
                    drawClock(relativeX,relativeY);
                });

            });
        });


    </script>


</head>
<body>


<h2>  </h2>

<canvas id="canvas" width="1528" height="2224"></canvas>

<script>

    var canvas = document.getElementById("canvas");
    var ctx = canvas.getContext("2d");
    var imageObj = new Image();

    imageObj.onload = function()
        {
            ctx.drawImage(imageObj, 0, 0);
        }
    imageObj.src = 'Britannia-Map.jpg';

    function drawClock()
        {
            ctx.beginPath();
            ctx.arc(arguments[0],arguments[1],40,0,2*Math.PI);
            ctx.stroke();
        }

</script>
</body>
</html>