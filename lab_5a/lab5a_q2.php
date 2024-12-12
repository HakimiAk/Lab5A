<?php
$students = [
    ['name' => 'Akmal', 'program' => 'BIW', 'age' => 21],
    ['name' => 'Hakimi', 'program' => 'BIS', 'age' => 24],
    ['name' => 'Adnan', 'program' => 'BIT', 'age' => 22],
];

echo "<table border='1'>";
echo "<tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
      </tr>";

foreach ($students as $student) {
    echo "<tr>
            <td>{$student['name']}</td>
            <td>{$student['program']}</td>
            <td>{$student['age']}</td>
          </tr>";
}

echo "</table>";
?>
