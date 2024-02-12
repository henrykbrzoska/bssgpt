<?php
namespace BssGpt\Service;

use Product;

class GptService
{
    public function generateMetaData(Product $product)
    {
        return [
            'meta_title' => 'Wygenerowany Meta Title dla ' . $product->name,
            'meta_description' => 'Wygenerowany Meta Description dla ' . $product->name
        ];
    }
}
