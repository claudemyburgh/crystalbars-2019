<template>

        <div class="small-grid">
            <div v-for="d in data.url" :key="d.id" class="small-grid-item">
                <img class="img" :src="d">
            </div>
        </div>

</template>

<style scoped lang="sass">

    .small-grid
        display: flex
        flex-direction: row
        flex-wrap: wrap

        &-item
            width: 100px
            height: 100px
            display: block
            padding: 5px

    img
        border: solid 5px #fff

</style>


<script>
    export default {

        data () {
            return {
                data: '',
                url: appurl
            }
        },
        methods: {

            getImages () {
                axios.get(`${this.url}/getimages`).then( (response) => {
                    this.data = response.data
                })
            }

        },
        mounted() {
           this.getImages()


        }


    }
</script>
