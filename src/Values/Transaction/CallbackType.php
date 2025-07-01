<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\Transaction;

use msng\GmoPaymentGateway\Values\EnumValue;

/**
 * コールバック方法
 *
 * 加盟店様が指定した戻りURLに当社から戻す方式を指定します。
 * 通常は「1」(POST方式)または「3」(GET方式)を設定してください。モバイルアプリSDKを利用する場合は設定不要です。
 *
 * 1：通常（POST方式）（デフォルト）
 * 2：直接受ける
 * 3：通常（GET方式）
 *
 * 「1」または「3」の場合、認証後のコールバック一回のみで済みます。(決済フローの「通常コールバック方式」参照)
 * 「2」を指定すると認証初期化後、チャレンジ後の最大二回のコールバックが発生し、加えて以下のAPIを呼び出す必要があります。こちらの方式では加盟店様側で認証結果を取得できるので認証エラーの場合はオーソリを行わないようにする等、決済フローの制御が可能になります。(決済フローの「都度加盟店コールバック方式」参照)
 */
class CallbackType extends EnumValue
{
    // 通常（POST方式）（デフォルト）
    const POST = '1';

    // 直接受ける
    const DIRECT = '2';

    // 通常（GET方式）
    const GET = '3';
}
