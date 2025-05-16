<?php

    $servidor = "localhost";
    $usuario = "root";
    $clave = "";
    $baseDeDatos = "ejemplo";

    $coneccion = mysqli_connect ($servidor, $usuario, $clave, $baseDeDatos );

?>
  
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <title>COLEGIO CUMBAYA</title>
</head>
<body>

<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f4f8;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            margin: 0;
        }

        .page-title {
            font-size: 36px;
            color: #333;
            margin-bottom: 20px;
            text-align: center;
        }

        .form-container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
            text-align: center;
        }

        h2 {
            color: #333;
            margin-bottom: 20px;
        }

        input[type="text"],
        input[type="email"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }

        input[type="text"]:focus,
        input[type="email"]:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            margin: 10px 5px;
            transition: background-color 0.3s;
        }

        input[type="reset"] {
            background-color: #6c757d;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        input[type="reset"]:hover {
            background-color: #5a6268;
        }

        ::placeholder {
            color: #999;
        }
    </style>

<style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f4;
        }
        .title {
            text-align: center;
            color: #333;
            font-size: 2.5em;
            margin-bottom: 20px;
        }
        .description {
            text-align: center;
            max-width: 600px;
            margin: 0 auto 40px;
            font-size: 1.1em;
            color: #555;
        }
        .box-container {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }
        .box {
            background-color: #fff;
            border: 1px solid #ddd;
            border-radius: 8px;
            width: 300px;
            padding: 20px;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        .box h2 {
            background-color: #4CAF50;
            color: white;
            padding: 10px;
            margin: -20px -20px 20px -20px;
            border-radius: 8px 8px 0 0;
            text-align: center;
            font-size: 1.5em;
        }
        .box p {
            color: #333;
            line-height: 1.6;
        }
    </style>





</head>

<body>
    <h1 class="title">INSTITUCIÓN EDUCATIVA FISCAL CUMBAYÁ</h1>
    <p class="description">
        La Unidad Educativa Cumbayá se dedica a ofrecer una educación integral, promoviendo valores como el respeto, la solidaridad y la empatía. Se enfoca en generar un ambiente laboral y educativo armonioso para toda la comunidad.
    </p>
    <div class="box-container">
        <div class="box">
            <h2>Informática</h2>
            <p>
                El programa de Informática capacita a los estudiantes en el uso de tecnologías modernas, programación básica y herramientas digitales. Los alumnos aprenden a desarrollar habilidades en software, hardware y pensamiento computacional, preparándolos para un mundo tecnológico.
            </p>
        </div>
        <div class="box">
            <h2>Contabilidad</h2>
            <p>
                El área de Contabilidad ofrece formación en la gestión financiera, registros contables y análisis económico. Los estudiantes adquieren conocimientos prácticos sobre balances, estados financieros y normativas fiscales, fomentando una base sólida para el mundo empresarial.
            </p>
        </div>
        <div class="box">
            <h2>Ciencias</h2>
            <p>
                El programa de Ciencias promueve el aprendizaje basado en la experimentación y el análisis. Abarca biología, química y física, incentivando el pensamiento crítico y la curiosidad científica para resolver problemas del entorno.
            </p>
        </div>
    </div>
</body>























<h1 class="page-title">Comentario </h1>
    <div class="form-container">
        <h2> </h2>
        <form action="#" name= "ejemplo" method="post" >

<input type="text" name="Comentario" placeholder="Comentario">


<input type= "submit" name="enviar">
<input type= "reset" >

</form>
</body>

<?php

  if(isset($_POST['enviar'])){
      
      $Comentario = $_POST['Comentario'];
      
      
      $insertar = "INSERT INTO datos Values ('$Comentario')";
      
      $coneccion = mysqli_query($coneccion,$insertar);
  }
?>
