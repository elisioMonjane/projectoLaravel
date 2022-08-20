<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
    <link rel="stylesheet" href="{{('assets/css/style.css') }}"/>
    <link rel="stylesheet" href="bootstrap.min.css">

<!-- Font Awesome -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
  rel="stylesheet"
/>
<!-- Google Fonts -->
<link
  href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
  rel="stylesheet"
/>
<!-- MDB -->
<link
  href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/4.3.0/mdb.min.css"
  rel="stylesheet"
/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<style>

html,body{
    height: 100%;
    background-color:#ffff !important;
    font-family: "Roboto" sans-serif;
}
.global-container{
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: rgba(9, 207, 241, 0.897);

}
form{
    padding-top: 10px;
    font-size: 14px;
    margin-top: 30px;

}
.login-form{

    width: 380px;
    height: 450px;
    margin: 25px;
background: #edf2f3 !important;
border-radius: 10px !important;
}
input[type="email"],
input[type="password"]{

background: #f2f4f5;
border: 2px solid rgb(9, 169, 243);
border-radius: 10px;
margin-bottom: 25px;
}
input[type="email"]:focus,
input[type="password"]:focus{
    outline: none;
    border: none;
    background: #fbfcfc;
    margin: 0;
}
.card-title{
    font-weight: 500;
padding-top: 5px;
}
.btn{
background: rgb(0, 47, 255) !important;
font-size: 14px;
transform: translatey(10px);
border-radius: 10px !important;


}
.Sign{
    text-align: center;
    padding-top: 25px;
}
.top{
    background-color:yellow;
    margin:0%;
    padding-top: 5%;
}
.botton{
    background-color:yellow;

}
</style>
<body>
  <div class="global-container">
    <div class="card login-form">
        <div class="card-body">
        
         <h1 class="card-title text-center">login</h1>
            <div class="card-text">
                <div class="form-outline">
                    <input type="text" id="formControlLg" class="form-control form-control-lg" />
                    <label class="form-label" for="formControlLg">Form control lg</label>
                  </div>
                  
                  <div class="form-outline">
                    <input type="text" id="formControlDefault" class="form-control" />
                    <label class="form-label" for="formControlDefault">Form control default</label>
                  </div>
                  
                  <div class="form-outline">
                    <input type="text" id="formControlSm" class="form-control form-control-sm" />
                    <label class="form-label" for="formControlSm">Form control sm</label>
                  </div>
                    <div class="form-group">
                        <label for="exampleInputEmail">Email adress</label>
                        <input type="email"
                        class="form-control form-control-sm"
                        id="emailInputEmail"/>

                    </div>
                    <div class="form-group">
                        <label for="exampleInputpassWord">PassWord</label>
                        
                        <input type="password"
                        class="form-control form-control-sm"
                        id="emailInputPassword"/>

                    </div>

                    <button type="submit" class=" btn btn-primary btn-block" >sign up</button>
                   
                    <a href="home" style="text-decoration: none;">voltar</a>

                </form>
            </div>
    

        </div>
    </div>
  </div>
</body>
<script src="https://kit.fontawesome.com/1a05dae73e.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script></html>

</html>