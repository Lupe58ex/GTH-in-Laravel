
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
                    <div class="column">
                        <b-field label="Sistema de pensión">
                            <b-select v-model="employee_pension_system.pension_system_id" name="type_driver_license" expanded value="Seleccione">
                                <option
                                        v-for="option in pensionsystemsParsed"
                                        :value="option.id"
                                        :key="option.id">
                                    {{ option.short_name }}
                                </option>
                            </b-select>
                        </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Porcentaje de descuento">
                                <b-input type="number" name="actual_percent" expanded placeholder="Seleccione" v-validate="'required'" :value="this.getActualPercent" 
                                >{{this.getActualPercent}}</b-input>
                            </b-field>
                    </div>
                    <div class="column">
                        <b-field label="Tipo de comisión">
                            <b-select v-model="employee_pension_system.comission_type" name="comission_Type" expanded placeholder="Seleccione">
                                <option
                                        v-for="option in pensionsystemsParsed"
                                        :value="option.id"
                                        :key="option.id">
                                    {{ option.actual_percent }}
                                </option>
                            </b-select>
                        </b-field>
                    </div>
                </div>
                <div class="columns">
                    <div class="column" >
                        <b-table  
                                :data= "employeesParsed"
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
            'employees',
            'pensionsystems'
        ],

        data() {
            return {
                only_employees:[],
                employee_pension_system:{
                    comission_type: '',
                    pension_system_id:'',
                },
                employeesParsed:[],
                pensionsystemsParsed:[],
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
            this.pensionsystemsParsed = JSON.parse(this.pensionsystems)
        },
        methods: {
            
        },
        computed: {
            getActualPercent(){
                let percent
                this.pensionsystemsParsed.map(item => {
                    if (item.id == this.employee_pension_system.pension_system_id) {
                        percent = item.actual_percent;
                    }
                })
                return percent;
            }
        }
    }
</script>