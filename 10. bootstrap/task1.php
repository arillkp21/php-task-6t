<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Task 1</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
  
<div class="container">

  <div class="row">
    <div class="col-lg-12">
      <a href="#" id="pop1">
        <img id="imageresource1" src="images\6.png" class="img-fluid" alt="bugatti">
      </a>
    </div>
  </div>

  <div class="row">
    <div class="col-lg-2">
      <a href="#" id="pop2">
        <img id="imageresource2" src="images\1.jpg" class="img-fluid" alt="bugatti">
      </a>
    </div>
    <div class="col-lg-2">
      <a href="#" id="pop3">
        <img id="imageresource3" src="images\2.jpg" class="img-fluid" alt="bugatti">
      </a>
    </div>
    <div class="col-lg-2">
      <a href="#" id="pop4">
        <img id="imageresource4" src="images\3.jpg" class="img-fluid" alt="bugatti">
      </a>
    </div>
    <div class="col-lg-2">
      <a href="#" id="pop5">
        <img id="imageresource5" src="images\5.jpg" class="img-fluid" alt="bugatti">
      </a>
    </div>
    <div class="col-lg-4">
      <a href="#" id="pop6">
        <img id="imageresource6" src="images\4.jpg" class="img-fluid" alt="bugatti">
      </a>
    </div>
  </div>

</div>

<div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-body">
        <img src="" id="imagepreview" style="width: 100%; height: auto;" >
        <div class="text-center">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
    $("#pop1").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource1').attr('src'));
        $('#imagemodal').modal('show');
    });
    $("#pop2").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource2').attr('src'));
        $('#imagemodal').modal('show');
    });
    $("#pop3").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource3').attr('src'));
        $('#imagemodal').modal('show');
    });
    $("#pop4").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource4').attr('src'));
        $('#imagemodal').modal('show');
    });
    $("#pop5").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource5').attr('src'));
        $('#imagemodal').modal('show');
    });
    $("#pop6").on("click", function() {
        $('#imagepreview').attr('src', $('#imageresource6').attr('src'));
        $('#imagemodal').modal('show');
    });
</script>

</body>
</html>
