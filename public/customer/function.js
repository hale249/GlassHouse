function checkName() {
    var name = document.getElementById('txtName').value;
    if (name != '') {
        document.getElementById('errName').style.color = '';
        document.getElementById('txtName').style.borderColor = '';
        document.getElementById('txtName').style.backgroundColor = '';
        document.getElementById('errName').innerHTML = '';
        if (name.length < 5) {
            document.getElementById('errName').style.color = 'red';
            document.getElementById('txtName').style.borderColor = 'red';
            document.getElementById('txtName').style.backgroundColor = 'white';
            document.getElementById('errName').innerHTML = '(*) Vui lòng nhập đầy đủ họ và tên!';
        }
    } else {
        document.getElementById('errName').style.color = 'red';
        document.getElementById('txtName').style.borderColor = 'red';
        document.getElementById('txtName').style.backgroundColor = 'white';
        document.getElementById('errName').innerHTML = '(*) Vui lòng nhập họ tên!';
    }
}

function checkPhone() {
    var phone = document.getElementById('txtPhone').value;
    if (phone != '') {
        document.getElementById('errPhone').innerHTML = '';
        document.getElementById('errPhone').style.color = '';
        document.getElementById('txtPhone').style.borderColor = '';
        document.getElementById('txtPhone').style.backgroundColor = '';

        if (/^[(]{0,1}[0-9]{3}[)]{0,1}[-\s\.]{0,1}[0-9]{3}[-\s\.]{0,1}[0-9]{4}$/.test(phone) == false) {
            document.getElementById('errPhone').style.color = 'red';
            document.getElementById('txtPhone').style.borderColor = 'red';
            document.getElementById('txtPhone').style.backgroundColor = 'white';
            document.getElementById('errPhone').innerHTML = '(*) Vui lòng nhập số điện thoại chính xác!';
        }
    } else {
        document.getElementById('errPhone').style.color = 'red';
        document.getElementById('txtPhone').style.borderColor = 'red';
        document.getElementById('txtPhone').style.backgroundColor = 'white';
        document.getElementById('errPhone').innerHTML = '(*) Vui lòng nhập số điện thoại!';
    }
}

function checkAdd() {
    var add = document.getElementById('txtAdd').value;
    if (add != '') {
        document.getElementById('errAdd').style.color = '';
        document.getElementById('txtAdd').style.borderColor = '';
        document.getElementById('txtAdd').style.backgroundColor = '';
        document.getElementById('errAdd').innerHTML = '';
        if (add.length < 10) {
            document.getElementById('errAdd').style.color = 'red';
            document.getElementById('txtAdd').style.borderColor = 'red';
            document.getElementById('txtAdd').style.backgroundColor = 'white';
            document.getElementById('errAdd').innerHTML = '(*) Vui lòng nhập địa chỉ lớn hơn 10 ký tự';
        }
    } else {
        document.getElementById('errAdd').style.color = 'red';
        document.getElementById('txtAdd').style.borderColor = 'red';
        document.getElementById('txtAdd').style.backgroundColor = 'white';
        document.getElementById('errAdd').innerHTML = '(*) Vui lòng nhập địa chỉ công trình!';
    }
}

function checkEmail() {
    var email = document.getElementById('txtEmail').value;
    if (email != '') {
        document.getElementById('errEmail').innerHTML = '';
        document.getElementById('errEmail').style.color = '';
        document.getElementById('txtEmail').style.borderColor = '';
        document.getElementById('txtEmail').style.backgroundColor = '';

        if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email) == false) {
            document.getElementById('errEmail').style.color = 'red';
            document.getElementById('txtEmail').style.borderColor = 'red';
            document.getElementById('txtEmail').style.backgroundColor = 'white';
            document.getElementById('errEmail').innerHTML = '(*) Vui lòng nhập đúng địa chỉ Gmail!';
        }
    } else {
        document.getElementById('errEmail').style.color = 'red';
        document.getElementById('txtEmail').style.borderColor = 'red';
        document.getElementById('txtEmail').style.backgroundColor = 'white';
        document.getElementById('errEmail').innerHTML = '(*) Vui lòng nhập địa chỉ Gmail!';
    }
}

function checkMessage() {
    var message = document.getElementById('txtMessage').value;
    if (message != '') {
        document.getElementById('errMessage').innerHTML = '';
        document.getElementById('errMessage').style.color = '';
        document.getElementById('txtMessage').style.borderColor = '';
        document.getElementById('txtMessage').style.backgroundColor = '';
    } else {
        document.getElementById('errMessage').style.color = 'red';
        document.getElementById('txtMessage').style.borderColor = 'red';
        document.getElementById('txtMessage').style.backgroundColor = 'white';
        document.getElementById('errMessage').innerHTML = '(*) Vui lòng nhập nội dung!';
    }
}

