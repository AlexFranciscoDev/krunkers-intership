<?php

namespace App\Exceptions;

use Exception;

class UploadFileException extends Exception
{
    public function message() {
        return "No se ha subido una imagen";
    }
}
