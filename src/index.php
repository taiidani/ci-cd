<!DOCTYPE html>
<html>
<head>
    <title>Test</title>
</head>
<body>
    <p>In image: <?=getenv("IN_IMAGE")?></p>
    <p>In yml: <?=getenv("IN_YML")?></p>
    <p>In CI: <?=getenv("IN_CI")?> (and run by <?=getenv("CI_NAME")?>)</p>
</body>
</html>
