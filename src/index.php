<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Base64 Encode/Decode</title>
  <link rel="stylesheet" href="./css/w3.css">
  <link rel="stylesheet" href="./css/highlight.js.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body class="w3-dark-grey">
  <script src="./js/highlight.min.js"></script>
  <script src="./js/highlightjs-line-numbers.min.js"></script>
  <h4 class="w3-center">Base64 Encode/Decode</h4>
  <div class="w3-section w3-content">
    <form>
      <div class="w3-section">
        <strong>Input:</strong>
        <textarea rows="8" class="w3-input w3-light-grey w3-border" id="txtData"></textarea>
      </div>
      <input name="actionType" checked class="w3-radio" type="radio" id="btnDecode" value="Decode">
      <label for="btnDecode">Decode</label>
      <input name="actionType" class="w3-radio" type="radio" id="btnEncode" value="Encode">
      <label for="btnEncode">Encode</label>
      <span class="w3-text-grey w3-margin-left w3-margin-right">|</span>
      <input class="w3-check" type="checkbox" id="showLineNum">
      <label for="showLineNum">Show Line numbers</label>
      <div class="w3-section">
        <pre>
          <code contenteditable="true" id="txtResult"></code>
        </pre>
      </div>
    </form>

  </div>
  <script>
    document.getElementById('txtData').onkeyup = function () {
      decodeOrEncode();
    }

    document.getElementById('txtData').onchange = function () {
      decodeOrEncode();
    }

    document.getElementById('btnDecode').onchange = function () {
      decode();
    }

    document.getElementById('btnEncode').onchange = function () {
      encode();
    }

    function decodeOrEncode() {
      if (document.getElementById('btnDecode').checked) {
        decode();
      } else if (document.getElementById('btnEncode').checked) {
        encode();
      }
    }
    function decode() {
      document.getElementById('txtResult').textContent = '';
      var strDataToDecode = document.getElementById('txtData').value;
      var strDecodedData = atob(strDataToDecode);
      document.getElementById('txtResult').textContent = strDecodedData;
      hljs.highlightAll();
      if (document.getElementById('showLineNum').checked) {
        hljs.initLineNumbersOnLoad();
      }
    }

    function encode() {
      document.getElementById('txtResult').textContent = '';
      var strDataToEncode = document.getElementById('txtData').value;
      var strEncodedData = btoa(strDataToEncode);
      document.getElementById('txtResult').textContent = strEncodedData;
      hljs.highlightAll();
      if (document.getElementById('showLineNum').checked) {
        hljs.initLineNumbersOnLoad();
      }

    }
  </script>
</body>

</html>
