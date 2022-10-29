var Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000
});

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

function getAddress(cityId = -1, districtId = -1, wardId = -1) {
    fetch('https://provinces.open-api.vn/api/?depth=3')
        .then((response) => response.json())
        .then((data) => {
            var districts;
            data.map(value => {
                $('#city').append(`<option ${ (value.code == cityId) ? 'selected' : '' } value="${value.code}">${value.name}</option>`);
            });
            if(districtId != -1){
                $('#district').html('<option>---Chọn Quận/Huyện---</option>');
                $('#ward').html('<option>---Chọn Xã/Phường---</option>');
                data.map(value => {
                    if (value.code == cityId) {
                        districts = value.districts;
                        districts.map(value => {
                            $('#district').append(`<option ${ (value.code == districtId) ? 'selected' : '' } value="${value.code}">${value.name}</option>`);
                        });
                    }
                })
            }
            $('#city').change(function () {
                $('#district').html('<option>---Chọn Quận/Huyện---</option>');
                $('#ward').html('<option>---Chọn Xã/Phường---</option>');
                let idCity = $(this).val();
                data.map(value => {
                    if (value.code == idCity) {
                        districts = value.districts;
                        districts.map(value => {
                            $('#district').append(`<option value="${value.code}">${value.name}</option>`);
                        });
                    }
                })
            });
            if(wardId != -1){
                $('#ward').html('<option>---Chọn Xã/Phường---</option>');
                districts.map(value => {
                    if (value.code == districtId) {
                        ward = value.wards;
                        ward.map(value => {
                            $('#ward').append(`<option ${(value.code == wardId) ? 'selected' : '' } value="${value.code}">${value.name}</option>`);
                        });
                    }
                })
            }
            $('#district').change(function () {
                $('#ward').html('<option>---Chọn Xã/Phường---</option>');
                let idDistrict = $(this).val();
                districts.map(value => {
                    if (value.code == idDistrict) {
                        ward = value.wards;
                        ward.map(value => {
                            $('#ward').append(`<option value="${value.code}">${value.name}</option>`);
                        });
                    }
                })
            })
        });
}

function getAddressFileJson(eleCity, eleDistrict, eleWard) {
    dataAddress = JSON.parse(data);
    var districts;
    dataAddress.map(value => {
        $('#' + eleCity).append(`<option value="${value.code}">${value.name}</option>`);
    });
    $('#' + eleCity).change(function () {
        $('#' + eleDistrict).html('<option>---Chọn Quận/Huyện---</option>');
        $('#' + eleWard).html('<option>---Chọn Xã/Phường---</option>');
        let idCity = $(this).val();
        dataAddress.map(value => {
            if (value.code == idCity) {
                districts = value.districts;
                districts.map(value => {
                    $('#' + eleDistrict).append(`<option value="${value.code}">${value.name}</option>`);
                });
            }
        })
    });
    $('#' + eleDistrict).change(function () {
        $('#' + eleWard).html('<option>---Chọn Xã/Phường---</option>');
        let idDistrict = $(this).val();
        districts.map(value => {
            if (value.code == idDistrict) {
                let ward = value.wards;
                ward.map(value => {
                    $('#' + eleWard).append(`<option value="${value.code}">${value.name}</option>`);
                });
            }
        })
    })
}

function getFullAddress(elementShow, address, wardId, districtId, cityId) {
    fetch('https://provinces.open-api.vn/api/w/' + wardId)
        .then((response) => response.json())
        .then((data) => {
            ward = data.name;
            fetch('https://provinces.open-api.vn/api/d/' + districtId)
                .then((response) => response.json())
                .then((data) => {
                    district = data.name;
                    fetch('https://provinces.open-api.vn/api/p/' + cityId)
                        .then((response) => response.json())
                        .then((data) => {
                            city = data.name;
                            var element = document.getElementById(elementShow);
                            var addressFull;
                            if(address == ''){
                                addressFull = ward + ', ' + district + ', ' + city;
                            }else{
                                addressFull = address + ', ' + ward + ', ' + district + ', ' + city;
                            }
                            element.textContent += addressFull;
                        });
                });
        })
}


