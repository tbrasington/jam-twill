@formField('select', [
    'name' => 'galleryType',
    'label' => 'Gallery Type',
    'placeholder' => 'Select ',
    'options' => [
        [
            'value' => 1,
            'label' => 'Grid'
        ],
        [
            'value' => 2,
            'label' => 'Inline'
        ]
    ]
])

@formField('medias', [
    'name' => 'gallery',
    'label' => 'Assets',
    'max' => 10,
    'note' => 'Minimum image width: 1500px'
])

