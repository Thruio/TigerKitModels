<?php
namespace TigerKit\Models\Ecommerce;

use Thru\ActiveRecord\ActiveRecord;

/**
 * Class ItemOption
 * @package TigerKit\Models
 * @var $item_option_id INTEGER
 * @var $item_id INTEGER
 * @var $name TEXT
 * @var $hidden ENUM("Yes","No")
 */
class ItemOption extends ActiveRecord
{
    protected $_table = "products_items_options";

    public $item_option_id;
    public $item_id;
    public $name;
    public $hidden = "No";
}
