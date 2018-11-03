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
                data: ''
            }
        },
        methods: {

            getImages () {
                axios.get('http://127.0.0.1:8000/getimages').then( (response) => {
                    this.data = response.data
                })
            }

        },
        mounted() {
           this.getImages()
           console.log(this.data)
        }


    }
</script>
