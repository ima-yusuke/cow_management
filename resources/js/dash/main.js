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
const SexSelect = document.getElementsByClassName('sexSelect');

const CategorySelect = document.getElementsByClassName('categorySelect');

export const currentUrl = window.location.href;//現在のURLを取得
function CreateOption(sex,idx){
    let maleArray =["子","父","祖父"];
    let femaleArray =["子","母","祖母"];
    let useArray = null;
    let currentValue = null;
    if (currentUrl.includes('detail')) {
        if(cowDetail["category"]!=null){
            currentValue = cowDetail["category"]
        }
    }
    if(sex==="male"){
        useArray = maleArray;
    }else{
        useArray = femaleArray;
    }
    for (let i = 0; i < useArray.length; i++) {
        let option = document.createElement('option');
        option.value = i;
        option.textContent = useArray[i];
        if (currentValue === i) {
            option.selected = true;
        }
        CategorySelect[0].appendChild(option);
    }
}

function DeleteOption(SelectElement) {
    while (SelectElement.firstChild) {
        SelectElement.removeChild(SelectElement.firstChild);
    }
}

for (let i=0;i<SexSelect.length;i++){
    SexSelect[i].addEventListener('change', (event) => {
        const selectedValue = event.target.value; // 選択された値を取得

        if (selectedValue === '0') {
            // オス選択時の処理

            DeleteOption(CategorySelect[i]);
            CreateOption("male");


        } else if (selectedValue === '1') {
            //メス選択時の処理

            // オスのoptionを非表示にし、メスのoptionを表示する
            DeleteOption(CategorySelect[i]);
            CreateOption("female")
        }

    });
}

window.onload = function(){
    if (currentUrl.includes('detail')) {
       DeleteOption(CategorySelect[0]);
       if(cowDetail["sex"]===0){
           CreateOption("male")
       }else{
           CreateOption("female")
       }
    }else{
        CreateOption("male");
    }
}


