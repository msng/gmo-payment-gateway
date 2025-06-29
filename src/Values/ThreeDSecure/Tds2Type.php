<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\ThreeDSecure;

use msng\GmoPaymentGateway\Values\EnumValue;

/**
 * 3DS2.0未対応時取り扱い
 *
 * 仕向先カード会社が3DS2.0に未対応な場合の後続処理設定
 *
 * 1：3DS1.0での認証を実施（デフォルト）
 * 2：エラーとして処理終了
 * 3：通常オーソリを実施
 *
 * 3DS1.0認証サポート終了のため、1以外を指定してください。
 * 1を指定した場合、ショップの「3DS1.0認証（サポート終了）の取り扱い」の設定に従います。
 */
class Tds2Type extends EnumValue
{
    // 3DS1.0での認証を実施（デフォルト）
    const TDS_1_0 = '1';

    // エラーとして処理終了
    const ERROR = '2';

    // 通常オーソリを実施
    const AUTH = '3';
}
