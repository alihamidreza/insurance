@extends('master')

@section('content')

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

            <div class="carousel-item active">
                <img class="d-block w-100" src="/images/Untitled-3.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>نوید بخش آینده ای روشن با بیمه امن</h3>
                        <p>به فرزندان خود بیاموزیم</p>
                        <p><a class="btn btn-lg" href="#" role="button">اطلاعات بیشتر</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="/images/Untitled-5.jpg">
                <div class="container">
                    <div class="carousel-caption">
                        <h3>بیمه عمر </h3>
                        <p>با ما یک عمر بیمه باشید.</p>
                        <p><a class="btn btn-lg" href="#" role="button">بیمه ها</a></p>
                    </div>
                </div>
            </div>
            <div class="carousel-item ">
                <img class="d-block w-100" src="/images/Untitled-4.jpg">
                <div class="container">
                    <div class="carousel-caption text-right">
                        <h3>خرید و تمدید آنلاین بیمه </h3>
                        <p>کار های خود را به صورت آنلاین و بدون صرف هزینه زمانی انجام دهید.</p>
                        <p><a class="btn btn-lg" href="#" role="button">تمدید بیمه</a></p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <div class="clear"></div>
    <br><br>
    <div class="container">
        <div class="text-box">
            <div class="media">
                <img class="align-self-center mr-3" src="/images/Untitled-1.jpg" alt="Generic placeholder image">
                <div class="media-body">
                    <h5 class="mt-0">درباره بیمه امن</h5>
                    <p>لورم ایپسوم متن ساختگی با تولید سادگی نامفهوم از صنعت چاپ و با استفاده از طراحان گرافیک است. چاپگرها
                        و متون بلکه روزنامه و مجله در ستون و سطرآنچنان که لازم است و برای شرایط فعلی تکنولوژی مورد نیاز و
                        کاربردهای متنوع با هدف بهبود ابزارهای کاربردی می باشد. کتابهای زیادی در شصت و سه درصد گذشته، حال و
                        آینده شناخت فراوان جامعه و متخصصان را می طلبد تا با نرم افزارها شناخت بیشتری را برای طراحان رایانه
                        ای علی الخصوص طراحان خلاقی و فرهنگ پیشرو در زبان فارسی ایجاد کرد. در این صورت می توان امید داشت که
                        تمام و دشواری موجود در ارائه راهکارها و شرایط سخت تایپ به پایان رسد وزمان مورد نیاز شامل حروفچینی
                        دستاوردهای اصلی و جوابگوی سوالات پیوسته اهل دنیای موجود طراحی اساسا مورد استفاده قرار گیرد.</p>

                </div>
            </div>
        </div>
    </div>
    <br><br>

    <div class="container-fluid card-box">
        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/badane.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">بیمه بدنه</h5>
                <p class="card-text">بیمه بدنه یکی از اقسام بیمه خودرو است که خسارات وارد شده به اتومبیل را جبران می‌نماید.
                    خرید این بیمه مانند بیمه شخص ثالث اجباری نیست و صاحبان خودرو تنها در صورت تمایل اقدام به خرید بیمه‌نامه
                    و پوشش‌های اضافی آن خواهند کرد. </p>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/shakhs-sales.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">بیمه شخص ثالث</h5>
                <p class="card-text">اگر شخصی با اتومبیل خود با یک انسان تصادف کند، صدمات وارده به شخص باید جبران گردد.
                    این خسارت ها با بیمه ی مسئولیت مدنی راننده در قبال اشخاص ثالث قابل جبران است،که این عنوان در طی گذشت
                    سالها</p>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/atash-soozi.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">بیمه آتش سوزی</h5>
                <p class="card-text">بیمه آتش سوزی پوششی‌ است‌ که‌ خسارات‌ و زیانهای‌ ناشی‌ از وقوع‌ آتش‌ سوزی‌ که‌ به‌
                    اموال‌ مورد بیمه‌ وارد می‌ شود را بر اساس‌ شرایط‌ مندرج‌ در بیمه‌نامه‌ جبران‌ می‌کند.

                    انواع‌ بیمه‌نامه‌های‌ آتش‌ سوزی‌‌ :

                    1- بیمه واحدهای صنعتی</p>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>
        </div>

        <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="/images/masooliat.jpg" alt="Card image cap">
            <div class="card-body">
                <h5 class="card-title">بیمه مسئولیت</h5>
                <p class="card-text">بر اساس‌ قانون‌ مسئولیت‌ مدنی‌ ایران‌، کلیه‌افراد جامعه‌ اعم‌ ازاشخاص‌ حقیقی‌ وحقوقی‌
                    در قبال‌ زیان‌ و صدمات‌ وارده‌ به‌ دیگران‌ مسئول‌ می‌ باشند و نسبت‌ به‌جبران‌ آن‌ باید اقدام‌ نمایند
                    بیمه‌ مسئولیت‌ مدنی‌ متداول‌ بر پایه‌ مسئولیت‌شبه‌ جرمی‌ یا شبه‌ عمدی‌ است‌ </p>
                <a href="#" class="btn">اطلاعات بیشتر</a>
            </div>
        </div>
    </div>

@endsection