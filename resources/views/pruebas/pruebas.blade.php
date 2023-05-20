<!DOCTYPE html>
<html lang="en">

<head>
    <title>Zay Shop eCommerce HTML CSS Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="assets/img/apple-icon.png">
    <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/templatemo.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/custom.css') }}">

    <!-- Load fonts style after rendering the layout styles -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;200;300;400;500;700;900&display=swap">
    <link rel="stylesheet" href="assets/css/fontawesome.min.css">
</head>
<header></header>

<body>
    <div class="container" style="background-color: rgb(123, 100, 11);">
        <div class="row">
            <div class="col-6">
                <button onclick="generarEtiqueta()">Generar etiqueta</button>
            </div>
            <div class="col-6">
                <div id="etiquetas"></div>
            </div>
        </div>
    </div>

    <script>
        let data = {
            "pago_automatizado": true,
            "cuentas": [{
                "idcuenta_dispersion": "37",
                "monto": 0,
                "porcentaje": 100,
                "administrador": false
            }],
            "idpropiedad_alquiler": 4007

        }




        function generarEtiqueta() {
            // crea una nueva etiqueta <p> y le asigna contenido
            var nuevaEtiquetaDiv = document.createElement("div");
            var nuevaEtiqueta = document.createElement("p");
            var contenido = document.createTextNode("Esta es una etiqueta generada dinámicamente");
            nuevaEtiqueta.appendChild(contenido);
            nuevaEtiquetaDiv.appendChild(nuevaEtiqueta)
            nuevaEtiqueta.classList.add("bg-black", "text-white");
            nuevaEtiquetaDiv.classList.add("border", "text-white", "p-2", "mt-2", "mb-2");

            // agrega la etiqueta al contenedor
            var contenedor = document.getElementById("etiquetas");
            contenedor.appendChild(nuevaEtiquetaDiv);
        }

        const sumar = () => {
            let suma = 0;
            let n = 0;

            for (let index = 0; index < 10; index++) {
                n = n + 1;
                suma = suma + n;
                if (suma == 10) {
                    console.log(suma)
                }
            }
        }
        sumar()


        function transposeMatrix(matrix) {
            const rows = matrix.length;
            const cols = matrix[0].length;

            // Crea una matriz vacía con el número de columnas igual al número de filas de la matriz original
            const result = new Array(cols).fill(0).map(() => new Array(rows).fill(0));

            // Interchange rows and columns
            for (let i = 0; i < rows; i++) {
                for (let j = 0; j < cols; j++) {
                    result[j][i] = matrix[i][j];
                }
            }

            return result;
        }
        const matrix = [
            [1, 2, 3],
            [4, 5, 6],
        ];
        const transposed = transposeMatrix(matrix);
        console.log(matrix)
        console.log(transposed)
    </script>
</body>
<footer></footer>

</html>
