<?php namespace NumenCode\Widgets\Components;

use Cms\Classes\ComponentBase;
use NumenCode\Widgets\Models\FeatureGroup;

class Features extends ComponentBase
{
    /**
     * @var FeatureGroup The feature group model used for displaying feature items.
     */
    public $feature;

    public function componentDetails()
    {
        return [
            'name'        => 'numencode.widgets::lang.features.name',
            'description' => 'numencode.widgets::lang.features.description',
        ];
    }

    public function defineProperties()
    {
        return [
            'title' => [
                'title'       => 'numencode.widgets::lang.features.group_title',
                'description' => 'numencode.widgets::lang.features.group_description',
                'type'        => 'dropdown',
                'default'     => 'default',
            ],
            'layout' => [
                'title'       => 'numencode.widgets::lang.features.layout_title',
                'description' => 'numencode.widgets::lang.features.layout_description',
                'type'        => 'dropdown',
                'default'     => 'default',
            ],
        ];
    }

    public function getTitleOptions()
    {
        return FeatureGroup::lists('title', 'id');
    }

    public function getLayoutOptions()
    {
        return [
            'default' => 'Default',
        ];
    }

    public function onRun()
    {
        $this->feature = $this->loadFeature();
    }

    public function onRender()
    {
        if (!$layout = $this->property('layout')) {
            $layout = 'default';
        }

        return $this->renderPartial('@' . $layout . '.htm');
    }

    protected function loadFeature()
    {
        return FeatureGroup::find($this->property('title'));
    }
}