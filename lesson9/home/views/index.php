<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="js/mine.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Upload</title>
</head>
<style>


</style>
<body>
    <div class="container">
        <h1>Your Photogalery</h1>
        <div class="mb-3 ">
            <label for="photoUpload" class="form-label"><b>Upload your file</b></label>
            <input class="form-control" type="file" id="photoUpload" multiple>
            <button class="form-control mt-3" id="upload_file">Upload</button>
            <button class="form-control mt-3" id="delete_checked">Delete checked</button>
            
        </div>
        <div id="msg">

        </div>
        <figure class="figure" id="phototable">
        
        </figure>

        <button class="form-control" id="show_btn">Show galery</button>

       
    </div>
</body>

</html>