@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
    'note' => 'Minimum image width: 1500px'
])

@formField('select', [
    'name' => 'imageSize',
    'label' => 'Image Size',
    'placeholder' => 'Select ',
    'options' => [
        [
            'value' => 1,
            'label' => 'Full Bleed'
        ],
        [
            'value' => 2,
            'label' => 'Inline'
        ]
    ]
])