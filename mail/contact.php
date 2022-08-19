//--!contacto--!//

<?php 

incluir (" control-group ");

if (isset ( $ _POST [ 'registrar' ])) {
    if (strlen ( $ _POST [ 'nombre' ]) >= 1 && strlen ( $ _POST [ 'correo electrónico' ]) >= 1 ) {
	    $ nombre = trim( $ _POST [ 'nombre' ]);
	    $ correo electrónico = recortar ( $ _POST [ 'correo electrónico' ]);
	    $ consulta =" INSERT INTO datos(nombre, email, ) VALORES(' $ name ',' $ mail ','description') ";
	    $ resultado = mysqli_query( $ conex , $ consulta );
	    si ( $ resultado ) {
	    	?> 
	    	< h3  class =" ok " > ¡Te ha enviado correctamente! </ h3 >
           <?php
	    } más {
	    	?> 
	    	< h3  class =" bad " > ¡Ups ha ocurrido un error! </ h3 >
           <?php
	    }
    }    más {
	    	?> 
	    	< h3  class =" bad " > ¡Por favor completa los campos! </ h3 >
           <?php
    }
}

?>





