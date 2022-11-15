function Validator(options) {
    var SelectorRule = {};

    function validate(inputElement, rule) {
        var errorMessage;
        var errorElement = inputElement.parentElement.querySelector(options.Errorselector);
        var rules = SelectorRule[rule.selector];
        for (var index = 0; index < rules.length; index++) {
            errorMessage = rules[index](inputElement.value);
            if (errorMessage) break;
        }
        if (errorMessage) {

            errorElement.innerText = errorMessage;
            inputElement.parentElement.classList.add('invalid');

        }
        else {
            errorElement.innerText = '';
            inputElement.parentElement.classList.remove('invalid');

        }
        return !errorMessage;
    }
    var formElement = document.querySelector(options.form);
    if (formElement) {
        formElement.onsubmit = function (e) {
            var isFormValid = true;
            e.preventDefault();
            options.rules.forEach(function (rule) {
                var inputElement = formElement.querySelector(rule.selector);
                var isValid = validate(inputElement, rule);

                if (!isValid) {
                    isFormValid = false;
                }


            });
            if (isFormValid) {
                formElement.submit();

            }



        }


        options.rules.forEach(function (rule) {
            var inputElement = formElement.querySelector(rule.selector);

            if (Array.isArray(SelectorRule[rule.selector])) {
                SelectorRule[rule.selector].push(rule.test);
            }
            else {
                SelectorRule[rule.selector] = [rule.test];
            }

            if (inputElement) {
                inputElement.onblur = function () {
                    validate(inputElement, rule);
                }
                inputElement.oninput = function () {
                    var errorElement = inputElement.parentElement.querySelector(options.Errorselector);
                    errorElement.innerText = '';
                    inputElement.parentElement.classList.remove('invalid');
                }
            }

        })
    }
}
Validator.isRequired = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            return value.trim() ? undefined : message || 'Trường này không được bỏ trống';
        }
    };
}
Validator.isEmail = function (selector, message) {
    return {
        selector: selector,
        test: function (value) {
            var regex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
            return regex.test(value) ? undefined : message || 'Đây không phải email';
        }
    };
}
Validator.isMinLength = function (selector, min, message) {
    return {
        selector: selector,
        test: function (value) {

            return (value.length >= min) ? undefined : message || 'Độ dài của bạn không đủ';
        }
    };
}
Validator.isConfirm = function (selector, getConfirmValue, message) {
    return {
        selector: selector,
        test: function (value) {

            return value === getConfirmValue() ? undefined : message || 'Mật khẩu không khớp';
        }
    };
}