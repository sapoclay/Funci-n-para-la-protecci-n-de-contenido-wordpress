<?php
/*DESHABILITAR EL USO DEL CLIC DERECHO, DE LA SELECCIÓN Y DE LA TECLA CTRL (PARA EVITAR COMBINACIONES DE TECLAS)*/
add_action('wp_footer', 'entreunosyceros_denegar_copiar_pegar');
function entreunosyceros_denegar_copiar_pegar() {
    /*Limitamos el uso del script a las páginas de política de privacidad, terminos y condiciones y política de cookies. Solo hay que usar el slug de cada página*/
    if ( is_page('politica-de-privacidad-entreunosyceros') || is_page('terminos-y-condiciones-entreunosyceros') || is_page('politica-de-cookies')):
    ?>
        <script>
            (function( $ ) {
                // Evita copiar, pegar y el menu contextual
                $('body').bind('copy contextmenu',function(e) {
                    e.preventDefault(); return false; 
                });

                // Evita la selección del texto
                $(document).ready(function(){
                    $("body").css("-webkit-user-select","none");
                    $("body").css("-moz-user-select","none");
                    $("body").css("-ms-user-select","none");
                    $("body").css("-o-user-select","none");
                    $("body").css("user-select","none");
                });

                //Deshabilitamos la tecla Ctrl, para evitar combinaciones de teclas
            document.addEventListener("keydown", function (event) {
                if (event.ctrlKey) {
                    event.preventDefault();
                }   
            });
            })( jQuery );

            
        </script>
    <?php
    endif; /*Cerramos la condición que se debe cumplir*/
}
