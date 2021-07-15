<?php
$page_meta = NULL;

if (isset($page)) {
    $page_meta = get_page_meta($page);
} else {
    $page = NULL;
}

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <!-- common meta -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- page title -->
    <title><?php echo $page_meta["title"] ?></title>

    <!-- seo meta -->
    <meta name="description" content="<?php echo $page_meta["description"] ?>" />

    <!-- open graph meta -->
<?php
if (isset($page_meta["og"])) {
    foreach ($page_meta["og"] as $key => $value) {
?>
    <meta name="og:<?php echo $key ?>" content="<?php echo $value ?>" />
<?php
    }
}
?>

    <!-- common styles -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500&display=swap">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- page specific styles -->
<?php
switch ($page) {
    case 'home':
    echo '
    <link rel="stylesheet" href="'.CSS_PATH.'/home.css" />
    ';
    break;
}
?>

</head>

<body>
