function validateForm() {
    let currentPassword = "your_current_password";
    let oldPassword = document.getElementById('oldPassword').value;
    let newPassword = document.getElementById('newPassword').value;
    let submitPassword = document.getElementById('submitPassword').value;

    let oldPasswordError = document.getElementById('oldPasswordError');
    let newPasswordError = document.getElementById('newPasswordError');
    let submitPasswordError = document.getElementById('submitPasswordError');

    // エラーメッセージリセット
    oldPasswordError.textContent = "";
    newPasswordError.textContent = "";
    submitPasswordError.textContent = "";

    let hasError = false;

    // 旧パスワードと入力したパスワードと一致しているか
    if (oldPassword !== currentPassword) {
        oldPasswordError.textContent = "現在設定されているパスワードと一致しません";
        hasError = true;
    }

    // 新パスワード設定(空フィールドでないか)
    if (newPassword.trim() === "") {
        newPasswordError.textContent = "新パスワードは入力必須項目です";
        hasError = true;
    }

    // 新パスワード設定(8文字以上で入力)
    if (newPassword.length < 8) {
        newPasswordError.textContent = "新パスワードは８文字以上で入力してください";
        hasError = true;
    }

    // 新パスワード設定(12字未満で入力)
    if (newPassword.length > 12) {
        newPasswordError.textContent = "新パスワードは12文字未満で入力してください";
        hasError = true;
    }

    // 新パスワード再入力(新パスワードと一致しているか)
    if (newPassword !== submitPassword) {
        submitPasswordError.textContent = "新パスワードと一致しません";
        hasError = true;
    }
    // 新パスワード再入力(空フィールドでないか) 
    if (submitPassword.trim() === "") {
        submitPasswordError.textContent = "確認用の新パスワードは入力必須項目です";
        hasError = true;
    }


    // エラーがあった場合
    if (hasError) {
        return false;
    }

    // バリデーションが成功した場合にフォームを送信
    // document.forms[0].submit();
    return true;
}

