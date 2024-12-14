<?php

return [
    'shipping_methods' => [
        'customer_groups' => [
            'description' => "Associate customer groups to this shipping method to determine it's availability.",
        ],
    ],
    'shipping_rates' => [
        'title' => 'Shipping Rate',
        'title_plural' => 'Shipping Rates',
        'actions' => [
            'create' => [
                'label' => 'Create Shipping Rate',
            ],
        ],
        'empty_state' => [
            'label' => 'No shipping rates',
            'description' => '',
        ],
        'notices' => [
            'prices_incl_tax' => 'All prices include tax, which will be considered when calculating minimum spend.',
            'prices_excl_tax' => 'All prices exclude tax, the minimum spend will be based on the cart sub total.',
        ],
        'form' => [
            'shipping_method_id' => [
                'label' => 'Shipping Method',
            ],
            'price' => [
                'label' => 'Price',
            ],
            'prices' => [
                'label' => 'Price Breaks',
                'repeater' => [
                    'customer_group_id' => [
                        'label' => 'Customer Group',
                        'placeholder' => 'Any',
                    ],
                    'currency_id' => [
                        'label' => 'Currency',
                    ],
                    'min_quantity' => [
                        'label' => 'Min. Spend',
                    ],
                    'price' => [
                        'label' => 'Price',
                    ],
                ],
            ],
        ],
        'table' => [
            'shipping_method' => [
                'label' => 'Shipping Method',
            ],
            'price' => [
                'label' => 'Price',
            ],
            'price_breaks_count' => [
                'label' => 'Price Breaks',
            ],
        ],
    ],
    'exclusions' => [
        'title' => 'Shipping Exclusion',
        'title_plural' => 'Shipping Exclusions',
        'form' => [
            'purchasable' => [
                'label' => 'Product',
            ],
        ],
        'empty_state' => [
            'label' => 'No shipping exclusions',
            'description' => '',
        ],
    ],
    'exclusionlists' => [
        'title' => 'Shipping Exclusion List',
        'title_plural' => 'Shipping Exclusion Lists',
        'form' => [
            'purchasable' => [
                'label' => 'Product',
            ],
        ],
        'empty_state' => [
            'label' => 'No shipping exclusion lists',
            'description' => '',
        ],
        'actions' => [
            'attach' => [
                'label' => 'Add exclusion list',
            ],
            'detach' => [
                'label' => 'Remove',
            ],
        ],
    ],
];
