<?php
return [
    'dashboard' => [
        'modules' => [
            'App\Models\Entry' => [ // module name if you added a morph map entry for it, otherwise FQCN of the model (eg. App\Models\Project)
                'name' => 'entries', // module name
                'label' => 'projects', // optional, if the name of your module above does not work as a label
                'label_singular' => 'project', // optional, if the automated singular version of your name/label above does not work as a label
                'count' => true, // show total count with link to index of this module
                'create' => false, // show link in create new dropdown
                'activity' => false, // show activities on this module in actities list
                'draft' => true, // show drafts of this module for current user 
                'search' => false, // show results for this module in global search
            ],
        ],
    ],
    'media_library' => [
        'disk' => 'libraries',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 'local'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'App\Services\MediaLibrary\Croppa'), //A17\Twill\Services\MediaLibrary\Local
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
        'allowed_extensions' => ['mp4'],
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
                'mosaic' => [
                    'title' => 'Mosaic',
                    'icon' => 'image',
                    'component' => 'a17-block-mosaic',
                ],
                'video' => [
                    'title' => 'Video',
                    'icon' => 'image',
                    'component' => 'a17-block-video',
                ]
            ],
            'repeaters' => [
                'mosaic_asset' => [
                    'title' => 'Mosaic',
                    'trigger' => 'Add asset',
                    'component' => 'a17-block-mosaic_asset',
                    'max' => 10,
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
                ],
                'poster_image'=>[
                    'default' => [
                        [
                            'name' => 'Poster',
                            'ratio' => null,
                            'minValues' => [
                                'width' => 100,
                                'height' => 100,
                            ],
                        ],
                    ]
                ]
            ],
            'files'=>['video_file']
    ]
];