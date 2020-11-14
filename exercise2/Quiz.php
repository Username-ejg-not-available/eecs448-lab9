<?php
    $q1 = $_POST["jimmy"];
    $q2 = $_POST["cs"];
    $q3 = $_POST["grade"];
    $q4 = $_POST["letter"];
    $q5 = $_POST["mito"];

    echo "<span style='font-size:.8em;'>";
    echo "Question 1: Which Late Night Jimmy is actually funny?<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; You answered: $q1<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Correct Answer: C: Jimmy Neutron<br /><br />";
    echo "Question 2: The acronym CS stands for:<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; You answered: $q2<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Correct Answer: B: Computer Science<br /><br />";
    echo "Question 3: What is my grade on this lab?<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; You answered: $q3<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Correct Answer: D: 100%<br /><br />";
    echo "Question 4: Which answer is correct?<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; You answered: $q4<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Correct Answer: C: C<br /><br />";
    echo "Question 5: What is mitochondria?<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; You answered: $q5<br />";
    echo "&nbsp;&nbsp;&nbsp;&nbsp; Correct Answer: A: The powerhouse of the cell<br /><br />";

    $score = 0;
    if ($q1[0] == 'C') $score += 20;
    if ($q2[0] == 'B') $score += 20;
    if ($q3[0] == 'D') $score += 20;
    if ($q4[0] == 'C') $score += 20;
    if ($q5[0] == 'A') $score += 20;
    echo "You scored " . $score / 20 . "/5 correct.<br />";
    echo "Score: $score%</span>";
?>