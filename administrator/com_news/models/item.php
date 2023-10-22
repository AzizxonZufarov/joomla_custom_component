﻿<?php
defined('_JEXEC') or exit(); ?>
<?php
use Joomla\Registry\Registry;
class NewsModelItem extends JModelAdmin
{
    public function getForm($data = array(), $loadData = true)
    {
        $form = $this->loadForm(
            'com_news.item',
            'item',
            array(
                'control' => 'jform',
                'load_data' => $loadData
            ));
        //echo "<pre>";
        //print_r($form);
        //echo "</pre>";
        if (empty($form)) {
            return FALSE;
        }
        return $form;
    }

    public function loadFormData()
    {
        $data = $this->getItem();
        return $data;
    }

    public function getItem($pk = NULL)
    {
        if ($item = parent::getItem($pk)) {

            $registry = new Registry();
            $registry->loadString($item->images);
            $item->images = $registry->toArray();
            //print_r($item->images);
            return $item;
        }
        return FALSE;
    }
    public function getTable($type = 'Item', $prefix = 'NewsTable', $config = array()) {
            return JTable::getInstance ($type, $prefix, $config);
    }

    protected function prepareTable($table)
    {
        if (isset($table->images) && is_array($table->images)) {
            $registry = new Registry;
            $registry->loadArray($table->images);
            $table->images = (string)$registry;
        }
    }
}
