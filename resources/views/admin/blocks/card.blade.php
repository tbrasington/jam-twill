@formField('medias', [
    'name' => 'image',
    'label' => 'Image',
    'note' => 'Minimum image width: 1500px'
])


@formField('select', [
    'name' => 'fullwidth',
    'label' => 'Card type',
    'options' => [
        [
            'value' => 'pullout',
            'label' => 'Pullout'
        ],
        [
            'value' => 'half',
            'label' => 'Half'
        ],
        [
            'value' => 'full',
            'label' => 'Full'
        ]
    ]
])
@formField('input', [
    'name' => 'title', 
    'label' => 'Title',
    'maxlength' => 250,
    'placeholder' => 'Title of the card',
])

@formField('input', [
    'name' => 'short_description',
    'type' => 'textarea',
    'label' => 'Short Description',
    'maxlength' => 500,
    'rows' => 4
])

@formField('input', [
    'name' => 'url', 
    'label' => 'URL',
    'placeholder' => 'https://',
])