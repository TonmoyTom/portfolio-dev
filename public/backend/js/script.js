$(document).ready(function() {


  $.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });



  $('.sideMenuToggler').on('click', function() {
    $('.wrapper').toggleClass('active');
  });

  var adjustSidebar = function() {
    $('.sidebar').slimScroll({
      height: document.documentElement.clientHeight - $('.navbar').outerHeight()
    });
  };

  adjustSidebar();
  $(window).resize(function() {
    adjustSidebar();
  });

  $(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});

    $('.dropify').dropify();

    $(document).ready( function () {
    $('#myTable').DataTable();
} );

$(".updateProductstatus").click(function(){
  var status = $(this).text();
  var section_id = $(this).attr("section_id");
  //  alert(status);
  //  alert(section_id);
  $.ajax({
      type : 'post',
      url : '/admin/bannerupdatestatus',
      data : {status:status, section_id:section_id},
      success:function(resp){
      if(resp['status'] == 0){
          $("#product-"+section_id).html("<a href='javascript:void(0)' class=' updateSectionstatus'>Deactive</a>");
      }else if(resp['status'] == 1){
          $("#product-"+section_id).html("<a href='javascript:void(0)' class=' updateSectionstatus'>Active</a>"); 
      }
      },error:function(resp){
      alert("error");
      }
  });



});

$('#summernote').summernote({
  height: 150,                 // set editor height
  minHeight: null,             // set minimum height of editor
  maxHeight: null,             // set maximum height of editor
  focus: true                  // set focus to editable area after initializing summernote
});


$(".updateachivestatus").click(function(){
  var status = $(this).text();
  var section_id = $(this).attr("section_id");
  //  alert(status);
  //  alert(section_id);
  $.ajax({
      type : 'post',
      url : '/admin/achivementupdatestatus',
      data : {status:status, section_id:section_id},
      success:function(resp){
      if(resp['status'] == 0){
          $("#achive-"+section_id).html("<a href='javascript:void(0)' class=' updateSectionstatus'>Deactive</a>");
      }else if(resp['status'] == 1){
          $("#achive-"+section_id).html("<a href='javascript:void(0)' class=' updateSectionstatus'>Active</a>"); 
      }
      },error:function(resp){
      alert("error");
      }
  });



});



});
