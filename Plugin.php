<?php namespace IronLab\SimpleReviews;

use Backend;
use System\Classes\PluginBase;

/**
 * SimpleReviews Plugin Information File
 */
class Plugin extends PluginBase
{
    /**
     * Returns information about this plugin.
     *
     * @return array
     */
    public function pluginDetails()
    {
        return [
            'name'        => 'ironlab.simplereviews::lang.plugin.details.name',
            'description' => 'ironlab.simplereviews::lang.plugin.details.description',
            'author'      => 'IronLab',
            'icon'        => 'icon-star-half-o'
        ];
    }

    /**
     * Register method, called when the plugin is first registered.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Boot method, called right before the request route.
     *
     * @return array
     */
    public function boot()
    {

    }

    /**
     * Registers any front-end components implemented in this plugin.
     *
     * @return array
     */
    public function registerComponents()
    {
        return [
            'IronLab\SimpleReviews\Components\SimpleReviewComponent' => 'SimpleReviewComponent',
            'IronLab\SimpleReviews\Components\SimpleReviewsComponent' => 'SimpleReviewsComponent',
            'IronLab\SimpleReviews\Components\SimpleReviewComponentPaginate' => 'SimpleReviewComponentPaginate'
        ];
    }

    /**
     * Registers any back-end permissions used by this plugin.
     *
     * @return array
     */
    public function registerPermissions()
    {
        return []; // Remove this line to activate

        return [
            'ironlab.simplereviews.some_permission' => [
                'tab' => 'SimpleReviews',
                'label' => 'Some permission'
            ],
        ];
    }

    /**
     * Registers back-end navigation items for this plugin.
     *
     * @return array
     */
    public function registerNavigation()
    {

        return [
            'simplereviews' => [
                'label'       => 'ironlab.simplereviews::lang.plugin.menu.name',
                'url'         => Backend::url('ironlab/simplereviews/SimpleReviews'),
                'icon'        => 'icon-star-half-o',
                'permissions' => ['ironlab.simplereviews.*'],
                'order'       => 500,
            ],
        ];
    }
}
