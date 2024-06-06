#!/bin/bash

php ./tools/generateDocs.php

chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./index.html

title="Tras el Mundo Perdido - Una campaña de SWADE donde lucharás contra nazis a lomos de dinosaurios. Versión 0.1"
author="@Gwannon"
subject="Por definir"

exiftool -overwrite_original -Title="$title" -Author="$author" -Subject="$subject" ./temp.pdf

php ./tools/pdfIndexGenerator.php > ./pdf.info

pdftk 'temp.pdf' update_info_utf8 'pdf.info' output 'temp2.pdf'

rm temp.pdf
rm pdf.info

./tools/pagination.sh temp2.pdf TrasElMundoPerdido.pdf

rm temp2.pdf
