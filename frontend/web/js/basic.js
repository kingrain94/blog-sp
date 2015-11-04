$(document).ready(function(){
    $('.del_post').click(function () {
        if (confirm("Bạn muốn xóa bài viết này?")) {
            var id = $(this).attr('id');
            var data = "id=" + id;
            var container = $(this).parent().parent().parent();
            $.ajax({
                type:"POST",
                url:"?r=post/delete",
                data:data,
                success:function() {
                    container.hide();
                }
            });
        }
    });

    $('.like_post').click(function () {
        var data = "id=" + $(this).attr('id');
        $.ajax({
           type:"POST",
            url:"?r=post/like",
            data:data,
            success:function() {
                $(this).replaceWith($('.unlike_post'));
                //$(".unlike_post").show();
            }
        });
    });

    $('.unlike_post').click(function () {
        var data = "id=" + $(this).attr('id');
        $.ajax({
            type:"POST",
            url:"?r=post/unlike",
            data:data,
            success:function() {
                $(this).hide();
                //$(".unlike_post").show();
            }
        });
    });

    $('.edit_profile').click(function () {
        $(".edit_profile_success").show();
    });

    $('.post_comment').keypress(function(e) {
       if (e.keyCode == 13) {
           var data = $(this).attr('id') + "&content=" + $(this).val();
           $(this).val("");
           $.ajax({
               type:"POST",
               url:"?r=post/comment",
               data:data,
               success:function(response) {
                  if(response !="NO"){
                      $('#box-comment').append(response);
                  }
               }
           });
       }
    });
});