<div class="viewstudentsvotesresults">
<?php
include("databaseconnect.php");

// Select candidates ordered by position
$selpost = "SELECT * FROM `candidates` ORDER BY `Position` ASC";
$querypost = mysqli_query($connect, $selpost);

// Iterate through each candidate
while ($rowpost = mysqli_fetch_array($querypost)) {
    $candidate_id = $rowpost['candidate_id'];
    $first_name = $rowpost['first_name'];
    $last_name = $rowpost['last_name'];
    
    // Check if 'Position' key exists in $rowpost array
    $position = isset($rowpost['Position']) ? $rowpost['Position'] : "";

    // Select votes for the current candidate
    $results = "SELECT COUNT(votesnumber) AS votesresults FROM `votes` WHERE `candidate_id` = '$candidate_id'";
    $queryresults = mysqli_query($connect, $results);
    $rowresults = mysqli_fetch_assoc($queryresults);
    $res = $rowresults['votesresults'];

    // Display candidate results
    echo '<div id="resultsperperson">
        <div id="resultsperpersonhead">'.
        $first_name.' '.$last_name
        .'</div>
        <div id="resultsperpersoncotent">
        '.$res.' Votes
        </div>
        <div id="resultsperpersonfooter">
        Position: '.$position.'
        </div>
        </div>';
}

// Select all votes and display in a table
$sqlQuery = "SELECT candidates.Position, candidates.first_name, candidates.last_name, votes.votesnumber
             FROM candidates
             JOIN votes ON candidates.candidate_id = votes.candidate_id";
$qryCandidate = mysqli_query($connect, $sqlQuery);

echo "<table>
    <tr>
        <th>Position</th>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Votes Casted</th>
    </tr>";

while ($resultsqry = mysqli_fetch_array($qryCandidate)) {
    echo "<tr>
        <td>".$resultsqry['Position']."</td>
        <td>".$resultsqry['first_name']."</td>
        <td>".$resultsqry['last_name']."</td>
        <td>".$resultsqry['votesnumber']."</td>
    </tr>";
}

echo "</table>";
?>
</div>
