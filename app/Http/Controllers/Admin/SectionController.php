<?php

namespace App\Http\Controllers\Admin;

use A17\Twill\Http\Controllers\Admin\ModuleController;

class SectionController extends ModuleController
{
    protected $moduleName = 'sections';

    protected $defaultIndexOptions = [
        'create' => true,
        'edit' => true,
        'publish' => true,
        'bulkPublish' => true,
        'feature' => false,
        'bulkFeature' => false,
        'restore' => true,
        'bulkRestore' => true,
        'delete' => true,
        'bulkDelete' => true,
        'reorder' => true,
        'permalink' => true,
        'bulkEdit' => true,
        'editInModal' => true,
    ];
}
