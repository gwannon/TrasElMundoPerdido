<?php

require __DIR__ . '/../vendor/autoload.php';

include(__DIR__ ."/config.php");

//Generamos el HTML
use FastVolt\Helper\Markdown;
$mkd = Markdown::new();
$mkd->setContent(file_get_contents(__DIR__ . "/../TrasElMundoPerdido.md"));
$tags['HTML'] = $mkd->toHtml();
$html = file_get_contents(__DIR__ . "/template.html");
foreach ($tags as $tag => $value) {
  $html = str_replace("|".$tag."|", $value, $html); 
}
$html = str_replace("<hr />", "<div class=\"saltopagina\"></div>\n</section>\n<section>", $html); 
$html = str_replace("<p>\saltopagina</p>", "<div class=\"saltopagina\"></div>", $html);
$html = str_replace("</h1>", "</h1>\n<div class=\"saltopagina\"></div>", $html); 

$html = str_replace("<table>", "<div><table>", $html); 
$html = str_replace("</table>", "</table></div>", $html); 

$html = str_replace("<p><strong>Cómo lo dirigiría yo:</strong>", "<p class='comodirigir'><strong>Cómo lo dirigiría yo:</strong>", $html); 

$html = preg_replace_callback("/\"saltopagina\"/", function($matches) {
  global $counter;
  if ($counter%2 == 0) $matches[0] = '"saltopagina even" id="anchor'.$counter.'"';
  else $matches[0] = '"saltopagina odd" id="anchor'.$counter.'"';
  $counter++;
  return $matches[0];
}, $html);


file_put_contents(__DIR__ . "/../index.html", $html);

echo "InfoKey: Subject\n";
echo "InfoValue: ".$tags['DESCRIPTION']." Versión ".$tags['VERSION']."\n\n";
echo "InfoKey: Author\n";
echo "InfoValue: ".$tags['AUTHOR']."\n\n";
echo "InfoKey: Keywords\n";
echo "InfoValue: ".$tags['KEYWORDS']."\n\n";

include(__DIR__ ."/pdfIndexGenerator.php");