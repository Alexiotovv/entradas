<style>
/* Estilo del contenedor de la alerta */
/* Estilo del contenedor de alertas */
.alert-container {
    position: fixed;
    top: 20px;
    right: 20px;
    max-height: 90vh; /* Altura máxima para evitar que las alertas se salgan de la pantalla */
    overflow-y: auto; /* Habilitar scroll si hay muchas alertas */
    display: flex;
    flex-direction: column;
    gap: 10px; /* Espacio entre alertas */
}

/* Estilo de cada alerta */
.alert-box {
    width: 300px;
    background: #ffefef;
    border-left: 5px solid #ff3b3b;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    border-radius: 8px;
    z-index: 1000;
}

/* .alert-box {
    position: fixed;
    top: 20px;
    right: 20px;
    width: 300px;
    background: #ffefef;
    border-left: 5px solid #ff3b3b;
    box-shadow: 0px 4px 6px rgba(0, 0, 0, 0.1);
    padding: 15px;
    border-radius: 8px;
    z-index: 1000;
} */

/* Encabezado */
.alert-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.alert-header h4 {
    margin: 0;
    font-size: 16px;
    color: #d32f2f;
}

/* Botón cerrar */
.close-btn {
    background: none;
    border: none;
    font-size: 20px;
    cursor: pointer;
    color: #d32f2f;
}

.close-btn:hover {
    color: #b71c1c;
}

/* Contenido */
.alert-body p {
    margin: 5px 0;
    font-size: 14px;
}

/* Pie de alerta */
.alert-footer {
    margin-top: 10px;
    text-align: right;
}

.accept-btn {
    background: #d32f2f;
    color: white;
    padding: 5px 10px;
    border: none;
    cursor: pointer;
    border-radius: 5px;
}

.accept-btn:hover {
    background: #b71c1c;
}
</style>



<div class="top_nav">
    <div class="nav_menu">
        <nav>
            <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
                <li class="">
                    <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown"
                        aria-expanded="false">
                        <img src="subir_cli/<?php echo $imagen; ?>" alt=""><?php echo $nombre; ?>

                        <span class=" fa fa-angle-down"></span>
                    </a>
                    <ul class="dropdown-menu dropdown-usermenu pull-right">

                        <li><a href="logout.php"><i class="fa fa-sign-out pull-right"></i> Cerrar sesion</a></li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</div>

<div id="alertContainer" class="alert-container"></div>

<audio id="myAudio">
    <source src="tono_llamada.mp3" type="audio/mp3">
</audio>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

