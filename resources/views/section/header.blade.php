<div class="topmenu">
    <div class="container">
        <form class="searchform cf">
            <input type="text" placeholder="جستجو کنید.">
            <button type="submit">جستجو</button>
        </form>

        <a href="#" title="خانه"><i class="fa fa-home"></i></a>
        <a href="#" title="ارتباط با ما"><i class="fa fa-phone"></i></a>
        @if(! auth()->check())
            <a href="/login" title="ورود"><i class="fa fa-male"></i></a>
        @else
            <a href="/logout" title="خروج"><i class="fa fa-sign-out"></i></a>
        @endif
        <img src="/images/molumen-phone-icon.png"/>
        <div class="left">
            <h1>ارتباط با مشتریان</h1>
            <h2>021xxxx</h2>
        </div>
    </div>
    <div class="clear"></div>
</div>


<div class="logoarea">
    <div class="container">
        <img src="/images/Untitled-1.jpg"/>

        <ul>
            <li><a href="#">صفحه اصلی</a></li>
            <li><a href="#">محصولات بیمه ای</a>
                <ul>
                    <li><a href="#">بیمه اشخاص</a></li>
                    <li><a href="#">بیمه مسئولیت</a></li>
                    <li><a href="#">بیمه مهندسی و خاص</a></li>
                    <li><a href="#">بیمه بدنه</a></li>
                    <li><a href="#">بیمه شخص ثالث</a></li>
                    <li><a href="#">بیمه آتش سوزی</a></li>
                </ul>
            </li>
            <li><a href="#">شبکه فروش</a>
                <ul>
                    <li><a href="#">نمایندگی های فعال</a></li>
                    <li><a href="#">نمایندگی های غیر فعال</a></li>
                </ul>
            </li>
            <li><a href="#">درباره ما</a></li>
            <li><a href="#">ارتباط با ما</a></li>
            <li style="margin-top: 10px;"><a href="/addInsurance" class="addInsurance" style="background-color: #f1f1f1;padding: 10px !important;margin-top: px;transition: .4s all">اضافه کردن بیمه</a></li>
            @if(! auth()->check())
                <li class="float-left"><a href="/register">ثبت نام</a></li>
                <li class="float-left" style="margin-top: 20px;color: #cccccc">|</li>
                <li class="float-left"><a href="/login">ورود</a></li>
            @else
                <li class="float-left"><a href="/logout">خروج</a></li>
                @if(auth()->user()->level == 'admin')
                    <li><a href="/panel">ورود به پنل مدیریت</a></li>
                @endif
            @endif
        </ul>

    </div>

    <div class="clear"></div>
</div>
<div class="clear"></div>