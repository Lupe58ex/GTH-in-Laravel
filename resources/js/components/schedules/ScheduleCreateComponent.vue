
<template>
    <div class="container">
        <form>
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">
                        Creación de horarios
                    </p>
                </header>
                <div class="card-content">
                    <div class="columns">
                        <div class="column">
                            <b-field label="Turno"
                                :type="{'is-danger': errors.has('turn')}"
                                :message="{'El turno es requerido' : errors.first('turn')}">
                                <b-select v-model="schedule.turn"  name="turn" expanded  v-validate="'required'">
                                    <option
                                        placeholder="Selecciona un turno"
                                        v-for="option in turnsParsed"
                                        :value="option.id"
                                        :key="option.id">
                                        {{ option.name }}
                                    </option>
                                </b-select>
                            </b-field>
                        </div>
                        <div class="column">
                            <b-field label="Hora de entrada"
                                :type="{'is-danger': errors.has('start_hour')}"
                                :message="{'La hora es requerida' : errors.first('start_hour')}">
                                <input type="time" class="input" v-model="schedule.start_hour" name='start_hour' icon="clock"
                                />
                            </b-field>
                            
                        </div>
                        <div class="column">
                            <b-field label="Hora de salida"
                                :type="{'is-danger': errors.has('end_hour')}"
                                :message="{'La hora es requerida' : errors.first('end_hour')}">
                                <input type="time" class="input" v-model="schedule.end_hour" name='end_hour' icon="clock"
                                >
                            </b-field>
                        </div>
                    </div> 
                    <div class="columns">   
                        <div class="column">
                            <div class="field">
                                <label class="label">Descripción</label>
                                <div class="control">
                                    <textarea v-model="schedule.description" class="textarea" placeholder="Descripción"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <br>
            </div>
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
            'turns',
        ],
        data() {
            return {
                schedule: {
                    turn: '',
                    start_hour: null,
                    end_hour: null,
                    description: '',
                },
                turnsParsed: [],  
            }
        },
        mounted() {
            this.turnsParsed = JSON.parse(this.turns);
        },
        methods: {
            submit() {
                /*let a = this.schedule.start_hour.getTime();
                this.schedule.start_hour = a;

                let b = this.schedule.end_hour.getTime();
                this.schedule.end_hour = b;*/

                this.$validator.validateAll().then((result) => {
                    if (result) {
                        this.$toast.open({
                            message: 'Form is valid!',
                            type: 'is-success',
                            position: 'is-bottom'
                        });
                        axios.post('/schedules', this.schedule)
                        .then(res => {
                            console.log('saved data')
                        })
                        .catch(err => {
                            console.log(err)
                        });
                    }
                    else{
                        this.$toast.open({
                            message: 'Rellene los campos requeridos',
                            type: 'is-danger',
                            position: 'is-bottom'
                        })
                    }
                });
            },
            getEntry() {
                
                /*var date = new Date(parseInt(this.schedule.start_hour.getTime()));
                console.log(date.toLocaleTimeString(navigator.language, {
                    hour: '2-digit',
                    minute:'2-digit'
                }));*/
            },
        },
        computed: {

        },
        
        
    }   
              
</script>


                