# Tras El Mundo Perdido
"OPERACIÓN: Tras El Mundo Perdido" es una ambientación para Savage Worlds Edición Aventura con el que podrás jugar aventuras durante la Segunda Guerra Mundial con un comando del ejército inglés que usa dinosaurios en sus misiones contra los nazis.

[Página web](https://mundoperdido.gwannon.com/)

[Versión PDF](https://mundoperdido.gwannon.com/pdf/)

# Por hacer de la versión 0.9
* Parte 8: Regreso al Mundo Perdido
* Parte 9: La Selva Negra

# Por hacer de la versión 0.8
* Parte 6: El frente ruso
* Parte 7: Regreso a casa

# Por hacer de la versión 0.7
* Parte 5: Normandía
* Parte 4: Noruega

# Por hacer de la versión 0.6
* Parte 2: Norte de África
* Parte 3: Río de la Plata

# Por hacer de la versión 0.5
* Relatos salvajes
  * Un día en el museo
  * Cena de etiqueta
  * El pecio
  * Campo minado
  * Limpiando el puerto
  * Despedidas
  * El secreto de los Branningan
  * Espécimen perdido
  * Arte robado
* El mundo perdido
* La expedición Roxton

## Recursos 
* https://commons.wikimedia.org/wiki/Category:Charles_R._Knight
* https://www.rawpixel.com/search/blacksmith?page=4&path=_topics%7C%24free&sort=popular

***
***

# Changelog

# Versión 0.5 En desarrollo
* Terminado el Relato Salvaje "¿Quién es Marion Fairfax?"

# Versión 0.4.3 02/08/2024
* Terminado el Relato Salvaje "Titanes de tiempos pretéritos"
* Terminado el Relato Salvaje "¿Quién es Marion Fairfax?"
* Terminada la parte de "Primera misión" de "Parte 1: La isla de Skye"

## Versión 0.4.2 28/07/2024
* Terminada la parte de "Reclutamiento" de "Parte 1: La isla de Skye"
* Terminada la parte de "Primeros pasos" de "Parte 1: La isla de Skye"
* Terminada la parte de "Entrenamiento de "Parte 1: La isla de Skye"
* Terminada la parte de "Dinosaurios a la fuga" de "Parte 1: La isla de Skye"
* Terminada la parte de "Compañeros para siempre" de "Parte 1: La isla de Skye"

## Versión 0.4.1 16/07/2024
* Terminada tabla de dinosaurios como vehículos
* Terminada ambientación "Lady Roxton"
* Terminada ambientación "La Guerra"
* Terminada ambientación "La Fundación Roxton hoy en día"

## Versión 0.4 08/07/2024
* Terminado mapa de las instalaciones de la isla de Skye
* Terminado relato salvaje: El prototipo
* Terminado relato salvaje: La protesta

## Versión 0.3.1 02/07/2024
* Dinosaurios terminados: Pteranodon, Plesiosaurio, Megalosaurio
* Secuaces terminados: Infantería, Oficial, Mujeres y hombres de ciencia, Tripulante del "Mary Anning", Combatiente de la guerrilla, Líder de la guerrilla, Infantería nazi, Oficial nazi, Infantería nazi acorazado, Infantería nazi con lanzallamas

## Versión 0.3 30/06/2024
* "Acerca de los dinosaurios" terminado.
* Creadas imágenes para todos los capítulos
* Dinosaurios terminados: Alosaurio, Estegosaurio, Ictiosaurio, Iguanodones
* Animales terminados: Megaloceros, Phorusrhacos, Pitecántropo, Cavernícola, Glyptodon

## Versión 0.2 13/08/2024
* "La campaña" terminado.
* "Epilogo" terminado.
* "Reglas especiales para la campaña" terminado.

## Versión 0.1 08/06/2024
* Mejorado todo el sistema de creación de PDF y HTML. Ahora funciona desde ficheros .md y tiene variables
* Montado todo diseño CSS
* Montado índice en HTML y en PDF
* Creada estructura general de la campaña
* Montada [página web del proyecto](https://mundoperdido.gwannon.com/)

***
***

# Script para convertir MD a PDF
pdf.sh es un script que convierte .md en .HTML y luego en un PDF con índice y metadatos.

En config.php se pueden definir varios textos que van en varias partes del HTML y el PDF.

Para generar el HTML y el PDF hay que ejecutar ./pdf.sh

## Herramientas /tools/
* generateDocs.php: Convierte .md en .HTML y crea un fichero de texto con pdfIndexGenerator.php para meter metadatos e indice al PDF 
* pdfIndexGenerator.php: genera un índice para el PDF
* pagination.sh: mete paginación al PDF.
* template.html: Plantilla de HTML donde meter el código HTML creado a partir del .md

## TODO
* Quitar la paginación en la primera y la última página

## TOFIX

## Requerimientos
* PHP 8.0 o superior + composer
* Chromium (Chrome cambiando el pdf.sh)
* pdftk
* pdfLatex

## Instalación

Hay que ejecutar composer para instalar el repositorio [fastvolt/markdown](https://github.com/fastvolt/markdown) que convierte el MD en HTML.

### Instalar pdftk en Ubuntu
```
sudo apt-get install pdftk
```

### Instalar pdfLatex en Ubuntu
```
sudo apt-get install texlive-latex-base
sudo apt-get install texlive-fonts-recommended
sudo apt-get install texlive-fonts-extra
```