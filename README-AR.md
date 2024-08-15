<div align="center">  
  <a href="README.md"   >   TR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/TR.png" alt="TR" height="20" /></a>  
  <a href="README-EN.md"> | EN <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/US.png" alt="EN" height="20" /></a>  
  <a href="README-AZ.md"> | AZ <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AZ.png" alt="AZ" height="20" /></a>  
  <a href="README-DE.md"> | DE <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/DE.png" alt="DE" height="20" /></a>  
  <a href="README-FR.md"> | FR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/FR.png" alt="FR" height="20" /></a>  
  <a href="README-AR.md"> | AR <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/AR.png" alt="AR" height="20" /></a>  
  <a href="README-NL.md"> | NL <img style="padding-top: 8px" src="https://raw.githubusercontent.com/yammadev/flag-icons/master/png/NL.png" alt="NL" height="20" /></a>  
</div>


# وحدة Domainnameapi

هذه الوحدة هي تكامل لـ 'domainnameapi.com' تم تطويرها لـ Blesta. (التحديث 15 أغسطس 2024)

## المتطلبات

- يجب أن يكون لديك إصدار Blesta 5.3 وما فوق.
- يجب أن يكون إصدار PHP 7.4 وما فوق.
- يجب تفعيل ملحق PHP Soap.

## التثبيت

انسخ الملفات التي قمت بتحميلها إلى blesta/components/modules/domainnameapi/
ثم قم بتفعيلها من خلال القائمة إعدادات > وحدات.


## الرموز المرجعية ورموز الأخطاء مع الشروحات

| الكود | الشرح                                           | التفاصيل                                                                                                                                                               |
|-------|-------------------------------------------------|------------------------------------------------------------------------------------------------------------------------------------------------------------------------|
| 1000  | Command completed successfully                  | تمت العملية بنجاح                                                                                                                                                      |
| 1001  | Command completed successfully; action pending. | تمت العملية بنجاح؛ إلا أن هناك إجراء قيد الانتظار.                                                                                                                     |
| 2003  | Required parameter missing                      | معلومة مفقودة مطلوبة. مثال؛ عدم تقديم معلومات الهاتف في بيانات الاتصال.                                                                                                |
| 2105  | Object is not eligible for renewal              | الكائن غير مؤهل للتجديد، تم قفل عمليات التحديث عليه. يجب ألا يكون حالة الكائن "clientupdateprohibited". قد تنجم هذه المشكلة عن حالات أخرى.                             |
| 2200  | Authentication error                            | خطأ في المصادقة، الرمز الأماني غير صحيح أو النطاق مسجل في شركة تسجيل أخرى.                                                                                             |
| 2302  | Object exists                                   | اسم النطاق أو معلومات خادم الأسماء موجودة بالفعل في قاعدة البيانات. لا يمكن تسجيلها.                                                                                   |
| 2303  | Object does not exist                           | اسم النطاق أو معلومات خادم الأسماء غير موجودة في قاعدة البيانات. يجب إنشاء تسجيل جديد.                                                                                 |
| 2304  | Object status prohibits operation               | حالة النطاق تمنع العملية. النطاق غير مؤهل للتحديث، تم قفل عمليات التحديث عليه. حالة النطاق لا يجب أن تكون "clientupdateprohibited". قد تنجم هذه المشكلة عن حالات أخرى. |
