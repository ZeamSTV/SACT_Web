
app.service('NhanVienService', function ($http) {
    this.list= function()
    {
        return $http.get(urls.listNhanVien);
    }
    this.list_1 = function (id) {
        return $http.get(urls.listNhanVien + '/' + id);
    }
    this.deleteNV = function (subID) {
        var url = urls.deletenv + "/" + subID;
       
        return $http(
        {
            method: 'delete',
            data: subID,
            url: url
        });
    }

    this.AddEmploy = function (des) {
        var response = $http({
            method: "post",
            url: urls.AddNV,
            data: JSON.stringify(des),
            dataType: "json"
        });
        return response;
    }
    this.updatenv = function (id, employee) {
        var request = $http({
            method: "put",
            url: urls.editNV + '/' + id,
            data: employee
        });
        return request;
    }

});


app.service('PhongBanService', function ($http) {
    this.list= function()
    {
        return $http.get(urls.listphongban);
    }
    this.list_1 = function (id) {
        return $http.get(urls.listphongban + '/' + id);
    }
        this.deletePB = function (subID) {
            console.log(subID);
            var url = urls.deletepb + "/" + subID;
       
            return $http(
            {
                method: 'delete',
                data: subID,
                url: url
            });
        }

       this.AddEmp = function (des) {
        var response = $http({
            method: "post",
            url: urls.AddPB,
            data: JSON.stringify(des),
            dataType: "json"
        });
        return response;
    }
        this.updatepb = function (id, department) {
            var request = $http({
                method: "put",
                url: urls.editPB+'/' + id,
                data: department
            });
            return request;
        }
    });


app.service('ChucVuService', function ($http) {
    this.list = function () {
        return $http.get(urls.listChucVu);
    }
    this.list_1 = function (id) {
        return $http.get(urls.listChucVu + '/' + id);
    }
    this.deleteCV = function (subID) {
        var url = urls.deletecv + "/" + subID;

        return $http(
        {
            method: 'delete',
            data: subID,
            url: url
        });
    }

    this.addPos = function (des) {
        var response = $http({
            method: "post",
            url: urls.AddCV,
            data: JSON.stringify(des),
            dataType: "json"
        });
        return response;
    }
    this.updatepos = function (id, position) {
        var request = $http({
            method: "put",
            url: urls.editCV + '/' + id,
            data: position
        });
        return request;
    }
});
app.service('AttendanceService', function ($http) {
    this.list = function () {
        return $http.get(urls.listChucVu);
    }
    this.list_1 = function () {
        return $http.get(urls.listphongban);
    }
    // Show workshift của tất cả các nhân viên
    this.showAllAtendance = function () {
        return $http.get(urls.checkAllEmployeesInCurrentMonth);
    }
    // Show workshift của nhân viên theo ngày nhập vào
    this.showSearchAttendance = function (inputData) {
        return $http({
            method: "post",
            url: urls.checkAllEmployees,
            data: inputData
        });
    }

    // Show chi tiết workshift của 1 nhân viên theo ngày nhập vào
    this.showDetailAttendance = function (inputData) {
        return $http({
            method: "post",
            url: urls.checkEmployeeDetail,
            data: inputData
        });
    }
     // Show chi tiết workshift của toàn bộ nhân viên theo ngày nhập vào
    this.showAllDetailAttendace = function (inputData) {
        return $http({
            method: "post",
            url: urls.checkAllEmployeesDetail,
            data: inputData
        });
    }

});
app.service('UserService', function ($http) {
    this.login = function (loginInput) {

        return $http({
            method: 'post',
            url: baseUrl + "users/login",
            data: loginInput
        });
    }
    this.logout = function () {
        return $http({
            method: 'post',
            url: baseUrl + "users/logout/5",

        });
    }
});

var baseUrl = "http://localhost:56103/";
var urls = {};
var key = sessionStorage.getItem('accessToken');
urls.listChucVu = baseUrl + "positions/"+ key;
urls.listNhanVien = baseUrl + "employees/" + key;
urls.listphongban = baseUrl + "departments/" + key;
urls.deletenv = baseUrl + "employees/delete/" + key;
urls.deletepb = baseUrl + "departments/delete/" + key;
urls.deletecv = baseUrl + "positions/delete/" + key;
urls.AddPB = baseUrl + "departments/insert/" + key;
urls.AddCV = baseUrl + "positions/insert/" + key;
urls.AddNV = baseUrl + "employees/insert/" + key;
urls.editPB = baseUrl + "departments/edit/" + key;
urls.editNV = baseUrl + "employees/edit/" + key;
urls.editCV = baseUrl + "positions/edit/" + key;
urls.checkAllEmployeesInCurrentMonth = baseUrl + "checks/" + key;
urls.checkAllEmployees = baseUrl + "checks/" + "search/" + key;
urls.checkEmployeeDetail = baseUrl + "checks/detail-employees/" + key;
urls.checkAllEmployeesDetail = baseUrl + "checks/detail-all-employees/" + key;

