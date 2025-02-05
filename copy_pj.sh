#!/bin/bash

# Ruta de la carpeta origen
ORIGEN="/home/alexvasquez/Desktop/Proyectos/entradas_salidas"

# Ruta de la carpeta destino
DESTINO="/var/www/entradassalidas"

# Crear la carpeta destino si no existe
mkdir -p "$DESTINO"

# Copiar el contenido de la carpeta origen al destino
cp -r "$ORIGEN/"* "$DESTINO"

echo "Copia completada de $ORIGEN a $DESTINO"
