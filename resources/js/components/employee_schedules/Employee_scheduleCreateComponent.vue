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
                    <div class="block column" >
                        <b-switch  v-model="morning">
                            Turno Mañana
                        </b-switch>
                    </div>
                    <div class="block column">
                        <b-switch v-model="afternoon">
                            Turno Tarde
                        </b-switch>
                    </div>
                </div>
                <div v-if="morning" class="columns">
                    <div v-for="schedule in morningSchedulesParsed" :key="schedule.id" >
                        <b-radio class="column" v-model="scheduleSelected">
                            {{ schedule.start_hour }} hasta {{ schedule.end_hour }}
                        </b-radio>
                    </div>
                </div>
                <div v-if="afternoon" class="columns">
                    <ul>
                        <li v-for="schedule in afternoonSchedulesParsed" :key="schedule.id">
                            <b-radio class="column" v-model="scheduleSelected">
                                {{ schedule.start_hour }} hasta {{ schedule.end_hour }}
                            </b-radio>
                        </li>
                    </ul>
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
                        <b-checkbox v-model="wendnesday">
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
                                default-sort="user.first_name">
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
                                <b-table-column label="Lunes">
                                    <b-tag type="is-info" v-if="morning && scheduleSelected && checkedRow">aa</b-tag>
                                </b-table-column>
                                <b-table-column label="Martes">
                                </b-table-column>   
                                <b-table-column label="Miercoles">
                                </b-table-column>
                                <b-table-column label="Jueves">
                                </b-table-column>
                                <b-table-column label="Viernes">
                                </b-table-column>
                                <b-table-column label="Sábado">
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
                employee_schedule:{
                    employee_id:'',
                    schedule_id:'',
                    day:''
                },
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
                scheduleSelected: false,
                employeeSelected: false,
            }
        },
        mounted() {
            this.employeesParsed = JSON.parse(this.employees);
            this.morningSchedulesParsed = JSON.parse(this.morning_schedules);
            this.afternoonSchedulesParsed = JSON.parse(this.afternoon_schedules);
        }
    }
</script>b