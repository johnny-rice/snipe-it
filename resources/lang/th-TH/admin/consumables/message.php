<?php

return array(

    'invalid_category_type' => 'The category must be a consumable category.',
    'does_not_exist' => 'ไม่มีรายการวัสดุสิ้นเปลืองนี้',

    'create' => array(
        'error'   => 'ยังไม่ได้สร้างวัสดุสิ้นเปลือง กรุณาลองใหม่อีกครั้ง',
        'success' => 'สร้างวัสดุสิ้นเปลืองเรียบร้อยแล้ว'
    ),

    'update' => array(
        'error'   => 'ยังไม่ได้ปรับปรุงวัสดุสิ้นเปลือง กรุณาลองใหม่อีกครั้ง',
        'success' => 'ปรับปรุงวัสดุสิ้นเปลืองเรียบร้อยแล้ว.'
    ),

    'delete' => array(
        'confirm'   => 'คุณแน่ใจหรือไม่ว่าต้องการลบข้อมูลการสิ้นเปลืองนี้',
        'error'   => 'มีปัญหาระหว่างการลบวัสดุสิ้นเปลือง กรุณาลองอีกครั้ง',
        'success' => 'การสิ้นเปลืองถูกลบเรียบร้อยแล้ว'
    ),

     'checkout' => array(
        'error'   		=> 'วัสดุสิ้นเปลืองยังไม่ถูกเช็คเอ้าท์ กรุณาลองใหม่อีกครั้ง',
        'success' 		=> 'เช็คเอ้าท์วัสดุสิ้นเปลืองแล้ว',
        'user_does_not_exist' => 'ผู้ใช้งานไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง.',
         'unavailable'      => 'There are not enough consumables for this checkout. Please check the quantity left. ',
    ),

    'checkin' => array(
        'error'   		=> 'วัสดุสิ้นเปลืองยังไม่ถูกเช็คอิน กรุณาลองใหม่อีกครั้ง',
        'success' 		=> 'เช็คอินวัสดุสิ้นเปลืองแล้ว.',
        'user_does_not_exist' => 'ผู้ใช้งานไม่ถูกต้อง กรุณาลองใหม่อีกครั้ง.'
    )


);
