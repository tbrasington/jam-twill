@formField('files', [
    'name' => 'video_file',
    'label' => 'Video file',
    'note' => 'Must be an mp4 file'
])

@formField('medias', [
    'name' => 'poster_image',
    'label' => 'Poster Frame',
    'max' => 1,
    'note' => 'Minimum image width: 1500px'
])

@formField('select', [
    'name' => 'autoplay',
    'label' => 'Autoplay',
    'options' => [
        [
            'value' => true,
            'label' => 'Yes'
        ],
        [
            'value' => false,
            'label' => 'No'
        ]
    ]
])