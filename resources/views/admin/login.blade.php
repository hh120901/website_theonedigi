<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form with Drop Area</title>
  <style>
    #drop-area {
      border: 2px dashed #ccc;
      border-radius: 8px;
      padding: 20px;
      text-align: center;
      cursor: pointer;
      margin-bottom: 10px;
    }

    #drop-area.highlight {
      border-color: #2196F3;
    }
  </style>
</head>
<body>

  <form id="myForm" action="/submit" method="post" enctype="multipart/form-data">
    <div>
      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>
    </div>
    <div>
      <label for="mail">Email:</label>
      <input type="email" id="mail" name="mail" required>
    </div>
    <div>
      <label for="phone">Phone:</label>
      <input type="tel" id="phone" name="phone" required>
    </div>
    <div id="drop-area" ondragover="handleDragOver(event)" ondragleave="handleDragLeave()" ondrop="handleDrop(event)">
		<p>Drop your resume file here or <label for="resume-input">choose a file</label></p>
		<input type="file" id="resume-input" name="resume" onchange="handleFileSelect()">
		<span id="file-name"></span>
    </div>
    <button type="submit">Submit</button>
  </form>

  <script>
    function handleDragOver(event) {
      event.preventDefault();
      document.getElementById('drop-area').classList.add('highlight');
    }

    function handleDragLeave() {
      document.getElementById('drop-area').classList.remove('highlight');
    }

    function handleDrop(event) {
      event.preventDefault();
      document.getElementById('drop-area').classList.remove('highlight');

      var files = event.dataTransfer.files;
      handleFiles(files);
    }

    function handleFileSelect() {
		var files = document.getElementById('resume-input').files;
		handleFiles(files);
		document.getElementById('resume-input').value = files;
    }

    function handleFiles(files) {
      if (files.length === 0) {
			console.log('No file selected.');
			return;
      }

      var fileName = files[0].name;
      document.getElementById('resume-input').value = fileName;

      console.log('File selected:', fileName);
    }
  </script>

</body>
</html>
