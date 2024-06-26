# Tras El Mundo Perdido
"OPERACIÓN: Tras El Mundo Perdido" es una ambientación para Savage Worlds Edición Aventura con el que podrás jugar aventuras durante la Segunda Guerra Mundial con un comando del ejército inglés que usa dinosaurios en sus misiones contra los nazis.

[Página web](https://mundoperdido.gwannon.com/)

[Versión PDF](https://mundoperdido.gwannon.com/pdf/)

# Por hacer de la versión 0.4
* Estadísticas de dinosaurios
* Estadísticas de secuaces

# Por hacer de la versión 0.3

## La Fundación Roxton (5)
* El mundo perdido
* La expedición Roxton
* La Fundación Roxton
  * Lady Roxton
  * Las instalaciones de la Fundación Roxton

## Recursos 
* https://commons.wikimedia.org/wiki/Category:Charles_R._Knight
* https://www.rawpixel.com/search/blacksmith?page=4&path=_topics%7C%24free&sort=popular

***

# Changelog

## Versión 0.3 En desarrollo
* "Acerca de los dinosaurios" terminado.

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