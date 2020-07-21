<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Profile</div>

                    <div class="card-body">
                        <form method='post' @submit.prevent='update_profile(profile.id)'>
                        <div class="card-body">
                        <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" id="name" placeholder="name" v-model='profile.name'>
                        </div>
                        <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" class="form-control" id="username" placeholder="Username" v-model='profile.username'>
                        </div>

                        <div class="form-group">
                        <label for="birthday">E-Mail</label>
                        <input type="e-mail" class="form-control" id="email" placeholder="E-Mail" v-model='profile.email'>
                        </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
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

        name : 'Profile', 
        data () {

            return {

                profile : []
            }
        },

        created(){

            this.fetchProfile()
        },

        methods : {

            fetchProfile(){

                axios.get('/user')
                .then(res => {

                    console.log(res)
                    this.profile = res.data

                })
                .catch(error=>{

                    console.log(error)

                });
            }
        }
       
    }
</script>
