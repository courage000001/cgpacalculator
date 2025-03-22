<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CGPA Calculator</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>CGPA Calculator</h2>
        <form action="calculate.php" method="POST" id="cgpaForm">
            <div id="subjects">
                <div class="subject">
                    <input type="text" name="grades[]" placeholder="Enter Grade (A, B, C...)" required>
                    <input type="number" name="credits[]" placeholder="Credit Hours" min="1" required>
                </div>
            </div>
            <button type="button" onclick="addSubject()">Add Subject</button>
            <button type="submit">Calculate CGPA</button>
        </form>
        <div id="result"></div>
    </div>
    <script>
        function addSubject() {
            let subjectDiv = document.createElement('div');
            subjectDiv.classList.add('subject');
            subjectDiv.innerHTML = `
                <input type="text" name="grades[]" placeholder="Enter Grade (A, B, C...)" required>
                <input type="number" name="credits[]" placeholder="Credit Hours" min="1" required>
                <button type="button" onclick="removeSubject(this)">Remove</button>
            `;
            document.getElementById('subjects').appendChild(subjectDiv);
        }
        function removeSubject(element) {
            element.parentElement.remove();
        }
    </script>
</body>
</html>
