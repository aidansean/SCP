<?php
include_once($_SERVER['FILE_PREFIX']."/project_list/project_object.php") ;
$github_uri   = "https://github.com/aidansean/SCP" ;
$blogpost_uri = "http://aidansean.com/projects/?tag=SCP" ;
$project = new project_object("SCP", "SCP", "https://github.com/aidansean/SCP", "http://aidansean.com/projects/?tag=SCP", "scp/images/project.jpg", "scp/images/project_bw.jpg", "SCP stands for Secure, Contain and Protect. The SCP is a wiki of special instructions for containing objects which are of interest to \"The Foundation\". Writing these instructions proves to be a fascinating and rewarding exercise in creative writing, and a good way to practice ones horror writing skills.", "Fiction", "CSS,HTML") ;
?>