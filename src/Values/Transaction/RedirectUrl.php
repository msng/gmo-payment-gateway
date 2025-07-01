<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\StringValue;

/**
 * 3DSサーバーへのリダイレクトURL
 *
 * 3DS2.0認証初期化へのURL(※１)
 *
 * リダイレクト先ドメイン
 * テスト環境：pt01.mul-pay.jp
 * 本番環境：manage.tds2gw.gmopg.jp
 *
 * ※１：値に"&"や"="が含まれます。idPass版をご利用の場合は文字列のパースにご注意ください。
 * ※２：レスポンスパラメータの順序は固定ですのでご注意ください。
 */
class RedirectUrl extends StringValue
{
}
