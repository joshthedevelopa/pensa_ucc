

<div class="main-card mb-3 card">

    <div class="card-body"><h5 class="card-title">Form for Sermons</h5>
        <form class="f_sermons" action="index.php" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Title Of Sermons</label>
                <input name="s_title" id="exampleEmail" placeholder="What is the sermon?" type="text" class="s_title form-control" >
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Preacher</label>
                <input name="s_author" id="exampleEmail" placeholder="Who gave the sermon?" type="text" class="form-control" >
            </div>
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Date of the Sermon</label>
                <input name="s_date" id="exampleEmail" class="form-control" type="date">
            </div>

            <div class="card-body"><h5 class="card-title">Is it a video or audio?</h5>                           
                <fieldset class="position-relative form-group">
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="s_type" type="radio" class="form-check-input ch_e_vid" value="video">
                            Video
                        </label>
                    </div>
                    <div class="position-relative form-check">
                        <label class="form-check-label">
                            <input name="s_type" type="radio" class="form-check-input ch_e_aud" value="audio">
                            Audio
                        </label>
                    </div>
                </fieldset>                                            
            </div>
            <div class="position-relative form-group e_audpic">
                <label for="exampleFile" class="">Select a picture,if selection is video or audio,if selection is audio</label>
                <input name="s_sermonAlt" id="exampleFile" type="file" class="form-control-file">
            </div>
            <div class="position-relative form-group e_vid">
                <label for="exampleEmail" class="">Video of the Sermon</label>
                <input name="s_sermon" id="exampleEmail" class="form-control" type="text">
            </div>
            <small class="form-text text-muted err mess">
            
            </small>
            <div class="_prog" style="display: none">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
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

