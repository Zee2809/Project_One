$function () {
    $(".btn-sm-delete").click(function()
    
    var del_id=$(this).attr("Registration_id");
    vard info='Registration_id=' + del_id;
    if(confirm("Are you sure you want to delete?")){
        $.ajax({
            type: "POST"
            url:"Home.php", //source of the delete file
            data:info,
            success:function(){

            }
        });
$(this).parents(".record").animate("fast").animate({opacity:"hide"},
"slow");
        
    }, return false;




)}








<script type="text/javascript" >
        $(function() {

            $(".delbutton").click(function() {
                var del_id = $(this).attr("id");
                var info = 'id=' + del_id;
                if (confirm("Sure you want to delete this post? This cannot be undone later.")) {
                    $.ajax({
                        type : "POST",
                        url : "delete_entry.php", //URL to the delete php script
                        data : info,
                        success : function() {
                        }
                    });
                    $(this).parents(".record").animate("fast").animate({
                        opacity : "hide"
                    }, "slow");
                }
                return false;
            });
        });
 </script>