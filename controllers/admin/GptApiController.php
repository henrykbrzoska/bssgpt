<?php

namespace bssgpt\controllers\admin;

use PrestaShopBundle\Controller\Admin\FrameworkBundleAdminController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class GptApiController extends FrameworkBundleAdminController
{
    public function testAction(Request $request)
    {
        // Odbierz dane z żądania POST
        $productName = $request->request->get('product_name');
        $productDescription = $request->request->get('product_description');
        $mainImageUrl = $request->request->get('main_image_url');

        // Logika zapytania do API GPT
        $response = [
            'meta_title' => 'Wygenerowany Meta Title dla ' . $productName,
//            'meta_description' => 'Wygenerowany Meta Description dla ' . $productName
        ];

        return new Response(json_encode($response));
    }
}
