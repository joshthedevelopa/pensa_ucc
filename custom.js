$(document).ready(function() {

    $(".clsWeCare").click(function() {
        $(".modelBox").fadeOut(400);
    })
    $(".actWeCare").click(function() {
        $(".modelBox").fadeIn(400);
    })

    $("#leadersTable").DataTable();
    $(".closeNewsContainer").click(function() {$(this).parent().slideUp(800)});
    $(".newsPop").click(function() {$(".bgPop").fadeIn(800)});

  
    $(".msg_for").submit(function(e) {
        e.preventDefault();


        $.ajax({
            url: 'serv/act.php',
            type: 'post',
            data: new FormData(this),
            contentType: false,
            cache: false,
            processData: false,
            success: function(r) {
                alert(r);
            }
        })

    })

    $(".closeB").click(function() {
        $(".closeB").parent().fadeOut(600);
    })

    $(".cls").click(function() {
        $(".bgAnn").slideUp(600);
    })

    $(".ann_b, .new_b").click(function() {
        $(".bgAnn").fadeIn(800);
    })


    $(".bn").click(function() {
        var id = $(this).parent().parent().parent().attr("id");
        $("."+id).slideDown(600);
    })


    $(".popup-vimeo").YouTubePopUp();
    

    
})
