<?php

namespace Yeejiawei\LaravelQrcode;

require  __DIR__ . '/../libs/qrlib.php';

use Yeejiawei\LaravelQrcode\Enums\ErrorCorrectionLevel;

class LaravelQrcode
{
    protected string $text;

    protected ErrorCorrectionLevel $errorCorrectionLevel = ErrorCorrectionLevel::QR_ECLEVEL_M;

    protected int $size = 20;

    protected int $margin = 1;

    public static function create(string $text, int $size = null)
    {
        $self = new self();
        $self->text = $text;

        if (!is_null($size)) {
            $self->size = $size;
        }

        return $self;
    }

    public function setErrorCorrectionLevel(ErrorCorrectionLevel $level)
    {
        $this->errorCorrectionLevel = $level;

        return $this;
    }

    public function setSize(int $size)
    {
        $this->size = $size;

        return $this;
    }

    public function setMargin(int $margin)
    {
        $this->margin = $margin;

        return $this;
    }

    public function png()
    {
    }

    public function generate(string|bool $save = false)
    {
        return \QRcode::png($this->text, $save, $this->errorCorrectionLevel->value, $this->size, $this->margin);
    }

    public function stream()
    {
        $this->generate();
    }

    public function save($path)
    {
        return $this->generate($path);
    }
}
