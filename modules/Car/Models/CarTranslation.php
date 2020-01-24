<?php

namespace Modules\Car\Models;

use App\BaseModel;

class CarTranslation extends Car
{
    protected $table = 'bravo_car_translations';

    protected $fillable = [
        'title',
        'content',
        'faqs',
        'address',
        'extra_price'
    ];

    protected $slugField     = false;
    protected $seo_type = 'car_translation';

    protected $cleanFields = [
        'content'
    ];
    protected $casts = [
        'faqs'  => 'array',
        'extra_price'  => 'array',
    ];

    public function getSeoType(){
        return $this->seo_type;
    }
}