<script>
//let alertShown = false; // Bandera para verificar si ya se mostró la alerta
let alertasMostradas = [];
// Ejecuta cuando la página ha cargado
window.onload = function() {
    // Función para realizar la consulta AJAX
    function consultarBaseDatos() {
        fetch('controller_alert.php')
            .then((response) => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor');
                }
                return response.json();
            })
            .then((data) => {
                console.log('Datos recibidos:', data);
                data.forEach(element => {
                    // Verifica si los datos son válidos
                    if (element.fecha && element.hora_ingreso && element.hora_salida_programada) {
                        verificarTiempo(element.fecha, element.hora_ingreso, element
                            .hora_salida_programada, element.codigo,
                            element.cliente, 1);//Son minutos adelantados que debe salir el alert
                    }
                });
            })
            .catch((error) => {
                console.error('Error al consultar la base de datos:', error);
            });
    }


    function verificarTiempo(fecha, horaIngreso, horaSalidaProgramada, codigo, cliente, minutos_antes) {
        const ahora = new Date(); // Hora actual del sistema

        let horaAlerta;

        if (horaSalidaProgramada.trim().toLowerCase() === "libre") {
            // Si es "Libre", la alerta se activa 1 hora después de la hora de ingreso
            const horaIngreso24 = convertirHoraAmPm(horaIngreso);
            const fechaHoraIngreso = new Date(`${fecha}T${horaIngreso24}`);
            horaAlerta = new Date(fechaHoraIngreso);
            horaAlerta.setHours(horaAlerta.getHours() + 1); // Sumar 1 hora
        } else {
            // Si no es "Libre", se usa la hora de salida programada como referencia
            const horaSalida24 = convertirHoraAmPm(horaSalidaProgramada);
            horaAlerta = new Date(`${fecha}T${horaSalida24}`);
        }

        // Restar los minutos indicados antes de lanzar la alerta
        // horaAlerta.setMinutes(horaAlerta.getMinutes() - minutos_antes);
        horaAlerta.setMinutes(horaAlerta.getMinutes() - minutos_antes);

        // Compara si estamos en el momento de mostrar la alerta
        // if (ahora >= horaAlerta && ahora < new Date(horaAlerta.getTime() + 60000) && !alertShown) {
        if (ahora >= horaAlerta) {
            mostrarAlerta(horaAlerta, codigo, cliente);

            // alertShown = true;
        }
    }



    function convertirHoraAmPm(horaAmPm) {
        const [time, modifier] = horaAmPm.split(' ');
        let [hours, minutes, seconds] = time.split(':');

        if (modifier === 'PM' && hours !== '12') {
            hours = parseInt(hours) + 12;
        } else if (modifier === 'AM' && hours === '12') {
            hours = '00';
        }

        return `${hours}:${minutes}:${seconds}`;
    }



    function mostrarAlerta(horaAlerta, codigo, cliente) {
        // Crear el contenedor de la alerta
        if (alertasMostradas.includes(codigo)) {
            console.log(`La alerta para el código ${codigo} ya se mostró.`);
            return; // Salir de la función si ya se mostró la alerta
        }
        reproducirSonido(); // Aquí se reproduce el sonido

        const alertaDiv = document.createElement('div');
        
        alertaDiv.classList.add('alert-box');

        // Generar el contenido del modal
        alertaDiv.innerHTML = `
        <div class="alert-content">
            <div class="alert-header">
                <h4>🚨 Alerta Programada</h4>
                <button class="close-btn" onclick="cerrarAlerta(this, '${codigo}')">×</button>
            </div>
            <div class="alert-body">
                <p><strong>Hora Programada:</strong> ${horaAlerta.toTimeString().split(' ')[0]}</p>
                <p><strong>N° Ticket:</strong> ${codigo}</p>
                <p><strong>Cliente:</strong> ${cliente}</p>
            </div>
            <div class="alert-footer">
                <button class="accept-btn" onclick="cerrarAlerta(this, '${codigo}')">Aceptar</button>
            </div>
        </div>
        `;

        // Agregar la alerta al contenedor principal
        // document.getElementById('alertContainer').appendChild(alertaDiv);
        document.getElementById('alertContainer').prepend(alertaDiv);

        // Agregar el código al arreglo de alertas mostradas
        alertasMostradas.push(codigo);
    }

    function reproducirSonido() {
        var audio = document.getElementById("myAudio");
        audio.play();
    }
    // Ejecuta la consulta cada 3 segundos
    setInterval(consultarBaseDatos, 3000);
};





// Función para cerrar el mensaje de alerta y actualizar la tabla en la base de datos
function cerrarAlerta(btn, codigo) {
    const alertaDiv = btn.closest('.alert-box');

    // Remover la alerta del DOM
    if (alertaDiv) {
        alertaDiv.remove();
    }
    alertasMostradas = alertasMostradas.filter((c) => c !== codigo);

    // Enviar solicitud para actualizar la tabla en el backend
    fetch('update_alert.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify({
                codigo
            }), // Enviar el código como JSON
        })
        .then((response) => {
            if (!response.ok) {
                throw new Error('Error al actualizar la alerta en la base de datos');
            }
            return response.json();
        })
        .then((data) => {
            console.log('Actualización completada:', data);
            if (data.success) {
                console.log(`Código ${codigo} actualizado correctamente`);
            } else {
                console.error('Error en la respuesta del servidor:', data.message);
            }
        })
        .catch((error) => {
            console.error('Error al actualizar la tabla:', error);
        });
}
</script>