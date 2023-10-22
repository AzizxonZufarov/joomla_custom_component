<?php defined('_JEXEC') or exit();
class NewsViewNews extends JViewLegacy{
    protected $items;
    protected $pagination;
    public function display($tpl=null) {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');
        $this->addToolBar();
        $this->setDocument();
        parent::display($tpl);
    }
    protected function addToolBar() {
        JToolBarHelper::title(JText::_('COM_NEWS_MENAGER_NEWS'));
        JToolBarHelper::addNew('item.add');
        JToolBarHelper::editList('item.edit');
        JToolBarHelper::deleteList('', 'news.delete');
    }
    protected function setDocument() {
        $document = JFactory::getDocument();
        $document->setTitle(JText::_('COM_NEWS_ADMINISTRATION'));
    }
}