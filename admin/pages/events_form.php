

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for Events</h5>
        <form class="f_events" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Title Of Event</label>
                <input name="e_title" id="exampleEmail" placeholder="What is the sermon?" type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Location Of Event</label>
                <input name="e_loc" id="exampleEmail" placeholder="Where did event take place?" type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label for="exampleText" class="">Short Message on the Event</label>
                <textarea name="e_msg" id="exampleText" class="form-control"></textarea>
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Date of the Event</label>
                <input name="e_date" id="exampleEmail" class="form-control" type="date">
            </div>
            <div class="position-relative form-group">
                <label for="exampleFile" class="">Enter url of video</label>
                <input name="e_vid" id="exampleFile" type="text" class="form-control">
            </div>
            <div class="position-relative form-group">
                <label for="exampleFile" class="">Insert a picture</label>
                <input name="e_pic" id="exampleFile" type="file" class="form-control-file">
                <small class="form-text text-muted err mess">

                </small>
                <div class="_prog" style="display: none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <button class="mt-1 btn btn-primary">Submit</button>
        </form>
    </div>
</div>
<script>
    $(".form-control").focus(function(){
        $(".mess").fadeOut(800);
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="js/form.js"></script>