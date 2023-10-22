<?php
defined('_JEXEC') or exit(); ?>
<?php
class NewsTableItem extends JTable {

    public function __construct(&$db) {
        parent::__construct ('#__news', 'id', $db);
    }

}