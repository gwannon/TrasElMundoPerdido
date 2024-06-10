#!/bin/bash

php ./tools/generateDocs.php > ./metas.txt
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./TrasElMundoPerdido.pdf ./index.html
pdftk 'TrasElMundoPerdido.pdf' update_info_utf8 'metas.txt' output 'temp.pdf'
rm metas.txt
./tools/pagination.sh temp.pdf TrasElMundoPerdido.pdf
rm temp.pdf