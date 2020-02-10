<?php
//pegando conteúdo do arquivo json (ele vem em formato json)
$json = file_get_contents("conteudo.json");
//transformando formato json para array associativo
$arquivo = json_decode($json, TRUE);
//modificando conteúdo do arquivo
$arquivo['categorias'][10] = "fiz alteração";
//transforma o conteúdo atualizado em json (para devolvê-lo)
$novoJson = json_encode($arquivo);
//envio de conteúdo atualizado (nomearquivo, conteúdo)
file_put_contents('conteudo.json', $novoJson);
