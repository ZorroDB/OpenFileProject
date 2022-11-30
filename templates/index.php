<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>OpenFile</title>
  {{ dropzone.load_css() }} {{ dropzone.style('border: 2px dashed black;') }}
  <style>
    * {
      font-family: "Courier New", Courier, monospace;
    }

    #text_main {
      text-align: center;
    }
    input[type="text" i]{
      padding: 20px;
      text-align: center;
    }
  </style>
</head>

<body>
  <div style="
        color: #000000;
        font-size: 20px;
        font-weight: bold;
        margin: 10px 0px 10px 0px;
      ">
    OpenFile
  </div>
  {{ dropzone.create(action='upload') }} {{ dropzone.load_js() }} {{
    dropzone.config() }}

  <div class="main-section" style="height: 30em;">
    <div class="text_main">
      <form action="/upload" method="post" enctype="multipart/form-data">
        <p>Description:</p>
        <input type="text" name="text" placeholder="Enter text here" padding="20px" text-align="center" />
        <input type="submit" value="Submit" />
      </form>
    </div>
    <br>
    <h2 style="text-align: center; padding-top: 50px; margin: 0">Why choose OpenFile?</h2>
    <p style="text-align: center;">
      OpenFile is a very easy to use program for you to share your work with
      others. We want to make it as easy and safe for the user to share their
      files and on top of that edit/ customize them. people.
    </p>
  </div>

</body>

</html>