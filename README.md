# httpmock.php

Quick and dirty HTTP response mocker based on plain text files written in PHP.

## Installation

1. Copy mockhttp.php to any PHP-enabled web server folder
2. Set up URL rewriting. Example .htaccess file for Apache is included.
3. Crear .txt files in the same folder or in subfolders and you're good to go

## Usage

If your mock file is at project1/mock1.txt you should access it as:

http://yourserver.com/project1/mock1

If you're using a subfolder instead of the document root for serving your mocks:

http://yourserver.com/path/to/subfolder/project1/mock1

## Testing with cURL

Here is a CLI example using cURL:

```
$ curl -vv http://yourserver.com/project1/mock1
```

(c) Antonio Ognio <antonio@ognio.com>
