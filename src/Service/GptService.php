<?php
namespace BssGpt\Service;

use Product;

class GptService
{
    public function generateMetaData(Product $product)
    {
        // Tutaj umieść logikę zapytania do API GPT
        // Zwróć wygenerowane meta dane

        // Przykład zwracanych danych
        return [
            'meta_title' => 'Wygenerowany Meta Title dla ' . $product->name,
            'meta_description' => 'Wygenerowany Meta Description dla ' . $product->name
        ];
    }
}
