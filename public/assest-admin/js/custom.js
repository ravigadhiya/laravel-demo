jQuery(document).ready(function(){
	//jQuery("#example1").DataTable();
    jQuery('#example2').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": true,
      "ordering": true,
      "info": true,
      "autoWidth": true
    });
	
	 jQuery('.textarea').ckeditor();
});