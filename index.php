<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<script>
const name = "Task ya mfano";
const date = "2025-05-10";
const time = "14:00";

const formData = new URLSearchParams();
formData.append('name', name);
formData.append('date', date);
formData.append('time', time);

fetch('http://localhost/todo_api/add_todo.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/x-www-form-urlencoded'
  },
  body: formData.toString()
})
.then(response => response.json())
.then(data => {
  console.log(data);
})
.catch(error => {
  console.error('Fetch error:', error);
});

</script>
</body>
</html>