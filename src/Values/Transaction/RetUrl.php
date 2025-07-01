<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\StringValue;

/**
 * 加盟店戻りURL
 *
 * 3Dセキュア認証後にお戻しする加盟店様側のURLになります。
 * 通常は必ず指定してください。モバイルアプリSDKを利用する場合は設定不要です。
 * URLに遷移するHTTPメソッド(GET/POST)は、CallbackTypeパラメータで切り替えることができます。
 */
class RetUrl extends StringValue
{
    protected $maxLength = 256;

}
