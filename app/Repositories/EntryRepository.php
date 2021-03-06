<?php

namespace App\Repositories;

use A17\Twill\Repositories\Behaviors\HandleBlocks;
use A17\Twill\Repositories\Behaviors\HandleSlugs;
use A17\Twill\Repositories\Behaviors\HandleMedias;
use A17\Twill\Repositories\Behaviors\HandleRevisions;
use A17\Twill\Repositories\Behaviors\HandleFiles;

use A17\Twill\Repositories\ModuleRepository;
use App\Models\Entry;

class EntryRepository extends ModuleRepository
{
    use HandleBlocks, HandleSlugs, HandleMedias, HandleRevisions,HandleFiles;

    public function __construct(Entry $model)
    {
        $this->model = $model;
    }

    public function afterSave($object, $fields)
    {
        $this->updateBrowser($object, $fields, 'sections');
        parent::afterSave($object, $fields);
    }
    public function getFormFields($object)
    {
        $fields = parent::getFormFields($object);
        $fields['browsers']['sections'] = $this->getFormFieldsForBrowser($object, 'sections');
        return $fields;
    }

}
