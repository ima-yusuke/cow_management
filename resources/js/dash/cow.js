import { currentUrl } from './main.js';
// 管理画面
const CowRanchSelectElement = document.getElementsByClassName('cowRanchSelect');
const CowCattleBarnSelectElement = document.getElementsByClassName('cowCattleBarnSelect');
const CowParentSelectElement = document.getElementsByClassName('cowParentSelect');
let ranchArray = window.ranches;
let cattleBarnArray = window.cattleBarns;
let parentArray = window.parents;

// 牧場のセレクトボックスが変更したとき
for (let i = 0; i < CowRanchSelectElement.length; i++) {
    CowRanchSelectElement[i].addEventListener('change', (event) => {
        const selectedValue = event.target.value;

        DeleteOption(CowCattleBarnSelectElement[i]);

        DeleteOption(CowParentSelectElement[i]);

        CreateOption(selectedValue, CowCattleBarnSelectElement[i], cattleBarnArray);

        CreateOption(selectedValue, CowParentSelectElement[i], parentArray);
    });
}

function DeleteOption(SelectElement) {
    while (SelectElement.firstChild) {
        SelectElement.removeChild(SelectElement.firstChild);
    }
}

function CreateOption(Value,SelectElement,ArrayData) {
    for (let i = 0; i < ArrayData.length; i++) {
        if (ArrayData[i].ranch_id == Value) {
            let option = document.createElement('option');
            option.value = ArrayData[i].id;
            option.textContent = ArrayData[i].name;
            SelectElement.appendChild(option);
        }
    }

    if (SelectElement.options.length == 0) {
        let option = document.createElement('option');
        option.value = "";
        if(ArrayData == cattleBarnArray) {
            option.textContent = '牛舎が登録されていません';
        }else if(ArrayData == parentArray) {
            option.textContent = '種牛が登録されていません';
        }
        SelectElement.appendChild(option);
    }
}

// デフォルトで牧場の牛舎と種牛を表示
document.addEventListener('DOMContentLoaded', function() {
    if (currentUrl.includes('cow')) {
        CreateOption(CowRanchSelectElement[0].children[0].value, CowCattleBarnSelectElement[0], cattleBarnArray);
        CreateOption(CowRanchSelectElement[0].children[0].value, CowParentSelectElement[0], parentArray);
    }
});



// ユーザーページ

