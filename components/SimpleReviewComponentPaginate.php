<?php namespace IronLab\SimpleReviews\Components;

use Cms\Classes\ComponentBase;
use Lang;

class SimpleReviewComponentPaginate extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ironlab.simplereviews::lang.simpleReview_component_paginate.info.name',
            'description' => 'ironlab.simplereviews::lang.simpleReview_component_paginate.info.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'         => 'ironlab.simplereviews::lang.simpleReview_component_paginate.items.title',
                'description'   => 'ironlab.simplereviews::lang.simpleReview_component_paginate.items.description',
                'default'       => '10',
            ],
            'SortOrder' => [
                'title'         => 'ironlab.simplereviews::lang.simpleReview_component_paginate.sortorder.title',
                'description'   => 'ironlab.simplereviews::lang.simpleReview_component_paginate.sortorder.description',
                'type'          => 'dropdown',
                'default'       => 'new',
            ],
            'reviewstyle' => [
                'title'         => 'ironlab.simplereviews::lang.simpleReview_component_paginate.reviewstyle.title',
                'description'   => 'ironlab.simplereviews::lang.simpleReview_component_paginate.reviewstyle.description',
                'type'          => 'checkbox',
                'default'       => 1,
            ]
        ];
    }

    public function getSortOrderOptions(){
        return [
            'new' => 'ironlab.simplereviews::lang.simpleReview_component_paginate.sortlist.new',
            'old' => 'ironlab.simplereviews::lang.simpleReview_component_paginate.sortlist.old'
        ];
    }

    public $reviews;

    public function onRun() 
    {
        if ($this->property('reviewstyle')) {
            $this->addCss('assets/css/simplereviews-with-paginate.css');
        }
        
        if ($this->property('SortOrder') == 'new') {
            $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::where('publish', true)->orderBy('created_at', 'desc')->paginate($this->property('items'));

        } elseif ($this->property('SortOrder') == 'old') {

            $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::where('publish', true)->orderBy('created_at', 'asc')->paginate($this->property('items'));
        }
    }
}