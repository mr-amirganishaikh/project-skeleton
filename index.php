<!Doctype html>
<html lang="en">
<head>
    <title>Title of the page</title>
    
    <!--For Search Engines-->
    <meta name="description" content="Description which will appear in search engine" />
    
    <!--For Social Platforms-->
    <meta property="og:site_name" content="Project Title" />
    <meta property="og:url" content="http://www.domainName.com/" />
    <meta property="og:title" content="Title of the page" />
    <meta property="og:description" content="Description which will appear on social platform" />
    <meta property="og:image" content="http://www.domainName.com/img/page_related_image.format" />
    
    <!--Common Head-->
    <?php include '_partial/head.inc.php' ?>
</head>

<body>
    <!--Common Header-->
    <header>
        <?php include '_partial/header.inc.php' ?>
    </header>
    
    <!--Content-->
    <main>
        <div class="media-query-test">
            <span>Resize the window background color will change on different viewports</span>
        </div>
        <div style="height: 100vh;background-color: whitesmoke;">
            <span>One more block added just to show you go top top button effect</span>
            <div class="container">
                <input type="text" class="form-control-theme" placeholder="Custom placeholder for input" />
                <textarea class="form-control-theme" placeholder="Custom placeholder for textarea"></textarea>
            </div>
        </div>
    </main>
    
    <!--Common Footer-->
    <footer>
        <?php include '_partial/footer.inc.php' ?>
    </footer>
    
    <!--Common Foot-->
    <?php include '_partial/foot.inc.php' ?>
</body>
</html>