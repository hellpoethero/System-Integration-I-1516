<html>

<head>
    <title>The jQuery Example</title>
    <script type="text/javascript" src="{!! asset('js/jquery.min.js') !!}"></script>
    <script>
        var url = "http://localhost/health4all/getData";
        $.getJSON(url, function(jd) {
            document.write(jd);
        });
    </script>
</head>

<body>

</body>

</html>