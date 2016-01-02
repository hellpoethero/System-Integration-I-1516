@extends('dicom.layout')

@section('content')

    <link rel="stylesheet" type="text/css" href="{!! asset('cornerstone/cornerstone.min.css') !!}">

    <script type="text/javascript" src="{!! asset('cornerstone/cornerstone.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('cornerstone/cornerstoneMath.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('cornerstone/cornerstoneTools.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('cornerstone/dicomParser.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('cornerstone/jpx.min.js') !!}"></script>
    <script type="text/javascript" src="{!! asset('cornerstone/dist/cornerstoneWADOImageLoader.js') !!}"></script>

    <br>

    <div class="container">
        <div style="width:512px;height:512px;position:relative;color: white;display:inline-block;border-style:solid;border-color:black;"
             oncontextmenu="return false"
             class='disable-selection noIbar'
             unselectable='on'
             onselectstart='return false;'
             onmousedown='return false;'>
            <div id="dicomImage"
                 style="width:512px;height:512px;top:0px;left:0px; position:absolute">
            </div>
        </div>
    </div>

    <script>


        var data = JSON.parse('<?php echo json_encode($data)?>');
        var url=data['url'];

        var instance = {
            bitsAllocated : 16,
            pixelRepresentation: 0,
        };

        var image = {
            color: false,
            columnPixelSpacing: 1,
            columns: 512,
            height: 512,
            instance: instance,
            intercept: -1024,
            invert: false,
            render: cornerstone.renderGrayscaleImage,
            rowPixelSpacing: 1,
            rows: 512,
            sizeInBytes: 524288,
            slope: 1,
            uri: url,
            width: 512,
            windowCenter: 50,
            windowWidth: 350,
        };

        var imageId = cornerstoneWADOImageLoader.imageManager.add(image);

        // image enable the dicomImage element and activate a few tools
        loadAndViewImage(imageId);

        var loaded = false;

        function loadAndViewImage(imageId) {
            var element = $('#dicomImage').get(0);
            //try {
            cornerstone.loadImage(imageId).then(function(image) {
                console.log(image);
                var viewport = cornerstone.getDefaultViewportForImage(element, image);
                cornerstone.displayImage(element, image, viewport);
                if(loaded === false) {
                    cornerstoneTools.mouseInput.enable(element);
                    cornerstoneTools.mouseWheelInput.enable(element);
                    cornerstoneTools.wwwc.activate(element, 1); // ww/wc is the default tool for left mouse button
                    cornerstoneTools.pan.activate(element, 2); // pan is the default tool for middle mouse button
                    cornerstoneTools.zoom.activate(element, 4); // zoom is the default tool for right mouse button
                    cornerstoneTools.zoomWheel.activate(element); // zoom is the default tool for middle mouse wheel
                    loaded = true;
                }
            }, function(err) {
                alert(err);
            });
        }

        $(cornerstone).bind('CornerstoneImageLoadProgress', function(eventData) {
            $('#loadProgress').text('Image Load Progress: ' + eventData.percentComplete + "%");
        });

        $(document).ready(function() {

            var element = $('#dicomImage').get(0);
            cornerstone.enable(element);

            $('#downloadAndView').click(function(e) {
                downloadAndView();
            });

            $('form').submit(function() {
                downloadAndView();
                return false;
            });

            $('#selectFile').on('change', function(e) {
                // Add the file to the cornerstoneFileImageLoader and get unique
                // number for that file
                var file = e.target.files[0];
                var imageId = cornerstoneWADOImageLoader.fileManager.add(file);
                loadAndViewImage(imageId);
            });
        });

    </script>

@endsection