<?php
return [
    /*
     * Show language selector
     *
     * @var bool
     */
    'status' => true,

    /*
     * Available languages
     *
     * Add the language code to the following array
     * The code must have the same name as in the languages folder
     * Make sure they're in alphabetical order.
     *
     * @var array
     */

    'name' => [
        /*
         * Key is the Laravel country
         * Index 0 of sub-array country regions

         */

        0 => [
            'country_name' => 'Latvia',
            'status' => true,
            'country_code' => 'LV',
            'currency' => 'EUR',
            'post_index' => 'LV',
            'regions' => [
                0 => [
                    'city_name' => 'Riga',
                    'streets' => [
                        'Stabu',
                        'Brivibas',
                        'Valdemara'
                    ],
                    'post_codes' => [
                        '1009',
                        '1010',
                        '1015'
                    ],
                ],

                1 => [
                    'city_name' => 'Jurmala',
                    'streets' => [
                        'Skolas',
                        'Raina',
                        'Talsu'
                    ],
                    'post_codes' => [
                        '2009',
                        '2010',
                        '2015'
                    ],
                ],

                2 => [
                    'city_name' => 'Kuldiga',
                    'streets' => [
                        'Kuldigas',
                        'Rigas',
                        'Rojas'
                    ],
                    'post_codes' => [
                        '3009',
                        '3010',
                        '3015'
                    ],
                ],

                3 => [
                    'city_name' => 'Tukums',
                    'streets' => [
                        'Tukuma 1',
                        'Tukuma 2',
                        'Kemeru pr.'
                    ],
                    'post_codes' => [
                        '4009',
                        '4010',
                        '4015'
                    ],
                ],

                4 => [
                    'city_name' => 'Ventspils',
                    'streets' => [
                        'Ventspils 1',
                        'Ventspils 2',
                        'Ventspils 3'
                    ],
                    'post_codes' => [
                        '5009',
                        '5010',
                        '5015'
                    ],
                ],
            ],
        ],
        1 => [
            'country_name' => 'Estonia',
            'status' => true,
            'country_code' => 'EE',
            'currency' => 'EUR',
            'post_index' => 'LV',
            'regions' => [


                0 => [
                    'city_name' => 'Tallinn',
                    'streets' => [
                        'Tallinn 1',
                        'Tallinn 2',
                        'Tallinn 3'
                    ],
                    'post_codes' => [
                        '2009EE',
                        '2010EE',
                        '2015EE'
                    ],
                ],

                1 => [
                    'city_name' => 'Virtsu',
                    'streets' => [
                        'Virtsu 1',
                        'Virtsu 2',
                        'Virtsu 3'
                    ],
                    'post_codes' => [
                        '3009EE',
                        '3010EE',
                        '3015EE'
                    ],
                ],

                2 => [
                    'city_name' => 'Hapsalu',
                    'streets' => [
                        'Virtsu 1',
                        'Virtsu 2',
                        'Virtsu 3'
                    ],
                    'post_codes' => [
                        '2009',
                        '2010',
                        '2015'
                    ],
                ],
            ],
        ],
    ],

];
