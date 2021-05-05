<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <title>LogIn page</title>
</head>
<body>
<div class="login-reg-panel">
		<div class="login-info-box">
			<h2>Have an account?</h2>
			<p>Login to reach our services</p>
			<label  id="label-register" for="log-reg-show">Login</label>
			<input type="radio" name="active-log-panel" id="log-reg-show"  >
		</div>
							
		<div class="register-info-box">
			<h2>Don't have an account?</h2>
			<p>Learn more about us and join the team</p>
			<label id="label-login" for="log-login-show">Register</label>
			<input type="radio" name="active-log-panel" id="log-login-show" >
		</div>
							
		<div class="white-panel">
			<div class="login-show">
				<h2>LOGIN</h2>
        <form action="login" method="POST">
        <div class="form-body">
        <div class="form-group">
        @csrf
        @if (Session::has('error'))
                        <center><span class="error">email or password incorrect.</span></center>
                        @endif
                  <label for="email" class="label-title">E-mail</label>
                  <input type="text" id="mail" class="form-input" placeholder="E-mail" name="email" />
                  @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
                  <label for="password" class="label-title">Password</label>
                  <input type="password" id="pwd" class="form-input" placeholder="password" name="password" />
                  @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
			
        <button type="submit" class="btn">Log in</button>
        <div>
				<a href="">Forgot password?</a>
        </div>
        </form>
			</div>
      </div>
      
			<div class="register-show">
				<h4>REGISTER</h4>
        <div class="form-body">
            <form action="register" method ="POST">
            @csrf
           <div class="result">
           @if (Session::get('sucess'))
           <div class="alret alert-success">
           {{Session::get('Success')}}
           </div>
           @endif
           @if (Session::get('fail'))
           <div class="alret alert-danger">
           {{Session::get('Fail')}}
           </div>
           @endif
           
           </div>
            <!-- Firstname and Lastname -->
            <div class="horizontal-group">
                <div class="form-group left">
                <label for="firstname" class="label-title">First name*</label>
                <input type="text" id="fname" class="form-input" placeholder="first name" name="fname" required="required" value="{{old('fname')}}" />
                @error('fname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group right">
                    <label for="lastname" class="label-title">Last name*</label>
                    <input type="text" id="lname" class="form-input" placeholder="last name" name="lname" value="{{old('lname')}}"/>
                    @error('lname')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>

          <!-- Email and number -->

          <div class="horizontal-group">
                <div class="form-group left">
                <label for="email" class="label-title">email</label>
                    <input type="text" id="email" class="form-input" placeholder="email" required="required" name="email" required="required" value="{{old('email')}}"/>
                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
                <div class="form-group right">
                    <label for="Number" class="label-title">Number</label>
                    <input type="text" id="Number" class="form-input" placeholder="Number" name="number" required="required" value="{{old('number')}}"/>
                    @error('number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                </div>
            </div>
        <!--city and adress -->
        <div class="form-group">
                  <label for="adress" class="label-title">Adress</label>
                    <input type="text" id="adress" class="form-input" placeholder="adress" name="adress"required="required" value="{{old('adress')}}" />
                    @error('adress')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
        </div>
        <div class="form-group">
        <label class="label-title">city</label>
            <select class="form-input" id="city" name="city" >
              <option value="tunisia">Tunisia</option>
              <option value="marroc">Marroc</option>
              <option value="dubaï">Dubaï</option>
            </select>

        </div>
        <!-- type of shop -->
        <div class="form-group">
        <label class="label-title">Type</label>
            <select class="form-input" id="type" name="type" >
              <option value="shop">Shop</option>
              <option value="coffee">Coffee</option>
              <option value="restaurant">Restaurant</option>
            </select>
        </div>

          <!-- Email -->
          <div class="form-group">
          <label for="choose-file" class="label-title">Upload Profile Picture</label>
          <input type="file" id="choose-file" size="80" name="photo">
        </div>
        <!-- Bio -->
        <div class="form-group">
          <label for="choose-file" class="label-title">Description</label>
          <textarea class="form-input" rows="4" cols="50" style="height:auto" name="desc" required="required" value="{{old('desc')}}"></textarea>
        
        </div>

        <!-- Passwrod and confirm password -->
        <div class="horizontal-group">

          <div class="form-group left">
            <label for="password" class="label-title">Password *</label>
            <input type="password" id="password" class="form-input" placeholder="enter your password" required="required" name="password">
            @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
          </div>

          <div class="form-group right">
            <label for="confirm-password" class="label-title">Confirm Password *</label>
            <input type="password" class="form-input" id="confirm-password" placeholder="enter your password again" required="required">
          </div>
          <button type="submit" class="btn">Create</button>
        </div>
   </form>
</div>
</div>
				                            
 <style>
   
@import url('https://fonts.googleapis.com/css?family=Mukta');
body{
  font-family: 'Mukta', sans-serif;
	height:100vh;
	min-height:550px;
	
}
a{
  text-decoration:none;
  color:#444444;
}
.login-reg-panel{
    position: relative;
    top: 50%;
    transform: translateY(-50%);
	text-align:center;
    width:70%;
	right:0;left:0;
    margin:auto;
    height:400px;
    background-color: rgb(244, 162, 97);
}
.white-panel{
    background-color: rgba(255,255, 255, 1);
    
    position:absolute;
    top:-50px;
    width:50%;
    right:calc(50% - 50px);
    transition:.3s ease-in-out;
    z-index:0;
    box-shadow: 0 0 15px 9px #00000096;
}
.login-reg-panel input[type="radio"]{
    position:relative;
    display:none;
    
}
.login-reg-panel{
    color:#B8B8B8;
}
.login-reg-panel #label-login, 
.login-reg-panel #label-register{
    border:1px solid #9E9E9E;
    padding:5px 5px;
    width:150px;
    display:block;
    text-align:center;
    border-radius:10px;
    cursor:pointer;
    font-weight: 600;
    font-size: 18px;
}
.login-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    left:0;
    position:absolute;
    text-align:left;
    color : #000;
}
.register-info-box{
    width:30%;
    padding:0 50px;
    top:20%;
    right:0;
    position:absolute;
    text-align:left;
    color : #000;
    
}
.right-log{right:50px !important;}

