<template>
    <div class="mail-chimp">
        <div class="wrapper">
            <div class="row">
                <div class="md-col-8 md-offset-2">
                    <div class="row">
                        <div class="md-col-12 text-align-center">
                            <h2 class="text--dark">SUBSCRIBE TO OUR NEWSLETTER</h2>
                            <h3 class="text--white">To get news of upcomming offers and events.</h3>
                            <div v-if="success_msg !== null" class="notify notify--success-light">Thank you for signup for our newsletter</div>
                        </div>


                        <form @submit.prevent="send">
                            <div class="md-col-4">
                                <div :class="errors.name ? ' has__danger' : ''" class="form__group" >
                                    <input type="text" name="name" class="form__item" placeholder="Name" v-model="formdata.name">
                                    <div v-if="errors.name" class="notify notify--danger-light ">
                                        <small  class="form__helper">{{ errors.name ? errors.name[0] : ''}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="md-col-4">
                                <div :class="errors.email ? ' has__danger' : ''" class="form__group">
                                    <input type="text" name="email" class="form__item" placeholder="Email" v-model="formdata.email">
                                    <div v-if="errors.email" class="notify notify--danger-light ">
                                        <small  class="form__helper">{{ errors.email? errors.email[0] : ''}}</small>
                                    </div>
                                </div>
                            </div>
                            <div class="md-col-4">
                                <div class="form__group">
                                    <button v-if="!working" type="submit" class="btn btn--dark-gradient btn--block">SUBSCRIBE</button>
                                    <button v-else class="btn btn--dark-gradient btn--block"><i class="lunacon lunacon-moon-solid lunacon-spin-animation"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                formdata: {
                    name: '',
                    email: ''
                },
                errors: {},
                success_msg: null,
                working: false,
            }
        },
        methods: {
            send() {
                this.working = true
                this.errors = ''
                axios.post('/subscribe', this.formdata).then((response) => {
                    this.errors = ''
                    this.success_msg = 'Thank you for signup for our newsletter'
                    this.formdata = ''
                    this.working = false
                }).catch((error) => {
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    this.working = false
                }
                })
            }

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
