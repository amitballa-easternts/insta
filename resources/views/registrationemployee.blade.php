<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<title>Register</title>
</head>
<body>
<form method="post" action="">
@csrf
<div class="container ">
    <div class="card ">
        <div class="card-header">
            <h1 class="text-center">Registration</h1>
        </div>
        <div class=card-body>
            <div class="row mb-2">
                <div class="col-sm-6">
                    <lable>First Name</lable>
                    <input class="form-control" name='fname' id="fname" placeholder="Enter First Name">
                </div>
                <div class="col-sm-6">
                    <lable>Last Name</lable>
                    <input class="form-control" name="lname" id="lname" placeholder="Enter Last Name">
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4">
                    <lable>Country</lable>
                    <select class="form-control" name="country" id="country">
                        <option value="">Select Country</option>
                        
                    </select>
                </div>
                <div class="col-sm-4">
                    <lable>State</lable>
                    <select class="form-control" name="state" id="state">
                        <option value="">Select State</option>
                    </select>
                </div>
                <div class="col-sm-4">
                    <lable>State</lable>
                    <select class="form-control" name="city" id="city">
                        <option value="">Select City</option>
                    </select>
                </div>
            </div>
        </div>
   </div>
</div>
</form>

</body>

<script>
$('#country').change(function(){
    var country=$(this).val();
    alert(country);
});
</script>
</html>