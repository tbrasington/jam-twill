@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
    'note' => 'Minimum image width: 1500px'
])

@formField('select', [
    'name' => 'columns',
    'label' => 'Column Span',
    'placeholder' => '',
    'options' => [
        [
            'value' => 6,
            'label' => '6'
        ],
        [
            'value' => 4,
            'label' => '4'
        ],
        [
            'value' => 8,
            'label' => '8'
        ],
        [
            'value' => 12,
            'label' => '12'
        ]
    ]
])