<?php 
function getGradeStatus($score) {
    if($score >= 50) {
        return "<span class='pass'>PASS</span>";

    }elseif($score < 50) {
        return "<span class='fail'>FAIL</span>";

    }else {
        return "<span class='status-unavailable'>Informatino unavailable.</span>";
    }
}

/*
Our data set of students (array)
*/
$students = [
    ["name" => "Bob", "score" => 74, "suject" => "Science"],
    ["name" => "John", "score" => 55, "suject" => "Math"],
    ["name" => "Henry", "score" => 90, "suject" => "History"],
    ["name" => "Owen", "score" => 83, "suject" => "Music"]
];


?>