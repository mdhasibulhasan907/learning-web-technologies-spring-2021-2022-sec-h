<html> 
    <head>
        <meta chaset="utf-8">
        <link rel="stylesheet" type="text/css" href="../CSSAdmin/searchPatient.css">
    </head>
    <body>
        <form  method="POST" action="../controller/Noticefilecheck.php" enctype="multipart/form-data" >
        
        
        <center>
             <h3>ADD Notice</h3>
             <h4><a href="AdminHome.php">Back</a>||<a href="Notice.php">Show add notice</a></h4>
        
            Notice:<input type="file" name="myfile" id="myfile" value=""><br/><hr/>
           <input type="submit" name="Submit" onclick="return notice()" value="Submit">
        </center>   
       </form>
        <script type="text/javascript" src="scriptNotice.js"></script>
    </body>
</html>