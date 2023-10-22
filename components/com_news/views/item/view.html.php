<?php
defined('_JEXEC') or exit();
class NewsViewItem extends JViewLegacy {
    protected $item;

    public function display($tpl=null)
    {
        $this->item = $this->get('Item');
        //echo '<pre>';
        //print_r($this->item);
        //echo '</pre>';
        parent::display($tpl);
    }
}
