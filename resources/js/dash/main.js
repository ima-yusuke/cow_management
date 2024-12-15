const EditBtns = document.getElementsByClassName('editBtn');

// 更新
for (let i=0;i<EditBtns.length;i++){
    EditBtns[i].addEventListener("click",function(e){
        let trElement = EditBtns[i].parentElement.parentElement.parentElement;
        let tdElement = trElement.children[0];
        let pElement = tdElement.children[0];
        let inputElement = tdElement.children[1].children[2];
        let form= tdElement.children[1];

        if(EditBtns[i].innerText === "更新"){
            form.submit();
        }else {
            EditBtns[i].innerText = "更新";
            pElement.style.display = "none";
            inputElement.classList.remove("hidden");
            inputElement.value = pElement.innerText;
        }
    })
}

// セレクトボックスを取得
const SexSelect = document.getElementById('sex_select');
const CategorySelect = document.getElementById('category_select');
SexSelect.addEventListener('change', (event) => {
    const selectedValue = event.target.value;
    const males = document.getElementsByClassName('male');
    const females = document.getElementsByClassName('female');

    // デバッグ: 要素数の確認
    alert("males: " + males.length + ", females: " + females.length);

    if (selectedValue == 0) {
        alert("オス");
        if (males.length === 0 || females.length === 0) {
            alert("該当要素が見つかりません");
            return;
        }

        // オス選択時の処理
        Array.from(males).forEach(male => {
            male.style.setProperty("display", "block", "important");
        });
        Array.from(females).forEach(female => {
            female.style.setProperty("display", "none", "important");
        });

    } else if (selectedValue == 1) {
        alert("メス");
        if (males.length === 0 || females.length === 0) {
            alert("該当要素が見つかりません");
            return;
        }

        // メス選択時の処理
        Array.from(males).forEach(male => {
            male.style.setProperty("display", "none", "important");
        });
        Array.from(females).forEach(female => {
            female.style.setProperty("display", "block", "important");
        });
    }

    CategorySelect.value = 0;
});
