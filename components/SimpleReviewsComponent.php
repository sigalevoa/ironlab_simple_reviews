<?php namespace IronLab\SimpleReviews\Components;

use Cms\Classes\ComponentBase;
use October\Rain\Support\Collection;
use Lang;

class SimpleReviewsComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ironlab.simplereviews::lang.simple_reviews_component.info.name',
            'description' => 'ironlab.simplereviews::lang.simple_reviews_component.info.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'items' => [
                'title'         => 'ironlab.simplereviews::lang.simple_reviews_component.items.title',
                'description'   => 'ironlab.simplereviews::lang.simple_reviews_component.items.description',
                'default'       => '10',
            ],
            'SortOrder' => [
                'title'         => 'ironlab.simplereviews::lang.simple_reviews_component.sortorder.title',
                'description'   => 'ironlab.simplereviews::lang.simple_reviews_component.sortorder.description',
                'type'          => 'dropdown',
                'default'       => 'new',
            ],
            'outputAllReviews' => [
                'title'         => 'ironlab.simplereviews::lang.simple_reviews_component.outputAllReviews.title',
                'description'   => 'ironlab.simplereviews::lang.simple_reviews_component.outputAllReviews.description',
                'type'          => 'checkbox',
                'default'       => 0,
            ],
            'reviewstyle' => [
                'title'         => 'ironlab.simplereviews::lang.simple_reviews_component.reviewstyle.title',
                'description'   => 'ironlab.simplereviews::lang.simple_reviews_component.reviewstyle.description',
                'type'          => 'checkbox',
                'default'       => 1,
            ]
        ];
    }

    public function getSortOrderOptions(){
        return [
            'new'       => 'ironlab.simplereviews::lang.simple_reviews_component.sortlist.new',
            'old'       => 'ironlab.simplereviews::lang.simple_reviews_component.sortlist.old',
            'random'    => 'ironlab.simplereviews::lang.simple_reviews_component.sortlist.random'
        ];
    }

    public $reviews;

    public function onRun() 
    {
        if ($this->property('reviewstyle')) {
            $this->addCss('assets/css/simplereviews-shortlis.css');
        }

        if ($this->property('SortOrder') == 'new') {
            if ($this->property('outputAllReviews')) {
                $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::orderBy('created_at', 'desc')->take($this->property('items'))->get();
            } else {
                $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::where('publish', true)->orderBy('created_at', 'desc')->take($this->property('items'))->get();
            }

        } elseif ($this->property('SortOrder') == 'old') {
            if ($this->property('outputAllReviews')) {
                $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::orderBy('created_at', 'asc')->take($this->property('items'))->get();
            } else {
                $this->reviews = \IronLab\SimpleReviews\Models\SimpleReview::where('publish', true)->orderBy('created_at', 'asc')->take($this->property('items'))->get();
            }
            

        } elseif ($this->property('SortOrder') == 'random') {
            if ($this->property('outputAllReviews')) {
                $allreviews = \IronLab\SimpleReviews\Models\SimpleReview::get();
            } else {
                $allreviews = \IronLab\SimpleReviews\Models\SimpleReview::where('publish', true)->get();
            }
            
            $collection = new Collection($allreviews);

            if ( $this->property('items') <= $collection->count() ) {
                $random = $collection->random($this->property('items'));
                $this->reviews = $random->all();
            } else {
                $random = $collection->random($collection->count());
                $this->reviews = $random->all();
            }
                
        } 
    }
}