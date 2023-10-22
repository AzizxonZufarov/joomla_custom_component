<?php defined('_JEXEC') or exit();

class NewsModelNews extends JModelList {
    protected function getListQuery() {
        $db = JFactory::getDbo();
        $query = $db->getQuery (TRUE);

        //'SELECT `id`, `title`, `alias`, `published''
        $query->select('`id`, `title`, `alias`, `images`, `publish_up`');

        //FROM #__news
        $query->from ('#__news');

        $query->where('`published`=1');
        $query->order('`publish_up` DESC');
        return $query;
    }
}