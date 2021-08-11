<?php 

    //me activa o desactiva dependiendo el valor que se envie sea 0 o 1
    $bandera = 0;//desactivado

    //me valida la varible
    if( isset( $_GET['dev'] ) )
    {

        //me divide los caracteres
        $r = str_split($_GET[ 'dev' ] );
        //var_dump( $r);//me imprime la variable
        $bandera = 1;//se activa
    }
   
?>

<html>
    <head>
        <title> </title>
    </head>
    <body>
      
    <form action="operaciones.php" >

    <?php 

        if( $bandera == 1)
        {
            for( $i = 0; $i <= 6; $i = $i + 3)//me dice las cadenas que ganan de forma horizontal
            {
                if(substr($_GET[ 'dev' ], $i, 3) == "xxx")
                {
                    echo "<h1>!Has ganado¡</h1>";
                }
                if(substr($_GET[ 'dev' ], $i, 3) == "ooo")
                {
                    echo "<h1>¡Perdiste!</h1>";
                }
            }
            
        }

        $i = 0;
        for( $i=1; $i<=9; $i++ )//colocando los textos
        {
            if( $bandera == 1)//coloca los valores, si han sido cargados de una variable.
            {
                echo " <input type='text' name='texto$i' value='".$r[ $i -1 ]."'>";//me escribe en la caja de texto
            }else{
                echo " <input type='text' name='texto$i'  pattern='[Xx]' value=''>";//caja de texto vacia
            }
            
        }
    ?>
        <input type="submit" values="Enviar">

    </form>
            
    </body>
</html>