# Tras El Mundo Perdido
"OPERACIÓN: Tras El Mundo Perdido" es una ambientación para SWADE con el que podrás jugar aventuras durante la Segunda Guerra Mundial con un comando del ejército inglés que usa dinosaurios en sus misiones contra los nazis.

[Página web](https://mundoperdido.gwannon.com/)

[Versión PDF](https://mundoperdido.gwannon.com/pdf/)


# Script para convertir MD a PDF
pdf.sh es un script que convierte .md en .html y luego en un PDF con índice y metadatos.

En config.php se pueden definir varios textos que van en varias partes del HTML y el PDF.

Para generar el html y el PDF hay que ejecutar ./pdf.sh

## Tools
* generateDocs.php -> Convierte .md en .html y crea un fichero de texto con pdfIndexGenerator.php para meter metadatos e indice al PDF 
* pdfIndexGenerator.php -> genera un índice para el PDF
* pagination.sh -> mete paginación al PDF.
* template.html -> Plantilla de html donde meter el código html creado a partir del .md

## TODO
* Quitar la paginación en la primera y la última página

## TOFIX

## Requerimientos
* PHP 8.0 o superior + composer
* Chromium (Chrome cambiando el pdf.sh)
* pdftk
* pdfLatex

## Instalación

Hay que ejecutar composer para instalar el repositorio [fastvolt/markdown](https://github.com/fastvolt/markdown) que convierte el MD en html

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

# Changelog

## Versión 0.2 en desarrollo
* Arquetipos terminados
* "Epilogo" terminado.

## Versión 0.1 08/06/2024
* Mejorado todo el sistema de creación de PDF y HTML. Ahora funciona desde ficheros .md y tiene variables
* Montado todo diseño CSS
* Montado índice en HTML y en PDF
* Creada estructura general de la campaña
* Montada [página web del proyecto](https://mundoperdido.gwannon.com/)