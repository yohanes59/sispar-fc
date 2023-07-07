<?php 
include 'models/model.php';

class controller {
    function sweetalert($icon, $title, $text)
    {
        echo "<script type='text/javascript'>
    		Swal.fire({
    		icon: '$icon',
    		title: '$title',
    		text: '$text'
    		});
    	</script>";
    }
}
