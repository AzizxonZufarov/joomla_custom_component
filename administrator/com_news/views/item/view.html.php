<?php defined('_JEXEC') or exit();
class NewsViewItem extends JViewLegacy {

    protected $form;
    protected $item;
    public function display ($tpl = null) {
        $this->form = $this->get('Form');//getForm
        $this->item = $this->get('Item');//getItem
        //print_r($this->form);
        $this->addToolBar();
        parent::display($tpl);
        $this->setDocument();
    }
    protected function addToolBar() {
        JToolBarHelper::title(JText::_('COM_NEWS_MENAGER_ITEM_NEW'));
        JToolBarHelper::save('item.save');
        JToolBarHelper::cancel('item.cancel');
    }

    protected function setDocument() {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_NEWS_ADMINISTRATION'));
    }
}
