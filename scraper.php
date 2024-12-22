<?php
// Função para obter as notícias do site da ISACA 

function getIsacaNews($limit = 18) { // Limite de 18 notícias para não carregar todas
    $url = "https://www.isaca.org/resources/news-and-trends#sort=%40searchdate%20descending&layout=card";

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url); // Define a URL que será acessada
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); // Retorna os dados como string
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Segue redirecionamentos, se existirem
    $html = curl_exec($ch); // Executa o cURL e salva o HTML da página
    curl_close($ch);

    // Carrega o HTML no DOMDocument para manipulação do conteúdo
    $dom = new DOMDocument();
    libxml_use_internal_errors(true); // Ignora erros de HTML mal formatado
    $dom->loadHTML($html); // Carrega o HTML obtido no DOM
    libxml_clear_errors(); // Limpa os erros de parsing

    // Cria um objeto XPath para buscar elementos específicos no DOM
    $xpath = new DOMXPath($dom);

    // Busca as divs com a classe "card" (cada notícia está dentro de uma dessas divs)
    $newsCards = $xpath->query("//div[contains(@class, 'card')]");

    // Cria uma lista para armazenar as notícias extraídas
    $newsList = [];
    $seenTitles = []; // Lista para evitar títulos duplicados
    $count = 0; // Contador para limitar o número de notícias

    // Itera sobre cada card encontrado no HTML
    foreach ($newsCards as $card) {
        if ($count >= $limit) break; // Para quando atingir o limite de notícias

        if (!$card instanceof DOMElement) continue; // Garante que o card é um elemento válido

        // Busca o título (elemento <h3> dentro do card)
        $titleNode = $xpath->query(".//h3", $card); 


        // Busca a descrição ou resumo (elemento <p> dentro do card)
        $summaryNode = $xpath->query(".//p", $card); 

        // Busca a data da notícia (dentro de um <div> com a classe 'additional-content')
        $dateNode = $xpath->query(".//div[contains(@class, 'additional-content')]", $card); 

        // Busca o link para o artigo (elemento <a> dentro do card)
        $linkNode = $xpath->query(".//a", $card); 

        $imageNode = $xpath->query(".//img", $card); // Busca a imagem da notícia

        // Extrai o texto do título, ou usa "No title" se não encontrar
        $title = $titleNode->length > 0 ? trim($titleNode->item(0)->nodeValue) : "No title";

        // Extrai o texto da descrição, ou usa "No summary" se não encontrar
        $summary = $summaryNode->length > 0 ? trim($summaryNode->item(0)->nodeValue) : "No summary";

        // Extrai o texto da data, ou usa "No date" se não encontrar
        $date = $dateNode->length > 0 ? trim($dateNode->item(0)->nodeValue) : "No date";

        // Extrai o link do artigo, ou usa "#" se não encontrar
        $link = $linkNode->length > 0 ? "https://www.isaca.org" . $linkNode->item(0)->getAttribute('href') : "#";

        $image = $imageNode->length > 0 ? $imageNode->item(0)->getAttribute('data-cfsrc') : null; // o data-cfsrc está escondido, quando se usa as
        //DevTools, só aparece o src. Fizemos um vardump:
        //var_dump($imageNode->item(0)->ownerDocument->saveHTML($imageNode->item(0)));

        // Verifica se o título já foi adicionado para evitar duplicados
        if (!in_array($title, $seenTitles)) {
            // Adiciona os dados da notícia à lista
            $newsList[] = [
                'title' => $title, // Título da notícia
                'summary' => $summary, // Resumo ou descrição
                'date' => $date, // Data da notícia
                'link' => $link, // Link para o artigo completo
                'image' => $image, // Imagem da notícia
            ];
            $seenTitles[] = $title; // Marca o título como já processado
            $count++; // Incrementa o contador de notícias
        }
    }

    return $newsList; // Retorna a lista de notícias
}

// Configura o cabeçalho da resposta como JSON
header('Content-Type: application/json');

// Executa a função e exibe as notícias em formato JSON
echo json_encode(getIsacaNews(), JSON_PRETTY_PRINT);
?>
