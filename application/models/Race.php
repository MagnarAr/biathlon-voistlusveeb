<?php

class Race extends MY_Model {

    const DB_TABLE = 'Race';
    const DB_TABLE_PK = 'id';

    public $id;
    public $name;
    public $distance;
    public $agegroup;
    public $type;
    public $date;

    /**
     * Create record.
     */
    private function insert() {
        //$this->db->insert($this::DB_TABLE, $this);
        $this->db->query("call AddNewRace('".strip_tags($this->name)."', '".$this->date."', '".$this->agegroup."', '".$this->type."', '".strip_tags($this->distance)."')");
        //$this->{$this::DB_TABLE_PK} = $this->db->insert_id();
    }
    public function save() {
        $this->insert();
    }
}