<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <style>
      form {
        border: 1px solid #999;
        border-radius: 4px;
        padding: 12px 8px;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 12px;
        max-width: 500px;
        margin: 128px auto 0;
      }

      label {
        display: flex;
        flex-direction: column;
        gap: 4px;
        width: 100%;
      }

      label input {
        padding: 4px;
        font-size: 16px;
        border: 1px solid #cdcdcd;
        border-radius: 4px;
      }

      label input:focus {
        outline: none;
        border-color: #a0a0a0;
      }

      button {
        padding: 8px 16px;
        font-size: 16px;
        background-color: #710000;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <form action="process.php" method="get">
      <label for="a">a: <input type="number" name="a" id="a" /></label>
      <label for="b">b: <input type="number" name="b" id="b" /></label>
      <label for="c">c: <input type="number" name="c" id="c" /></label>
      <label for="d">d: <input type="number" name="d" id="d" /></label>
      <label for="e">e: <input type="number" name="e" id="e" /></label>
      <button type="submit">Submit</button>
    </form>
  </body>
</html>
