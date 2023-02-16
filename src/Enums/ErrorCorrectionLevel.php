<?php


namespace Yeejiawei\LaravelQrcode\Enums;

enum ErrorCorrectionLevel: string
{
    case QR_ECLEVEL_L = '0';
    case QR_ECLEVEL_M = '1';
    case QR_ECLEVEL_Q = '2';
    case QR_ECLEVEL_H = '3';
}
