<?php

// use Aws\S3\S3Client;
// use League\Flysystem\AwsS3v3\AwsS3Adapter;
// use League\Flysystem\Filesystem;

// $client = new S3Client([
//     'credentials' => [
//         'key'    => env('S3_KEY'),
//         'secret' =>  env('S3_SECRET'),
//     ],
//     'region' => env('S3_REGION'),
//     'version' => 'latest',
// ]);

// $adapter = new AwsS3Adapter($client, env('S3_BUCKET'));

// $filesystem = new Filesystem($adapter);

// 'source' => env('GLIDE_SOURCE',  $filesystem ),

return [
    'aws_url' => env('AWS_URL'),
    'admin_app_url' => env('ADMIN_APP_URL', env('APP_URL').'/admin'),
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
        'disk' => 'twill_media_library',
        'endpoint_type' => env('MEDIA_LIBRARY_ENDPOINT_TYPE', 's3'),
        'cascade_delete' => env('MEDIA_LIBRARY_CASCADE_DELETE', false),
        'local_path' => env('MEDIA_LIBRARY_LOCAL_PATH', 'uploads'),
        'image_service' => env('MEDIA_LIBRARY_IMAGE_SERVICE', 'A17\Twill\Services\MediaLibrary\Imgix'),
        'acl' => env('MEDIA_LIBRARY_ACL', 'private'),
        'filesize_limit' => env('MEDIA_LIBRARY_FILESIZE_LIMIT', 50),
        'allowed_extensions' => ['svg', 'jpg', 'gif', 'png', 'jpeg'],
        'init_alt_text_from_filename' => true,
        'prefix_uuid_with_local_path' => config('twill.file_library.prefix_uuid_with_local_path', false),
        'translated_form_fields' => false,
    ],
    'glide' => [
        'source' => env('GLIDE_SOURCE', storage_path('app/public/' . config('twill.media_library.local_path'))),

        'cache' => env('GLIDE_CACHE', storage_path('app')),
        'cache_path_prefix' => env('GLIDE_CACHE_PATH_PREFIX', 'glide_cache'),
        'base_url' => env('GLIDE_BASE_URL',  config('app.url')),
        'base_path' => env('GLIDE_BASE_PATH', 'img'),
        'use_signed_urls' => env('GLIDE_USE_SIGNED_URLS', false),
        'sign_key' => env('GLIDE_SIGN_KEY'),
        'default_params' => [
            'fm' => 'jpg',
            'q' => '80',
            'fit' => 'max',
        ],
        'lqip_default_params' => [
            'fm' => 'gif',
            'blur' => 100,
            'dpr' => 1,
        ],
        'social_default_params' => [
            'fm' => 'jpg',
            'w' => 900,
            'h' => 470,
            'fit' => 'crop',
        ],
        'cms_default_params' => [
            'q' => '80',
            'dpr' => '1',
        ],
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
                ],
                'card' => [
                    'title' => 'Card',
                    'icon' => 'image',
                    'component' => 'a17-block-card',
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
                'card' => [
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