# PDF

A [Dompdf](https://github.com/dompdf/dompdf) Wrapper for Laravel 5.

## Installation

Insert into your `composer.json` file:

```json
"stevebauman/pdf": "1.0.*"
```

Then run `composer update`.

Next, add the service provider to your `config/app.php` file:

```php
Stevebauman\Pdf\PdfServiceProvider:class,
```

Run `php artisan vendor:publish --tag="pdf"`

Inside the published pdf config file (`config/pdf.php`), there are a couple paths you will
need to make sure exist before you generate PDF's. You will most likely need to create these
folders manually, or you will receive exceptions upon generation.

```
'font_dir' => storage_path('pdf/fonts'),

'font_cache' => storage_path('pdf/fonts'),

'temp_dir' => storage_path('pdf/tmp'),
```

## Usage

Instantiate using the facade (`Stevebauman\Pdf\Facades\Pdf`), or using `app('pdf')`:

```
use Stevebauman\Pdf\Facades\Pdf;

class PdfController extends Conrtroller
{
    public function index()
    {
        $pdf = app('pdf');

        // Or...

        $pdf = Pdf::getFacadeRoot(); // Returns a new instance of Dompdf.

        $data = ['...'];

        $html = view('pdf.index', compact('data'))->render();

        $pdf->loadHtml($render);

        // Set the PDF paper type.
        $pdf->setPaper('A4', 'landscape');

        // Render the specified HTML.
        $pdf->render();

        // Output the generated PDF to Browser.
        $pdf->stream();
    }
}
```

For detailed usage, please visit the [Dompdf Repository](https://github.com/dompdf/dompdf).
