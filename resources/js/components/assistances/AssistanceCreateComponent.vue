
<template>
    <form>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Listado de Colaboradores
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column" >
                        <b-switch  v-model="morning">
                            Turno Mañana
                        </b-switch>
                    </div>
                    <div class="column" >
                        <b-switch  v-model="afternoon">
                            Turno Tarde
                        </b-switch>
                    </div>
                </div>
                <div class="columns">
                    <div class="column" >
                        <b-table  
                                :data="employeesWithSchedulesParsed"
                                :paginated="isPaginated"
                                :per-page="perPage"
                                :current-page.sync="currentPage"
                                :pagination-simple="isPaginationSimple"
                                :default-sort-direction="defaultSortDirection">

                            <template slot-scope="props">
                                <b-table-column field="fullname" label="Colaborador" sortable>
                                    {{ props.row.fullname }}
                                </b-table-column>
                                <b-table-column field="start_hour" label="Hora de entrada" sortable> 
                                    <input  type="time" class="input" name='start_hour' icon="clock" :value="{getHour}">
                                </b-table-column>
                                <b-table-column field="end_hour" label="Hora de salida" sortable>
                                    <input  type="time" class="input" name='end_hour' icon="clock">
                                </b-table-column>
                                <b-table-column label="notas">
                                </b-table-column>
                            </template>
                        </b-table>
                    </div>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: [
            'employees_with_schedules'
        ],

        data() {
            return {
                assistances:{
                    date: null,
                    real_start_time: null,
                    real_end_time: null,
                    user_id: null,
                    employee_schedule_id:'',
                    justification:'',
                    },
                employeesWithSchedulesParsed: [],
                isPaginated: true,
                isPaginationSimple: false,
                defaultSortDirection: 'desc',
                currentPage: 1,
                perPage: 15,
                morning: false,
                afternoon: false,
            }
        },
        mounted() {
            this.employeesWithSchedulesParsed = JSON.parse(this.employees_with_schedules);
        },
        methods: {
        },
        computed: {
            getHour() {
                console.log(this.employeesWithSchedulesParsed)
                var date = new Date(parseInt(this.employeesWithSchedulesParsed[0].schedulesMorning[0].startHour.getTime()));
                console.log(this.employeesWithSchedulesParsed[0].schedulesMorning[0].startHour),
                console.log(date.toLocaleTimeString(navigator.language, {
                    hour: '2-digit',
                    minute:'2-digit'
                }));
            },
        }
        
    }
</script>