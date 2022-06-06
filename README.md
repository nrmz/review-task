<p align="center"><a href="https://digikala.ir/" target="_blank">
<img src="https://avatars.githubusercontent.com/u/28993615?s=280&v=4" width="400"></a></p>

<p align="center">

</p>

## درباره مساله

#طراحی و پیاده سازی سیستم نظرات محصولات

<div lang="fa" dir="rtl">

- فرض کنید که ما محصولاتی ‎(Product)‏ داریم که برای مشتریان ‎(User)‏ نمایش داده می شوند۔ این محصولات مربوط به شرکت های ‎(Provider)‏ مختلفی هستند۔ مدیر محصولات می تواند هر کدام ازمحصولات را در معرض نمایش مشتریان قرار دهد، برای آن ها امکان ثبت نظر ‎(Comment)‏ و امتیاز (‎Vote)‏ | به صورت جداگانه فعال یا غیرفعال نمایند۔ همچنین امکان انتخاب اینکه نظر و امتیاز برای این محصولات به صورت عمومی برای تمامی بازدیدکنندگان فعال باشد یا فقط خریداران بتوانند پس از تایید خرید نظر ثبت کنند، برای مدیر محصولات باید امکان پذیر باشد۔

</div>

#نیازمندی های سیستم

<div lang="fa" dir="rtl">

-  کاربر وارد صفحه محصولات می شود۔ سمت کلاینت این صفحه یک اپلیکیشن ‎SPA‏ است که دیتای لازم برای رندر شدن صفحه را توسط ‎api‏ هایی از بک اند دریافت می کند۔ قیمت دهی محصولات توسط سرویس استعلام ‎(Enquiry System)‏ انجام می شود و لازم است اطلاعات اینکه هر یک از محصولات نمایش داده شوند یا خیر و امکان ثبت نظر و امتیاز برای آن ها فراهم هست یا خیر از سرویس ‎Review‏ دریافت شود۔
   هم چنین سه نظر آخر روی هر محصول و میانگین کل امتیازات و تعداد کل نظرات داده شده به هر محصول نیز. به کلاینت ارسال می شود تا صفحه را برای کاربر رندر نماید۔

- در صورتی که امکان ثبت نظر و امتیاز برای کاربر فراهم باشد، مشتری می تواند این کار را انجام دهد و نظر و امتیاز او در وضعیت تایید نشده ثبت می گردد۔ مدیر محصول می تواند نظرات را مشاهده نماید و نظرات و امتیازات تایید نشده را رد یا تایید کند۔ صرفا نظرات و امتیازات تایید شده در میانگین و تعداد نظرات آن محصول تاثیرگذار هستند۔

</div>

# خروجی مورد نظر
<div lang="fa" dir="rtl">
- الف - طراحی ساختار ¡طد هایی که از سمت کلاینت فراخوانی می شوند را انجام دهید۔ لطفا ذکر کنید که
برای رندر شدن صفحه با توجه به توضیحات چند ‎api‏ با چه ورودی هایی ‎call‏ شوند و چه خروجی هایی داشته
باشند۔ همچنین چه سرویس یا سرویس هایی و چگونه در بک اند این ‎api‏ را پاسخ می دهد۔ (در این بخش
طراحی و معماری سرویس و ¡م ة ها مدنظر است)
</div>

<div lang="fa" dir="rtl">
<span style="color: yellow">
خروجی مدنظر برای دریافت اطلاعات در دایرکتوری result/A در پست من قابل دسترس است
</span>
</div>


<div lang="fa" dir="rtl">
- پ - با استفاده از ‎PHP Laravel‏ و بدون استفاده از ابزارهای تولید اپلیکیشن مانند ‎«CrestApps‏ سرویس
‎Review‏ را صرفا در سطح بک اند (بدون فرانت اند) پیاده سازی کنید۔ برای خروجی کار ‎ERD‏ سرویس،
سورس کد و ‎API Doc‏ (ترجیحا ‎(Postman‏ را ارسال نمایید۔ توجه کنید که سرویس، توضیحات ذکر شده
را پوشش دهد و نیازی به پیاده سازی سرویس های دیگر مانند سرویس ‎Enquiry‏ نقش های کاربران و
‎authentication‏ آن ها نیست. (در این بخش کیفیت ساختار پروژه کدنویسی تمیز و کوئری های بهینه مدنظر
است)
</div>

##    نصب و راه‌اندازی

<div lang="fa" dir="rtl">
 - تنظیمات دیتابیس فایل env قرار دارد
</div>

‍‍‍‍‍‍‍‍‍‍‍‍‍```DB_CONNECTION=mysql```

```DB_HOST=mysql```

```DB_PORT=3306```

```DB_DATABASE=homestead```

```DB_USERNAME=homestead```

```DB_PASSWORD=secret```

<div lang="fa" dir="rtl">
 - این پارامتر هم محدودیت تعداد آخرین کامنت ها را تنظیم می کند که به صورت پیش فرض 3 در نظر گرفته شده است
</div>

```show_review_count=3```

<div lang="fa" dir="rtl">
- برای اجرای برنامه نیاز است ابتدا دستور زیر  را اجرا تا پکیج های لازم نصب شود
</div>

```docker-compose run --rm composer install```

<div lang="fa" dir="rtl">
- سپس با دستور زیر برنامه اجرا می شود و در <kbd>http://localhost:8000</kbd>  دسترس خواهد بود
</div>

```docker-compose up -d server```

<div lang="fa" dir="rtl">
- با اجرای دستور زیر علاوه بر ساخت جداول دیتابیس؛ داده های تصادفی هم برای تست ثبت خواهد شد
</div>

```docker-compose run --rm artisan migrate --seed```

<div lang="fa" dir="rtl">
- برای احراز هویت کاربران از passport استفاده شده است و نیاز است با دستور زیر نصب و راه اندازی شود

<span style="color: yellow">لطفا بعد از هر بار اجرای دستور migrate، مجددا دستور زیر اجرا شود</span>
</div>

```docker-compose run --rm artisan passport:install```

<div lang="fa" dir="rtl">
- برای دسترسی به نمودار erd دیتابیس از آدرس زیر استفاده نمایید

<span style="color: yellow">همینطور در دایرکتوری <kbd>./src/docs/erd</kbd> نیز فایل استاتیک آن در دسترس است</span>
</div>

```http://localhost:8000/erd```

<div lang="fa" dir="rtl">
- همچنین برای ساخت مجدد آن می توانید از دستور زیر استفاده نمایید
</div>

```docker-compose run --rm artisan erd:generate```

<div lang="fa" dir="rtl">
- با استفاده از اطلاعات زیر می توانید با متد login در پست من وارد شوید
</div>

```"email": "test@example.com"```

```"password": "password"```

## پست من

<div lang="fa" dir="rtl">
- در لینک زیر لیست Api و نمونه request & response در دسترس است
</div>

[Review Task Postman](https://www.getpostman.com/collections/ffba302df481b1b1be00).

<div lang="fa" dir="rtl">
- لطفا پارامتر token و baseUrl در environment postman تعریف کنید

- به محض لاگین یا رجیستر به صورت اتوماتیک token از سمت  سرور دریافت خواهد شد ونیازی به مقداردهی دستی ندارد
</div>

baseUrl: http://localhost:8000/api

