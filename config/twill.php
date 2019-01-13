<?php

return [
    'media_library' => [
        'disk' => 'libraries',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'App\Services\MediaLibrary\Croppa'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
    ],
    'file_library' => [
        'disk' => 'libraries',
        'endpoint_type' => env('FILE_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('FILE_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('FILE_LIBRARY_LOCAL_PATH'),
        'file_service' => env('FILE_LIBRARY_FILE_SERVICE', 'A17\Twill\Services\FileLibrary\Disk'),
        'acl' => env('FILE_LIBRARY_ACL', 'public-read'),
        'filesize_limit' => env('FILE_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => [],
    ],
    'block_editor' => [
        'blocks' => [
            'text' => [
                'title' => 'Body text',
                'icon' => 'text',
                'component' => 'a17-block-text',
            ],
            'image' => [
                'title' => 'Image',
                'icon' => 'image',
                'component' => 'a17-block-image',
            ],
            'gallery' => [
                'title' => 'Gallery',
                'icon' => 'image',
                'component' => 'a17-block-gallery',
            ],
            'quote' => [
                'title' => 'Quote',
                'icon' => 'text',
                'component' => 'a17-block-quote',
            ]
            ],
            'crops' => [
                'image' => [
                    'default' => [
                        [
                            'name' => 'Uncropped',
                            'ratio' => null,
                            'minValues' => [
                                'width' => 100,
                                'height' => 100,
                            ],
                        ],
                    ]
                ], 
                'gallery' => [
                    'default' => [
                        [
                            'name' => 'Uncropped',
                            'ratio' => null,
                            'minValues' => [
                                'width' => 100,
                                'height' => 100,
                            ],
                        ],
                    ]
                ]
            ]
    ]
];