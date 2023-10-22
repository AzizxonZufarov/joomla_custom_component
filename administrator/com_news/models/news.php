<?php defined('_JEXEC') or exit();

class NewsModelNews extends JModelList {
    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery (TRUE);

        //'SELECT `id`, `title`, `alias`, `published''
        $query->select('`id`, `title`, `alias`, `published`');

        //FROM #__news
        $query->from ('#__news');
        return $query;
    }
}