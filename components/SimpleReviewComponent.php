<?php namespace IronLab\SimpleReviews\Components;

use Cms\Classes\ComponentBase;
use IronLab\SimpleReviews\Models\SimpleReview;
use Lang;
use Yaml;

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
                'default'       => Lang::get('ironlab.simplereviews::lang.simple_review_component.success.default')
            ],
            'ErrorSend' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.error.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.error.description',
                'type'          => 'string',
                'default'       => Lang::get('ironlab.simplereviews::lang.simple_review_component.error.default')
            ],
            'reviewstyle' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.reviewstyle.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.reviewstyle.description',
                'type'          => 'checkbox',
                'default'       => 1
            ],
            'EnableTinyMCE' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.enable_tiny_mce.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.enable_tiny_mce.description',
                'type'          => 'checkbox',
                'default'      => 1
            ],
            'LangTinyMCE' => [
                'title'         => 'ironlab.simplereviews::lang.simple_review_component.lang_tiny_mce.title',
                'description'   => 'ironlab.simplereviews::lang.simple_review_component.lang_tiny_mce.description',
                'type'          => 'dropdown',
                'default'       => 'EnglishUSA',
            ]
        ];
    }

    public function getLangTinyMCEOptions(){

        $languages = Yaml::parseFile('plugins/ironlab/simplereviews/components/simplereviewcomponent/languages.yaml');

        foreach ($languages as $key => $value) {
            $langstr[$key] = $value['label'];
        }

        return $langstr;
    }


    public $SuccessSend;
    public $ErrorSend;
    public $TinyMCE;
    public $TinyLoc = false;

    public function onRun()
    {

        if ($this->property('reviewstyle')) {
            $this->addCss('assets/css/simplereviews-form.css');
        }

        if ($this->property('EnableTinyMCE')) {
            $this->addJs('assets/js/tinymce/tinymce.min.js');

            $LangTinyMCE = $this->property('LangTinyMCE');
            $languages = Yaml::parseFile('plugins/ironlab/simplereviews/components/simplereviewcomponent/languages.yaml');

            foreach ($languages as $key => $value) {
                if ($key == $LangTinyMCE) {
                    $langlocale = $value['lang'];
                    break;
                }
            }

            if ($LangTinyMCE != "EnglishUSA") {
                $this->TinyLoc = $langlocale;
            }

        }

        $this->SuccessSend = $this->property('SuccessSend');
        $this->ErrorSend = $this->property('ErrorSend');
        $this->TinyMCE = $this->property('EnableTinyMCE');
        
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