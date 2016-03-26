<?php

/**
 * Created by PhpStorm.
 * User: Magnar
 * Date: 19.03.2016
 * Time: 23:01
 */
class ResultEntry extends MY_Model{

    const DB_TABLE = 'Result';
    const DB_TABLE_PK = 'id';

    public $id;
    public $raceid;
    public $place;
    public $bib;
    public $firstname;
    public $lastname;
    public $club;
    public $prone1;
    public $prone2;
    public $standing1;
    public $standing2;
    public $total;
    public $start;
    public $end;

    /**
     * Create record.
     */
    private function insert() {
        //$this->db->insert($this::DB_TABLE, $this);
        $this->db->query("call AddNewResultEntry('".
            $this->raceid."', '".
            $this->place."', '".
            $this->bib."', '".
            $this->firstname."', '".
            $this->lastname."', '".
            $this->club."', '".
            $this->prone1."', '".
            $this->prone2."', '".
            $this->standing1."', '".
            $this->standing2."', '".
            $this->total."', '".
            $this->start."', '".
            $this->end.
            "')");
        //$this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }
    public function save() {
        $this->insert();
    }

}