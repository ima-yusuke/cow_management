// 管理画面
const CowRanchSelectElement = document.getElementById('cow_ranch_select');
const CowCattleBarnSelectElement = document.getElementById('cow_cattle_barn_select');
const CowParentSelectElement = document.getElementById('cow_parent_select');
let ranchArray = window.ranches;
let cattleBarnArray = window.cattleBarns;
let parentArray = window.parents;

// 牧場のセレクトボックスが変更したとき
CowRanchSelectElement.addEventListener('change', (event) => {
    const selectedValue = event.target.value;

    DeleteOption(CowCattleBarnSelectElement);

    DeleteOption(CowParentSelectElement);

    CreateOption(selectedValue, CowCattleBarnSelectElement, cattleBarnArray);

    CreateOption(selectedValue, CowParentSelectElement, parentArray);
});

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
CreateOption(CowRanchSelectElement.children[0].value, CowCattleBarnSelectElement, cattleBarnArray);
CreateOption(CowRanchSelectElement.children[0].value, CowParentSelectElement, parentArray);


// ユーザーページ
const EditCowBtns = document.getElementsByClassName('editCowDetail');

for (let i = 0; i < EditCowBtns.length; i++) {
    EditCowBtns[i].addEventListener('click', (event) => {

    });
}