function checkinfo() {
    var name = document.getElementById('txtName').value;
    var phonenum = document.getElementById('txtPhone').value;
    var add = document.getElementById('txtAdd').value;
    var lenght = document.getElementById('txtlenght').value;
    var width = document.getElementById('txtwidth').value;
    if (name == "" && phonenum == "" && add == "") {
        window.alert("Vui lòng nhập đầy đủ thông tin để nhận báo giá chi tiết!");
        window.location = "../html/cart.html";
    } else {
        var result = lenght * width;
        document.getElementById("tongtien").innerHTML = result;

    }
}


function datatransfer(price = 0) {
    const elementSelectColor = document.getElementById("select-color");
    const colorValue = elementSelectColor.value || '';
    const labelColor = elementSelectColor.options[elementSelectColor.selectedIndex].innerHTML || '';

    const elementSelectAlu = document.getElementById("select-alu");
    const aluValue = elementSelectAlu.value || '';
    const labelAlu = elementSelectAlu.options[elementSelectAlu.selectedIndex].innerHTML || '';


    const elementAccessories = document.getElementById("select-accesfa-stack");
    const accessoriesValue = elementAccessories.value || '';
    const labelAccessories = elementAccessories.options[elementAccessories.selectedIndex].innerHTML || '';

    const elementGlassType = document.getElementById("select-glass");
    const glassValue = elementGlassType.value || '';
    const labelGlass = elementGlassType.options[elementGlassType.selectedIndex].innerHTML || '';

    const txtlenght = document.getElementById('txtlenght').value || 0;
    const txtwidth = document.getElementById('txtwidth').value || 0;
    const txtnumber = document.getElementById('txtnumber').value || 0;

    document.getElementById('typeLabel').innerHTML = labelAlu;
    document.getElementById('colorLabel').innerHTML = labelColor;
    document.getElementById('sizeLabel').innerHTML = txtwidth;
    document.getElementById('accessLabel').innerHTML = labelAccessories;
    document.getElementById('glassLabel').innerHTML = labelGlass;
    document.getElementById('tongtienLabel').innerHTML = txtnumber * price;

    var x = document.getElementById("form-1");
    var y = document.getElementById("form-2");
    x.style.display = "none";
    y.style.display = "block"
    var alu = document.getElementById('select-alu').value;
    document.getElementById('type').innerHTML = alu;

}

function addToCartProduct($productId) {
    const elementSelectColor = document.getElementById("select-color");
    const colorValue = elementSelectColor.value || '';
    const labelColor = elementSelectColor.options[elementSelectColor.selectedIndex].innerHTML || '';

    const elementSelectAlu = document.getElementById("select-alu");
    const aluValue = elementSelectAlu.value || '';
    const labelAlu = elementSelectAlu.options[elementSelectAlu.selectedIndex].innerHTML || '';


    const elementAccessories = document.getElementById("select-accesfa-stack");
    const accessoriesValue = elementAccessories.value || '';
    const labelAccessories = elementAccessories.options[elementAccessories.selectedIndex].innerHTML || '';

    const elementGlassType = document.getElementById("select-glass");
    const glassValue = elementGlassType.value || '';
    const labelGlass = elementGlassType.options[elementGlassType.selectedIndex].innerHTML || '';

    const txtlenght = document.getElementById('txtlenght').value || 0;
    const txtwidth = document.getElementById('txtwidth').value || 0;
    const txtnumber = document.getElementById('txtnumber').value || 0;

    const dataCart = {
        quantity: txtnumber,
        price: txtnumber,
        product_color_id: colorValue,
        product_glass_id: glassValue,
        product_aluminum_id: aluValue,
        product_accessory_id: accessoriesValue,
        product_longs:  txtlenght,
        product_width: txtwidth,
        color_name: labelColor,
        glass_type: labelGlass,
        accessory: labelAccessories,
        aluminum: labelAlu,
    };

    const params = new URLSearchParams(dataCart);
    fetch(`/add-to-cart/${$productId}?${params}`)
        .then((data) => {
            window.location.href="/gio-hang";
        })
        .catch((error) => {
            console.error('Error:', error);
            window.location.reload();
        });
}

function deleteToCartProduct($productId) {
    fetch(`/remove-from-cart/${$productId}`)
        .then((data) => {
            window.location.reload();
        })
        .catch((error) => {
            console.error('Error:', error);
            window.location.reload();
        });
}
