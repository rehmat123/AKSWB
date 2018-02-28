<?php
namespace App\models;

use Illuminate\Database\Eloquent\Model;

class My_Model extends Model{

    protected static $instance;

    public function __construct(array $attributes = []){
        parent::__construct($attributes);
    }

    public static function &getInstance(){
        if(!is_array(self::$instance)){
            self::$instance = array();
        }
        $model = get_called_class();
        if(empty(self::$instance[$model]) || !is_object(self::$instance[$model])){
            self::$instance[$model] = new $model();
        }
        return self::$instance[$model];
    }

    protected function getHelper($where = []){
        $model = get_called_class();
        return $model::where($where);
    }

    public function count($params=[]) {
    	$where = (!empty($params["where"])) ? $params["where"] : [];
    	$groupby= (!empty($params["groupby"])) ? $params["groupby"] : null;

    	$dataAdapter = $this->getHelper($where);
    	if(!empty($groupby)){
			return $dataAdapter->distinct($groupby)->count($groupby);
    	}
		return $dataAdapter->count();
    }

    public function getAll($params=[]) {
        $select = (!empty($params["select"])) ? $params["select"] : ( !empty($this->select) ? $this->select : NULL );

        $where = (!empty($params["where"])) ? $params["where"] : [];
        $orWhere = (!empty($params["orWhere"])) ? $params["orWhere"] : [];

        $sortby = (!empty($params["sortby"])) ? $params["sortby"] : ( !empty($this->sortby) ? $this->sortby : $this->primaryKey );
        $sortorder = (!empty($params["sortorder"])) ? $params["sortorder"] : ( !empty($this->sortorder) ? $this->sortorder : "ASC" );

        $groupby= (!empty($params["groupby"])) ? $params["groupby"] : NULL;

        $limit = (!empty($params["limit"])) ? $params["limit"] : 100;
        $offset = (!empty($params["offset"])) ? $params["offset"] : 0;

        $dataAdapter = $this->getHelper($where);
        if(!empty($orWhere)){
            $dataAdapter->orWhere($orWhere);
        }
      if(!empty($select)){
        $dataAdapter->select($select);
      }
         $dataAdapter->offset($offset)
                            ->limit($limit)
                            ->orderBy($sortby, $sortorder);
      if(!empty($groupby)){
        $dataAdapter->groupBy($groupby);
      }
        return $dataAdapter->get();
    }

	public function get($params=[]){
        $where = (!empty($params["where"])) ? $params["where"] : [];
        $select = (!empty($params["select"])) ? $params["select"] : NULL;

        $dataAdapter = $this->getHelper($where);
        if(!empty($select)){
            $dataAdapter->select($select);
        }
        if(!empty($params["orderby"])){
        	foreach($params["orderby"] as $key => $orderby){
        		if($key && $orderby){
        			$dataAdapter->orderby($key, $orderby);
        		}
        	}
        }
        return $dataAdapter->first();
    }

    public function add($data){
        return $this->create($data);
    }

    public function update(array $data=array() , array $where=array()){
        return $this->where($where)->update($data);
    }


    public static function debug(){
        return self::$instance;
    }


}
?>