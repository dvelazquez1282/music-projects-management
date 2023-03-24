<?php
    return [
        'classes' => [
            'model' => App\Models\Project::class,
            'scope' => App\Models\Scopes\ProjectScope::class,
        ],
        'model' => [
            'fillable' => [ // To configure the attribute fillable of the model
            ]
        ],
        'scope' => [
            'filters_by' => [  // Te availables attribute for filter the model model queries

            ],
            'search_by' => [  // Te availables attribute for search the model model queries

            ],
            'order_by' => [  // Te availables attribute for order the model queries

            ],
            'select' => [ // Te availables attribute to use in the selects

            ],
            'relations' => [ // The available relations to get in the model query

            ]

        ]
    ]

?>
