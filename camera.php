<head>

    <script type="text/javascript" src="jquery-3.4.1.min.js"></script>

    <script type="text/javascript" src="webcamjs-master/webcam.min.js"></script>

    <<link rel="stylesheet" href="css/bootstrap.css">


</head>

<body>

<div class="container">

        <div class="row">

            <div class="col-md-6">

                <div id="my_camera"></div>

                <br/>

                <input type=button value="Take Snapshot" onClick="take_snapshot()">

                <input type="hidden" name="image" class="image-tag">

            </div>

            <div class="col-md-6">

                <div id="results">Your captured image will appear here...</div>

            </div>

            <div class="col-md-12 text-center">

                <br/>

            </div>

        </div>

</div>



<!-- Configure a few settings and attach camera -->

<script language="JavaScript">

    Webcam.set({

        width: 490,

        height: 390,

        image_format: 'jpeg',

        jpeg_quality: 90

    });



    Webcam.attach( '#my_camera' );



    function take_snapshot() {

        Webcam.snap( function(data_uri) {

            $(".image-tag").val(data_uri);

            document.getElementById('results').innerHTML = '<img src="'+data_uri+'"/>';

        } );

    }

</script>
</body>