function preview(previewTag, type = 'user', tagImage = 'avatar') {
    $('#' + tagImage).change(function (e) {
        const preview = document.getElementById(previewTag);
        const imageOld = document.getElementById('preview-image')
        const files = e.target.files;
        const file = files[0];
        const fileReader = new FileReader();
        if (imageOld) {
            $('#preview-image').remove();
            fileReader.readAsDataURL(file);
            fileReader.onload = function () {
                const src = fileReader.result;
                switch (type) {
                    case 'user':
                        var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Avatar(new) </label>
                                            <img style="width: 200px; height: 200px; object-fit: cover; " src="${src}" alt="${file.name}" class="rounded-circle  img-thumbnail preview-img" id = 'preview-image' />
                                        </div>
                                        `;
                        break;
                    case 'product':
                        var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Product Image(new) </label>
                                            <img style="width: 250px; height: 350px; object-fit: cover; " src="${src}" alt="${file.name}" class="img-thumbnail preview-img" id = 'preview-image' />
                                        </div>
                                        `;
                        break;
                    case 'banner':
                         var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Banner Image(new) </label>
                                            <img style="width: 350px; height: 250px; object-fit: cover; " src="${src}" alt="${file.name}" class="w-100 img-thumbnail preview-img" />
                                        </div>
                                        `;
                        break;
                    default:
                        break;
                }
                preview.insertAdjacentHTML('beforeend', tagImage)
            }
        } else {
            fileReader.readAsDataURL(file);
            fileReader.onload = function () {
                const src = fileReader.result;
                switch (type) {
                    case 'user':
                        var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Avatar(new) </label>
                                            <img style="width: 200px; height: 200px; object-fit: cover; " src="${src}" alt="${file.name}" class="rounded-circle  img-thumbnail preview-img" id = 'preview-image' />
                                        </div>
                                        `;
                        break;
                    case 'product':
                        var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Product Image(new) </label>
                                            <img style="width: 250px; height: 350px; object-fit: cover; " src="${src}" alt="${file.name}" class=" img-thumbnail preview-img" id = 'preview-image' />
                                        </div>
                                        `;
                        break;
                    case 'banner':
                        var tagImage = `<div class="d-flex align-items-start flex-column" id = 'preview-image'>
                                            <label>Banner Image(new) </label>
                                            <img style="width: 350px; height: 250px; object-fit: cover; " src="${src}" alt="${file.name}" class="w-100 img-thumbnail preview-img" id = 'preview-image' />
                                        </div>
                                        `;
                        break;
                    default:
                        break;
                }
                preview.insertAdjacentHTML('beforeend', tagImage)
            }
        }
    })
}

function removeImage(preview){
    var preview = document.getElementById(preview);
    while (preview.hasChildNodes()) {
        preview.removeChild(preview.firstChild);
    }
}

function toastMessageSuccess(message){
    Toast.fire({
        icon: 'success',
        title: `${message}`
    })
}

function deleteAjax(url) {
    var confirm = window.confirm('Bạn có muốn xóa dòng dữ liệu này! Sau khi xóa dữ liệu không thể khôi phục lại! Cẩn thận!');
    if (confirm) {
        if (confirm) {
            var ajax = $.ajax({
                url: url,
                data: { _method: 'delete' },
                method: 'delete',
                typeData: 'json',
                async: false
            });
            var status = (ajax.responseJSON).statusCode;
            if(ajax.status == 500){
                toastMessageDanger('Trường đang xóa liên quan đến các dữ liệu khác trong DB!');      
            }else{
                switch (status) {
                    case 200:
                        $('#dataTable').DataTable().clear().draw(true);
                        toastMessageSuccess('delete');
                        break;
                    case 400:
                        toastMessageError('delete');
                        break;
                    case 405:
                        toastMessageDanger('Bạn không có quyền để thực hiện chức năng này!');
                        break;
                    case 423:
                        toastMessageDanger('Bạn không thể xóa chính bản thân mình!');
                        break;
                }
            }
            
        }
    }
}
