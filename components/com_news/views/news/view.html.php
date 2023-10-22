<?php defined('_JEXEC') or exit();

class NewsViewNews extends JViewLegacy
{
    protected $items;
    protected $pagination;

    public function display($tpl = null)
    {
        $this->items = $this->get('Items');
        $this->pagination = $this->get('Pagination');

        foreach ($this->items as $item) {
            $item->images = json_decode($item->images);
        }
        $this->setDocument();
        parent::display($tpl);
    }

    protected function setDocument() {
        $document = JFactory::getDocument();
        $document->addStylesheet (JUri:: base().'components/com_news/css/style.css');
    }
}
