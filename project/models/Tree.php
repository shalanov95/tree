<?php
	namespace Project\Models;
	use \Core\Model;
	
	class Tree extends Model
	{
		public function getTree()
        {
            $result=$this->findMany("SELECT * FROM tree");
            $category = [];
            foreach ($result as $value) {
                $category[$value['id_parent']][] = $value;
            }
            return $category;
        }

        public function addBranch($data) {
            extract($data);
            $this->querBranch("INSERT INTO `tree`(`id_parent`, `title`, `text`) VALUES ($id_parent, $title, $text)");
            return true;
		}

        public function updBranch($data) {
            extract($data);
            $this->querBranch("UPDATE `tree` SET `id_node`= $id_node,`id_parent`= $id_parent,`title`= $title,`text`= $text WHERE `id_node`= $id_node");
            return true;
        }

        public function delBranch($data) {
            extract($data);
           $this->querBranch("
           with doomed as (
            select a.id_node, a.id_parent
            from tree a
            where id_node = $id_node
            union all
            select b.id_node, b.id_parent
            from tree b
            inner join doomed p on b.id_parent = p.id_node
          )
          delete from tree 
          where id_node in (select id_node from doomed);
          ");
            return true;
        }
        
	}
