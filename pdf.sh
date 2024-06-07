#!/bin/bash

php ./tools/generateDocs.php > ./metas.txt
chromium --no-sandbox --headless --gpu --no-pdf-header-footer --print-to-pdf=./temp.pdf ./index.html
pdftk 'temp.pdf' update_info_utf8 'metas.txt' output 'temp2.pdf'
rm temp.pdf
rm metas.txt
./tools/pagination.sh temp2.pdf TrasElMundoPerdido.pdf
rm temp2.pdf
