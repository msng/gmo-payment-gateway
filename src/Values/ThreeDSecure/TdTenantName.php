<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\ThreeDSecure;

use msng\GmoPaymentGateway\Values\StringValue;

/**
 * 3DS表示店舗名
 *
 * 表示店舗名をEUC-JPでBASE64エンコーディングした値を設定
 * 25Byte以内である必要があります。
 * 英数半角に設定することを推奨します。
 * 事前にテスト環境で検証してください。
 * デフォルト値は管理画面から設定できます。
 * 以下の場合はショップ名を使用します。
 * ・パラメータ未指定かつデフォルト値未設定の場合
 * ・3DS表示店舗名のBASE64エンコードが不正な場合
 *
 * 注意
 * ※未設定の場合、3DS表示店舗名としてショップ名が使用されます。必要に応じて3DS表示店舗名を設定してください。
 * ※以下の文字は設定しないでください。
 * ・空白文字のみ
 * ・改行文字
 */
class TdTenantName extends StringValue
{
    protected $maxLength = 25;

    public function __construct($value = null)
    {
        $value = $this->convertToEucJpBase64InMaxLength($value);

        parent::__construct($value);
    }

    private function convertToEucJpBase64InMaxLength($value): string
    {
        do {
            $converted = mb_convert_encoding($value, 'EUC-JP');
            $converted = base64_encode($converted);
        } while (strlen($converted) > $this->maxLength);

        return $converted;
    }

}
