<!DOCTYPE html>
<html lang="en">

<head id="include-head">
    <meta charset="UTF-8" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
    <div id="root">
        <div class="screen">
            <div id="include-menu"></div>
            <div id="include-content"></div>
        </div>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script>
    $("#include-head").load("/includes/head.html");
    $("#include-menu").load("/includes/menu.html");
    if (location.pathname === "/") {
        $("#include-content").load("/pages/home.html");
    } else if (
        location.pathname.split("/")[1] === "discussions" &&
        location.pathname.split("/")[2] &&
        location.pathname.split("/")[3] === "detail"
    ) {
        $("#include-content").load("/pages/discussion_detail.html");
    } else {
        $("#include-content").load("/pages/errors/404.html");
    }
    </script>
</body>

</html>