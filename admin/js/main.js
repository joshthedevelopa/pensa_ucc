$(document).ready(function() { 


//......................DataTables........................//

        $(".data_t").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/testimonies.php");
        });

        $(".data_s").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/sermons.php");
        })

        $(".data_e").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/events.php");
        })

        $(".data_c").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/comments.php");
        });

        $(".data_d").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/dash.php");
        });



 //......................Forms........................//

        $(".data_tf").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/testimonies_form.php");
        })

        $(".data_sf").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/sermons_form.php");
        })

        $(".data_ef").click(function(event) {
                event.preventDefault();
                $(".app-main__inner").load("pages/events_form.php");
        })
        


        $(".logout").click(function() {
                window.location = "serv/manage.php?func=logout";
        })

})