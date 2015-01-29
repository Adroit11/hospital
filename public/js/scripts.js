
$(document).ready(function(){

    $(".alert").addClass("in").fadeOut(4500);

    /* swap open/close side menu icons */
    $('[data-toggle=collapse]').click(function(){
  	    // toggle icon
  	    $(this).find("i").toggleClass("glyphicon-chevron-right glyphicon-chevron-down");
    });

    //delete button confirmation function
    $("button.btn-danger").click(function(){
        if(confirm("Do you really want to delete this?"))
            this.form.submit();
        else
            return false;
    });
});