<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Test Line Noti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }

            .ajaxloading-widget-background {
                position: fixed;
                top: 0;
                right: 0;
                bottom: 0;
                left: 0;
                z-index: 10001;
                background-color: whitesmoke;
                text-align: center;
                -ms-filter: "progid:DXImageTransform.Microsoft.Alpha(Opacity=70)";
                filter: alpha(opacity=50);
                -moz-opacity: 0.5;
                -khtml-opacity: 0.5;
                opacity: 0.8;
                display: none;
            }

            .ajaxloading-container {
                width: 100%;
                height: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="title m-b-md">
                    Test Line notification
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <input type="text" name="message" id="message" class="form-control">
                        <button class="btn btn-default" type="button" onclick="sendMessage()">Send</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

    function sendMessage() {
        var params = $('#message').val();
        $('#message').val('')
        var url = '/api/push-line-noti?message='+params;
        $.ajax({
            type: 'GET',
            url: url,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content'),
                'Accept': 'application/json',
            },
            success: function (data) {
            },
            error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert(errorThrown);
                console.log('Error,', XMLHttpRequest, textStatus, errorThrown);
            }
        });
    }
</script>
