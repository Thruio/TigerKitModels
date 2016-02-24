<?php
namespace TigerKit\Models;

use \Thru\ActiveRecord\ActiveRecord;

/**
 * Class GeoLocation
 * @package TigerKit\Models
 * @var $location_id INTEGER
 * @var $user_id INTEGER
 * @var $lat DOUBLE(12,6)
 * @var $lng DOUBLE(12,6)
 * @var $created DATETIME
 */
class GeoLocation extends ActiveRecord
{
    protected $_table = "geolocations";
    public $location_id;
    public $user_id;
    public $lat;
    public $lng;
    public $created;

    public function save($automatic_reload = true)
    {
        if (!$this->created) {
            $this->created = date("Y-m-d H:i:s");
        }
        parent::save($automatic_reload);
    }
}
