<?php

declare(strict_types=1);

namespace msng\GmoPaymentGateway\Values\ThreeDSecure;

/**
 * 決済時3DS必須タイプ
 *
 * 0：契約内容に従う（デフォルト）
 * 加盟店様の【3D必須化】のご契約状況に従い、「3DS認証必須」または「3DS認証必須ではない」が指定されます。
 *
 * 1：3DS認証必須
 * ・3DSを利用しない決済（3DS利用フラグ=2でない決済）はすべてエラーになります。
 * ・3Dセキュア認証時、お客様がご利用のクレジットカード会社およびお客様側で3Dセキュア設定が未登録と判定された場合、決済はエラーになります。
 *
 * 2：3DS認証必須ではない
 * ・3DSを利用しない決済（3DS利用フラグ=2でない決済）が可能です。
 * ・お客様側で3Dセキュア設定が未登録と判定された場合、3DS認証成功とみなされます。
 */
class TdRequired
{
    // 契約内容に従う（デフォルト）
    const FOLLOW_CONTRACT = '0';

    // 3DS認証必須
    const REQUIRED = '1';

    // 3DS認証必須ではない
    const NOT_REQUIRED = '2';
}