.login-show{
  height:450px;
  z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:50px;
}
.register-show{
    z-index: 1;
    display:none;
    opacity:0;
    transition:0.3s ease-in-out;
    color:#242424;
    text-align:left;
    padding:10px;
    height:600px
}
.show-log-panel{
    display:block;
    opacity:0.9;
}
.login-show input[type="text"], .login-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.login-show input[type="button"] {
    max-width: 150px;
    width: 100%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.login-show a{
    display:inline-block;
    padding:10px 0;
}

.register-show input[type="text"], .register-show input[type="password"]{
    width: 100%;
    display: block;
    margin:20px 0;
    padding: 15px;
    border: 1px solid #b5b5b5;
    outline: none;
}
.register-show input[type="button"] {
    max-width: 50px;
    width: 50%;
    background: #444444;
    color: #f9f9f9;
    border: none;
    padding: 5px;
    text-transform: uppercase;
    border-radius: 2px;
    float:right;
    cursor:pointer;
}
.credit {
    position:absolute;
    bottom:10px;
    left:10px;
    color: #3B3B25;
    margin: 0;
    padding: 0;
    font-family: Arial,sans-serif;
    text-transform: uppercase;
    font-size: 12px;
    font-weight: bold;
    letter-spacing: 1px;
    z-index: 99;
}
a{
  text-decoration:none;
  color:#2c7715;
}

.form-body {
  padding:10px 40px;
  color:#666;
}

.form-group{
  margin-bottom:20px;
}

.form-body .label-title {
  color:#000;
  font-size: 17px;
  font-weight: bold;
}

.form-body .form-input {
    font-size: 17px;
    box-sizing: border-box;
    width: 100%;
    height: 34px;
    padding-left: 10px;
    padding-right: 10px;
    color: #333333;
    text-align: left;
    border: 1px solid #d6d6d6;
    border-radius: 4px;
    background: white;
    outline: none;
}



.horizontal-group .left{
  float:left;
  width:49%;
}

.horizontal-group .right{
  float:right;
  width:49%;
}

input[type="file"] {
 outline: none;
 cursor:pointer;
 font-size: 17px;
}



::-webkit-input-placeholder {
 color:#d9d9d9;
}

/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.form-footer {
 clear:both;
}

/*---------------------------------------*/
/* Form Footer */
/*---------------------------------------*/
.signup-form .form-footer  {
  background-color: #EFF0F1;
  border-bottom-left-radius: 10px;
  border-bottom-right-radius: 10px;
  padding:10px 40px;
  text-align: right;
  border-top: 1px solid #cccccc;
}

.form-footer span {
  float:left;
  margin-top: 10px;
  color:#999;  
  font-style: italic;
  font-weight: thin;
}

.btn {
   display:inline-block;
   padding:10px 20px;
   background-color: #1BBA93;
   font-size:17px;
   border:none;
   border-radius:5px;
   color:#bcf5e7;
   cursor:pointer;
}

.btn:hover {
  background-color: #169c7b;
  color:white;
}
 </style>
 <script>

$(document).ready(function(){
    $('.login-info-box').fadeOut();
    $('.login-show').addClass('show-log-panel');
});


$('.login-reg-panel input[type="radio"]').on('change', function() {
    if($('#log-login-show').is(':checked')) {
        $('.register-info-box').fadeOut(); 
        $('.login-info-box').fadeIn();
        
        $('.white-panel').addClass('right-log');
        $('.register-show').addClass('show-log-panel');
        $('.login-show').removeClass('show-log-panel');
        
    }
    else if($('#log-reg-show').is(':checked')) {
        $('.register-info-box').fadeIn();
        $('.login-info-box').fadeOut();
        
        $('.white-panel').removeClass('right-log');
        
        $('.login-show').addClass('show-log-panel');
        $('.register-show').removeClass('show-log-panel');
    }
});
  

 </script>
</body>
</html>
