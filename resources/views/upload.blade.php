<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agventure</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" crossorigin="anonymous">

     <style>

        form{
            width: 600px;
            margin: 100px auto;
            border:2px solid black;
            padding:20px;
        }

        body{
            background-color: #90EE90;
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">AGVENTURE</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="true" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="{{ Route('dash') }}">Dashboard</a>
      <a class="nav-item nav-link" href="#">Profile</a>
      <!--<a class="nav-item nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>-->
    </div>
  </div>
</nav>

<form method="POST" action="{{url('my-upload')}}" enctype="multipart/form-data">
    @csrf
<input type="file" name="file"><br><br>

     <div class="progress">
        <div class="bar"></div>
        <div class="percent">0%</div>
     </div>
     <br>

     <input type="submit" value="upload">

</form>

<script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.form/4.3.0/jquery.form.min.js" crossorigin="anonymous"></script>

<script>
var SITEURL="{{URL('/')}}";

$(function(){

    $(document).ready(function (){
        var bar=$('.bar');
        var percent=$('.percent');

        $('form').ajaxForm({
           beforeSend:function(){
               var percentVal='0%';
               bar.width(percentVal);
               percent.html(percentVal);
           },

           uploadProgress: function(event,position,total,percentComplete){
               var percentVal=percentComplete +'%';
                bar.width(percentVal);
                percent.html(percentVal);

           },

           complete: function (data){
               alert('File has been uploaded successfully');
               window.location.href=SITEURL + "/"+"upload";
           }
        });
    });
});


</script>


</body>
</html>
