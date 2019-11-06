<?php namespace IronLab\SimpleReviews\Components;

use Cms\Classes\ComponentBase;
use IronLab\SimpleReviews\Models\SimpleReview;
use Lang;

class SimpleReviewComponent extends ComponentBase
{
    public function componentDetails()
    {
        return [
            'name'        => 'ironlab.simplereviews::lang.simple_review_component.info.name',
            'description' => 'ironlab.simplereviews::lang.simple_review_component.info.description'
        ];
    }

    public function defineProperties()
    {
        return [
            'SuccessSend' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.success.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.success.description',
                'type'          => 'string',
                'default'       => Lang::get('ironlab.simplereviews::lang.simple_review_component.success.default'),
            ],
            'ErrorSend' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.error.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.error.description',
                'type'          => 'string',
                'default'       => Lang::get('ironlab.simplereviews::lang.simple_review_component.error.default'),
            ],
            'reviewstyle' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.reviewstyle.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.reviewstyle.description',
                'type'          => 'checkbox',
                'default'       => 'true',
            ]
        ];
    }

    public $SuccessSend;
    public $ErrorSend;

    public function onRun()
    {
        if ($this->property('reviewstyle') == true) {
            $this->addCss('assets/css/simplereviews-style.css');
        }

        $this->SuccessSend = $this->property('SuccessSend');
        $this->ErrorSend = $this->property('ErrorSend');
    }


    public function onSaveReview()
    {   
        $PostPrt = post('reviewpPrt');
        if ($PostPrt == null) {
            $PostName = post('reviewName');
            $PostText = post('reviewText');
            $ReviewName = new SimpleReview;
            $ReviewName->name = $PostName;
            $ReviewName->text = $PostText;
            $ReviewName->unread = true;
            $ReviewName->save();
        }    
    }
}