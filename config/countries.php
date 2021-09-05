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

    'country_name' => [
        /*
         * Key is the Laravel locale code
         * Index 0 of sub-array is the Carbon locale code
         * Index 1 of sub-array is the PHP locale code for setlocale()
         * Index 2 of sub-array is true if the language uses RTL (right-to-left)
         * Index 3 of sub-array is the language name in the original language
         */

            'Latvia' => [
                'status'=>true,
            'code' => 'LV',
            'name'=>'Latvia',
            'currency' => 'EUR',
            'regions' => [
                'Riga' => [
                    'post_codes' => [
                        '1009',
                        '1010',
                        '1015'
                    ],
                ],
                'Jurmala' => [
                    'post_codes' => [
                        '2009',
                        '2010',
                        '2015'
                    ],
                ],
                'Kuldiga',
                'Tukums',
                'Ventspils'
            ],
        ],
        'Estonia' => [
            'status'=>true,
            'code' => 'EE',
            'name'=>'Estonia',
            'currency' => 'EUR',
            'regions' => [
                'Tallinn',
                'Virtsu',
                'Hapsalu',
                'Parnu',
                'Vormsi'
            ]
        ],
    ],



];
