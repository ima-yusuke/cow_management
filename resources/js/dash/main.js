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

// 値が変更されたときのイベントリスナーを追加
SexSelect.addEventListener('change', (event) => {
    const selectedValue = event.target.value; // 選択された値を取得
    let males = document.getElementsByClassName('male');
    let females = document.getElementsByClassName('female');

    if (selectedValue === '0') {
        //オス選択時の処理
        for (let i=0;i<males.length;i++){
            males[i].style.display = "block";
        }
        for(let i=0;i<females.length;i++){
            females[i].style.display = "none";
        }
    } else if (selectedValue === '1') {
        //メス選択時の処理
        for (let i=0;i<males.length;i++){
            males[i].style.display = "none";
        }
        for(let i=0;i<females.length;i++){
            females[i].style.display = "block";
        }
    }

    CategorySelect.value = 0;
});
