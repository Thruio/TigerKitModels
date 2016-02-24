<?php
namespace TigerKit\Models\Ecommerce;

use Thru\ActiveRecord\ActiveRecord;

/**
 * Class ItemCategory
 * @package TigerKit\Models
 * @var $category_id INTEGER
 * @var $name TEXT
 * @var $hidden ENUM("Yes","No")
 */
class ItemCategory extends ActiveRecord
{
    protected $_table = "products_categories";

    public $category_id;
    public $name;
    public $hidden = "No";
}
