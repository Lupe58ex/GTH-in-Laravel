<template>
    <form>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Horarios
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column" >
                        <b-switch  v-model="morning">
                            Turno Mañana
                        </b-switch>
                    </div>
                    <div v-if="morning" class="column">
                        <b-select placeholder="Seleccionar" v-model="schedule_id" required>
                            <option
                                v-for="schedule in morningSchedulesParsed"
                                :value="schedule.id"
                                :key="schedule.id">
                                {{ schedule.start_hour }} hasta {{ schedule.end_hour }}
                            </option>
                        </b-select>
                    </div>
                    <div class="column">
                        <b-switch v-model="afternoon">
                            Turno Tarde
                        </b-switch>
                    </div>
                    <div v-if="afternoon" class="column">
                        <b-select placeholder="Seleccionar" v-model="schedule_id" required>
                            <option
                                v-for="schedule in afternoonSchedulesParsed"
                                :value="schedule.id"
                                :key="schedule.id">
                                {{ schedule.start_hour }} hasta {{ schedule.end_hour }}
                            </option>
                        </b-select>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Listado de Colaboradores
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column">
                        <b-checkbox v-model="monday">
                            Lunes
                        </b-checkbox>
                    </div>
                    <div class="column">
                        <b-checkbox v-model="tuesday">
                            Martes
                        </b-checkbox>
                    </div>
                    <div class="column">
                        <b-checkbox v-model="wednesday">
                            Miercoles
                        </b-checkbox>
                    </div>
                    <div class="column">
                        <b-checkbox v-model="thursday">
                            Jueves
                        </b-checkbox>
                    </div>
                    <div class="column">
                        <b-checkbox v-model="friday">
                            Viernes
                        </b-checkbox>
                    </div>
                    <div class="column">
                        <b-checkbox v-model="saturday">
                            Sábado
                        </b-checkbox>
                    </div>
                </div>
                <div class="columns">
                    <div class="column">
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
                                <b-table-column field="name" label="Nombres" sortable>
                                    {{ props.row.name }}
                                </b-table-column>
                                <b-table-column field="lastname_father" label="Apellido Paterno" sortable>
                                    {{ props.row.lastname_father }}
                                </b-table-column>
                                <b-table-column field="lastname_mother" label="Apellido Materno" sortable>
                                    {{ props.row.lastname_mother }}
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
                        <button @click.prevent="submit" class="button is-primary">Guardar asignación</button>
                    </div>
                    <div class="control">
                        <button class="button is-text">Cancelar</button>
                    </div>
                </div>
    </form>
</template>

<script>
    export default {
        props: [
            'employees',
            'morning_schedules',
            'afternoon_schedules'
        ],

        data() {
            return {
                employees_id:[],
                schedule_id:'',
                day:[],
                employeesParsed: [],

                morningSchedulesParsed:[],
                afternoonSchedulesParsed:[],
                isPaginated: true,
                isPaginationSimple: false,
                defaultSortDirection: 'desc',
                currentPage: 1,
                perPage: 15,
                morning: false,
                afternoon: false,
                monday: false,
                tuesday: false,
                wednesday: false,
                thursday: false,
                friday: false,
                saturday: false, 
                scheduleSelected: true,
                employeeSelected: false,
                checkedRows: [],
            }
        },
        mounted() {
            this.employeesParsed = JSON.parse(this.employees);
            this.morningSchedulesParsed = JSON.parse(this.morning_schedules);
            this.afternoonSchedulesParsed = JSON.parse(this.afternoon_schedules);
        },
        methods: {
            
            submit() {
                let employee_schedule = [];
                this.checkedRows.forEach(element => {
                    //console.log(employee_schedule)
                    if(this.monday){
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'M'});           
                    }
                    if(this.tuesday) {
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'T'});
                    }
                    if(this.wednesday) {
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'W'});
                    }
                    if(this.thursday) {
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'R'});
                    }
                    if(this.friday) {
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'F'});
                    }
                    if(this.saturday) {
                        employee_schedule.push({'employee_id' : element.id, 'schedule_id':this.schedule_id,'day':'S'});
                    }        
                });

                this.$validator.validateAll().then((result) => {
                    if (result) {
                        employee_schedule.forEach(element => {
                        axios.post('/employee_schedules',element)
                        })
                        .then(res => {
                            this.$toast.open({
                            message: 'Form is valid!',
                            type: 'is-success',
                            position: 'is-bottom'
                            });
                        })
                        .catch(err => {
                            console.log(err)
                            this.$toast.open({
                            message: 'No está rellenando los campos requeridos',
                            type: 'is-danger',
                            position: 'is-bottom'
                            })
                        });
                    } 
                }); 
            }
        },
       
    }
</script>b