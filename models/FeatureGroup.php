<?php namespace NumenCode\Widgets\Models;

use Model;
use Winter\Storm\Database\Traits\SoftDelete;
use Winter\Storm\Database\Traits\Validation;
use NumenCode\Fundamentals\Traits\Publishable;

class FeatureGroup extends Model
{
    use Publishable, SoftDelete, Validation;

    public $table = 'numencode_widgets_features_groups';

    public $implement = [
        '@Winter.Translate.Behaviors.TranslatableModel',
        'NumenCode.Fundamentals.Behaviors.RelationableModel',
    ];

    public $translatable = [
        'title',
        'content',
        'link',
        'link_title',
    ];

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
        'items' => [FeatureItem::class, 'key' => 'group_id', 'delete' => true],
    ];

    public function getItemCountAttribute(): int
    {
        return count($this->items);
    }
}
