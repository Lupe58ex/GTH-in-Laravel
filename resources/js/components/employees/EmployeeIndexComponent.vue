
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
                                :data="employeesParsed"
                                :paginated="isPaginated"
                                :per-page="perPage"
                                :current-page.sync="currentPage"
                                :pagination-simple="isPaginationSimple"
                                :default-sort-direction="defaultSortDirection">

                            <template slot-scope="props">
                                <b-table-column field="fullname" label="Colaborador" sortable>
                                    {{ props.row.fullname }}
                                </b-table-column>
                                <b-table-column field="DNI" label="Hora de entrada" sortable > 
                                </b-table-column>
                                <b-table-column field="end_hour" label="Hora de salida" sortable>
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
            'employees'
        ],

        data() {
            return {
                employees: [],
                employeesParsed:[],
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
            this.employeesParsed = JSON.parse(this.employees);
        },
        methods: {
            
        }
    }
</script>