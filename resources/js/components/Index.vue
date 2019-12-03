<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Bienvenido {{user.name}}</div>

                    <div class="card-body">
                        I'm an example component.Token {{api_token}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import axios from 'axios'
const api = axios.create({
  baseURL: 'http://localhost:8000/api/',
  timeout: 1000,
  headers: {}
});
    export default {
        props: {api_token:String},
        data(){
            return{
                token: '',
                user: []
            }
        },
        created(){
            this.getUser()
        },
        mounted() {

        },
        methods:{
            getUser(){
                api.get('user',{
                    params:{
                        api_token: this.api_token
                    }
                }).then(res=>{
                    this.user = res.data
                })
            }
        }
    }
</script>
