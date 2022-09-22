<?php
function buildTree($categoryTree,$parent_id,$level) {
    if (isset($categoryTree[$parent_id])) { 
        foreach ($categoryTree[$parent_id] as $value) { 
            $str="<li style=\"margin-left:" . ($level * 20) . "px;\">" . '*title:'.  $value['title'] . ", text: " . $value['text'] ;
            if(!empty($_SESSION["user"])){
                $str.=", id_node: ". $value['id_node'] . ", id_parent: ". $value['id_parent']   ;
            }
            $str.=" <ul>";
            echo  $str;
           $level++;
            buildTree($categoryTree,$value['id_node'],$level); 
            echo "</ul></li>";
           $level--;

        }
    }
}