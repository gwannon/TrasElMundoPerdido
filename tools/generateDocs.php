<?php

require __DIR__ . '/../vendor/autoload.php';

$tags = [
  'HTML' => '',
  'HASH' => date("YmdHis"),
  'TITLE' => "Tras el mundo perdido",
  'SHORTDESCRIPTION' => 'Una campaña donde lucharás contra nazis a lomos de dinosaurios.',
  'DESCRIPTION' => "Tras El Mundo Perdido es una campaña para SWADE con la que podrás jugar aventuras durante la Segunda Guerra Mundial con un comando del ejército inglés que usa dinosaurios en sus misiones contra los nazis.",
  'VERSION' => "0.1",
  "AUTHOR" => "@Gwannon",
  "KEYWORDS" => "juego de rol, Savage Worlds, dinosaurios, nazis, II Guerra Mundial"
];

//Generamos el HTML
use FastVolt\Helper\Markdown;
$mkd = Markdown::new();
$mkd->setContent(file_get_contents(__DIR__ . "/../TrasElMundoPerdido.md"));
$tags['HTML'] = $mkd->toHtml();
$html = file_get_contents(__DIR__ . "/template.html");
foreach ($tags as $tag => $value) {
  $html = str_replace("|".$tag."|", $value, $html); 
}
$html = str_replace("<hr />", "<div class='saltopagina'></div>\n</section>\n<section>", $html); 
$html = str_replace("<p>\saltopagina</p>", "<div class='saltopagina'></div>", $html);
$html = str_replace("</h1>", "</h1>\n<div class='saltopagina'></div>", $html); 


file_put_contents(__DIR__ . "/../index.html", $html);

echo "InfoKey: Subject\n";
echo "InfoValue: ".$tags['DESCRIPTION']." Versión ".$tags['VERSION']."\n\n";
echo "InfoKey: Author\n";
echo "InfoValue: ".$tags['AUTHOR']."\n\n";
echo "InfoKey: Keywords\n";
echo "InfoValue: ".$tags['KEYWORDS']."\n\n";

include(__DIR__ ."/pdfIndexGenerator.php");