<?php

namespace App\Http\Controllers;

class TestController extends Controller
{
    public function testYaml()
    {
        $params = array(
            'total' => 123,
            'count' => 456,
            'h1' => 'h1 test',
            'area_code' => 33,
        );
        $case = 'case2';
        $page_name = 'favorite-list';
        // $page_name = 'shop-list';

        $meta = meta($page_name, $params);

        return $meta;
    }
}
