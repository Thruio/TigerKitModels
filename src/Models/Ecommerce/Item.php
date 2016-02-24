<?php
namespace TigerKit\Models\Ecommerce;

use Thru\ActiveRecord\ActiveRecord;

/**
 * Class Item
 * @package TigerKit\Models
 * @var $item_id INTEGER
 * @var $category_id INTEGER
 * @var $name TEXT
 * @var $hidden ENUM("Yes","No")
 */
class Item extends ActiveRecord
{
    protected $_table = "products_items";

    public $item_id;
    public $category_id;
    public $name;
    public $hidden = "No";
}
