<script>
    $(document).ready(function() {
        // Controlador de evento clic para el botón de iniciar
        $("#iniciar").click(function() {
            // Obtener el elemento del contador
            var $contador = $(".timer");

            // Iniciar el contador
            iniciarContador($contador);
        });
    });

    function iniciarContador($contador) {
        // Contador de horas, minutos y segundos
        var horas = 0;
        var minutos = 0;
        var segundos = 0;

        // Actualizar el contador cada segundo
        var intervalo = setInterval(function() {
            // Incrementar los segundos
            segundos++;
            if (segundos == 59) {
                // Incrementar los minutos
                minutos++;
                segundos = 0;
                if (minutos == 59) {
                    // Incrementar las horas
                    horas++;
                    minutos = 0;
                    if (horas == 23) {
                        // Terminar el contador
                        clearInterval(intervalo);
                    }
                }
            }

            // Actualizar el tiempo mostrado en el contador
            $contador.html(
                '<div class="count_hours"><h3>' + agregarCero(horas) + '</h3><span class="text-uppercase">hrs</span></div>' +
                '<div class="count_min"><h3>' + agregarCero(minutos) + '</h3><span class="text-uppercase">min</span></div>' +
                '<div class="count_sec"><h3>' + agregarCero(segundos) + '</h3><span class="text-uppercase">sec</span></div>'

            );
        }, 1000);

        // Función para agregar un cero delante de un número si es menor que 10
        function agregarCero(numero) {
            return numero < 10 ? "0" + numero : numero;
        }
    }
</script>