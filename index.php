<!DOCTYPE html>
<html>
    <head>
        <title>SunAiku IT Japan</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link type="style/css" href="sunaikuStyle.css">
        <style>
          .row{
            margin-left:0px;
            margin-right:0px;
          }
          nav{
                background:grey;
                width:100%;
                margin:0px;
                position:sticky;
            }
            a>img{
              display:none;
            }
           ul{
               display:flex;
               padding:0px;
               margin:0px;
           }
           li{
               list-style-type:none;
               padding:3px;
               margin:5px;
           }
           a{
               text-decoration:none;
               color:white;
           }
          body{

            margin-top:30px;
            margin:0px;
          }
          div {
            display:inline-block;
            margin:0px;
            padding:0px;
          }
          .first_member, .second_member,.third_member,.fourth_member,.sixth_member,.seventh_member{
            height:auto;
          }
          img.thumb{

            height: 150px;
            width:150px;
          }
          .col-md-4,.col-md-12{
            display:block;
            text-align:center;
            padding:0px;
          }
          h5{
            padding:0px;
            margin-bottom:5vw;
          }
          .triangle-down {
	          width: 0;
	          height: 0;
	          border-left: 45px solid transparent;
	          border-right: 45px solid transparent;
	          border-top: 50px solid black;
          }
          .triangle-down1 {
	          width: 0;
	          height: 0;
	          border-left: 45px solid transparent;
	          border-right: 45px solid transparent;
	          border-top: 50px solid white;
          }
          .triangle-down2 {
	          width: 0;
	          height: 0;
	          border-left: 45px solid transparent;
	          border-right: 45px solid transparent;
	          border-top: 50px solid #f2f2f2;
          }
          h6{
            padding-bottom:5px;
            margin-bottom:5vw;
            color:grey;
          }
          .col-md-6{
            background:#f2f2f2;
            padding:10px;
            text-align:center;
          }
          img.full_img{
            width:90%;
            height:auto;
          }
          span.heading_line{
            margin:auto;
            font-size:2.5vw;
            display:block;
            margin-top:5vw;
          }
        </style>
    </head>
    <body>
        <div class="row" style="background:grey">
            <div class="col-md-12" style="text-align:center">
                <div id = "formContent">
                    <div >
                        <p>User Feedback</p>
                    </div>
                    <form action="sendMail.php" method="post">
                        <input id= "login" type="text" name="first_name" class="form-control" size="50" placeholder = "Name" required/>
                        <br><input id="password" type="email" name="email_address" class="form-control" placeholder = "Email" required/>
                        <br><textarea id="login" name="comments" rows="3" cols="55" placeholder="comments"></textarea>
                        <br><input type="submit" name="login" class="btn btn-primary" value="Submit">
                    </form>
                                      
                </div>
            </div>
        </div>
          <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
          <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>
