<?php include "./navBar.php" ?>

<div class="reg-wrapper">
        <div class="reg-form">
            <h1 class="reg-heading">سجل كفرد</h1>
            <form>
                <div class="input-box">
                    <input type="text" class="reg-input" placeholder="الاسم الكامل">
                </div>
                <div class="input-box">
                    <input type="tel" class="reg-input" placeholder="رقم الجوال">
                </div>
                <div class="input-box">
                    <input type="email" class="reg-input" placeholder="البريد الالكتروني">
                </div>
                <div class="input-box">
                    <input type="password" class="reg-input" placeholder="كلمة المرور">
                </div>
                <div class="input-box">
                    <input type="password" class="reg-input" placeholder="تأكيد كلمة المرور">
                </div>
                <button type="submit" class="reg-submit">التالي</button>
                <div class="existing-account">
                    <a href="#">لديك حساب بالفعل؟</a>
                </div>
            </form>
        </div>
        <div class="reg-image">
            <img src="../page-form-thumb.webp" alt="Registration illustration">
        </div>
    </div>

<?php include "./footer.php" ?>