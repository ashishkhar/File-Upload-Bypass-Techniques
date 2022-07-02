<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

  <link rel="stylesheet" type="text/css" href="style.css">

  <title>File Upload HTML Template - Pure Coding</title>

  <style>
    h1 {
      color: green;
    }

    body {
      text-align: center;
    }

    h4 {
      color: purple;
    }

    .w3rcontainer {
      border: 1px solid #cccfdb;
      border-radius: 2px;
    }

    .hover-underline-animation {
      display: inline-block;
      position: relative;
      color: #fff;
    }

    .hover-underline-animation:after {
      content: '';
      position: absolute;
      width: 100%;
      transform: scaleX(0);
      height: 2px;
      bottom: 0;
      left: 0;
      background-color: #008080;
      transform-origin: bottom right;
      transition: transform 0.25s ease-in-out;
    }

    .hover-underline-animation:hover:after {
      transform: scaleX(1);
      transform-origin: bottom left;
    }


    @import url("https://fonts.googleapis.com/css?family=Mukta:700");

    * {
      box-sizing: border-box;
    }

    *::before,
    *::after {
      box-sizing: border-box;
    }

    button {
      position: relative;
      display: inline-block;
      cursor: pointer;
      outline: none;
      border: 0;
      vertical-align: middle;
      text-decoration: none;
      background: solid;

      padding: 0;
      font-size: inherit;
      font-family: inherit;
    }

    button.learn-more {
      width: 21rem;
      height: auto;
    }

    button.learn-more .circle {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: relative;
      display: block;
      margin: 0;
      width: 3rem;
      height: 3rem;
      background: transparent;
      
      border-radius: 1.625rem;
    }

    button.learn-more .circle .icon {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: absolute;
      top: 0;
      bottom: 0;
      margin: auto;
      background: #fff;
    }

    button.learn-more .circle .icon.arrow {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      left: 0.625rem;
      width: 1.125rem;
      height: 0.125rem;
      
      
    }

    button.learn-more .circle .icon.arrow::before {
      position: absolute;
      content: "";
      top: -0.25rem;
      right: 0.0625rem;
      width: 0.625rem;
      height: 0.625rem;
      border-top: 0.125rem background #D3DEDC;
      border-right: 0.125rem background #D3DEDC;
      transform: rotate(45deg);
    }

    button.learn-more .button-text {
      transition: all 0.45s cubic-bezier(0.65, 0, 0.076, 1);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      padding: 0.75rem 0;
      margin: 0 0 0 1.85rem;
      
      color: #F2F2F2;
      font-weight: 700;
      line-height: 1.6;
      text-align: center;
      text-transform: uppercase;
    }

    button:hover .circle {
      width: 100%;
    }

    button:hover .circle .icon.arrow {
      background: #D3DEDC;
      transform: translate(1rem, 0);
    }

    button:hover .button-text {
      color: #FAEEE7;

    }

    @supports (display: grid) {
      body {
        display: grid;
        grid-template-columns: repeat(4, 1fr);
        grid-gap: 0.625rem;
        grid-template-areas: ". main main ."". main main .";
      }

      #container {
        grid-area: main;
        align-self: center;
        justify-self: center;
      }
    }
  </style>
  <script src="https://code.jquery.com/jquery-1.12.4.min.js">

  </script>

</head>

<body>

  <div class="file__upload">
    <div class="header">
      <p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>
    </div>

    <form class="body" action="upload.php" method="POST" enctype="multipart/form-data">
      <input type="file" id="upload" name="file">

      <label for="upload">
        <i class="fa fa-file-text-o fa-3x"></i>
        <p style = "color:#F0EBE3">
          <span>Browse</span> your files

        <p class="hover-underline-animation" ; style="font-size: 15px; margin: 21px 0; display: block ;color:#F0EBE3;">
          Choose any one scenarios for file upload functionality!
        </p>

        <div id="container">

        </label>
  
  </div>
          <button class="learn-more" type="submit" name="submit">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text">Upload file without checking</span>
          </button>

          <br><br>
          <button class="learn-more" type="submit" name="submit" formaction="upload_whitelist.php">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text">Whitelisting extension check</span>
          </button>

          <br><br>
          <button class="learn-more" type="submit" name="submit" formaction="upload_blacklist.php">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text">Blacklisting extension check</span>
          </button>

          <br><br>
          <button class="learn-more" type="submit" name="submit" formaction="upload_other.php">
            <span class="circle" aria-hidden="true">
              <span class="icon arrow"></span>
            </span>
            <span class="button-text">Other different checks</span>
          </button>
          </p>
    </form>
    </div>
</body>

</html>