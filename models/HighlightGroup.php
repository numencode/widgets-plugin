<?php namespace NumenCode\Widgets\Models;

use Model;
use October\Rain\Database\Traits\SoftDelete;
use October\Rain\Database\Traits\Validation;
use NumenCode\Fundamentals\Traits\Publishable;
use NumenCode\Fundamentals\Traits\Relationable;

class HighlightGroup extends Model
{
    use Publishable, Relationable, SoftDelete, Validation;

    public $table = 'numencode_widgets_highlights_groups';

    public $implement = ['@RainLab.Translate.Behaviors.TranslatableModel'];

    public $translatable = ['title'];

    public $rules = [
        'title' => 'required',
    ];

    protected $fillable = [
        'title',
        'content',
        'link',
        'link_title',
        'is_published',
    ];

    protected $dates = [
        'deleted_at',
    ];

    protected $casts = [
        'is_published' => 'boolean',
    ];

    public $relationable = [
        'items_list' => 'items',
    ];

    public $hasMany = [
        'items' => [HighlightItem::class, 'key' => 'group_id', 'delete' => true],
    ];

    public function getItemCountAttribute()
    {
        return count($this->items);
    }
}
