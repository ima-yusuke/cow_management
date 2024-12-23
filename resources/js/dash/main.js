const EditBtns = document.getElementsByClassName('editBtn');
const EditBtns2 = document.getElementsByClassName('editBtn2');

// 更新1
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
            form.classList.remove("hidden");
            inputElement.value = pElement.innerText;
        }
    })
}

// 更新2
for (let i=0;i<EditBtns2.length;i++){
    EditBtns2[i].addEventListener("click",function(e){
        let selectElement = document.getElementsByClassName("newSelect")[i];
        let inputElement = document.getElementsByClassName("newName")[i];
        let form= document.getElementsByClassName("updateForm")[i];

        if(EditBtns2[i].innerText === "更新"){
            form.submit();
        }else {
            EditBtns2[i].innerText = "更新";
            selectElement.previousElementSibling.style.display = "none";
            inputElement.previousElementSibling.style.display = "none";
            selectElement.classList.remove("hidden");
            inputElement.classList.remove("hidden");
            inputElement.value =  inputElement.previousElementSibling.innerText;

            // 現在の選択値を持つ <option> を選択状態にする
            const ranchId = selectElement.previousElementSibling.dataset.id;
            for (let j = 0; j < selectElement.options.length; j++) {
                if (selectElement.options[j].value === ranchId) {
                    selectElement.options[j].selected = true;
                    break;
                }
            }
        }
    })
}

// セレクトボックスを取得
const SexSelect = document.getElementById('sex_select');
const CategorySelect = document.getElementById('category_select');
let males = document.getElementsByClassName('male');
let females = document.getElementsByClassName('female');

// 値が変更されたときのイベントリスナーを追加
SexSelect.addEventListener('change', (event) => {
    const selectedValue = event.target.value; // 選択された値を取得

    if (selectedValue === '0') {
        // オス選択時の処理

        // オスのoptionを表示にする
        for (let i=0;i<males.length;i++){
           ShowOption(males[0]);
        }

        // メスのoptionを非表示にする
        for(let i=0;i<females.length;i++){
            HideOption(females[0]);
        }
    } else if (selectedValue === '1') {
        //メス選択時の処理

        // オスのoptionを非表示にする
        for (let i=0;i<males.length;i++){
            HideOption(males[0]);
        }

        // メスのoptionを表示する
        for(let i=0;i<females.length;i++) {
           ShowOption(females[0]);
        }
    }

    CategorySelect.value = 0;
});

// オプションを表示する関数
function ShowOption(option){
    const parentDiv = option.parentNode; // 親divを取得
    parentDiv.remove(); // divを削除
    CategorySelect.appendChild(option); // optionを<select>に戻す
}

// オプションを非表示にする関数
function HideOption(option){
    let newDiv = document.createElement('div');
    newDiv.appendChild(option);
    newDiv.classList.add("hidden");
    CategorySelect.appendChild(newDiv);
}

// メスのoptionを非表示にする（初期状態）
for(let i=0;i<females.length;i++){
    HideOption(females[0]);
}


