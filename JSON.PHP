const name = "Task ya mfano";
const date = "2025-05-10";
const time = "14:00";

fetch('http://your-domain.com/api.php', {
  method: 'POST',
  headers: {
    'Content-Type': 'application/json'
  },
  body: JSON.stringify({
    name: name,
    date: date,
    time: time
  })
})
.then(response => response.json())
.then(data => {
  if (data.status === 'success') {
    console.log("Success:", data.message);
  } else {
    console.log("Error:", data.message);
  }
})
.catch(error => {
  console.error("Fetch error:", error);
});




<?php
// Set content type to JSON
header('Content-Type: application/json');

// Get the raw POST data
$data = json_decode(file_get_contents("php://input"), true);

// Check if required fields exist
if (isset($data['name'], $data['date'], $data['time'])) {
    $name = $data['name'];
    $date = $data['date'];
    $time = $data['time'];

    // Do your processing here (e.g., save to DB)

    echo json_encode([
        'status' => 'success',
        'message' => 'Data received successfully'
    ]);
} else {
    echo json_encode([
        'status' => 'error',
        'message' => 'Missing required fields'
    ]);
}
?>
