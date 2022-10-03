function getAddress(cityId = -1, districtId = -1, wardId = -1) {
    fetch('https://provinces.open-api.vn/api/?depth=3')
        .then((response) => response.json())
        .then((data) => {
            var districts;
            data.map(value => {
                $('#city').append(`<option ${ (value.code == cityId) ? 'selected' : '' } value="${value.code}">${value.name}</option>`);
            });
            if(districtId != -1){
                $('#district').html('<option>Chọn quận/huyện</option>');
                $('#ward').html('<option> Chọn phường/xã </option>');
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
                $('#district').html('<option>Chọn quận/huyện</option>');
                $('#ward').html('<option> Chọn phường/xã </option>');
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
                $('#ward').html('<option> Chọn phường/xã </option>');
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
                $('#ward').html('<option> Chọn phường/xã </option>');
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
        $('#' + eleDistrict).html('<option>Chọn quận/huyện</option>');
        $('#' + eleWard).html('<option> Chọn phường/xã </option>');
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
        $('#' + eleWard).html('<option> Chọn phường/xã </option>');
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