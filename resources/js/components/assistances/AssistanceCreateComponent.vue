
<template>
    <form>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Listado de Clientes
                </p>
            </header>
            <div class="card-content">

                <div class="columns">
                    <div class="column">
                        <b-table
                                :data="employeesWithSchedulesParsed"
                                :paginated="isPaginated"
                                :per-page="perPage"
                                :current-page.sync="currentPage"
                                :pagination-simple="isPaginationSimple"
                                :default-sort-direction="defaultSortDirection"
                                default-sort="user.first_name">

                            <template slot-scope="props">
                                <b-table-column field="fullname" label="Colaborador" sortable>
                                    {{ props.row.employeesWithSchedules.fullname }}
                                </b-table-column>

                                <b-table-column field="end_hour" label="Hora de salida" sortable>
                                </b-table-column>

                                <b-table-column label="Opciones">
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
            'employeesWithSchedules'
        ],

        data() {
            return {
                employeesWithSchedulesParsed: [],
                isPaginated: true,
                isPaginationSimple: false,
                defaultSortDirection: 'desc',
                currentPage: 1,
                perPage: 15
            }
        },
        mounted() {
            this.employeesWithSchedulesParsed = JSON.parse(this.employeesWithSchedules);
        }
    }
</script>