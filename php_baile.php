<?php
    echo 'Gracias por dedicarnos un poco de tiempo '. $nombre;
    echo '<br/> Esta es la información que nos has proporcionado. <br/> Si quieres cambiar algo puedes volver atrás. <br/>';
    echo 'Nombre: '; echo $_POST['nombre']; echo '<br/>';
    echo 'Practicas baile: '; echo $_POST['siNo']; echo '<br/>';
    echo 'Con quién bailas: '; echo $_POST['gente']; echo '<br/>';
    echo 'Estación en la que viajas: '; echo $_POST['musica']; echo '<br/>';
?>