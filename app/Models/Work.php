<?php

namespace App\Models;

use A17\Twill\Models\Behaviors\HasBlocks;
use A17\Twill\Models\Behaviors\HasTranslation;
use A17\Twill\Models\Behaviors\HasSlug;
use A17\Twill\Models\Behaviors\HasMedias;
use A17\Twill\Models\Behaviors\HasFiles;
use A17\Twill\Models\Behaviors\HasPosition;
use A17\Twill\Models\Behaviors\Sortable;
use A17\Twill\Models\Model;
use Cartalyst\Tags\TaggableTrait;

class Work extends Model implements Sortable
{
    use HasBlocks, HasTranslation, HasSlug, HasMedias, HasFiles, HasPosition, TaggableTrait;

    protected $fillable = [
        'published',
        'title',
        'description',
        'position',
        'casestudy'
        // 'public',
        // 'featured',
        // 'publish_start_date',
        // 'publish_end_date',
    ];

    // uncomment and modify this as needed if you use the HasTranslation trait
    public $translatedAttributes = [
         'title',
         'description',
         'casestudy'
     ];

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
                    'name' => 'landscape',
                    'ratio' => 16 / 9,
                ],
                [
                    'name' => 'portrait',
                    'ratio' => 3 / 4,
                ],
            ],
            'mobile' => [
                [
                    'name' => 'mobile',
                    'ratio' => 1,
                ],
            ],
        ],
    ];

    public function designers()
    {
        return $this->belongsToMany(\App\Models\Designer::class);
    }

    public function categories()
    {
        return $this->belongsToMany(\App\Models\Category::class);
    }

    public function areas()
    {
        return $this->belongsToMany(\App\Models\Area::class);
    }

    public function types()
    {
        return $this->belongsToMany(\App\Models\Type::class);
    }
}
