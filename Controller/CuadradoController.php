<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/mdb.min.css">
<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">
<link rel="stylesheet" href="../css/style.css">
<a href="../index.php" class="btn btn-link btn-danger">volver al inicio</a><br>

<div class="flex-center bg-deep-purple intro-2">

    <div style="font-family: monospace; line-height: 13px; letter-spacing: 5px;">


        <?php
        require_once '../logica/Cuadrado.php';
        $cua = new Cuadrado();
        $num1 = filter_input(INPUT_POST, 'txtnum');
        echo "<span class='badge badge-cyan'>";
        ?>
        <?php $cua->horizontal($num1); ?>

        <?php
        for ($i = 0; $i < $num1 - 2; $i++) {
            $cua->vertical($num1);
        }

        $cua->horizontal($num1);
        echo "</span>";
        ?>

    </div>  
</div>









