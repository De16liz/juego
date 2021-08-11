<?php
    //variables
    $b = 0;//variable que indica si la máquina juega o no.
    $contador = 0;//variable seguro que evita que el while sea infinito.

    while ( $b == 0 && $contador <= 10000 )
    {
        $v1 = "";//recoge los valores de jugado y replica nuevamente en el formulario

        for( $i = 1; $i <= 9; $i++ )//recibe las casillas vacias
        {
            //El texto existe.
            if(isset($_GET['texto'.$i]))
            {
                //echo $_GET['texto'.$i]; 
                //si es espacio o puntos 
                if($_GET['texto'.$i] != "" && $_GET['texto'.$i] != "." )
                {
                    $v1 .= $_GET['texto'.$i];//captura casilla jugada
                }else
                {
                    //rand función con movimientos aleatorios la $b se inicia para activar e iniciar el juego automaticamente
                    if( rand( 1,2 )== 1 && $b == 0)
                    {
                        $v1 .= "O";//juega la máquina.
                        $b = 1;//no se juega mas de una vez y turno del jugador
                    }else{
                        $v1 .= ".";//si es vacio marca punto.
                    }
                    
                }//if else
            }//if
        }//for

        $contador ++;
    }//while
    
    
    header("location:juego.php?dev=$v1");//regresa al formulario del juego.
   
    