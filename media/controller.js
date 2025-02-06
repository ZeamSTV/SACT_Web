app.controller("ProductController", function ($scope, ProductService) {
  getall();
  function getall() {
    var nhanviensv = NhanVienService.list();
    nhanviensv.then(function (res) {
      var data = res.data;
      $scope.employee = data.EmployeesInfos;
    });
  }
  // $scope.xoanv = function () {
  //     var dlt = NhanVienService.deleteNV($scope.id);
  //     dlt.then(function (d) {
  //         if (d.data.ErrorCode == 1) {
  //             alert('Có ràng buộc! Không thể xóa được.');
  //         }
  //         else
  //             getall();
  //     }, function (error) {
  //         console.log('Oops! Something went wrong while deleting the data.')
  //     })

  // }

  // $scope.getremove_employ = function (id) {
  //     $scope.id = id;
  //     jQuery("#myModalConfirm").modal('show');
  // }
  // $scope.getShow_Edit_NV = function (id) {

  //     $scope.id = id;
  //     jQuery("#showEdit_NV").modal('show');

  //     var getData = NhanVienService.list_1(id);
  //     console.log(id);
  //     getData.then(function getSuccess(response) {

  //         var showID = response.data;
  //         $scope.Ho = showID.firstName;
  //         $scope.ten = showID.lastName;
  //         $scope.IDchucvu = showID.idPosition;
  //         $scope.gender = showID.gender;
  //         $scope.SDT = showID.phoneNumber;
  //         $scope.mail = showID.email;
  //         $scope.diachi = showID.address;
  //         $scope.mota = showID.jobStatus;
  //         $scope.ngaybatdau = showID.startDate;
  //         $scope.IDphongban = showID.idDepartment;
  //         $scope.ngaysinh = showID.birthday;
  //         $scope.Action = "Update";
  //         $scope.divEmployees = true;
  //     }, function () {
  //         alert('Error is getting records');
  //     });

  // }
  // $scope.save = function () {

  //     $scope.IDphongban = jQuery("#idphongban").val();
  //     $scope.IDchucvu = jQuery("#idchucvu").val();
  //     if ($scope.gender == null)
  //         $scope.gender = 0;
  //     else
  //         $scope.gender = 1;

  //     var employee = {
  //         firstName: $scope.Ho,
  //         lastName: $scope.ten,
  //         idPosition: $scope.IDchucvu,
  //         gender: $scope.gender,
  //         phoneNumber: $scope.SDT,
  //         email: $scope.mail,
  //         address: $scope.diachi,
  //         jobStatus: $scope.mota,
  //         startDate: $scope.ngaybatdau,
  //         idDepartment: $scope.IDphongban,
  //         birthday: $scope.ngaysinh
  //     };
  //     console.log(employee);
  //     var getAction = $scope.Action;
  //     if (getAction == "Update") {

  //         var promisePut = NhanVienService.updatenv($scope.id, employee);
  //         promisePut.then(function () {
  //             //$scope.Message = "Updated Successfuly";
  //             ClearFields();
  //             getall();
  //             $scope.divEmployees = false;
  //             alert('Sửa thành công');
  //         }, function (err) {
  //             alert('Sửa không thành công');
  //         });
  //     }
  //     else {
  //         var getData = NhanVienService.AddEmploy(employee);
  //         getData.then(function () {

  //             getall();
  //             $scope.divEmployees = false;
  //             alert('Thêm thành công');
  //         }, function (err) {
  //             console.log("Err" + err);
  //         });
  //     }

  // };

  // $scope.AddEmployeesDiv = function () {

  //     ClearFields();
  //     $scope.Action = "Add";
  //     $scope.divEmployees = true;
  // }
  // function ClearFields() {
  //     //$scope.departName = "";
  //     //$scope.departmentDescription = "";
  //     $scope.Ho = "";
  //     $scope.ten = "";
  //     $scope.IDchucvu = "";
  //     $scope.gioitinh = "";
  //     $scope.SDT = "";
  //     $scope.mail = "";
  //     $scope.diachi = "";
  //     $scope.mota = "";
  //     $scope.ngaybatdau = "";
  //     $scope.IDphongban = "";
  //     $scope.ngaysinh = "";

  // }
});

// app.controller('UserController', function ($scope, UserService) {

//     $scope.login = function () {
//         var loginInput = {
//             userName: $scope.userName,
//             password: $scope.password
//         };
//         UserService.login(loginInput).then(function (res) {

//             var data = res.data;
//             sessionStorage.setItem('accessToken', data.Token);
//             sessionStorage.setItem('userName', data.UserName);
//             if (data.ErrorCode == 0) {

//                 $scope.ThongBao = "Sussces!";

//                 window.location.href = '/Home/TrangChu';
//             }

//             else if (data.ErrorCode == 2) {
//                 sessionStorage.setItem('accessToken', data.Token);
//                 sessionStorage.setItem('userName', data.UserName);
//                 $scope.ThongBao = "Vui lòng logout để đăng nhập lại";

//             }
//             else {

//                 window.location.href = '/Home/login';

//             }

//         });

//     };

// });

// app.controller('HienUser', function ($scope, UserService) {

//     $scope.userName = sessionStorage.getItem('userName');
//     $scope.logout = function () {

//         UserService.logout().then(function (res) {

//             sessionStorage.removeItem('accessToken');
//             sessionStorage.removeItem('userName');
//             window.location.href = '/Home/login';
//         }
//     )
//     };

// });
