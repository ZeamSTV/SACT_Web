<?php	
	
	@define ( '_lib' , '../lib/');
	

	include_once _lib."config.php";
	include_once _lib."functions.php";
	include_once _lib."library.php";
	include_once _lib."class.database.php";
	$d = new database($config['database']);
?>
    
    
    <select name='id_duan' id='id_duan' class="form-control">
        <option value="0">Chọn Dự án</option>
    <?php
    	$sql = "select * from  table_congtrinh where  id_tinh_duan='".$_REQUEST['id']."' order by id asc";
        $d->query($sql);	
        $cat = $d->result_array();		
		if(count($cat) != 0){
        	foreach($cat as $v){    
        		echo "<option value='".$v['id']."'>".$v['ten_vi']."</option>";  
            }
        }		

    ?>
    </select>
    
    