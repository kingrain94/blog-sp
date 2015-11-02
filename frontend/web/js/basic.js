$(document).ready(function(){
    $('.del_post').click(function () {
       var id = $(this).attr('id');
        //var container = $(this).parent();
        var data = "id=" + id;
        $.ajax({
           type:"POST",
            url:"?r=post/delete",
            data:data,
            //success:function(respone){
            //    if(respone == "YES"){
            //        alert("Deleted post with id:"+id);
            //        container.slideUp('slow',function(){
            //           container.remove();
            //        });
            //    }else{
            //        alert("Cannot delete ...");
            //    }
            //}
        });
    });

    $('.like_post').click(function () {
        var data = "id=" + $(this).attr('id');
        $.ajax({
           type:"POST",
            url:"?r=post/like",
            data:data,
            success:function() {
                $(".like_post").hide();
                $(".unlike_post").show();
            }
        });
    });
});