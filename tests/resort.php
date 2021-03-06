<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Cортировка</title>
    <script src="http://yandex.st/highlightjs/5.16/highlight.min.js"></script>
    <link rel="stylesheet" href="http://yandex.st/highlightjs/5.16/styles/default.min.css">
    <script>
        hljs.tabReplace = '    ';
        hljs.initHighlightingOnLoad();
    </script>
</head>
<body>
<?
require_once '../lib/csscomb.php';
$case['order'] = '[
[
    "font",
    "font-family",
    "font-size",
    "font-weight",
    "font-style",
    "font-variant",
    "font-size-adjust",
    "font-effect",
    "font-emphasize",
    "font-emphasize-position",
    "font-emphasize-style",
    "font-smooth",
    "font-stretch"
],
[
    "position",
    "z-index",
    "top",
    "right",
    "bottom",
    "left"
],
[
    "display",
    "visibility",
    "float",
    "clear",
    "overflow",
    "overflow-x",
    "overflow-y",
    "overflow-style",
    "clip",
    "zoom"
],
[
    "-moz-box-sizing",
    "-webkit-box-sizing",
    "box-sizing",
    "width",
    "min-width",
    "max-width",
    "height",
    "min-height",
    "max-height",
    "margin",
    "margin-top",
    "margin-right",
    "margin-bottom",
    "margin-left",
    "padding",
    "padding-top",
    "padding-right",
    "padding-bottom",
    "padding-left"
],
[
    "table-layout",
    "empty-cells",
    "caption-side",
    "border-spacing",
    "border-collapse",
    "list-style",
    "list-style-position",
    "list-style-type",
    "list-style-image"
],
[
    "content",
    "quotes",
    "counter-reset",
    "counter-increment",
    "cursor",
    "text-align",
    "vertical-align",
    "line-height",
    "white-space",
    "white-space-collapse",
    "text-decoration",
    "text-indent",
    "text-transform",
    "text-align-last",
    "text-emphasis",
    "text-height",
    "text-justify",
    "text-outline",
    "text-replace",
    "text-wrap",
    "letter-spacing",
    "word-spacing",
    "word-break",
    "word-wrap"
],
[
    "opacity",
    "color",
    "border",
    "-moz-border-radius",
    "-webkit-border-radius",
    "border-radius",
    "border-break",
    "border-color",
    "-webkit-border-image",
    "-moz-border-image",
    "-khtml-border-radius",
    "border-image",
    "border-top-image",
    "border-right-image",
    "border-bottom-image",
    "border-left-image",
    "border-corner-image",
    "border-top-left-image",
    "border-top-right-image",
    "border-bottom-right-image",
    "border-bottom-left-image",
    "border-fit",
    "border-length",
    "border-style",
    "border-width",
    "border-top",
    "border-top-width",
    "border-top-style",
    "border-top-color",
    "border-right",
    "border-right-width",
    "border-right-style",
    "border-right-color",
    "border-bottom",
    "border-bottom-width",
    "border-bottom-style",
    "border-bottom-color",
    "border-left",
    "border-left-width",
    "border-left-style",
    "border-left-color",
    "border-top-right-radius",
    "border-top-left-radius",
    "border-bottom-right-radius",
    "border-bottom-left-radius",
    "outline",
    "outline-offset",
    "outline-width",
    "outline-style",
    "outline-color",
    "background",
    "background-color",
    "background-image",
    "background-repeat",
    "background-attachment",
    "background-position",
    "background-position-x",
    "background-position-y",
    "background-break",
    "background-clip",
    "background-origin",
    "background-size",
    "-webkit-box-shadow",
    "-moz-box-shadow",
    "box-shadow",
    "text-shadow",
    "transitions",
    "resize",
    "filter:progid:DXImageTransform.Microsoft.AlphaImageLoader",
    "filter:progid:DXImageTransform.Microsoft.Alpha(Opacity",
    "-ms-filter:\'progid:DXImageTransform.Microsoft.Alpha"
],
[
    "page-break-before",
    "page-break-inside",
    "page-break-after",
    "orphans",
    "widows"
]
]';

$css = '/* comment 1 */
@media screen {
    /* .b-pager (begin) */
	.b-pager{
		font-size:130%;
		margin:1em 0 2em;
		}
		.b-pager__title{
			font-weight:bold;
			padding-right:.65em;
			}
/* .b-pager (end) */
}

/* comment 2 */

@media print {
/* .b-pager (begin) */
	.b-pager{
		font-size:130%;
		margin:1em 0 2em;
		}
		.b-pager__title{
			font-weight:bold;
			padding-right:.65em;
			}
/* .b-pager (end) */
}
/* eof */';

//$c = new csscomb($css, true, $case['order']);
$c = new csscomb($css, true);
?>
</body>
</html>