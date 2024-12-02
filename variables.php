<?php

$projectsStatement = $mysqlClient->prepare('SELECT * FROM projects');
$projectsStatement->execute();
$projects = $projectsStatement->fetchAll();