<?php include '../includes/hedear.php'; ?>
<style>
        @import url("https://fonts.googleapis.com/css?family=Lato:400,700");
        body{
            font-family: 'Lato', sans-serif;
            color: #fffcfc;
            justify-content: center;
            min-height: 100vh;
            overflow: hidden;
            margin: 0;
            padding: 0;    
        }
        .logo{
            width: 100%;
            height :100%;
            position: fixed;
            background-image: url('../img/guitar.jpg');
            background-size : cover;
            filter: blur(5px);
            
        }
        input {
            width: 100%;
            border-radius: 4px;
            border: none;
            font-family: inherit;
            outline: none;
            box-shadow: 0px 3px 6px rgba(0, 0, 0, 0.16);
            padding: 0.9rem 0.7rem;
            font-size: 17px;
        }
        .psw{
          margin-top:4%;
        }
        
        .chec {
            margin-top: 4%;
        }
        
        .chec input {
            width: 30px;
        }
        
        button {
            background-color: #dc3545;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 50%;
            opacity: 0.9;
        }
        
        button:hover {
            opacity: 1;
        }
        
        
        .fors{
            position: relative;
            width:100%;
            display:flex;
            justify-content: center;
            text-align: center;
        }
       form{
            width:40%;
            
       }
       
       /* .ss{margin-left: -522px;} */
    </style>
</head>


<body>
    
    <div class="logo"></div>
<nav>
<div class="text-white h1 position-relative"><a href=""class="text-decoration-none text-white"><span class="navbar-logo text-danger "><i class="bi bi-music-note-list"></i></span> <b class="name-logo">E-Lyrics</b></a></div>
</nav>
    <div class="fors">    
    <form class="" action = "../controllers/admincontroller.php" method ="POST" data-parsley-validate>
        <div class="container">
           
            <h1>Sign In</h1>
            <p>Welcome back to our application enjoy it.</p>
            <hr>
            <div class="email d-flex align-items-start">
                <p><b>Email</b></p>
            </div>
            <input type="email" placeholder="Enter Email" name="email" required>

            <div class="psw d-flex align-items-start">
                <p><b>Password</b></p>
            </div>
            <input type="password" placeholder="Enter Password" name="psw">
            <div class="chec d-flex align-items-start">
                <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> <span>Remember me</span>
            </div>
            <div class="clearfix">
                <button type="submit" name ="signIn" class="signupbtn">Sign in</button>
            </div>
            <div class="text-center ">
                <p>Not a member? <a href="#">Register</a></p>
            </div>
        </div>
    </form>
    </div>

    
</body>

</html>