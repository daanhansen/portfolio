<link rel="stylesheet" href="../public/css/upload.css">

<div class="formholder">
    <div class="formulier">
        <form action="process.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="MAX_FILE_SIZE" value="400000">
            <label>Title:<br><input type="text" name="username" autofocus></label><br>
            <label>Content:<br><textarea name="description" cols="30" rows="10"></textarea></label><br>
            <p>Upload an image: </p><br>
            <input type="file" name="userimage" id="usi"> <br/> <br/>
            <input type="submit" value="Upload article" id="sub">
        </form>
    </div>
</div>