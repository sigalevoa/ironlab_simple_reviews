<?php namespace IronLab\SimpleReviews\Controllers;

use BackendMenu;
use Backend\Classes\Controller;
use IronLab\SimpleReviews\Models\SimpleReview;

/**
 * Simple Reviews Back-end Controller
 */
class SimpleReviews extends Controller
{
    public $implement = [
        'Backend.Behaviors.FormController',
        'Backend.Behaviors.ListController'
    ];

    public $formConfig = 'config_form.yaml';
    public $listConfig = 'config_list.yaml';

    public function __construct()
    {
        parent::__construct();

        BackendMenu::setContext('IronLab.SimpleReviews', 'simplereviews', 'simplereviews');
    }

    public function update($recordId)
    {
        $record = SimpleReview::find($recordId);
        $record->unread = false;
        $record->save();
        $this->vars['record'] = $record;
        return $this->asExtension('FormController')->update($recordId);
    }

}