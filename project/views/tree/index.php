<?php
// function buildTree($categoryTree,$parent_id,$level) {
//     // print_r($categoryTree[$parent_id]);
//     if (isset($categoryTree[$parent_id])) { 
//         foreach ($categoryTree[$parent_id] as $value) { 
//             echo  "<li style=\"margin-left:" . ($level * 20) . "px;\">" . '* ' . $value['id_node'] . " : " . $value['title'] . " ". $value['id_parent'] . '<ul>';
// //  "<div style=\"margin-left:" . ($level * 25) . "px;\">" . $value['id_node'] . " : " . $value['title'] . " ". $value['id_parent'] . "</div>";
//            $level++;
//             buildTree($categoryTree,$value['id_node'],$level); 
//             echo "</ul></li>";
//            $level--;

//         }
//     }
// } 
?>
<?php if(!empty($_SESSION["user"])){ ?>
<div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex-wrap justify-around">
    <button id="addBtn" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Добавить ветвь</button>    
    <button id="updBtn" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">Редактировать ветвь</button>
    <button id="delBtn" class="bg-blue-500 hover:bg-blue-900 text-white font-bold py-2 px-4 rounded">удалить ветвь</button>
<!-- Модальном окно добавления-->
    <div id="addModal" class="modal">
        <div class="modal-content">
            <form method="POST">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <span class="close flex justify-end">&times;</span>
                    <label class="text-grey-darker text-sm font-bold mb-2" >Название</label>
                        <input type="text" class="font-bold py-2 px-4 rounded"  type="text" placeholder="..." name="title">
                    <label class="  text-grey-darker text-sm font-bold mb-2" >Описание</label>
                        <input type="text" class="font-bold py-2 px-4 rounded"  type="text" placeholder="..." name="text">
                    <label class="  text-grey-darker text-sm font-bold mb-2" >Родительский обьект</label>
                    <input type="number"  class="font-bold py-2 px-4 rounded"  placeholder="..." name="id_parent">
                    <div class="px-8 pt-6 pb-8 mb-4 container mx-auto flex flex-wrap justify-around">
                        <input name="add" class="font-bold py-2 px-4 hover:bg-blue-900 rounded py-2 px-3 text-grey-darker"  type="submit" value="Добавить">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Модальном окно изменения-->
    <div id="updModal" class="modal">
        <div class="modal-content">
            <form method="POST">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <span class="close flex justify-end">&times;</span>
                    <label class="text-grey-darker text-sm font-bold mb-2" >id изменяемого обьекта</label>
                        <input type="number" class="font-bold py-2 px-4 rounded"  type="text" placeholder="..." name="id_node">
                    <label class="text-grey-darker text-sm font-bold mb-2" >Новое Название</label>
                        <input type="text" class="font-bold py-2 px-4 rounded"  type="text" placeholder="..." name="title">
                    <label class="  text-grey-darker text-sm font-bold mb-2" >Новое Описание</label>
                        <input type="text" class="font-bold py-2 px-4 rounded"  type="text" placeholder="..." name="text">
                    <label class="  text-grey-darker text-sm font-bold mb-2" >Новый Родительский обьект</label>
                    <input type="number"  class="font-bold py-2 px-4 rounded"  placeholder="..." name="id_parent">
                    <div class="px-8 pt-6 pb-8 mb-4 container mx-auto flex flex-wrap justify-around">
                        <input name="upd" class="font-bold py-2 px-4 hover:bg-blue-900 rounded py-2 px-3 text-grey-darker"  type="submit" value="Изменить">
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- Модальном окно удаления-->
    <div id="delModal" class="modal">
        <div class="modal-content">
            <form method="POST">
                <div class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4 flex flex-col">
                <span  class="close flex justify-end">&times;</span>
                    <label class="text-grey-darker text-sm font-bold mb-2" >id изменяемого обьекта</label>
                        <input type="number"  class="font-bold py-2 px-4 rounded"  placeholder="..." name="id_node">
                        <div class="px-8 pt-6 pb-8 mb-4 container mx-auto flex flex-wrap justify-around">
                            <input name="del" class="font-bold py-2 px-4 hover:bg-blue-900 rounded py-2 px-3 text-grey-darker"  type="submit" value="Удалить">
                        <div class="px-8 pt-6 pb-8 mb-4 container mx-auto flex flex-wrap justify-around">
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<?php } ?>
<?=var_dump($_POST);?>
    <!-- end w3 -->
<div class="conteiner">
    <ul id="tree" class="tree">
        <?=buildTree($tree, 0, 0);?>
    <ul>
</div>