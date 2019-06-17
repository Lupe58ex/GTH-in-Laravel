<template>
    <div class="container">
        <form>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Datos de pariente
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Parentesco"
                                     :type="{'is-danger': errors.has('relationship')}"
                                     :message="{'Es requerido' : errors.first('relationship')}">
                                <b-select v-model="employeeRelative.relationship" name="relationship" expanded placeholder="Seleccione" v-validate="'required'">
                                    <option
                                            v-for="option in relationshipsParsed"
                                            :value="option.name"
                                            :key="option.name">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Es garante">
                                <b-checkbox v-model="employeeRelative.guarantor" >
                                    ¿Es garante?
                                </b-checkbox>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Es un colaborador">
                                <b-checkbox v-model="is_employee" >
                                    ¿Es un colaborador?
                                </b-checkbox>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Observación">
                                <b-input type="textarea" v-model="employeeRelative.observation"
                                    placeholder="Escriba las observaciones aquí">
                                </b-input>
                            </b-field>
                        </div>
                    </div>
                </div>
                <hr>
                <div v-if="is_employee == false" class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Nombres"
                                     :type="{'is-danger': errors.has('name')}"
                                     :message="{'Es requerido' : errors.first('name')}">
                                <b-input v-model="relative.name" name="name" placeholder="Nombres" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Apellido Paterno"
                                     :type="{'is-danger': errors.has('lastname_father')}"
                                     :message="{'Es requerido' : errors.first('lastname_father')}">
                                <b-input v-model="relative.lastname_father" name="lastname_father" placeholder="Apellido Paterno" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Apellido Materno"
                                     :type="{'is-danger': errors.has('lastname_mother')}"
                                     :message="{'Es requerido' : errors.first('lastname_mother')}">
                                <b-input v-model="relative.lastname_mother" name="lastname_mother" placeholder="Apellido Materno" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="DNI"
                                     :type="{'is-danger': errors.has('dni')}"
                                     :message="{'Es requerido' : errors.first('dni')}">
                                <b-input v-model="relative.dni" name="dni" placeholder="Seleccione" v-validate="'required'" />
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Fecha de Nacimiento"
                                     :type="{'is-danger': errors.has('birthdate')}"
                                     :message="{'Es requerido' : errors.first('birthdate')}">
                                <b-datepicker v-model="relative.birthdate"
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
                                <b-select v-model="relative.gender" name="gender" expanded placeholder="Seleccione" v-validate="'required'">
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
                            <b-field label="Número celular"
                                     :type="{'is-danger': errors.has('phone_number1')}"
                                     :message="{'Es requerido' : errors.first('phone_number1')}">
                                <b-input v-model="relative.cellphone" name="phone_number1" placeholder="Número 1" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Estudiante">
                                <b-checkbox v-model="relative.is_student" >
                                    ¿Es estudiante?
                                </b-checkbox>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Mayor de edad">
                                <b-checkbox v-model="relative.full_age">
                                    ¿Es mayor de edad?
                                </b-checkbox>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Dirección"
                                     :type="{'is-danger': errors.has('address')}"
                                     :message="{'Es requerida' : errors.first('address')}">
                                <b-input v-model="relative.house_address" name="address" placeholder="Dirección" v-validate="'required'" />
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Referencia de la dirección">
                                <b-input v-model="relative.house_reference" name="address_references" placeholder="Referencia de dirección"/>
                            </b-field>
                        </div>
                    </div>
                    <div class="columns">
                        <div class="column">
                            <b-field label="Lugar de Trabajo">
                                <b-input v-model="relative.place_job" name="home_condition" placeholder="Lugar de trabajo"/>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Dirección de trabajo">
                                <b-input v-model="relative.job_address" name="home_condition" placeholder="Dirección de trabajo"/>
                            </b-field>
                        </div>
                    </div>
                </div>
                <div v-if="is_employee == true" class="card-content">
                    <div class="columns">
                        <div class="column" >
                            <b-table  
                                    :data="employeesParsed"
                                    :paginated="isPaginated"
                                    :per-page="perPage"
                                    :current-page.sync="currentPage"
                                    :pagination-simple="isPaginationSimple"
                                    :default-sort-direction="defaultSortDirection"
                                    checkable
                                    :checked-rows.sync="checkedRows">

                                <template slot-scope="props">
                                    <b-table-column field="fullname" label="Colaborador" sortable>
                                        {{ props.row.fullname }}
                                    </b-table-column>

                                </template>
                            </b-table>
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
            'relationships',
            'genders',
            'employees'
        ],
        data() {
            return {
                relative: {
                    name: '',
                    lastname_father: '',
                    lastname_mother: '',
                    dni:'',
                    birthdate: null,
                    cellphone: null,
                    gender: null,
                    is_student: null,
                    full_age: null,
                    house_address: '',
                    house_reference: '',
                    place_job: '',
                    job_address: '',
                },
                isPaginated: true,
                isPaginationSimple: false,
                defaultSortDirection: 'desc',
                currentPage: 1,
                perPage: 15,
                
                employeeRelative: {
                    relationship: '',
                    guarantor: '',
                    observation:''
                },
                relationshipsParsed: [],
                gendersParsed: [],
                employeesParsed: [],
                is_employee: false,
            }
        },
        methods: {
            submit() {
                
                this.$validator.validateAll().then((result) => {
                    if (result) {
                        
                        axios.post('/relatives', this.relative)
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
                    }else
                    this.$toast.open({
                        message: 'No está rellenado los campos requeridos',
                        type: 'is-danger',
                        position: 'is-bottom'
                    })
                });

            }
        },
        mounted() {
            this.relationshipsParsed = JSON.parse(this.relationships);
            this.gendersParsed = JSON.parse(this.genders);
            this.employeesParsed = JSON.parse(this.employees)
        }
    }
</script>

<style scoped>

</style>