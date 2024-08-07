<?php

return array(
    'about_licenses_title'      => 'حول التراخيص',
    'about_licenses'            => 'تستخدم التراخيص لتتبع البرمجيات. كل لديه عدد محدد من المقاعد التي يمكن اخراجها للأفراد',
    'checkin'  					=> 'ادخال مقعد الترخيص',
    'checkout_history'  		=> 'أرشيف الاخراج',
    'checkout'  				=> 'اخراج مقعد ترخيص',
    'edit'  					=> 'تعديل الترخيص',
    'filetype_info'				=> 'انواع صيغ الملفات المسوح بها هي png, gif, jpg, jpeg, doc, docx, pdf, txt, zip, و rar.',
    'clone'  					=> 'استنساخ الترخيص',
    'history_for'  				=> 'الأرشيف ل ',
    'in_out'  					=> 'ادخال \\ اخراج',
    'info'  					=> 'معلومات الترخيص',
    'license_seats'  			=> 'مقاعد الترخيص',
    'seat'  					=> 'مقعد',
    'seat_count'  				=> 'Seat :count',
    'seats'  					=> 'مقاعد',
    'software_licenses'  		=> 'تراخيص البرامج',
    'user'  					=> 'مستخدم',
    'view'  					=> 'عرض الترخيص',
    'delete_disabled'           => 'لا يمكن حذف هذا الترخيص حتى الآن لأن بعض المقاعد لا تزال قيد التحقق.',
    'bulk'                      =>
        [
            'checkin_all'           => [
                'button'            => 'ادخل جميع المقاعد',
                'modal'             => 'This action will checkin one seat. | This action will checkin all :checkedout_seats_count seats for this license.',
                'enabled_tooltip'   => 'تسجيل جميع مقاعد هذا الترخيص من كل من المستخدمين والأصول',
                'disabled_tooltip'  => 'تم تعطيل هذا لأنه لا توجد مقاعد حاليا',
                'disabled_tooltip_reassignable'  => 'هذا معطل لأن الترخيص غير قابل لإعادة التعيين',
                'success'           => 'تم تسجيل الترخيص بنجاح! <unk> تم تسجيل جميع التراخيص بنجاح!',
                'log_msg'           => 'Checked in via bulk license checkin in license GUI',
            ],

            'checkout_all'              => [
                'button'                => 'إخراج جميع المقاعد',
                'modal'                 => 'سيؤدي هذا الإجراء إلى دفع مقعد واحد إلى أول مستخدم متاح. <unk> سيؤدي هذا الإجراء إلى دفع جميع مقاعد :available_seats_count إلى أول مستخدمين متاحين. يعتبر المستخدم متوفراً لهذا المقعد إذا لم يكن لديك بالفعل هذا الترخيص الذي تم إخراجه إليهم. ويتم تمكين خاصية ترخيص التعيين التلقائي على حساب المستخدم الخاص بهم.',
                'enabled_tooltip'   => 'تسجيل جميع المقاعد (أو أكبر عدد متاح) لجميع المستخدمين',
                'disabled_tooltip'  => 'تم تعطيل هذا لأنه لا توجد مقاعد متوفرة حاليا',
                'success'           => 'تم تسجيل الترخيص بنجاح! <unk> :count تراخيص تم مراجعتها بنجاح!',
                'error_no_seats'    => 'لا توجد مقاعد متبقية لهذا الترخيص.',
                'warn_not_enough_seats'    => ':count من المستخدمين تم تعيين هذا الترخيص، ولكن نفد مقاعد التراخيص المتاحة.',
                'warn_no_avail_users'    => 'لا شيء يمكن فعله. لا يوجد مستخدمون لا يملكون بالفعل هذا الترخيص تم تعيينهم لهم.',
                'log_msg'           => 'تم الخروج عن طريق سحب الترخيص بالجملة في واجهة المستخدم المرخص',


            ],
    ],

    'below_threshold' => 'هناك فقط :remaining_count مقاعد متبقية لهذا الترخيص مع حد أدنى من :min_amt. قد ترغب في النظر في شراء المزيد من المقاعد.',
    'below_threshold_short' => 'هذا العنصر أقل من الحد الأدنى للكمية المطلوبة.',
);
