const registrationForm = document.getElementById("registrationForm");
const nameField = document.getElementById("nameField");
const email = document.getElementById("email");
const password = document.getElementById("password");
const confirmPassword = document.getElementById("conf-password");

    // EventListener خاص بعملية انشاء حساب جديد
    registrationForm.addEventListener('submit', e => {
        e.preventDefault();

        validateInputs();
    });

    
// تعريف دالة تضع رسالة خطأ لعنصر إدخال معين. تأخذ الدالة معاملين: element و message
//
//     تحصل على العنصر الأب لعنصر الإدخال وتسنده إلى المتغير inputControl.
//     تجد العنصر الابن لـ inputControl الذي له اسم الفئة error وتسنده إلى المتغير errorDisplay.
//     تضبط خاصية innerText لـ errorDisplay بقيمة message.
//     تضيف اسم الفئة error إلى inputControl وتزيل اسم الفئة success.
//     يمكن استخدام هذه الدالة للتحقق من صحة النموذج، لعرض رسالة خطأ عندما تكون قيمة الإدخال غير صالحة
    const setError = (element, message) => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = message;
        inputControl.classList.add('error');
        inputControl.classList.remove('success');
    }

    const setSuccess = element => {
        const inputControl = element.parentElement;
        const errorDisplay = inputControl.querySelector('.error');

        errorDisplay.innerText = '';
        inputControl.classList.add('success');
        inputControl.classList.remove('error');
    }


// تتحقق ما إذا كان عنوان البريد الإلكتروني المعطى صالحا. تأخذ الدالة معامل واحد: email. تقوم الدالة بالخطوات التالية:
//
//     (re) يطابق النمط لعنوان بريد إلكتروني صالح.
//     تحول معامل البريد الإلكتروني إلى سلسلة حروف صغيرة وتختبرها ضد التعبير المنتظم (re) باستخدام test().
//      ترجع قيمة منطقية (صحيح أو خطأ) تشير إلى ما إذا كان البريد الإلكتروني صالحا أم لا.
    const isValidEmail = email => {
        const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        return re.test(String(email).toLowerCase());
    }

    const validateInputs = () => {
        const nameFieldValue = nameField.value.trim();
        const emailValue = email.value.trim();
        const passwordValue = password.value.trim();
        const confirmPasswordValue = confirmPassword.value.trim();

        if (nameFieldValue === ''){
            setError(nameField, 'الأسم مطلوب');
        }else {
            setSuccess(nameField);
        }

        if (emailValue === '') {
            setError(email, 'البريد الالكتروني مطلوب');
        } else if (!isValidEmail(emailValue)) {
            setError(email, 'يرجى كتابة بريد الكتروني صحيح');
        } else {
            setSuccess(email);
        }

        if (passwordValue === '') {
            setError(password, 'كلمة المرور مطلوبة');
        } else if (passwordValue.length < 8) {
            setError(password, 'كلمة المرور يجب ان لا تقل عن 8 خانات')
        } else {
            setSuccess(password);
        }

        if (confirmPasswordValue === '') {
            setError(confirmPassword, 'يرجى تأكيد كلمة المرور');
        } else if (confirmPasswordValue !== passwordValue) {
            setError(confirmPassword, "كلمات المرور غير متوافقة");
        } else {
            setSuccess(confirmPassword);
        }
    };