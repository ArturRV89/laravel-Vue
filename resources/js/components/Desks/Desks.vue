<template>
    <div class="container">
        <h1>Доски</h1>
        <div class="row">
            <div class="col-lg-4" v-for="desk in desks">
                <div class="card mt-3" >
                    <a href="#" class="card-body">
                        <h5 class="card-title">{{  desk.name }}</h5>
                    </a>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    data(){
        return{
            desks: []
        }
    },
    mounted() {
        axios.get('/api/V1/desks')
        .then(response => {
            this.desks = response.data.data
        })
    }
}
</script>

