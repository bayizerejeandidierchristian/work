<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<title>Document</title>
</head>
</head>
<body>
    <form action="insert.php" method="POST">
    <header class="text-white p-1 text-center" style="background-color:tomato;">
<h5>Assignment</h5>
</header>
<div class="d-flex justify-content-center align-items-center" style="height:80vh;">
    <!-- <h1>Test</h1> -->
    <div class="border px-4 pt-4 position-relative text-center w-25">
    <i class="fa fa-user-circle text-info" aria-hidden="true" style="font-size:40px;position:absolute;top:-23px;left:150px;z-index:-20px;"></i>
        <h6>I Can't wait to create an account</h6>
        <div class="first my-2 mb-3  d-flex position-relative justify-content-center m-1">
             <div style="position: relative">
                <input type="text" name="firstname" id="" placeholder="firstname" class="form-control ps-4">
                <i class="fa fa-solid fa-user text-info " aria-hidden="true"style="font-size: 20px;position:absolute; top: 8px;left: 7px"></i>
             </div>
            <div style="position: relative">
              <input type="text" name="lastname" id="" placeholder="lastname" class="form-control ps-4"> 
            <i class="fa fa-solid fa-user text-info " aria-hidden="true"style="font-size: 20px;position:absolute; top: 8px;left: 7px"></i>
             </div> 
            </div>
            <div class="position: relative"  style="">
                <div tyle="position: relative">
                <i class="fa fa-solid fa-envelope text-info " aria-hidden="true" style="font-size: 20px; position: absolute;top: 115px; left: 28px"></i>
                <input style="" type="email" name="email" id="" placeholder="email" class="form-control ps-4">
                <br>
              
                </div>
                <div position: relative>
                <i class="fa fa-solid fa-key text-info " aria-hidden="true" style="font-size: 20px; position: absolute; top: 180px; left: 28px "></i>
                
                    <input style="" type="password" name="password" id="show" placeholder="Choose password" class="form-control ps-4">
                    <span class="eye" onclick="show()">
                    <i id="hide1" class="fa fa-solid fa-eye text-info " aria-hidden="true" style="font-size: 20px; position: absolute;top: 180px; right: 29px"></i>
                    </span>
                </div>
                
                <button style="" type="submit" class="btn btn-primary form-control my-2" style="border-radius:30px;">Next</button>
                
                <div class="d-flex align-items-center px-3">
                    <div class="border w-100" style="height:2px"></div>
                    <div class="px-2">or</div>
                    <div class="border w-100" style="height:2px"></div>
                </div>

                 <div>
                 <div class="first my-2 mb-3  d-flex position-relative justify-content-center m-1">
                
                     <div style="position:relative">
                     <i class="fa fa-google-plus-square bg-light text-white " aria-hidden="true" style="height: 12px; font-size: 40px; position: absolute;top: 9px;"></i>
                         <button type="submit" class="btn btn-danger form-control my-2">
                         cantinue with google</button>
                         
                <h6 class="" style="color:red;"><b><i><u>already have an account</b></i></u> 
                <a href="#.php">Sign In</a> 
                     </div>
                     
                </div>
</h6>
                
                     </div>
            </div>
    </div>
</div>
<div class="footer">
    <div class="f">
        <header class="text-white p-1 text-center" style="background-color:skyblue;">
        <div><p class="foater1">about Us</p> <p class="foater2">advertisment</p> Kigali,Rwanda <p class="foatter4">how search work</p> <p class="foattffer5">prevecy</p></div>
       
        </header>
    </div>
    <script>
      function show(){
          var x = document.getElementById("show");
          var y = document.getElementById("hihe1");
          if(x.type=='password'){
              x.type = "text";
              y.style.diplay = "block";
          }
          else{
              x.type = "password";
              y.style.diplay = "block";
          }
      }
    </script>
</div>
    </form>
</body>
</html>

<style>
.foater1{
    margin-left:40px;
    position:absolute;
}
.foater2{
    margin-left:130px;
    position:absolute;
}
.foatter4{
    margin-left:1100px;
    position:absolute;
    margin-top:-20px;
}
.foattffer5{
    margin-left:1200px;
    margin-top:-20px;
}

</style>