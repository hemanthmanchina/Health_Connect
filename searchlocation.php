<DOCTYPE html>
<html>
  <head>
    <title>Text Field Example</title>
    <style>
      /* Style the text field and button */
      input[type=text] {
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid #ccc;
        border-radius: 4px;
      }

      input[type=submit] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
      }

      /* Style the container */
      .container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
      }
    </style>
  </head>
  <body>
    <div class="container">
      <form method="POST" action="location.php">
        <label for="text-input">Enter some text:</label>
        <input type="text" id="text-input" name="address" placeholder="Type here...">
        <br>
        <input type="submit" name="submit_address" value="Submit">
      </form>
    </div>
  </body>
</html>
