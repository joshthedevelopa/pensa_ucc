
$(document).ready(function() {
    $(".popup-vimeo").YouTubePopUp();


    function showResponse(responseText) {
        if(responseText == "success"){
            $("._prog").fadeOut(500);
            $(".mess").html("Added to database successfully");
            $(".mess").fadeIn(800);
            $(".mess").toggleClass("err", false);
            $(".mess").toggleClass("succ", true);
    
        }else{
            $("._prog").fadeOut(500);
            $(".mess").html(responseText);
            $(".mess").fadeIn(800);
            $(".mess").toggleClass("succ", false);
            $(".mess").toggleClass("err", true);
        }
    };

    function redirect(responseText) {
        if(responseText == "success"){
            $("._prog").fadeOut(500);
            $(".mess").html("Logging In");
            $(".mess").fadeIn(800);

            $(".mess").toggleClass("err", false);
            $(".mess").toggleClass("succ", true);
    
            setTimeout(function() {window.location="index_page.php"}, 1000);

        }else{
            $("._prog").fadeOut(500);
            $(".mess").html(responseText);
            $(".mess").fadeIn(800);
            $(".mess").toggleClass("succ", false);
            $(".mess").toggleClass("err", true);
        }
    };

    function loading() {
        $("._prog").fadeIn(800);
    }

    $("input").on('focus', (function() {
        $(".mess").fadeOut(600);
        $("._prog").fadeOut(500);
    }));

    

    // Submition for Login form //

    $(".form").on('submit', (function(e){
        e.preventDefault();

        var options = {
            beforeSend: loading,
            success: redirect,
            type: 'post',
            url: 'serv/manage.php?func=login'
        }

        $(this).ajaxSubmit(options);
    }));

        
//.................Submition for form...........................//
    
    $(".f_testimonies").on('submit', (function(event) {
        event.preventDefault();
        
        var options = {
            beforeSend: loading,
            success: showResponse,
            type: 'post',
            url: 'serv/manage.php?func=testimony'
        }
    
        $(this).ajaxSubmit(options);
    
    }))
    
    $(".f_sermons").on('submit', (function(e){
        e.preventDefault();
    
        var options = {
            url: 'serv/manage.php?func=sermons',
            type: 'post',
            beforeSend: loading,
            success: showResponse,
        }
    
        $(this).ajaxSubmit(options);
    
    }))
    
    $(".f_events").on('submit', (function(e){
        e.preventDefault();
    
        var options = {
            url: 'serv/manage.php?func=events',
            type: 'post',
            beforeSend: loading,
            success: showResponse,
        }
    
        $(this).ajaxSubmit(options);
    
    }))

//......................Updating the Database...................//

    $(".t_edit").on('click', (function() {
        $(".form_update_e").css('display', 'block');
        var id = $(this).attr("value");
        // alert(id);
        $(".form_update_e").load("serv/manage.php?func=t&func2="+id);
    }));

    $(".t_drop").on('click', (function () {
        var id = $(this).attr("value");

        if (confirm("Do You want to delete this record?")) {
            $.ajax({
                url: 'serv/manage.php',
                type: 'get',
                data: {
                    func : "testimonyDel",
                    func2: id
                },
                success: function(response) {
                    if(response == "success") {
                        $(".app-main__inner").load("pages/testimonies.php");
                        alert("Database Deleted");

                    }else{
                        alert(response);
                    }
                }
            });   
        } else {
            alert('Deletion Canceled');
        }
    }))

    $(".f_testimoniesUp").on('submit', (function(event) {
        event.preventDefault();
        var id = $(".t_submitUp").attr("value");
        
        function Update(resp) {
            if(resp == "success"){
                $("._prog").fadeOut(500);
                $(".mess").html("Datababse Updated");
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("err", false);
                $(".mess").toggleClass("succ", true);

                setTimeout($(".app-main__inner").load("pages/testimonies.php"), 1000);

                // $(".mess").fadeOut(3000);

            }else{
                $("._prog").fadeOut(500);
                $(".mess").html(resp);
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("succ", false);
                $(".mess").toggleClass("err", true);
            }
        }

        var options = {
            beforeSend: loading,
            success: Update,
            type: 'post',
            url: 'serv/manage.php?func=testimonyUp&func2='+id
        }
    
        $(this).ajaxSubmit(options);
    
    }))



    $(".s_edit").on('click', (function() {
        $(".form_update_e").css('display', 'block');
        var id = $(this).attr("value");
   
        $(".form_update_e").load("serv/manage.php?func=s&func2="+id);
    }));

    $(".s_drop").on('click', (function () {
        var id = $(this).attr("value");

        if (confirm("Do You want to delete this record?")) {
            $.ajax({
                url: 'serv/manage.php',
                type: 'get',
                data: {
                    func : "sermonDel",
                    func2: id
                },
                success: function(response) {
                    if(response == "success") {
                        $(".app-main__inner").load("pages/sermons.php");
                        alert("Database Deleted");

                    }else{
                        alert(response);
                    }
                }
            });   
        } else {
            alert('Deletion Canceled');
        }
    }))

    $(".f_sermonsUp").on('submit', (function(event) {
        event.preventDefault();
        var id = $(".s_submitUp").attr("value");
        
        function Update(resp) {
            if(resp == "success"){
                $("._prog").fadeOut(500);
                $(".mess").html("Datababse Updated");
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("err", false);
                $(".mess").toggleClass("succ", true);

                setTimeout($(".app-main__inner").load("pages/sermons.php"), 1000);
        
            }else{
                $("._prog").fadeOut(500);
                $(".mess").html(resp);
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("succ", false);
                $(".mess").toggleClass("err", true);
            }
        }

        var options = {
            beforeSend: loading,
            success: Update,
            type: 'post',
            url: 'serv/manage.php?func=sermonUp&func2='+id
        }
    
        $(this).ajaxSubmit(options);
    
    }))




    $(".e_edit").on('click', (function() {
        $(".form_update_e").css('display', 'block');
        var id = $(this).attr("value");
   
        $(".form_update_e").load("serv/manage.php?func=e&func2="+id);
    }));

    $(".e_drop").on('click', (function () {
        var id = $(this).attr("value");

        if (confirm("Do You want to delete this record?")) {
            $.ajax({
                url: 'serv/manage.php',
                type: 'get',
                data: {
                    func : "eventDel",
                    func2: id
                },
                success: function(response) {
                    if(response == "success") {
                        $(".app-main__inner").load("pages/events.php");
                        alert("Database Deleted");

                    }else{
                        alert(response);
                    }
                }
            });   
        } else {
            alert('Deletion Canceled');
        }
    }))

    $(".f_eventsUp").on('submit', (function(event) {
        event.preventDefault();
        var id = $(".e_submitUp").attr("value");
        
        function Update(resp) {
            if(resp == "success"){
                $("._prog").fadeOut(500);
                $(".mess").html("Datababse Updated");
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("err", false);
                $(".mess").toggleClass("succ", true);

                // $(".mess").fadeOut(3000);

                setTimeout($(".app-main__inner").load("pages/events.php"), 1000);
        
            }else{
                $("._prog").fadeOut(500);
                $(".mess").html(resp);
                $(".mess").fadeIn(800);
                $(".mess").toggleClass("succ", false);
                $(".mess").toggleClass("err", true);
            }
        }

        var options = {
            beforeSend: loading,
            success: Update,
            type: 'post',
            url: 'serv/manage.php?func=eventUp&func2='+id
        }
    
        $(this).ajaxSubmit(options);
    
    }))


    $(".e_edit_Close").click(function() {
        $(".form_update_e").css('display', 'none');
    });


    // $(".popup-vimeo").click(function () {
    //     alert("hello");
    // })

    // ......................DataTables..........................//

    $("#table_filter").css("display", "none");
    // $("#wrap-search").css("float", "right");
 
    $.extend($.fn.dataTable.defaults, {
        searching: true,
        ordering:  true
    });

    var table = $("#table").DataTable();

    $("#search").keyup(function() {
        table.search(this.value);
        table.draw();
    })
})




