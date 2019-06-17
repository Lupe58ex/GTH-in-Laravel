
<template>
    <form>
        <div class="card">
            <header class="card-header">
                <p class="card-header-title">
                    Asignación de descuentos y bonos
                </p>
            </header>
            <div class="card-content">
                <div class="columns">
                    <div class="column" >
                        <b-switch  v-model="Bonus">
                            Bono
                        </b-switch>
                    </div>
                    <div class="column" >
                        <b-switch  v-model="Discount">
                            Descuento
                        </b-switch>
                    </div>
                </div>
                <div class="columns">
                    <div class="column" >
                       <b-field label="Colaborador">
                            <b-select v-model="employee.type_driver_license" name="type_driver_license" expanded placeholder="Seleccione">
                                <option
                                        v-for="option in typelicensesParsed"
                                        :value="option.id"
                                        :key="option.id">
                                    {{ option.name }}
                                </option>
                            </b-select>
                        </b-field>
                        <b-field label="Categoria">
                            <b-select v-model="employee.type_driver_license" name="type_driver_license" expanded placeholder="Seleccione">
                                <option
                                        v-for="option in typelicensesParsed"
                                        :value="option.id"
                                        :key="option.id">
                                    {{ option.name }}
                                </option>
                            </b-select>
                        </b-field>
                        <b-field label="Monto">
                            <b-input type="number" v-model="employee.driver_license_number" name="driver_license_number" placeholder="Numero de licencia de conducir" />
                        </b-field>        
                    </div>
                    <div class="column">
                        </div><b-field label="Concepto">
                            <b-input type="textarea" v-model="employee.driver_license_number" name="driver_license_number" placeholder="Numero de licencia de conducir" />
                        </b-field>
                </div>
            </div>
        </div>
    </form>
</template>

<script>
    export default {
        props: [
            'bonus_discount_categories'
        ],

        data() {
            return {
                bonusDiscount:{
                    quantity:'',
                    reason:'',
                    
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
            this.bonusdiscountcategoriesParsed = JSON.parse(this.bonus_discount_categories);
        },
        methods: {
            
        }
    }
</script>