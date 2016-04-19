<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Font Directory
    |--------------------------------------------------------------------------
    |
    | The location of the DOMPDF font directory.
    |
    */

    'font_dir' => storage_path('pdf/fonts'),

    /*
    |--------------------------------------------------------------------------
    | Font Cache Directory
    |--------------------------------------------------------------------------
    |
    | The location of the DOMPDF font cache directory.
    |
    */

    'font_cache' => storage_path('pdf/fonts'),

    /*
    |--------------------------------------------------------------------------
    | Temporary Directory
    |--------------------------------------------------------------------------
    |
    | The directory specified must be writeable by the webserver process.
    | The temporary directory is required to download remote images and when
    | using the PFDLib back end.
    |
    */

    'temp_dir' => storage_path('pdf/tmp'),

    /*
    |--------------------------------------------------------------------------
    | Default Media Type
    |--------------------------------------------------------------------------
    |
    | The HTML target media view which should be rendered into pdf.
    |
    | List of types and parsing rules for future extensions:
    | http://www.w3.org/TR/REC-html40/types.html
    |
    */

    'default_media_type' => 'screen',

    /*
    |--------------------------------------------------------------------------
    | Default Paper Size
    |--------------------------------------------------------------------------
    |
    | North America standard is "letter"; other countries generally "a4".
    |
    | See Dompdf\Adapter\CPDF::PAPER_SIZES for valid sizes.
    |
    */

    'default_paper_size' => 'letter',

    /*
    |--------------------------------------------------------------------------
    | Default Font
    |--------------------------------------------------------------------------
    |
    | The default font family.
    |
    | Used if no suitable fonts can be found. This must exist in the font folder.
    |
    */

    'default_font' => 'arial',

    /*
    |--------------------------------------------------------------------------
    | DPI
    |--------------------------------------------------------------------------
    |
    | Image DPI setting.
    |
    */

    'dpi' => 96,

    /*
    |--------------------------------------------------------------------------
    | Font Height Ratio
    |--------------------------------------------------------------------------
    |
    | A ratio applied to the fonts height to be more like browsers' line height.
    |
    */

    'font_height_ratio' => 1.1,

    /*
    |--------------------------------------------------------------------------
    | Embedded PHP Enabled
    |--------------------------------------------------------------------------
    |
    | If this setting is set to true then DOMPDF will automatically evaluate
    | embedded PHP contained within <script type="text/php"> ... </script> tags.
    |
    */

    'is_php_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Other Options
    |--------------------------------------------------------------------------
    |
    | Enable remote file access.
    |
    | If this setting is set to true, DOMPDF will access remote sites for
    | images and CSS files as required.
    |
    | ==== IMPORTANT ====
    | This can be a security risk, in particular in combination with isPhpEnabled and
    | allowing remote html code to be passed to $dompdf = new DOMPDF(); $dompdf->load_html(...);
    |
    | This allows anonymous users to download legally doubtful internet content which on
    | tracing back appears to being downloaded by your server, or allows malicious php code
    | in remote html pages to be executed by your server with your account privileges.
    | This setting may increase the risk of system exploit.
    |
    | Do not change this settings without understanding the consequences.
    |
    | Additional documentation is available on the dompdf wiki at:
    | https://github.com/dompdf/dompdf/wiki
    |
    */

    'is_remote_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Embedded Javascript Enabled
    |--------------------------------------------------------------------------
    |
    | Enable inline Javascript.
    |
    | If this setting is set to true then DOMPDF will automatically insert
    | JavaScript code contained within <script type="text/javascript"> ... </script> tags.
    |
    */

    'is_javascript_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | HTML5 Parser Enabled
    |--------------------------------------------------------------------------
    |
    | Enable the more-than-experimental HTML5 Lib parser.
    |
    */

    'is_html5_parser_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | Font Subsetting Enabled
    |--------------------------------------------------------------------------
    |
    | Whether to enable font subsetting or not.
    |
    */

    'is_font_subsetting_enabled' => false,

    /*
    |--------------------------------------------------------------------------
    | PDF Backend Renderer
    |--------------------------------------------------------------------------
    |
    | The PDF rendering backend to use.
    |
    | Valid settings are 'PDFLib', 'CPDF', 'GD', and 'auto'. 'auto' will
    | look for PDFLib and use it if found, or if not it will fall back on
    | CPDF. 'GD' renders PDFs to graphic files. {@link Dompdf\CanvasFactory}
    | ultimately determines which rendering class to instantiate
    | based on this setting.
    |
    */

    'pdf_backend' => 'CPDF',

    /*
    |--------------------------------------------------------------------------
    | PDFlib License Key
    |--------------------------------------------------------------------------
    |
    | If you are using a licensed, commercial version of PDFlib, specify
    | your license key here.  If you are using PDFlib-Lite or are evaluating
    | the commercial version of PDFlib, comment out this setting.
    |
    | http://www.pdflib.com
    |
    */

    'pdflib_license' => '',

    /*
    |--------------------------------------------------------------------------
    | Other Options
    |--------------------------------------------------------------------------
    |
    | These options are not yet documented by Dompdf.
    |
    */

    'debug_png' => false,

    'debug_keep_temp' => false,

    'debug_css' => false,

    'debug_layout' => false,

    'debug_layout_lines' => true,

    'debug_layout_blocks' => true,

    'debug_layout_inline' => true,

    'debug_layout_padding_box' => true,

    'log_output_file' => storage_path('pdf/fonts/log.htm'),
    
];
