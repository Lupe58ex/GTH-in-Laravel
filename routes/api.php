<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', 'Api\AuthController@register');
Route::post('/login', 'Api\AuthController@login');


//area
Route::post('/area/Store', 'AreaController@store');
Route::get('/area/Index', 'AreaController@index');
Route::get('/area/Show/{id}', 'AreaController@show');
Route::post('/area/Update/{id}', 'AreaController@update');
//Assitance
Route::post('/assistance/Store', 'AssistanceController@store');
Route::get('/assistance/Index', 'AssistanceController@index');
Route::get('/assitance/Show/{id}', 'AssistanceController@show');
//Route::post('/assistance/Update/{id}', 'AssistanceController@update');
//BonusDiscountCategory
Route::post('/bonusDiscountCategory/Store', 'BonusDiscountCategoryController@store');
Route::get('/bonusDiscountCategory/Index', 'BonusDiscountCategoryController@index');
Route::get('/bonusDiscountCategory/Show/{id}', 'BonusDiscountCategoryController@show');
Route::post('/bonusDiscountCategory/Update/{id}', 'BonusDiscountCategoryController@update');
//BonusDiscount
Route::post('/bonusDiscount/Store', 'BonusDiscountController@store');
Route::get('/bonusDiscount/Index', 'BonusDiscountController@index');
Route::get('/bonusDiscount/Show/{id}', 'BonusDiscountController@show');
Route::post('/bonusDiscount/Update/{id}', 'BonusDiscountController@update');
//centralRisk
Route::post('/centralRisk/Store', 'CentralRiskController@store');
Route::get('/centralRisk/Index', 'CentralRiskController@index');
Route::get('/centralRisk/Show/{id}', 'CentralRiskController@show');
Route::post('/centralRisk/Update/{id}', 'CentralRiskController@update');
//Cessation
Route::post('/cessation/Store', 'CessationController@store');
Route::get('/cessation/Index', 'CessationController@index');
Route::get('/cessation/Show/{id}', 'CessationController@show');
Route::post('/cessation/Update/{id}', 'CessationController@update');
//ClosedAssistance
Route::post('/closedAssistance/Store', 'ClosedAssistanceController@store');
Route::get('/closedAssistance/Index', 'ClosedAssistanceController@index');
Route::get('/closedAssistance/Show/{id}', 'ClosedAssistanceController@show');
//Route::post('/closedAssistance/Update/{id}', 'ClosedAssistanceController@update');
//ClosedPayroll
Route::post('/closedPayroll/Store', 'ClosedPayrollController@store');
Route::get('/closedPayroll/Index', 'ClosedPayrollController@index');
Route::get('/closedPayroll/Show/{id}', 'ClosedPayrollController@show');
//Route::post('/closedPayroll/Update/{id}', 'ClosedPayrollController@update');
//Company
Route::post('/company/Store', 'CompanyController@store');
Route::get('/company/Index', 'CompanyController@index');
Route::get('/company/Show/{id}', 'CompanyController@show');
Route::post('/company/Update/{id}', 'CompanyController@update');
//Contract
Route::post('/contract/Store', 'ContractController@store');
Route::get('/contract/Index', 'ContractController@index');
Route::get('/contract/Show/{id}', 'ContractController@show');
Route::post('/contract/Update/{id}', 'ContractController@update');
//ContratType
Route::post('/contractType/Store', 'ContractTypeController@store');
Route::get('/contractType/Index', 'ContractTypeController@index');
Route::get('/contractType/Show/{id}', 'ContractTypeController@show');
Route::post('/contractType/Update/{id}', 'ContractTypeController@update');
//criminalBackground
Route::post('/criminalBackground/Store', 'CriminalBackgroundController@store');
Route::get('criminalBackground/Index', 'CriminalBackgroundController@index');
Route::get('/criminalBackground/Show/{id}', 'CriminalBackgroundController@show');
Route::post('/criminalBackground/Update/{id}', 'CriminalBackgroundController@update');
//employee
Route::post('/employee/Store', 'EmployeeController@store');
Route::get('/employee/Index', 'EmployeeController@index');
Route::get('/employee/Show/{id}', 'EmployeeController@show');
Route::post('/employee/Update/{id}', 'EmployeeController@update');
//employeePensionSystem
Route::post('/employeePensionSystem/Store', 'EmployeePensionSystemController@store');
Route::get('/employeePensionSystem/Index', 'EmployeePensionSystemController@index');
Route::get('/employeePensionSystem/Show/{id}', 'EmployeePensionSystemController@show');
Route::post('/employeePensionSystem/Update/{id}', 'EmployeePensionSystemController@update');
//employeeReference
Route::post('/employeeReference/Store', 'EmployeeReferenceController@store');
Route::get('/employeeReference/Index', 'EmployeeReferenceController@index');
Route::get('/employeeReference/Show/{id}', 'EmployeeReferenceController@show');
Route::post('/employeeReference/Update/{id}', 'EmployeeReferenceController@update');
//employeeRelative
Route::post('/employeeRelative/Store', 'EmployeeRelativeController@store');
Route::get('/employeeRelative/Index', 'EmployeeRelativeController@index');
Route::get('/employeeRelative/Show/{id}', 'EmployeeRelativeController@show');
Route::post('/employeeRelative/Update/{id}', 'EmployeeRelativeController@update');
//employeeSchedule
Route::post('/employeeSchedule/Store', 'EmployeeScheduleController@store');
Route::get('/employeeSchedule/Index', 'EmployeeScheduleController@index');
Route::get('/employeeSchedule/Show/{id}', 'EmployeeScheduleController@show');
Route::post('/employeeSchedule/Update/{id}', 'EmployeeScheduleController@update');
//financialEntity
Route::post('/financialEntity/Store', 'FinancialEntityController@store');
Route::get('/financialEntity/Index', 'FinancialEntityController@index');
Route::get('/financialEntity/Show/{id}', 'FinancialEntityController@show');
Route::post('/financialEntity/Update/{id}', 'FinancialEntityController@update');
//generatedPayroll
Route::post('/generatedPayroll/Store', 'GeneratedPayrollController@store');
Route::get('/generatedPayroll/Index', 'GeneratedPayrollController@index');
Route::get('/generatedPayroll/Show/{id}', 'GeneratedPayrollController@show');
//Route::post('/generatedPayroll/Update/{id}', 'GeneratedPayrollController@update');
//IdentificationType
Route::post('/identificationType/Store', 'IdentificationTypeController@store');
Route::get('/identificationType/Index', 'IdentificationTypeController@index');
Route::get('/identificationType/Show/{id}', 'IdentificationTypeController@show');
Route::post('/identificationType/Update/{id}', 'IdentificationTypeController@update');
//JobType
Route::post('/jobType/Store', 'JobTypeController@store');
Route::get('/jobType/Index', 'JobTypeController@index');
Route::get('/jobType/Show/{id}', 'JobTypeController@show');
Route::post('/jobType/Update/{id}', 'JobTypeController@update');
//license
Route::post('/license/Store', 'LicenseController@store');
Route::get('/license/Index', 'LicenseController@index');
Route::get('/license/Show/{id}', 'LicenseController@show');
Route::post('/license/Update/{id}', 'LicenseController@update');
//medicalCondition
Route::post('/medicalCondition/Store', 'MedicalConditionController@store');
Route::get('/medicalCondition/Index', 'MedicalConditionController@index');
Route::get('/medicalCondition/Show/{id}', 'MedicalConditionController@show');
Route::post('/medicalCondition/Update/{id}', 'MedicalConditionController@update');
//pensionSystem
Route::post('/pensionSystem/Store', 'PensionSystemController@store');
Route::get('/pensionSystem/Index', 'PensionSystemController@index');
Route::get('/pensionSystem/Show/{id}', 'PensionSystemController@show');
Route::post('/pensionSystem/Update/{id}', 'PensionSystemController@update');
//phoneOperator
Route::post('/phoneOperator/Store', 'PhoneOperatorController@store');
Route::get('/phoneOperator/Index', 'PhoneOperatorController@index');
Route::get('/phoneOperator/Show/{id}', 'PhoneOperatorController@show');
Route::post('/phoneOperator/Update/{id}', 'PhoneOperatorController@update');
//phoneType
Route::post('/phoneType/Store', 'PhoneTypeController@store');
Route::get('/phoneType/Index', 'PhoneTypeController@index');
Route::get('/phoneType/Show/{id}', 'PhoneTypeController@show');
Route::post('/phoneType/Update/{id}', 'PhoneTypeController@update');
//professionalExperience
Route::post('/professionalExperience/Store', 'ProfessionalExperienceController@store');
Route::get('/professionalExperience/Index', 'ProfessionalExperienceController@index');
Route::get('/professionalExperience/Show/{id}', 'ProfessionalExperienceController@show');
Route::post('/professionalExperience/Update/{id}', 'ProfessionalExperienceController@update');
//reference
Route::post('/reference/Store', 'ReferenceController@store');
Route::get('/reference/Index', 'ReferenceController@index');
Route::get('/reference/Show/{id}', 'ReferenceController@show');
Route::post('/reference/Update/{id}', 'ReferenceController@update');;
//via
Route::post('/via/Store', 'ViaController@store');
Route::get('/via/Index', 'ViaController@index');
Route::get('/via/Show/{id}', 'ViaController@show');
Route::post('/via/Update/{id}', 'ViaController@update');
//relative
Route::post('/relative/Store', 'RelativeController@store');
Route::get('/relative/Index', 'RelativeController@index');
Route::get('/relative/Show/{id}', 'RelativeController@show');
Route::post('/relative/Update/{id}', 'RelativeController@update');
//role
Route::post('/role/Store', 'RoleController@store');
Route::get('/role/Index', 'RoleController@index');
Route::get('/role/Show/{id}', 'RoleController@show');
Route::post('/role/Update/{id}', 'RoleController@update');
//schedule
Route::post('/schedule/Store', 'ScheduleController@store');
Route::get('/schedule/Index', 'ScheduleController@index');
Route::get('/schedule/Show/{id}', 'ScheduleController@show');
Route::post('/schedule/Update/{id}', 'ScheduleController@update');
//vacation
Route::post('/vacation/Store', 'VacationController@store');
Route::get('/vacation/Index', 'VacationController@index');
Route::get('/vacation/Show/{id}', 'VacationController@show');
Route::post('/vacation/Update/{id}', 'VacationController@update');

Route::middleware('auth:api')->group(function () {
    Route::post('/logout', 'Api\AuthController@logout');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
