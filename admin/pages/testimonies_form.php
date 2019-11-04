

<div class="main-card mb-3 card">
    <div class="card-body"><h5 class="card-title">Form for Testimonies</h5>
        <form class="f_testimonies" action="index.php" method="post" enctype="multipart/form-data">
            <div class="position-relative form-group">
                <label for="exampleEmail" class="">Author</label>
                <input name="t_author" id="exampleEmail" placeholder="Who gave the testimony?" type="text" class="form-control" required>
            </div>
            <div class="position-relative form-group">
                <label for="exampleText" class="">Testimonies</label>
                <textarea name="t_msg" id="exampleText" class="form-control" required></textarea>
            </div>
            <div class="position-relative form-group">
                <label for="exampleFile" class="">Picture of the person</label>
                <input name="t_pic" id="t_pic" type="file" class="form-control-file t_pic" accept="jgeg,jpg,png">
                <small class="form-text text-muted mess">
                    <!-- This is some placeholder block-level help text for the above input. 
                    It's a bit lighter and easily wraps to a new line. -->
                </small>
                <div class="_prog" style="display: none">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            <button type="submit" name="t_submit" class="mt-1 btn btn-primary t_submit">Submit</button>
        </form>
    </div>
</div>
<script>
    $(".form-control").focus(function(){
        $(".mess").html("");
        $(".mess").css("color", "gray");
    })
</script>
<script src="js/form.js"></script>