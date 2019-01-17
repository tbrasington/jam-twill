<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasRevisions;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use A17\Twill\Models\Block;


use Barryvdh\Debugbar\Facade as Debugbar;
use Barryvdh\Debugbar\ServiceProvider as DebugbarServiceProvider;

class Entry extends Model implements Sortable
{
    use HasBlocks, HasSlug, HasMedias,HasFiles, HasRevisions, HasPosition;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'public',
        'short_description'
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    // public $translatedAttributes = [
    //     'title',
    //     'description',
    //     'active',
    // ];
    
    // uncomment and modify this as needed if you use the HasSlug trait
    public $slugAttributes = [
        'title',
    ];

    // add checkbox fields names here (published toggle is itself a checkbox)
    public $checkboxes = [
        'published'
    ];

    // uncomment and modify this as needed if you use the HasMedias trait
    public $mediasParams = [
        'cover' => [
            'default' => [
                [
                    'name' => '16:9',
                    'ratio' => 16 / 9,
                ]
            ]
        ],
        'portrait_cover' => [
            'default' => [
                [
                    'name' => '3:4',
                    'ratio' => 3/ 4,
                ]
            ]
        ],
        'poster_image' => [
            'default' => [
                [
                    'name' => 'Poster',
                    'ratio' => 16 / 9,
                ]
            ]
        ],
    ];

    public $filesParams = ['video_file']; // a list of file roles


    public function content(){
        $entries = $this->morphMany(Block::class, 'blockable')
        ->select(['id', 'blockable_id','type','content'])
        ->where('type' ,'!=' ,'mosaic_asset')
        ->with('files')
        ->orderBy('blocks.position', 'asc');
       
        return $entries;
     }

   public function blockcontents() {

        $blocks = $this->morphMany(Block::class, 'blockable')->select(['id', 'blockable_id','type','content'])
        ->where('type' ,'!=' ,'mosaic_asset')
        ->with('files')
        ->orderBy('blocks.position', 'asc')
        ->get();

        return $blocks;

        
    }
}


// return $this->blocks->where('parent_id', null)->map(function ($block) use ($blockViewMappings, $renderChilds, $data) {
//     if ($renderChilds) {
//         $childBlocks = $this->blocks->where('parent_id', $block->id);

//         $renderedChildViews = $childBlocks->map(function ($childBlock) use ($blockViewMappings, $data) {
//             $view = $this->getBlockView($childBlock->type, $blockViewMappings);
//             return view($view, $data)->with('block', $childBlock)->render();
//         })->implode('');
//     }

//     $block->childs = $this->blocks->where('parent_id', $block->id);