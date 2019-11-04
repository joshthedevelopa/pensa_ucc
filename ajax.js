$(document).ready(function() {

    $(".msg_form").submit(function(e) {
        e.preventDefault();

        $.ajax({
            url: 'serv/cmd.php?func=comment',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData:false,
            beforeSend: function() {
                $("._prog").fadeIn(500);
            },
            success: function(r) {
                if(r == "success") {
                    $("._prog").fadeOut(500);

                    $(".back_mess").fadeIn(1000);
                    $(".mess").removeClass("err");
                    $(".mess").addClass("succ");
                    $(".mess").html("Message Sent");

                    setTimeout(function() {$(".back_mess").fadeOut(1000)}, 4000);

                    $(".msg_form").trigger("reset");

                }else{
                    $("._prog").fadeOut(500);

                    $(".back_mess").fadeIn(1000);
                    $(".mess").addClass("err");
                    $(".mess").removeClass("succ");
                    $(".mess").html(r);

                    $(".msg_form").click(function() {$(".back_mess").fadeOut(1000)})

                }
            }
        });
    });
})