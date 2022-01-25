<html lang="en">
    <head>
      <!--PDF-->
<link rel="stylesheet" href="{{URL::asset('include/pdf/pdf.viewer.css')}}">
<script src="{{URL::asset('include/pdf/pdf.js')}}"></script>
<!--Docs-->
<script src="{{URL::asset('include/docx/jszip-utils.js')}}"></script>
<script src="./include/docx/mammoth.browser.min.js"></script>
<!--PPTX-->
<link rel="stylesheet" href="{{URL::asset('include/PPTXjs/css/pptxjs.css')}}">
<link rel="stylesheet" href="{{URL::asset('include/PPTXjs/css/nv.d3.min.css')}}">
<!-- optional if you want to use revealjs (v1.11.0) -->
<link rel="stylesheet" href="{{URL::asset('revealjs/reveal.css')}}">
<script type="text/javascript" src="{{URL::asset('include/PPTXjs/js/filereader.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('include/PPTXjs/js/d3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('include/PPTXjs/js/nv.d3.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('include/PPTXjs/js/pptxjs.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('include/PPTXjs/js/divs2slides.js')}}"></script>

<!--All Spreadsheet -->
<link rel="stylesheet" href="{{URL::asset('include/SheetJS/handsontable.full.min.css')}}">
<script type="text/javascript" src="{{URL::asset('include/SheetJS/handsontable.full.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('include/SheetJS/xlsx.full.min.js')}}"></script>
<!--Image viewer-->
<link rel="stylesheet" href="{{URL::asset('include/verySimpleImageViewer/css/jquery.verySimpleImageViewer.css')}}">
<script type="text/javascript" src="{{URL::asset('include/verySimpleImageViewer/js/jquery.verySimpleImageViewer.js')}}"></script>
<!--officeToHtml-->
<script src="{{URL::asset('include/officeToHtml.js')}}"></script>
<link rel="stylesheet" href="{{URL::asset('include/officeToHtml.css')}}">
    </head>
    <body>
        <div id="resolte-container">

        </div>

        <script type="text/javascript">
          var filepath = {{$path}};
          $("#resolte-container").officeToHtml({
            url:filepath;
          });
        </script>
    </body>
</html>
