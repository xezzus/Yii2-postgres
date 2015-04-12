<?php
namespace xezzus\yii\postgres;

class Connection {

  public function shard($name='main'){

    if(!isset($this->servers[$name]['connect'])){
      if(!isset($this->servers[$name])) return false;
      $this->servers[$name]['connect'] = new \PDO('pgsql:dbname='.$this->servers[$name]['base'].';host='.$this->servers[$name]['host'].';port='.$this->servers[$name]['port'].';',$this->servers[$name]['user'],$this->servers[$name]['pass']);
      $this->servers[$name]['connect']->setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
    }

    return $this->servers[$name]['connect'];

  }

}
?>
