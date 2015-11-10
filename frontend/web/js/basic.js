$(document).ready(function(){
    function getCurrentTime() {
        var now = new Date();
        var year    = now.getFullYear();
        var month   = now.getMonth()+1;
        var day     = now.getDate();
        var hour    = now.getHours();
        var minute  = now.getMinutes();
        if(month.toString().length == 1) {
            month = '0'+month;
        }
        if(day.toString().length == 1) {
            day = '0'+day;
        }
        if(hour.toString().length == 1) {
            hour = '0'+hour;
        }
        if(minute.toString().length == 1) {
            minute = '0'+minute;
        }
        return year+'-'+month+'-'+day+' '+hour+':'+minute;
    }

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
           var data = $(this).attr('id') + "&content=" + $(this).val() + "&create_at=" + getCurrentTime();
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

    $('#add_friend_btn').click(function() {
        $('#add_friend_group').show();
    });

    $('.add_friend_fellow').click(function() {
        var data = $(this).attr('id') + "&create_at=" + getCurrentTime();
        $.ajax({
            type:"POST",
            url:"?r=relationship/send-friend-request-as-fellow",
            data:data,
            success:function(response) {
                alert("Gửi yêu cầu thành công!");
                $('#add_friend_btn').hide();
                $('#add_friend_group').hide();
                $('#friend_timeline_profile').append(response);
            }
        });
    });

    $('.add_friend_family').click(function() {
        var data = $(this).attr('id') + "&create_at=" + getCurrentTime();
        $.ajax({
            type:"POST",
            url:"?r=relationship/send-friend-request-as-family",
            data:data,
            success:function(response) {
                alert("Gửi yêu cầu thành công!");
                $('#add_friend_btn').hide();
                $('#add_friend_group').hide();
                $('#friend_timeline_profile').append(response);
            }
        });
    });

    $('#accept_friend_btn').click(function() {
        $('#accept_friend_group').show();
    });

    $('.accept_friend_fellow').click(function() {
        var data = $(this).attr('id') + "&update_at=" + getCurrentTime();
        $.ajax({
            type:"POST",
            url:"?r=relationship/accept-friend-request-as-fellow",
            data:data,
            success:function(response) {
                if (response == 'YES') {
                    alert("Đã chấp nhận yêu cầu!");
                    $('#accept_friend_btn').hide();
                    $('#accept_friend_group').hide();
                }
            }
        });
    });

    $('.accept_friend_family').click(function() {
        var data = $(this).attr('id') + "&update_at=" + getCurrentTime();
        $.ajax({
            type:"POST",
            url:"?r=relationship/accept-friend-request-as-family",
            data:data,
            success:function(response) {
                if (response == 'YES') {
                    alert("Đã chấp nhận yêu cầu!");
                    $('#accept_friend_btn').hide();
                    $('#accept_friend_group').hide();
                }
            }
        });
    });

    $('.notify_rel').click(function() {
        $('.rel_notify_count').hide();
        $.ajax({
            type:"POST",
            url:"?r=notification/make-old-relationship-notification",
        });
    });
});