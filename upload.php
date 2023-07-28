<!DOCTYPE html>
<html>
  <head>
    <title>File Upload Example</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f2f2f2;
      }
      
      form {
        margin: 50px auto;
        width: 50%;
        background-color: #fff;
        border-radius: 10px;
        padding: 20px;
        box-shadow: 0px 0px 10px 2px rgba(0,0,0,0.1);
      }
      
      h1 {
        text-align: center;
        margin-top: 0px;
      }
      
      input[type="file"] {
        display: block;
        margin: 0px auto 20px auto;
        font-size: 16px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        background-color: #fff;
        box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.1);
      }
      
      input[type="button"] {
        display: block;
        margin: 0px auto;
        font-size: 16px;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        background-color: #4CAF50;
        color: #fff;
        cursor: pointer;
        box-shadow: 0px 0px 5px 2px rgba(0,0,0,0.1);
      }
      
      input[type="button"]:hover {
        background-color: #3e8e41;
      }
      
      input[type="button"]:active {
        box-shadow: inset 0px 0px 5px 2px rgba(0,0,0,0.1);
      }
    </style>
    
  

  </head>
  <body>
    <form method="POST" action="#">
      <h1>Upload prescription here</h1>
      <input type="file" id="myFile" name="filename">
      <input type="button" value="Upload" onclick="uploadFile()">
    </form>
    <script>
      var file = document.getElementById("myFile").files[0];
      </script>
     <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script>
    function uploadFile() {
      $.ajax({
        url: "uploadfile.php",
        success: function(response) {
          alert(response);
        }
      });
    }
  </script>
    
  </body>
</html>
