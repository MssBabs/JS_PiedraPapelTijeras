<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Piedra, Papel o Tijeras</title>
        <style>
            body, header, main, #caja0, #subCaja1, #subCaja2, #jugadores, #tiradas{
                display: flex;
                align-content: center;
                justify-content: center;
                text-align: center;
                font-family: Courier, "Lucida Console", monospace;
            }
            
            body, header, main, #caja0, #subCaja1, #subCaja2{flex-direction: column;}
            #jugadores, #tiradas{flex-direction: row;}

            #jugadores, #tiradas{
                gap: 4rem;
                margin: 1rem;
            }
            
            #jugadores{font-size: 2rem;}
            #tiradas{font-size: 6rem;}
            #subCaja2{font-size: 2rem;}
        </style>
    </head>

    <body>
        <header>
            <h1>¡ PIEDRA, PAPEL, TIJERAS !</h1>
            <h3>Actualice la pagina para mostrar otra partida</h3>
            <br/>
        </header>

        <main>
            <?php 
                //define()-> funcion propia del php
                define ('PIEDRA1',  "&#x1F91C;");
                define ('PIEDRA2',  "&#x1F91B;");
                define ('TIJERAS',  "&#x1F596;");
                define ('PAPEL',    "&#x1F91A;" );

                $jugador1= mt_rand(1,3);
                $jugador2= mt_rand(1,3);
                $resultado;

                switch ($jugador1) {
                    case 1:         //Piedra
                        $jugador1= constant('PIEDRA1');

                        switch ($jugador2) {
                            case 1:         //Piedra
                                $jugador2= constant('PIEDRA2');
                                $resultado= "¡ EMPATE !";
                                break;
                            case 2:         //Papel
                                $jugador2= constant('TIJERAS');
                                $resultado= "Gana Jugador 1";
                                break;
                            case 3:         //Tijera 
                                $jugador2= constant('PAPEL');
                                $resultado= "Gana Jugador 2";
                                break;
                        }
                        break;

                    case 2:         //Papel
                        $jugador1= constant('TIJERAS');

                        switch ($jugador2) {
                            case 1:         //Piedra 
                                $jugador2= constant('PIEDRA2');
                                $resultado= "Gana Jugador 1";
                                break;
                            case 2:         //Papel 
                                $jugador2= constant('TIJERAS');
                                $resultado= "¡ EMPATE !";
                                break;
                            case 3:         //Tijera
                                $jugador2= constant('PAPEL');
                                $resultado= "Gana Jugador 2";
                                break;
                        }
                        break;

                    case 3:         //Tijera
                        $jugador1= constant('PAPEL');

                        switch ($jugador2) {
                            case 1:         //Piedra
                                $jugador2= constant('PIEDRA2');
                                $resultado= "Gana Jugador 2";
                                break;
                            case 2:         //Papel
                                $jugador2= constant('TIJERAS');
                                $resultado= "Gana Jugador 1";
                                break;
                            case 3:         //Tijera 
                                $jugador2=  constant('PAPEL');
                                $resultado= "¡ EMPATE !";
                                break;
                        }
                        break;
                } 
            ?>

            <div id="caja0">
                <div id="subCaja1">
                    <div id="jugadores">
                        <div class="jugador">Jugador 1</div>
                        <div class="jugador">Jugador 2</div>
                    </div>

                    <div id="tiradas">
                        <div class="emoji"><?php echo "$jugador1"; ?></div>
                        <div class="emoji"><?php echo "$jugador2"; ?></div>
                    </div>
                </div>

                <div id="subCaja2">
                    <?php echo "$resultado"; ?>
                </div>
            </div>
        </main>
    </body>
    


</htm>