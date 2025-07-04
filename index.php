<html lang="fa">
<head>
    <title>Online Clipboard</title>
    <link rel="shortcut icon" href="clipboard.png" type="image/x-icon" />
    <link rel="stylesheet" href="tools/bootstrap-5.3.5-dist/css/bootstrap.min.css">
    <script>
    document.getElementById("copy").onclick = function () {
        document.getElementById("clip_text").select();
        document.execCommand('copy');
        alert("Text Copied");
    };
</script>
    </head>
<body style="padding: 16px;">
<form action="index.php" method="post">
    <label for="clip_id" class="form-label">Clip ID</label>
    <input type="text" class="form-control" name="clip_id" id="clip_id" placeholder="Search Clip ID">
    <input style="margin-top: 8px" type="submit" class="btn btn-primary" id="search" value="search">
</form>
<form style="margin-top: 64px" action="api.php" method="post" enctype="application/x-www-form-urlencoded">
    <label for="clip_text" class="form-label">Your Clip Text</label>
    <textarea class="form-control" name="clip_text" id="clip_text" rows="10"></textarea>
    <input style="margin-top: 8px" type="submit" class="btn btn-success" value="POST" id="post">
    <input style="margin-top: 8px" type="button" class="btn btn-danger" value="COPY" id="copy">
</form>
</body>
<?php
if ( isset($_POST['clip_id']) ) {
    include 'tools/SQLHelper.php';
    $clip_id = $_POST['clip_id'];
    $sqlManager = new SQLHelper();
    $sqlManager->sendQuery("SELECT * FROM `clipboard_manager_tb` WHERE clip_id = '$clip_id'");
    if ( $sqlManager->getResult()->num_rows > 0 ) {
        while ( $row = $sqlManager->getResult()->fetch_assoc() ) {
            $data = $row["clip_text"];
            $data = str_replace("<br>","\\n\\n",$data);
            echo "<script>
                    document.getElementById('clip_text').value = '$data';
                    </script>";
        }
    }
}
?>

</html>