<template>
    <div class="container">
        <form>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Datos Personales
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Nombres"
                                     :type="{'is-danger': errors.has('name')}"
                                     :message="{'Es requerido' : errors.first('name')}">
                                <b-input v-model="employee.name" name="name" placeholder="Nombres" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Apellido Paterno"
                                     :type="{'is-danger': errors.has('lastname_father')}"
                                     :message="{'Es requerido' : errors.first('lastname_father')}">
                                <b-input v-model="employee.lastname_father" name="lastname_father" placeholder="Apellido Paterno" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Apellido Materno"
                                     :type="{'is-danger': errors.has('lastname_mother')}"
                                     :message="{'Es requerido' : errors.first('lastname_mother')}">
                                <b-input v-model="employee.lastname_mother" name="lastname_mother" placeholder="Apellido Materno" v-validate="'required'" />
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Doc de identificacion"
                                     :type="{'is-danger': errors.has('identificationdocument')}"
                                     :message="{'Es requerido' : errors.first('identificationdocument')}">
                                <b-select v-model="employee.identification_type_id" name="identificationdocument" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in identificationtypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Numero"
                                     :type="{'is-danger': errors.has('indentification_number')}"
                                     :message="{'Es requerido' : errors.first('indentification_number')}">
                                <b-input v-model="employee.identity_number" name="indentification_number" placeholder="Seleccione" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Fecha de Nacimiento"
                                     :type="{'is-danger': errors.has('birthdate')}"
                                     :message="{'Es requerido' : errors.first('birthdate')}">
                                <b-datepicker v-model="employee.birthdate"
                                        placeholder="Seleccione"
                                        icon="calendar"
                                        name="birthdate"
                                        v-validate="'required'">
                                </b-datepicker>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Sexo"
                                     :type="{'is-danger': errors.has('gender')}"
                                     :message="{'Es requerido' : errors.first('gender')}">
                                <b-select v-model="employee.gender" name="gender" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in gendersParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Estado civil"
                                     :type="{'is-danger': errors.has('civil_states')}"
                                     :message="{'Es requerido' : errors.first('civil_states')}">
                                <b-select v-model="employee.marital_status" name="civil_states" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in civilstatesParsed"
                                            :value="option.name"
                                            :key="option.name">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Departamento"
                                     :type="{'is-danger': errors.has('department')}"
                                     :message="{'Es requerido' : errors.first('department')}">
                                <b-select v-model="employee.department_id"  @change="this.selectProvince" name="department" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in departmentParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Provincia"
                                     :type="{'is-danger': errors.has('province')}"
                                     :message="{'Es requerido' : errors.first('province')}">
                                <b-select v-model="employee.province_id" name="province" expanded  placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in provincesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Distrito"
                                     :type="{'is-danger': errors.has('district')}"
                                     :message="{'Es requerido' : errors.first('district')}">
                                <b-select v-model="employee.district_id" @change="this.selectDistrict(option)" name="district" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in districtsParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Dirección"
                                     :type="{'is-danger': errors.has('address')}"
                                     :message="{'Es requerida' : errors.first('address')}">
                                <b-input v-model="employee.address" name="address" placeholder="Dirección" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Referencia de la dirección">
                                <b-input v-model="employee.address_references" name="address_references" placeholder="Referencia de dirección"/>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Condiicion domiciliaria">
                                <b-input v-model="employee.home_condition" name="home_condition" placeholder="Condición domiciliaria"/>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Correo principal"
                                     :type="{'is-danger': errors.has('email_main')}"
                                     :message="{'Es requerido' : errors.first('email_main')}">
                                <b-input maxlength="200" type="email" v-model="employee.email_main" name="email_main" placeholder="Correo principal" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Correo alternativo">
                                <b-input maxlength="200" type="email" v-model="employee.email_alternative" name="email_alternative" placeholder="Correo alternativo"/>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Número 1"
                                     :type="{'is-danger': errors.has('phone_number1')}"
                                     :message="{'Es requerido' : errors.first('phone_number1')}">
                                <b-input v-model="employee.phone_number1" name="phone_number1" placeholder="Número 1" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Operador"
                                     :type="{'is-danger': errors.has('phone_operator1_id')}"
                                     :message="{'Es requerido' : errors.first('phone_operator1_id')}">
                                <b-select v-model="employee.phone_operator1_id" name="phone_operator1_id" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in phoneoperatorsParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Tipo"
                                     :type="{'is-danger': errors.has('phone_type1_id')}"
                                     :message="{'Es requerido' : errors.first('phone_type1_id')}">
                                <b-select v-model="employee.phone_type1_id" name="phone_type1_id" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in phonetypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="phone_note1" class="label">Notas 1</label>
                                <div class="control">
                                    <input v-model="employee.phone_notes1" id="phone_note1" name="phone_note1" class="input" type="text" placeholder="Notas">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Número 2">
                                <b-input v-model="employee.phone_number2" name="phone_number2" placeholder="Número 2" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Operador">
                                <b-select v-model="employee.phone_operator2_id" name="phone_operator2_id" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in phoneoperatorsParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Tipo">
                                <b-select v-model="employee.phone_type2_id" name="phone_type2_id" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in phonetypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="phone_note2" class="label">Notas 2</label>
                                <div class="control">
                                    <div class="control">
                                        <input v-model="employee.phone_notes2" id="phone_note2" name="phone_note2" class="input" type="text" placeholder="Notas 2">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Número 3">
                                <b-input v-model="employee.phone_number3" name="phone_number3" placeholder="Número 2" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Operador">
                                <b-select v-model="employee.phone_operator3_id" name="phone_operator3_id" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in phoneoperatorsParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Tipo">
                                <b-select v-model="employee.phone_type3_id" name="phone_type3_id" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in phonetypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <div class="field">
                                <label for="phone_note3" class="label">Notas 3</label>
                                <div class="control">
                                    <div class="control">
                                        <input v-model="employee.phone_notes3" id="phone_note3" name="phone_note3" class="input" type="text" placeholder="Notas 3">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Talla"
                                    :type="{'is-danger': errors.has('clothing_size')}"
                                    :message="{'Es requerido' : errors.first('clothing_size')}">
                                <b-select v-model="employee.clothing_size" name="clothing_size" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in clothingsizesParsed"
                                            :value="option.name"
                                            :key="option.name">
                                        {{ option.name}}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Cantidad de hijos">
                                <b-input type="number" v-model="employee.number_of_children" name="number_of_children" expanded placeholder="Seleccione"
                                ></b-input>
                            </b-field>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Datos Laborales
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Agencia"
                                    :type="{'is-danger': errors.has('agency_id')}"
                                    :message="{'Es requerido' : errors.first('agency_id')}">
                                <b-select v-model="employee.agency_id" name="agency_id" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in agenciesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Área"
                                     :type="{'is-danger': errors.has('area_id')}"
                                     :message="{'Es requerido' : errors.first('area_id')}">
                                <b-select v-model="employee.area_id" name="area_id" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in areasParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Cargo"
                                    :type="{'is-danger': errors.has('role_id')}"
                                    :message="{'Es requerido' : errors.first('role_id')}">
                                <b-select v-model="employee.role_id" name="role_id" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in rolesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name_short }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Tipo de contrato">
                                <b-select v-model="employee.contract_type_id" name="contract_type" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in contracttypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name}}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Tipo de Trabajo">
                                <b-select v-model="employee.job_types" name="job_type" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in jobtypesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Disponibilidad para viajar"
                                    :type="{'is-danger': errors.has('availability_travel')}"
                                    :message="{'Es requerido' : errors.first('availability_travel')}">
                                <b-select v-model="employee.availability_travel" name="availability_travel" expanded placeholder="Seleccione" v-validate="'required'"> 
                                    <option
                                            v-for="option in disponibilitytotravelParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Fecha de ingreso">
                                <b-datepicker v-model="employee.admission_date"
                                    placeholder="Seleccione"
                                    icon="calendar"
                                    name="admission_date"
                                ></b-datepicker>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Fecha de contrato">
                                <b-datepicker v-model="employee.hire_date"
                                    placeholder="Seleccione"
                                    icon="calendar"
                                    name="hire_date"
                                ></b-datepicker>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Meses proyectados"
                                    :type="{'is-danger': errors.has('projected_number_time')}"
                                    :message="{'Es requerido' : errors.first('projected_number_time')}">
                                <b-input type="number" v-model="employee.projected_number_time" name='projected_number_time' expanded placeholder="Seleccione" v-validate="'required'"
                                ></b-input>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Sueldo real"
                                    :type="{'is-danger': errors.has('salary')}"
                                    :message="{'Es requerido' : errors.first('salary')}">
                                <b-input type="number" v-model="employee.salary" name="salary" expanded placeholder="Seleccione" v-validate="'required'"
                                ></b-input>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Sueldo planilla">
                                <b-input type="number" v-model="employee.payroll_salary" name="payroll_salary" expanded placeholder="Seleccione"
                                ></b-input>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Porcentaje de descuento"
                                    :type="{'is-danger': errors.has('salary_advance_allowed')}"
                                    :message="{'Es requerido' : errors.first('salary_advance_allowed')}">
                                <b-input type="number" v-model="employee.salary_advance_allowed" name="salary_advance_allowed" expanded placeholder="Seleccione" v-validate="'required'" 
                                ></b-input>
                            </b-field>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Licencia de conducir
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Número de licencia de conducir">
                                <b-input type="text" v-model="employee.driver_license_number" name="driver_license_number" placeholder="Numero de licencia de conducir" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Fecha de expedición">
                                <b-datepicker v-model="employee.date_expedition_driver_license"
                                ></b-datepicker>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Fecha de caducidad">
                                <b-datepicker v-model="employee.date_expedition_driver_license"
                                ></b-datepicker>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Tipo de Licencia">
                                <b-select v-model="employee.type_driver_license" name="type_driver_license" expanded placeholder="Seleccione">
                                    <option
                                            v-for="option in typelicensesParsed"
                                            :value="option.id"
                                            :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                    </div>
                    
                </div>
            </div>
            <br>
            <div class="field is-grouped">
                <div class="control">
                    <button @click.prevent="submit" class="button is-primary">Guardar</button>
                </div>
                <div class="control">
                    <button class="button is-text">Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
        props: [
            'identification_types',
            'genders',
            'civil_states',
            'departments',
            'provinces',
            'districts',
            'phone_operators',
            'phone_types',
            'agencies',
            'areas',
            'roles',
            'contract_types',
            'job_types',
            'disponibility_to_travel',
            'types_licenses',
            'clothing_sizes'
        ],
        data() {
            return {
                employee: {
                    name: '',
                    lastname_father: '',
                    lastname_mother: '',
                    identity_number:'',
                    identification_type_id:'',
                    gender: null,
                    birthdate: null,
                    district_id:'',
                    province_id:'',
                    department_id:'',                    
                    address: '',
                    address_references: null,
                    home_condition:'',
                    email_main: null,
                    email_alternative: null,
                    role_id: null,
                    phone_number1: '',
                    phone_operator1_id: null,
                    phone_notes1: '',
                    phone_type1_id:null,
                    phone_number2: '',
                    phone_operator2_id: null,
                    phone_notes2: '',
                    phone_type2_id:null,
                    phone_number3: '',
                    phone_operator3_id: null,
                    phone_notes3: '',
                    phone_type3_id:null,
                    area_id:null,
                    agency_id:null ,     
                    availability_travel:'',  
                    contract_type_id:null,
                    job_types:'',
                    admission_date:null,
                    hire_date:null,
                    salary:'',
                    salary_advance_allowed:'',
                    payroll_salary:'',
                    projected_number_time:'',
                    marital_status:'',
                    home_condition:'',
                    mork_modality:'',
                    number_of_children:'',
                    clothing_size:'',
                    driver_license_number:'',
                    date_expedition_driver_license:null,
                    date_expiration_driver_license:null,
                    type_drive_license:'',   
                },
                identificationtypesParsed: [],
                gendersParsed: [],
                civilstatesParsed: [],
                departmentParsed: [],
                provincesParsed: [],
                districtsParsed: [],
                phoneoperatorsParsed: [],
                agenciesParsed: [],
                areasParsed: [],
                rolesParsed: [],
                contracttypesParsed: [],
                jobtypesParsed: [],
                disponibilitytotravelParsed: [],
                typelicensesParsed:[],
                phonetypesParsed:[],
                clothingsizesParsed:[],
            }
        },
        methods: {
            selectProvince() {
                
                },
            submit() {
                
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        
                        axios.post('/employees', this.employee)
                        .then(res => {
                            this.$toast.open({
                            message: 'Form is valid!',
                            type: 'is-success',
                            position: 'is-bottom'
                            });
                        })
                        .catch(err => {
                            console.log(err)
                        });
                    }
                    this.$toast.open({
                        message: 'No está rellenando los campos requeridos',
                        type: 'is-danger',
                        position: 'is-bottom'
                    })
                });

            }
        },
        mounted() {
            this.identificationtypesParsed = JSON.parse(this.identification_types);
            this.gendersParsed = JSON.parse(this.genders);
            this.civilstatesParsed = JSON.parse(this.civil_states);
            this.districtsParsed = JSON.parse(this.districts);
            this.provincesParsed = JSON.parse(this.provinces);
            this.departmentParsed = JSON.parse(this.departments);
            this.phoneoperatorsParsed = JSON.parse(this.phone_operators);
            this.phonetypesParsed = JSON.parse(this.phone_types);
            this.agenciesParsed = JSON.parse(this.agencies);
            this.areasParsed = JSON.parse(this.areas);
            this.rolesParsed = JSON.parse(this.roles);
            this.contracttypesParsed = JSON.parse(this.contract_types);
            this.jobtypesParsed = JSON.parse(this.job_types);
            this.disponibilitytotravelParsed = JSON.parse(this.disponibility_to_travel);
            this.typelicensesParsed = JSON.parse(this.types_licenses);
            this.clothingsizesParsed = JSON.parse(this.clothing_sizes);

        }
    }
</script>

<style scoped>

</style>