<?php

require_once dirname(__FILE__).'/../lib/userdetailsGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/userdetailsGeneratorHelper.class.php';

/**
 * userdetails actions.
 *
 * @package    learning1.4
 * @subpackage userdetails
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class userdetailsActions extends autoUserdetailsActions
{
    public function executeList_export(sfWebRequest $request)
    {
        $this->result = Doctrine_Query::create()
            ->select("*")
            ->from('UserDetails')
            ->execute();
        $this->relatedmodel = Doctrine::getTable('UserDetails');
        $this->columns = Doctrine::getTable('UserDetails')->getColumnNames();
        $this->createExcel();
        exit;


    }

    public function createExcel()
    {
        if($this->result->count() > 0)
        {
            header("Content-type: application/octet-stream");
            header("Content-Disposition: attachment; filename=UserData.csv");
            header("Pragma: no-cache");
            header("Expires: 0");
            foreach($this->columns as $column){

                if($column != 'id' && $column != 'salt' && $column != 'algorithm' && $column != 'password' && $column != 'id' && $column != 'referrer' && $column != 'deleted_at' && $column != 'postal_address' && $column != 'suburb' && $column != 'postcode' && $column != 'state' && $column != 'best_contact') {
                    if($column == 'phone')
                    {
                        $itemcolumn[] = 'mobile';
                    }
                    else if($column == 'answer')
                    {
                        $itemcolumn[] = 'feedback';
                    }
                    else if($column == 'hear_about_us')
                    {
                        $itemcolumn[] = 'interested in';
                    }
                    else
                    {
                        $itemcolumn[] = $column;
                    }

                }
            }
            $dataStr = ucwords(str_replace("_"," ", implode(", ",$itemcolumn))) . "\r\n";
            $cells = array_values($this->columns);
            foreach ($this->result as $row)
            {
                foreach ($cells as $cell)
                {
                    if($cell != 'id' && $cell != 'salt' && $cell != 'algorithm' && $cell != 'password' && $cell != 'id' && $cell != 'referrer' && $cell != 'deleted_at' && $cell != 'postal_address' && $cell != 'suburb' && $cell != 'postcode' && $cell != 'state' && $cell != 'best_contact' ){

                        $valueFunction = "get" . str_replace(" ", "" , ucwords(str_replace("_"," ", $cell)));
                        $dataStr .= '"'.$row->$valueFunction() .'"'.",";

                    }
                }
                $dataStr .= "\r\n";
            }
            echo $dataStr;
        }
    }

    protected function buildQuery()
    {
        $alias = parent::buildQuery()->getRootAlias();
        return parent::buildQuery()
            ->orderBy('id desc');

    }
}
