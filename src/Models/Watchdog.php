<?php
namespace TigerKit\Models;

use TigerKit\Services\ImageService;
use Thru\ActiveRecord\ActiveRecord;

/**
 * Class Tag
 * @package TigerKit\Models
 * @var $watchdog_id INTEGER
 * @var $message TEXT
 * @var $params TEXT
 * @var $level ENUM("Debug","Info","Notice","Warning","Error","Critical","Alert","Emergency")
 * @var $created DATETIME
 */
class Watchdog extends UserRelatableObject
{
    protected $_table = "watchdog";

    public $watchdog_id;
    public $message;
    public $params;
    public $level = self::LEVEL_INFO;
    public $created;

    const LEVEL_DEBUG     = "Debug";
    const LEVEL_INFO      = "Info";
    const LEVEL_NOTICE    = "Notice";
    const LEVEL_WARNING   = "Warning";
    const LEVEL_ERROR     = "Error";
    const LEVEL_CRITICAL  = "Critical";
    const LEVEL_ALERT     = "Alert";
    const LEVEL_EMERGENCY = "Emergency";

    static public function Log($message, $params = null, $level = Watchdog::LEVEL_INFO){
        $watchdog = new Watchdog();
        $watchdog->message = $message;
        $watchdog->params = json_encode($params, JSON_PRETTY_PRINT);
        $watchdog->level = $level;
        $watchdog->created = date("Y-m-d H:i:s");
        $watchdog->save();
    }
}
